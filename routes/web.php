<?php
//    phpinfo();

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\NewsController;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

    Route::get('/', [HomeController::class, 'index']);

    Route::get('/about_us', [HomeController::class, 'about_us'])->name('about_us');

    Route::get('/news/{newsId?}', [NewsController::class, 'index'])->name('news')->where(['newsId' => '[0-9]+']);

    Route::fallback( function (){
        return 'Страница не найдена';
    })->name('error404');
