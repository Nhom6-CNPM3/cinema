<?php

use App\Http\Controllers\Admin\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\TheaterController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\SeatController;
use App\Http\Controllers\Admin\FoodController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home');

// Đăng nhập
Route::get('/login', [HomeController::class, 'showLoginForm'])->name('login');
Route::post('/login', [HomeController::class, 'login']);
Route::post('/logout', [HomeController::class, 'logout'])->name('logout');

// Đăng ký
Route::get('/register', [HomeController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [HomeController::class, 'register']);


// Phim chi tiết
Route::get('/home/movies/{id}', [HomeController::class, 'showMovieDetail'])->name('movie.detail')->middleware([ 'auth']);

// Blog


// Chi tiết Blog
Route::get('/home/blogs/{id}', [HomeController::class, 'showBlogDetail'])->name('blog.detail');


// Mua vé
Route::post('/buy-ticket', [HomeController::class, 'showBuyTicket'])->name('buy.ticket')->middleware([ 'auth']);

Route::get('/user-tickets', [HomeController::class, 'showUserTickets'])->name('user.tickets')->middleware([ 'auth']);
Route::get('/payment', [HomeController::class, 'payment'])->name('payment')->middleware([ 'auth']);


Route::name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // CRUD users

    Route::resource('/dashboard/users', UserController::class)->names([
        'index' => 'users.index',
        'create' => 'users.create',
        'store' => 'users.store',
        'show' => 'users.show',
        'edit' => 'users.edit',
        'update' => 'users.update',
        'destroy' => 'users.destroy',
    ]);

    // CRUD movies
    Route::resource('/dashboard/movies', MovieController::class);

    // CRUD theaters
    Route::resource('/dashboard/theaters', TheaterController::class);
    // default name is parent folder + resource name like this: admin.theaters - index create edit update and destroy

    // CRUD tickets
    Route::resource('/dashboard/tickets', TicketController::class)->names([
        'index' => 'tickets.index',
        'create' => 'tickets.create',
        'store' => 'tickets.store',
        'show' => 'tickets.show',
        'edit' => 'tickets.edit',
        'update' => 'tickets.update',
        'destroy' => 'tickets.destroy',
    ]);

    // CRUD schedules
    Route::resource('/dashboard/schedules', ScheduleController::class) ;

    // CRUD rooms
    Route::resource('/dashboard/rooms', RoomController::class) ;

    // CRUD seats
    Route::resource('/dashboard/seats', SeatController::class)->names([
        'index' => 'seats.index',
        'create' => 'seats.create',
        'store' => 'seats.store',
        'show' => 'seats.show',
        'edit' => 'seats.edit',
        'update' => 'seats.update',
        'destroy' => 'seats.destroy',
    ]);

    // CRUD foods
    Route::resource('/dashboard/foods', FoodController::class) ;
    Route::resource('/dashboard/blogs', BlogController::class);

});


// Trang phim
Route::get('/Listmovies', [HomeController::class, 'showMovies'])->name('frontend.movies');
Route::get('/Listblogs', [HomeController::class, 'showBlogs'])->name('blogs');
