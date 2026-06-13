<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class SettingsController extends Controller
{
    public function siteSettings() : View
    {
        $setting = DB::table('settings')->first();

        return view('admin.settings.site', ['setting' => $setting]);
    }


    public function saveSiteSettings(Request $request) : RedirectResponse
    {
        $validated = $request->validate([
            'site_name' => 'required|string|max:191',
            'email' => 'required|email|max:255',
            'email_2' => 'nullable|email|max:255',
            'email_3' => 'nullable|email|max:255',
            'mobile' => 'required|string|max:191',
            'mobile_2' => 'nullable|string|max:191',
            'mobile_3' => 'nullable|string|max:191',
            'location' => 'nullable|string|max:255',
            'facebook_url' => 'nullable|url',
            'x_url' => 'nullable|url',
            'linkedin_url' => 'nullable|url',
            'youtube_url' => 'nullable|url',
            'instagram_url' => 'nullable|url',
            'short_description' => 'nullable|string',
            'map_link' => 'nullable|url',
            'office_time' => 'nullable|string',
        ]);

        try {
            $setting = Setting::first();

            if (!$setting) {
                $setting = new Setting;
            }

            $setting->site_name = @$validated['site_name'];
            $setting->email = @$validated['email'];
            $setting->email_2 = @$validated['email_2'];
            $setting->email_3 = @$validated['email_3'];
            $setting->mobile = @$validated['mobile'];
            $setting->mobile_2 = @$validated['mobile_2'];
            $setting->mobile_3 = @$validated['mobile_3'];
            $setting->location = @$validated['location'];
            $setting->facebook_url = @$validated['facebook_url'];
            $setting->x_url = @$validated['x_url'];
            $setting->linkdin_url = @$validated['linkedin_url'];
            $setting->youtube_url = @$validated['youtube_url'];
            $setting->instagram_url = @$validated['instagram_url'];
            $setting->map_link = @$validated['map_link'];
            $setting->short_description = @$validated['short_description'];
            $setting->office_time = @$validated['office_time'];

            $setting->save();
            session()->flash('alert-success', 'Site Settings saved successfully!');
        } catch (Exception $e) {
            session()->flash('alert-danger', $e->getMessage());
        }

        return redirect()->intended(route('admin.settings.site'));
    }


    public function logo() : View
    {
        $setting = DB::table('settings')->first();

        return view('admin.settings.logo', ['setting' => $setting]);
    }


    public function logoSave(Request $request) : RedirectResponse
    {
        $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:512',
            'favicon' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp,ico|max:512',
            'inverted_logo' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:512',
        ]);

        try {
            $setting = Setting::first();

            if ($request->hasFile('logo')) {
                $oldLogo = $setting->logo;
                $logo = $request->file('logo');
                $logoName = time().random_int(0000,9999).'.'.$logo->getClientOriginalExtension();
                $setting->logo = 'storage/'.$logo->storeAs('settings', $logoName, 'public');

                if (isset($oldLogo) && File::exists($oldLogo)) {
                    File::delete($oldLogo);
                }
            }

            if ($request->hasFile('favicon')) {
                $oldFavicon = $setting->Favicon;
                $favicon = $request->file('favicon');
                $faviconName = time().random_int(0000,9999).'.'.$favicon->getClientOriginalExtension();
                $setting->favicon = 'storage/'.$favicon->storeAs('settings', $faviconName, 'public');

                if (isset($oldFavicon) && File::exists($oldFavicon)) {
                    File::delete($oldFavicon);
                }
            }

            if ($request->hasFile('inverted_logo')) {
                $oldInverted_logo = $setting->inverted_logo;
                $inverted_logo = $request->file('inverted_logo');
                $inverted_logoName = time().random_int(0000,9999).'.'.$inverted_logo->getClientOriginalExtension();
                $setting->inverted_logo = 'storage/'.$inverted_logo->storeAs('settings', $inverted_logoName, 'public');

                if (isset($oldInverted_logo) && File::exists($oldInverted_logo)) {
                    File::delete($oldInverted_logo);
                }
            }

            $setting->save();
            session()->flash('alert-success', 'Logo updated successfully.!');

            return redirect()->intended(route('admin.settings.logo'));
        } catch (Exception $e) {
            session()->flash('alert-danger', $e->getMessage());

            return redirect()->intended(route('admin.settings.logo'));
        }

    }
}
