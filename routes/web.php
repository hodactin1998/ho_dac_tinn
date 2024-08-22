<?php

use App\Events\UserRegisterd;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Jobs\SendMail;
use App\Models\Post;
use App\Models\User;
use App\Mail\PostPublished;
use App\DataTables\UsersDataTable;
use App\Models\Feature;
use App\Models\HotTrend;
use App\Models\BestSeller;
use App\Models\Hotin;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    
    $hotTrends = HotTrend::all();

    $feature1 = Feature::all();

    $hotin = Hotin::all();

    return view('ashop', [
        'hotTrends' => $hotTrends,

        'feature2'=> $feature1,

        'hotin'=> $hotin
    ]);
});