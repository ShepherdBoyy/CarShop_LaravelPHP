<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeatures;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\Maker;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        Maker::factory()
            ->count(5)
            ->hasModels(5)
            ->create();

        return view('home.index');
    }
}
