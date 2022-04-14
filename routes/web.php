 <?php

 use App\Http\Controllers\BaseController;
 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\AdminPanel\BaseController as AdminBaseController;
 use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;

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
 Route::get('/laravelAdmin/category',[AdminCategoryController::class,'index'])->name('admin_category');
 Route::get('/laravelAdmin/category/create',[AdminCategoryController::class,'create'])->name('admin_category_create');
 Route::post('/laravelAdmin/category/store',[AdminCategoryController::class,'store'])->name('admin_category_store');
 Route::get('/laravelAdmin/category/edit/{id}',[AdminCategoryController::class,'edit'])->name('admin_category_edit');
 Route::get('/laravelAdmin/category/destroy/{id}',[AdminCategoryController::class,'delete'])->name('admin_category_destroy');
 Route::get('/laravelAdmin/category/show/{id}',[AdminCategoryController::class,'show'])->name('admin_category_show');
 Route::post('/laravelAdmin/category/update/{id}',[AdminCategoryController::class,'update'])->name('admin_category_update');

