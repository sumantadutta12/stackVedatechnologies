<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the portfolios.
     */
    public function index(): View
    {
        $query = Portfolio::query();

        if ($title = request()->get('title')) {
            $query->where('title', 'like', "%{$title}%");
        }

        $portfolios = $query->orderBy('order')
            ->orderByDesc('created_at')
            ->paginate(10);

        return view('admin.portfolios.list', compact('portfolios'));
    }

    /**
     * Show the form for creating a new portfolio.
     */
    public function create(): View
    {
        return view('admin.portfolios.add');
    }

    /**
     * Store a newly created portfolio.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'image'       => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
            'video'       => 'nullable|file|mimes:mp4,webm,ogg|max:20480',
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'order'       => 'nullable|integer|min:0',
            'status'      => 'required|boolean',
        ]);

        try {
            $portfolio = new Portfolio();
            $portfolio->fill($validated);

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $name = time().'.'.$file->getClientOriginalExtension();
                $portfolio->image = 'storage/' . $file->storeAs('portfolios', $name, 'public');
            }

            if ($request->hasFile('video')) {
                $file = $request->file('video');
                $name = time().'-video.'.$file->getClientOriginalExtension();
                $portfolio->video = 'storage/' . $file->storeAs('portfolios', $name, 'public');
            }

            $portfolio->save();

            session()->flash('alert-success', 'Portfolio created successfully!');
            return redirect()->route('admin.portfolios.index');

        } catch (Exception $e) {
            session()->flash('alert-danger', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Show the form for editing a portfolio.
     */
    public function edit(Portfolio $portfolio): View
    {
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    /**
     * Update the specified portfolio.
     */
    public function update(Request $request, Portfolio $portfolio): RedirectResponse
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
            'video'       => 'nullable|file|mimes:mp4,webm,ogg|max:20480',
            'description' => 'nullable|string',
            'link'        =>  'nullable|url',
            'order'       => 'nullable|integer|min:0',
            'status'      => 'required|boolean',
        ]);

        try {
            $portfolio->fill($validated);

            if ($request->hasFile('image')) {
                if ($portfolio->image && File::exists(public_path($portfolio->image))) {
                    File::delete(public_path($portfolio->image));
                }

                $file = $request->file('image');
                $name = time().'.'.$file->getClientOriginalExtension();
                $portfolio->image = 'storage/' . $file->storeAs('portfolios', $name, 'public');
            }

            if ($request->hasFile('video')) {
                if ($portfolio->video && File::exists(public_path($portfolio->video))) {
                    File::delete(public_path($portfolio->video));
                }

                $file = $request->file('video');
                $name = time().'-video.'.$file->getClientOriginalExtension();
                $portfolio->video = 'storage/' . $file->storeAs('portfolios', $name, 'public');
            }

            $portfolio->save();

            session()->flash('alert-success', 'Portfolio updated successfully!');

        } catch (Exception $e) {
            session()->flash('alert-danger', $e->getMessage());
        }

        return redirect()->route('admin.portfolios.edit', ['portfolio' => $portfolio->id])->withInput();
    }

    /**
     * Remove the specified portfolio.
     */
    public function destroy(Portfolio $portfolio): RedirectResponse
    {
        try {
            if ($portfolio->image && File::exists(public_path($portfolio->image))) {
                File::delete(public_path($portfolio->image));
            }

            if ($portfolio->video && File::exists(public_path($portfolio->video))) {
                File::delete(public_path($portfolio->video));
            }

            $portfolio->delete();
            session()->flash('alert-success', 'Portfolio deleted successfully!');

        } catch (Exception $e) {
            session()->flash('alert-danger', $e->getMessage());
        }

        return redirect()->route('admin.portfolios.index');
    }
}
