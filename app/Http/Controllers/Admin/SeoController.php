<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seo;

class SeoController extends Controller
{
    /**
     * Display listing
     */
    public function index(Request $request)
    {
        $query = Seo::query();

        // Keyword search
        if ($request->filled('keyword')) {
            $keyword = $request->keyword;

            $query->where(function ($q) use ($keyword) {
                $q->where('page', 'like', "%{$keyword}%")
                    ->orWhere('title', 'like', "%{$keyword}%")
                    ->orWhere('description', 'like', "%{$keyword}%")
                    ->orWhere('keywords', 'like', "%{$keyword}%");
            });
        }

        // Status filter
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $seos = $query->orderBy('updated_at', 'desc')
            ->paginate(10);

        return view('admin.seos.list', compact('seos'));
    }

    /**
     * Create form
     */
    public function create()
    {
        return view('admin.seos.add');
    }

    /**
     * Store SEO
     */
    public function store(Request $request)
    {
        $request->validate([
            'page'        => 'required|string|max:255|unique:seos,page',
            'title'       => 'required|string|max:255',
            'description' => 'required|string',

            'keywords'  => 'nullable|string',
            'canonical' => 'nullable|string',

            'og_title'       => 'nullable|string|max:255',
            'og_description' => 'nullable|string',
            'og_image'       => 'nullable|string',

            'status' => 'required|in:0,1',
        ]);

        Seo::create([
            'page'        => $request->page,
            'title'       => $request->title,
            'description' => $request->description,

            'keywords'  => $request->keywords,
            'canonical' => $request->canonical,

            'og_title'       => $request->og_title,
            'og_description' => $request->og_description,
            'og_image'       => $request->og_image,

            'status' => $request->status,
        ]);

        return redirect()
            ->route('admin.seos.index')
            ->with('success', 'SEO created successfully.');
    }

    /**
     * Edit form
     */
    public function edit(Seo $seo)
    {
        return view('admin.seos.edit', compact('seo'));
    }

    /**
     * Update SEO
     */
    public function update(Request $request, Seo $seo)
    {
        $request->validate([
            'page'  => 'required|string|max:255|unique:seos,page,' . $seo->id,

            'title'       => 'required|string|max:255',
            'description' => 'required|string',

            'keywords'  => 'nullable|string',
            'canonical' => 'nullable|string',

            'og_title'       => 'nullable|string|max:255',
            'og_description' => 'nullable|string',
            'og_image'       => 'nullable|string',

            'status' => 'required|in:0,1',
        ]);

        $seo->update([
            'page'        => $request->page,
            'title'       => $request->title,
            'description' => $request->description,

            'keywords'  => $request->keywords,
            'canonical' => $request->canonical,

            'og_title'       => $request->og_title,
            'og_description' => $request->og_description,
            'og_image'       => $request->og_image,

            'status' => $request->status,
        ]);

        return redirect()
            ->route('admin.seos.index')
            ->with('success', 'SEO updated successfully.');
    }

    /**
     * Delete SEO
     */
    public function destroy(Seo $seo)
    {
        $seo->delete();

        return redirect()
            ->route('admin.seos.index')
            ->with('success', 'SEO deleted successfully.');
    }
}
