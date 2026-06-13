<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index(Request $request) : View
    {
        $validated = $request->validate([
            'keyword' => 'nullable|string|max:255',
            'status' => 'nullable|string|in:' . implode(',', array_keys(config('const.enquiries'))),
        ]);

        $contacts = DB::table('contacts')
            ->when($request->has('keyword') && isset($validated['keyword']), function ($q) use ($validated) {
                $q->where(function ($q) use ($validated) {
                    $q->whereRaw('LOWER(name) LIKE ?', '%'.strtolower($validated['keyword']).'%')
                    ->orWhereRaw('LOWER(mobile) LIKE ?', '%'.strtolower($validated['keyword']).'%')
                    ->orWhereRaw('LOWER(email) LIKE ?', '%'.strtolower($validated['keyword']).'%');
                });
            })
            ->when($request->has('status') && isset($validated['status']), function ($q) use ($validated) {
                $q->whereRaw('status = ?', $validated['status']);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.contacts.list', ['contacts' => $contacts]);
    }


    // Display a specified enquiry
    public function show(Contact $contact) : View
    {
        return view('admin.contacts.show', ['contact' => $contact]);
    }


    // Update an enquiry's status
    public function update(Request $request, Contact $contact) : RedirectResponse
    {
        $validate = $request->validate(['status' => 'required']);

        try {
            $contact->status = @$validate['status'];
            $contact->save();
            session()->flash('alert-success','Status updated successfully!');
        } catch (Exception $e) {
            session()->flash('alert-danger', $e->getMessage());
        }

        return redirect()->intended(route('admin.contacts.show', ['contact' => $contact]));
    }
}
