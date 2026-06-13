<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Traits\SlugTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class ServiceController extends Controller
{
    use SlugTrait;

    /**
     * Display a listing of the services.
     */
    public function index(): View
    {
        $query = Service::query();

        if ($title = request()->get('title')) {
            $query->where('title', 'like', "%{$title}%");
        }

        $services = $query->orderBy('order')
                          ->orderByDesc('created_at')
                          ->paginate(10);

        return view('admin.services.list', compact('services'));
    }

    /**
     * Show the form for creating a new service.
     */
    public function create(): View
    {
        return view('admin.services.add');
    }

    /**
     * Store a newly created service.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title'              => 'required|string|max:255',
            'description'        => 'nullable|string',
            'short_description'  => 'nullable|string',
            'background_image'   => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
            'description_image'  => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
            'icon'               => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:1024',
            'order'              => 'nullable|integer|min:0',
            'status'             => 'required|boolean',
        ]);

        try {
            $service = new Service();
            $service->fill($validated);
            $service->slug = $this->serviceSlug($validated['title']);

            if ($request->hasFile('background_image')) {
                $file = $request->file('background_image');
                $name = time().'_bg.'.$file->getClientOriginalExtension();
                $service->background_image = 'storage/' . $file->storeAs('services/backgrounds', $name, 'public');
            }

            if ($request->hasFile('description_image')) {
                $file = $request->file('description_image');
                $name = time().'_desc.'.$file->getClientOriginalExtension();
                $service->description_image = 'storage/' . $file->storeAs('services/descriptions', $name, 'public');
            }

            if ($request->hasFile('icon')) {
                $file = $request->file('icon');
                $name = time().'_icon.'.$file->getClientOriginalExtension();
                $service->icon = 'storage/' . $file->storeAs('services/icons', $name, 'public');
            }

            $service->save();
            session()->flash('alert-success', 'Service created successfully!');
            return redirect()->route('admin.services.index');

        } catch (Exception $e) {
            session()->flash('alert-danger', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Show the form for editing a service.
     */
    public function edit(Service $service): View
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified service.
     */
    public function update(Request $request, Service $service): RedirectResponse
    {
        $validated = $request->validate([
            'title'              => 'required|string|max:255',
            'description'        => 'nullable|string',
            'short_description'  => 'nullable|string',
            'background_image'   => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
            'description_image'  => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
            'icon'               => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:1024',
            'order'              => 'nullable|integer|min:0',
            'status'             => 'required|boolean',
        ]);

        try {
            $service->fill($validated);

            if ($service->title !== $validated['title']) {
                $service->slug = $this->serviceSlug($validated['title']);
            }

            if ($request->hasFile('background_image')) {
                if (!empty($service->background_image)) {
                    $oldPath = public_path($service->background_image);
                    if (File::exists($oldPath)) {
                        File::delete($oldPath);
                    }
                }
                $file = $request->file('background_image');
                $name = time().'_bg.'.$file->getClientOriginalExtension();
                $service->background_image = 'storage/' . $file->storeAs('services/backgrounds', $name, 'public');
            }

            if ($request->hasFile('description_image')) {
                if (!empty($service->description_image)) {
                    $oldPath = public_path($service->description_image);
                    if (File::exists($oldPath)) {
                        File::delete($oldPath);
                    }
                }
                $file = $request->file('description_image');
                $name = time().'_desc.'.$file->getClientOriginalExtension();
                $service->description_image = 'storage/' . $file->storeAs('services/descriptions', $name, 'public');
            }

            if ($request->hasFile('icon')) {
                if (!empty($service->icon)) {
                    $oldPath = public_path($service->icon);
                    if (File::exists($oldPath)) {
                        File::delete($oldPath);
                    }
                }
                $file = $request->file('icon');
                $name = time().'_icon.'.$file->getClientOriginalExtension();
                $service->icon = 'storage/' . $file->storeAs('services/icons', $name, 'public');
            }

            $service->save();
            session()->flash('alert-success', 'Service updated successfully!');

        } catch (Exception $e) {
            session()->flash('alert-danger', $e->getMessage());
        }

        return redirect()->route('admin.services.edit', ['service' => $service->id])->withInput();
    }

    /**
     * Remove the specified service.
     */
    public function destroy(Service $service): RedirectResponse
    {
        try {
            if ($service->background_image && File::exists($service->background_image)) {
                File::delete($service->background_image);
            }
            if ($service->description_image && File::exists($service->description_image)) {
                File::delete($service->description_image);
            }
            if ($service->icon && File::exists($service->icon)) {
                File::delete($service->icon);
            }

            $service->delete();
            session()->flash('alert-success', 'Service deleted successfully!');
        } catch (Exception $e) {
            session()->flash('alert-danger', $e->getMessage());
        }

        return redirect()->route('admin.services.index');
    }
}
