<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $banners = DB::table('banners')->where('status', 1)->get();

        return view('index', [
            'banners' => $banners
        ]);
    }


    public function about()
    {
        return view('about');
    }


    public function contact()
    {
        return view('contact-us');
    }


    public function contactUsSubmit(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email',
            'mobile'      => 'required|numeric|digits:10',
            'website_url' => 'nullable|url',
            'message'     => 'nullable|string',
            'captcha'     => 'required|captcha',
        ]);

        // Remove captcha from data before saving
        unset($validated['captcha']);

        Contact::create($validated);

        return redirect()->back()->with('success', 'Your message has been submitted successfully! We will contact you soon.');
    }


    public function portfolio()
    {
        $portfolios = DB::table('portfolios')
            ->where('status', 1)
            ->orderBy('order', 'ASC')
            ->get();

        return view('portfolio', ['portfolios' => $portfolios]);
    }


    public function services()
    {
        return view('it-solutions');
    }


    public function requestQuote()
    {
        return view('request-quote');
    }


    public function requestQuoteSubmit(Request $request)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:255',
            'email'      => 'required|email',
            'phone'      => 'required|numeric|digits:10',
            'service_id' => 'required|exists:services,id',
            'message'    => 'nullable|string',
            'captcha'    => 'required|captcha',
        ]);

        // Remove captcha from data before saving
        unset($validated['captcha']);

        Enquiry::create($validated);

        return redirect()->back()->with('success', 'Your enquiry has been submitted successfully! We will contact you soon.');
    }


    public function serviceDetail(string $slug)
    {
        $service = DB::table('services')
            ->whereRaw('slug = ?', $slug)
            ->where('status', 1)
            ->first();

        return view('service-details', ['service' => $service]);
    }


    public function webApp()
    {
        return view('web-application');
    }

    public function websiteDevelopment()
    {
        return view('website-development');
    }


    public function webDesign()
    {
        return view('web-designing');
    }


    public function mobileApp()
    {
        return view('mobile-application');
    }


    public function digitalMarketing()
    {
        return view('digital-marketing');
    }


    public function liveProject()
    {
        return view('live-project-training');
    }


    public function workProcess()
    {
        return view('work-process');
    }


    public function supportProcess()
    {
        return view('support-process');
    }


    public function softwareApplication()
    {
        return view('software-applications');
    }


    public function itConsulting()
    {
        return view('it-consulting-staffing');
    }


    public function seo()
    {
        return view('seo');
    }


    public function bpo()
    {
        return view('bpo');
    }


    public function aiIntegration()
    {
        return view('ai-integration');
    }

    public function cloudServices()
    {
        return view('cloude-services');
    }
}
