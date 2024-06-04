<?php



use App\Http\Controllers\BookController;
use App\Http\Controllers\BookadminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FavoritebookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceadminController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PromotionalController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

//Bắt buộc đăng nhập
Route::middleware('auth')->group( function(){
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::prefix('admin')->middleware('can:role')->group(function(){
        Route::resource('/users', UserController::class);
        Route::resource('/books',BookadminController::class);
        Route::resource('/invoices', InvoiceAdminController::class);
        Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    });

    Route::post('/thayDoiTrangThaiDonHang', [InvoiceAdminController::class, 'thayDoiTrangThaiDonHang'])->name('thayDoiTrangThaiDonHang');

    Route::resource('/user', UserController::class);
    Route::get('/user/{user}', [UserController::class, 'detail'])->name('detail.index');

    //Giỏ hàng
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [CartController::class, 'create'])->name('cart.add');
    Route::delete('/cart/destroy/{id}', [CartController::class, 'destroy'])->name('cart.destroy.ajax');
    Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
    Route::post('/cart/update/{id}', [CartController::class, 'updateCart'])->name('cart.update.ajax');

    //Review
    Route::post('/reviews/{book_id}', [ReviewController::class, 'create'])->name('add.comments');
    Route::put('/reviews/update/{id}', [ReviewController::class, 'update'])->name('comments.update');
    Route::delete('/reviews/delete/{id}', [ReviewController::class, 'destroy'])->name('comments.destroy');

    //yêu thích
    Route::get('/favorite', [FavoritebookController::class, 'index'])->name('favoritebook.index');
    Route::post('/favorite/add', [FavoritebookController::class, 'create'])->name('favoritebook.add');
    Route::post('/favorite/update/{id}', [FavoritebookController::class, 'update'])->name('favoritebook.update');
    Route::delete('/favorite/delete/{id}', [FavoritebookController::class, 'destroy'])->name('favoritebook.destroy');
    Route::delete('/favorite/{id}', [FavoritebookController::class, 'destroy'])->name('favoritebook.destroy');
});


//Không cần đăng nhập
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/book/{book}', [HomeController::class, 'book'])->name('detail.book');
Route::get('/category/{category}', [HomeController::class, 'category'])->name('detail.category');
Route::get('/search', [HomeController::class, 'search'])->name('index.search');

Route::get('/login', [LoginController::class, 'showForm'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('login');
Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('register', [LoginController::class, 'postregister'])->name('register');

Route::resource('/', BookController::class);
Route::resource('/promotional', PromotionalController::class);
Route::get('/products', [HomeController::class, 'show'])->name('list-products');


Route::fallback(function () {
    return view('pages.404');
});
//Route::get('/payment', [PaymentController::class, 'index'])->name('index.payment');
Route::get('/user-show', function () {
    //return view('welcome');
    return view('pages.user-show');
});

Route::get('/invoice', function () {
    //return view('welcome');
    return view('pages.invoice');
});

Route::get('/invoice', [InvoiceController::class, 'index'])->name('index.invoice');
Route::post('/invoice/store', [InvoiceController::class, 'store'])->name('invoice.store');



Route::get('/detail', function () {
    //return view('welcome');
    return view('pages.invoice-detail');
});

Route::get('slug/{slug}', function($slug){
    return Str::slug($slug);
});

Route::get('/books-search', function () {
    return view('books-search');
})->name('books-search');