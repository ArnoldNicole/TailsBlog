<?php

namespace App\Http\Controllers;

use App\Configurations\UiConfiguration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class GuestController extends Controller
{
    public function index()
    {
        $data = [
            'headline' => UiConfiguration::getConfigValue('landing-page-headline'),
            'sub_headline' => UiConfiguration::getConfigValue('landing-page-sub_headline'),
            'tagline' => UiConfiguration::getConfigValue('landing-page-tagline'),
        ];
        return Inertia::render('Welcome', [
            'appName' => config('app.name'),
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'appSlogan' => UiConfiguration::getConfigValue('slogan'),
            'AppData' => $data
        ]);
    }
}
