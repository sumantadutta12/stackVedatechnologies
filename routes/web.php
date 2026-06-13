<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\\Http\\Controllers')->group(function () {
    Route::middleware(['seo'])->group(function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/about-us', 'HomeController@about')->name('about-us');
        Route::get('/contact-us', 'HomeController@contact')->name('contact-us');
        Route::post('/contact-us', 'HomeController@contactUsSubmit')->name('contact-us.submit');
        Route::get('/services', 'HomeController@services')->name('services');
        Route::get('/request-quote', 'HomeController@requestQuote')->name('request-quote');
        Route::post('/request-quote', 'HomeController@requestQuoteSubmit')->name('request-quote.submit');
        Route::get('/our-works', 'HomeController@portfolio')->name('our-works');
        Route::get('/web-application', 'HomeController@webApp')->name('web-application');
        Route::get('/website-development', 'HomeController@websiteDevelopment')->name('website-development');
        Route::get('/web-designing', 'HomeController@webDesign')->name('web-designing');
        Route::get('/mobile-application', 'HomeController@mobileApp')->name('mobile-application');
        Route::get('/digital-marketing', 'HomeController@digitalMarketing')->name('digital-marketing');
        Route::get('/live-project-training', 'HomeController@liveProject')->name('live-project-training');
        Route::get('/work-process', 'HomeController@workProcess')->name('work-process');
        Route::get('/support-process', 'HomeController@supportProcess')->name('support-process');
        Route::get('/software-applications', 'HomeController@softwareApplication')->name('software-applications');
        Route::get('/it-consulting-staffing', 'HomeController@itConsulting')->name('it-consulting-staffing');
        Route::get('/seo', 'HomeController@seo')->name('seo');
        Route::get('/bpo', 'HomeController@bpo')->name('bpo');
        Route::get('/ai-integration', 'HomeController@aiIntegration')->name('ai-integration');
        Route::get('/cloud-services', 'HomeController@cloudServices')->name('cloud-services');
        Route::get('/service-detail/{slug}', 'HomeController@serviceDetail')->name('service-detail');
    });


    Route::get('captcha/refresh', function () {
        return captcha_img('flat');
    });
});


Route::namespace('App\\Http\\Controllers\\Admin')->prefix('admin')->name('admin.')->group(function() {
    Route::get('/login', 'AuthController@index')->name('login');
    Route::post('/login', 'AuthController@store')->name('login.submit');

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/logout', 'AuthController@destroy')->name('logout');
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

        Route::get('/profile', 'DashboardController@profile')->name('profile');
        Route::put('/profile', 'DashboardController@update_profile')->name('profile.submit');

        Route::get('/change-password', 'DashboardController@change_password')->name('change-password');
        Route::put('/change-password', 'DashboardController@update_password')->name('change-password.submit');

        Route::resource('banners', 'BannerController')->except(['show']);

        Route::resource('services', 'ServiceController')->except(['show']);

        Route::resource('portfolios', 'PortfolioController')->except(['show']);

        Route::resource('contacts', 'ContactController')->only(['index', 'show', 'update']);

        Route::get('enquiries', 'EnquiryController@index')->name('enquiries.index');
        Route::get('enquiries/{enquiry}', 'EnquiryController@show')->name('enquiries.show');
        Route::put('enquiries/{enquiry}/status', 'EnquiryController@updateStatus')->name('enquiries.updateStatus');

        Route::get('/settings/site', 'SettingsController@siteSettings')->name('settings.site');
        Route::post('/settings/site', 'SettingsController@saveSiteSettings')->name('settings.site.store');

        Route::get('/settings/logo', 'SettingsController@logo')->name('settings.logo');
        Route::post('/settings/logo', 'SettingsController@logoSave')->name('settings.logo.store');

        Route::resource('tech_logos', 'TechLogoController')->except(['show']);
        Route::resource('seos', 'SeoController')->except(['show']);
    });
});
