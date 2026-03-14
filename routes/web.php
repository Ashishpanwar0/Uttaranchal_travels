<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/packages', function () {
    return view('packages');
});

Route::get('/rental', function () {
    return view('rental');
});

Route::get('/blog', function () {
    return view('blog');
});

use App\Http\Controllers\TripController;

Route::post('/trip-enquiry', [TripController::class, 'send'])->name('trip.enquiry');



// Tour Routing Start

use App\Http\Controllers\TourController;

/* Home Page */

Route::get('/', [TourController::class,'home']);

/* Packages Page */

Route::get('/packages', [TourController::class,'packages']);

/* Tour Details */

Route::get('/tour/{slug}', [TourController::class,'details']);

// End Tour Routing 



// Blog FIle Start 

Route::get('/blog/{slug}', function ($slug) {

$blogs = config('blogs');

abort_unless(isset($blogs[$slug]), 404);

$blog = $blogs[$slug];

return view('blog.blog-details', compact('blog'));

});


// Database File //

use App\Http\Controllers\BookingController;

Route::post('/quick-enquiry',[BookingController::class,'quickEnquiry'])->name('quick.enquiry');

Route::post('/tour-booking',[BookingController::class,'tourBooking'])->name('tour.booking');

Route::post('/transport-booking',[BookingController::class,'transportBooking'])->name('transport.booking');

Route::post('/contact-message',[BookingController::class,'contactMessage'])->name('contact.message');