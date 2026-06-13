<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Exception;

class EnquiryController extends Controller
{
    // Display list of enquiries
    public function index(Request $request): View
    {
        $enquiries = Enquiry::with('service')
            ->when($request->status, function ($query) use ($request) {
                $query->where('status', $request->status);
            })
            ->latest()
            ->paginate(10);

        return view('admin.enquiries.list', compact('enquiries'));
    }

    // Show single enquiry details
    public function show(Enquiry $enquiry): View
    {
        $enquiry->load('service');
        return view('admin.enquiries.show', compact('enquiry'));
    }

    // Update enquiry status
    public function updateStatus(Request $request, Enquiry $enquiry): RedirectResponse
    {
        $validated = $request->validate([
            'status' => 'required|in:' . implode(',', array_keys(config('const.enquiries'))),
        ]);

        try {
            $enquiry->status = $validated['status'];
            $enquiry->save();

            session()->flash('alert-success', 'Status updated successfully!');
        } catch (Exception $e) {
            session()->flash('alert-danger', 'Failed to update status: ' . $e->getMessage());
        }

        return redirect()->back();
    }
}
