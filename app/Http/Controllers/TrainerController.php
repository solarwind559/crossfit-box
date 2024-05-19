<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    //rest of the logic in AppServiceProvider
    public function showAtHome()
    {
        return view('home');
    }

    // public function showAtCoaches()
    // {
    //     return view('coaches');
    // }

    public function showAtCoaches(Request $request)
{
    $type = $request->query('type'); // Get the type query parameter

    $trainers = Trainer::query();

    if ($type) {
        $trainers->where('type', $type); // Apply the filter if the type is provided
    }

    $trainers = $trainers->get();

    return view('coaches', [
        'trainers' => $trainers,
    ]);
}

}
