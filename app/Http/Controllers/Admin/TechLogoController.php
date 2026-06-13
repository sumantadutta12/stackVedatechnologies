<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TechLogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TechLogoController extends Controller
{
    /**
     * Display a listing of the tech logos.
     */
    public function index(Request $request)
    {
        $query = TechLogo::query();

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $techLogos = $query->orderBy('order', 'asc')->paginate(10);

        return view('admin.tech_logos.list', [
            'techLogos' => $techLogos,
        ]);
    }

    /**
     * Show the form for creating a new tech logo.
     */
    public function create()
    {
        return view('admin.tech_logos.add');
    }

    /**
     * Store a newly created tech logo in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'required|image|mimes:png,jpg,webp,jpeg|max:2048',
            'status' => 'required|in:0,1',
            'order' => 'nullable|integer',
        ]);

        $techLogo = new TechLogo();
        $techLogo->status = $request->status;
        $techLogo->order = $request->order ?? 0;

        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $imageName = time() . random_int(1000, 9999) . '.' . $image->getClientOriginalExtension();
            $techLogo->logo = 'storage/' . $image->storeAs('tech_logos', $imageName, 'public');
        }

        $techLogo->save();

        return redirect()->route('admin.tech_logos.index')->with('success', 'Tech logo created successfully.');
    }

    /**
     * Show the form for editing the specified tech logo.
     */
    public function edit(TechLogo $techLogo)
    {
        return view('admin.tech_logos.edit', [
            'techLogo' => $techLogo,
        ]);
    }

    /**
     * Update the specified tech logo in storage.
     */
    public function update(Request $request, TechLogo $techLogo)
    {
        $request->validate([
            'logo' => 'nullable|image|max:2048',
            'status' => 'required|in:0,1',
            'order' => 'nullable|integer',
        ]);

        $techLogo->status = $request->status;
        $techLogo->order = $request->order ?? 0;

        if ($request->hasFile('logo')) {
            $oldImage = $techLogo->logo;
            $image = $request->file('logo');
            $imageName = time() . random_int(1000, 9999) . '.' . $image->getClientOriginalExtension();
            $techLogo->logo = 'storage/' . $image->storeAs('tech_logos', $imageName, 'public');

            if (isset($oldImage) && File::exists(public_path($oldImage))) {
                File::delete(public_path($oldImage));
            }
        }

        $techLogo->save();

        return redirect()->route('admin.tech_logos.index')->with('success', 'Tech logo updated successfully.');
    }

    /**
     * Remove the specified tech logo from storage.
     */
    public function destroy(TechLogo $techLogo)
    {
        if (isset($techLogo->logo) && File::exists(public_path($techLogo->logo))) {
            File::delete(public_path($techLogo->logo));
        }

        $techLogo->delete();

        return redirect()->route('admin.tech_logos.index')->with('success', 'Tech logo deleted successfully.');
    }
}
