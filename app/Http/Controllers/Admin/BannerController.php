<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    /**
     * Display a listing of the banners.
     */
    public function index(Request $request)
    {
        $query = Banner::query();

        if ($request->filled('keyword')) {
            $keyword = $request->keyword;
            $query->where('title', 'like', "%{$keyword}%")
                ->orWhere('description', 'like', "%{$keyword}%");
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $banners = $query->orderBy('updated_at', 'desc')->paginate(10);

        return view('admin.banners.list', [
            'banners' => $banners,
        ]);
    }

    /**
     * Show the form for creating a new banner.
     */
    public function create()
    {
        return view('admin.banners.add');
    }

    /**
     * Store a newly created banner in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|in:0,1',
            'primary_btn_text' => 'nullable|string|max:255',
            'primary_btn_link' => 'nullable',
            'secondary_btn_text' => 'nullable|string|max:255',
            'secondary_btn_link' => 'nullable',
            'image' => 'nullable|image|max:2048',
            'order' => 'nullable|integer',
        ]);

        $banner = new Banner();
        $banner->title = $request->title;
        $banner->description = $request->description ?? '';
        $banner->primary_btn_text = $request->primary_btn_text ?? '';
        $banner->primary_btn_link = $request->primary_btn_link ?? '';
        $banner->secondary_btn_text = $request->secondary_btn_text ?? '';
        $banner->secondary_btn_link = $request->secondary_btn_link ?? '';
        $banner->status = $request->status;
        $banner->order = $request->order;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . random_int(0000, 9999) . '.' . $image->getClientOriginalExtension();
            $banner->image = 'storage/' . $image->storeAs('banners', $imageName, 'public');
        }

        $banner->save();

        return redirect()->route('admin.banners.index')->with('success', 'Banner created successfully.');
    }

    /**
     * Show the form for editing the specified banner.
     */
    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', [
            'banner' => $banner,
        ]);
    }

    /**
     * Update the specified banner in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|in:0,1',
            'primary_btn_text' => 'nullable|string|max:255',
            'primary_btn_link' => 'nullable',
            'secondary_btn_text' => 'nullable|string|max:255',
            'secondary_btn_link' => 'nullable',
            'image' => 'nullable|image|max:2048',
            'order' => 'nullable|integer'
        ]);

        $banner->title = $request->title;
        $banner->description = $request->description ?? '';
        $banner->status = $request->status;
        $banner->order = $request->order;
        $banner->primary_btn_text = $request->primary_btn_text ?? '';
        $banner->primary_btn_link = $request->primary_btn_link ?? '';
        $banner->secondary_btn_text = $request->secondary_btn_text ?? '';
        $banner->secondary_btn_link = $request->secondary_btn_link ?? '';

        if ($request->hasFile('image')) {
            $oldImage = $banner->image;
            $image = $request->file('image');
            $imageName = time() . random_int(0000, 9999) . '.' . $image->getClientOriginalExtension();
            $banner->image = 'storage/' . $image->storeAs('banners', $imageName, 'public');

            if (isset($oldImage) && File::exists($oldImage)) {
                File::delete($oldImage);
            }
        }

        $banner->save();

        return redirect()->route('admin.banners.index')->with('success', 'Banner updated successfully.');
    }

    /**
     * Remove the specified banner from storage.
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();

        return redirect()->route('admin.banners.index')->with('success', 'Banner deleted successfully.');
    }
}
