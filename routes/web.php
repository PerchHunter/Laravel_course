<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\Users\News\NewsController;
    use \App\Http\Controllers\Users\Auth\Auth;
    use \App\Http\Controllers\Admin\News\AddNews;


    Route::get('/', [HomeController::class, 'index'])->name('homePage');

    Route::view('/aboutUs', 'aboutUs')->name('aboutUs');

    Route::name('users.')
        ->prefix('users')
        ->group(function () {

            Route::name('news.')
                ->prefix('news')
                ->group(function() {
                    Route::get('/', [NewsController::class, 'index'])->name('allCategories');
                    Route::get('/{categoryKey}/{newsId?}', [NewsController::class, 'getNewsConcreteCategory'])->name('concreteCategory');
                });

            Route::name('auth.')
                ->group(function() {
                    Route::match(['get', 'post'], '/authorization', [Auth::class, 'authorization'])->name('authorization');
                    Route::match(['get', 'post'], '/registration', [Auth::class, 'registration'])->name('registration');
                });
        });


    Route::name('admin.')
        ->prefix('admin')
        ->group(function() {

            Route::name('news.')
                ->prefix('news')
                ->group(function() {
                    Route::match(['get', 'post'], '/add', [AddNews::class, 'index'])->name('add');
                });
        });

    Route::any('/error404')->name('error404');

    Route::fallback( function (){
        return route('error404');
    });
