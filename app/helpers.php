<?php

use App\Models\Menu;
use App\Models\Seo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


/*
This function will return the formatted date and
time based on the format passed as parameter
*/
if (!function_exists('formatDateTime')) {
    function formatDateTime($dateTime, $format = 'd-m-Y h:i a') {
        // Create a DateTime object from the input assuming it's in UTC
        $dt = new DateTime($dateTime, new DateTimeZone('UTC'));

        // Set the timezone to Kolkata
        $dt->setTimezone(new DateTimeZone('Asia/Kolkata'));

        // Return the formatted date
        return $dt->format($format);
    }
}

if (! function_exists('formatDate')) {
    function formatDate($dateTime, $format = 'd-m-Y') {
        return date($format, strtotime($dateTime));
    }
}

/*
This function will format a text from
SOME_TEXT / some_text -> Some Text
*/
if (! function_exists('formatText')) {
	function formatText($text) {
		return ucwords(str_replace('_', ' ', $text));
	}
}


/*
 This function will return null if provide file
 does not exists in the server or else it
 will return the URL of the file
*/
if (!function_exists('getLinkOrNull')) {
    function getLinkOrNull($path)
    {
        $link = null;

        if (!empty($path) && $path != '' && $path != null && File::exists($path)) {
            $link = asset($path);
        }

        return $link;
    }
}


/*
 This function will return sample image if provide
 file does not exists in the server or else
 it will return the URL of the file
*/
if (! function_exists('getImageUrl')) {
	function getImageUrl($image) {
        $link = asset('admin/img/noimage.jpg');

        if (!empty($image) && $image != '' && $image != null && File::exists($image)) {
            $link = asset($image);
        }

        return $link;
	}
}



if (! function_exists('getSeo')) {
	function getSeo($page) {
        return Seo::where('page', $page)->where('status', 1)->first();
    }
}
