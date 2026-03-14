<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourController extends Controller
{

    public function home()
    {

        $tours = config('tours');

        /* Char Dham */
        $homeTours = array_filter($tours, function ($tour) {
            return $tour['category'] === 'chardham';
        });

        /* Activities */
        $activityTours = array_filter($tours, function ($tour) {
            return $tour['category'] === 'activity';
        });

        /* limit */
        $homeTours = array_slice($homeTours,0,6,true);
        $activityTours = array_slice($activityTours,0,6,true);

        return view('welcome', compact('homeTours','activityTours'));

    }

    public function packages()
    {

        $tours = config('tours');

        return view('packages', compact('tours'));

    }

    public function details($slug)
    {

        $tours = config('tours');

        $tour = $tours[$slug] ?? null;

        abort_if(!$tour,404);

        return view('tours.details', compact('tour'));

    }

}