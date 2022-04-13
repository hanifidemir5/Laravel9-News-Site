 <?php

 use App\Http\Controllers\BaseController;
 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\AdminPanel\BaseController as AdminBaseController;

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
Route::get('/animegirl',function(){
    return 'gandırıldın';
});
Route::get('/welcome', function () {
    return view('welcome');
});

 Route::get('/',[BaseController::class,'test'])->name('test');

 Route::get('/index',[BaseController::class,'index'])->name('test');

Route::get('/Parameter/{id}/{Number}',[BaseController::class,'param'])->name('parameter');

Route::post('/save',[BaseController::class,'save'])->name('save');

Route::get('/iop',[BaseController::class,'iop'])->name('iop');

 Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
     return view('dashboard');
 })->name('dashboard');


// ------------------ Admin Panel Routes -------------------//
// Route::get('/',[AdminBaseController::class,'admin'])->name('admin');
 Route::get('/laravelAdmin',[AdminBaseController::class,'index'])->name('admin');
 // ------------------ Admin Category Routes -------------------//
 Route::get('/laravelAdmin/category',[\App\Http\Controllers\AdminPanel\CategoryController::class,'index'])->name('admin_category');
 Route::get('/laravelAdmin/category/create',[\App\Http\Controllers\AdminPanel\CategoryController::class,'create'])->name('admin_category_create');
 Route::post('/laravelAdmin/category/store',[\App\Http\Controllers\AdminPanel\CategoryController::class,'store'])->name('admin_category_store');

