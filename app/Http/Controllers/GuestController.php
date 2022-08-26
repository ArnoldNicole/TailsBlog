<?php

namespace App\Http\Controllers;

use App\Configurations\UiConfiguration;
use App\Models\Blog;
use App\Models\Category;
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
            'AppData' => $data,
            'Categories' => self::topCategories(),
            'Articles' => Blog::orderBy('views', 'desc')->with('category')->take(20)->get(),
            'FeaturedArticle' => Blog::where('featured_in_blog', 1)->first()
        ]);
    }


    public function blog()
    {
        $data = [
            'headline' => UiConfiguration::getConfigValue('blog-page-headline'),
            'sub_headline' => UiConfiguration::getConfigValue('blog-page-sub_headline'),
            'tagline' => UiConfiguration::getConfigValue('blog-page-tagline'),
        ];
        return Inertia::render('Blog', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'appName' => config('app.name'),
            'appSlogan' => config('app.slogan', 'Sharing is caring'),
            'AppData' => $data,
            'Categories' => self::topCategories(),
            'Articles' => Blog::orderBy('created_at', 'desc')->with('category')->paginate(20)
        ]);
    }

    public function topCategories()
    {
        return Category::OrderBy('created_at', 'desc')->take(5)->get();
    }

    public function category(Category $category)
    {

        return Inertia::render('ViewCategory', [
            'appName' => config('app.name'),
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'appSlogan' => UiConfiguration::getConfigValue('slogan'),
            'Categories' => self::topCategories(),
            'Category' => $category,
            'Articles' => self::getCategoryArticles($category)
        ]);
    }

    private function getCategoryArticles(Category $category)
    {
        $data =  $category->blogs()->orderBy('created_at', 'desc')->paginate(20);
        return $data;
    }
}
