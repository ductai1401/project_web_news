<?php

use App\Http\Controllers\Admin\AjaxController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\MedalController;
use App\Http\Controllers\Admin\AthleteController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\OlympicController;
use App\Http\Controllers\Admin\SportController;
use App\Http\Controllers\Admin\Olympic_sportController;


use App\Http\Controllers\AuthController;
use App\Http\Controllers\Client\AthleteController as ClientAthleteController;
use App\Http\Controllers\Client\CountryController as ClientCountryController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\NewsController as ClientNewsController;
use App\Http\Controllers\Client\OlympicController as ClientOlympicController;
use App\Http\Controllers\Client\ProfileController;
use App\Http\Controllers\Client\ResultsController;
use App\Http\Controllers\Client\SportController as ClientSportController;
use App\Http\Controllers\MailController;
use App\Models\Olympic;

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


// Route::get('/', function () {
//     return view('index');
// })->name('index');





Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/sendmail', [MailController::class, 'index']);

// Route::get('/profile', function() {
//     return view('profile');
// })->name('profile');

Route::prefix('client')->group(function () {
    

    Route::get('/olympic', [ClientOlympicController::class, 'olympic_games'])->name('olympic_games');
    Route::get('/olympic_games/{name}/{id}', [ClientOlympicController::class, 'olympic_seasion'])->name('olympic_seasion');


    Route::get('/sports/{name}/{id}', [ClientSportController::class, 'sport'])->name('sport');

    Route::get('/countrys', [ClientCountryController::class, 'Country'])->name('Country');

    Route::get('/athlete/{id}', [ClientAthleteController::class, 'athlete'])->name('athlete');

    Route::get('/athletes', [ClientAthleteController::class, 'listAthlete'])->name('listAthlete');

    Route::get('/getAthlete/{search}', [ClientAthleteController::class, 'getAthlete'])->name('getAthlete');

    // Route::get('/searchAthlete/{search}', [ClientAthleteController::class, 'searchAthlete'])->name('searchAthlete');




    Route::get('/results', [ResultsController::class, 'results'])->name('results');

    Route::get('/profile', [ProfileController::class, 'viewProfile'])->name('profile');

    Route::get('/news/{id}', [ClientNewsController::class, 'singleNews'])->name('singleNews');

    Route::get('/search_news', [ClientNewsController::class, 'searchNews'])->name('searchNews');
    
    

    Route::get('/checkLogin', [ClientNewsController::class, 'checkLogin'])->name('checkLogin');

    Route::post('/comment/{id}', [ClientNewsController::class, 'storeComment'])->name('storeComment');

    Route::get('/send_mail', [ClientNewsController::class, 'mail_hot']);




    
});


Route::prefix('auth')->name('auth.')->controller(AuthController::class)->group(function () {
    Route::get('/login', 'viewLogin')->name('viewLogin');

    Route::get('/register', 'viewRegister')->name('viewRegister');

    Route::post('/login', 'login')->name('login');

    Route::get('/logout', 'logout')->name('logout');

    Route::post('/register', 'register')->name('register');
    
    Route::post('/profile/{id}', 'show')->name('profile');
});

Route::prefix('admin')->name('admin.')->middleware('checkLogin')->group(function () {

    Route::get('/404', function () {
        return view('admin.404');
    })->name('404');

    Route::prefix('ajax')->name('ajax.')->controller(AjaxController::class)->group(function () {

        Route::get('sport/{id}', 'getSport')->name('sport');

        Route::get('olympic_sport', 'getOlympic_sport')->name('olympic_sport');


        Route::get('country', 'getCountry')->name('country');

        Route::get('athlete/{id}', 'getAthlete_sport')->name('athlete');

        Route::get('athlete/{id}', 'getAthlete_country')->name('athlete');

        Route::get('posision', 'getPosision')->name('posision');

        Route::get('olympic_s/{idOlympic}/{idSport}', 'getOlympic_Sport')->name('o_s');
    });

    Route::prefix('olympic_sport')->name('olympic_sport.')->controller(Olympic_sportController::class)->group(function () {

        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');

       
    });

    Route::prefix('category')->name('category.')->controller(CategoryController::class)->group(function () {
        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('athlete')->name('athlete.')->controller(AthleteController::class)->group(function () {
        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');

        Route::get('athlete_s/{idSport}/{idCountry}', 'getAthlete')->name('getAthlete_s');

        
    });

    Route::prefix('user')->name('user.')->controller(UserController::class)->group(function () {
        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('show/{id}', 'show')->name('show');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('medal')->name('medal.')->controller(MedalController::class)->group(function () {
        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('country')->name('country.')->controller(CountryController::class)->group(function () {
        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('news')->name('news.')->controller(NewsController::class)->group(function () {
        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');

       
    });

    Route::prefix('olympic')->name('olympic.')->controller(OlympicController::class)->group(function () {
        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('sport')->name('sport.')->controller(SportController::class)->group(function () {
        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('comment')->name('comment.')->controller(CommentController::class)->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });
});