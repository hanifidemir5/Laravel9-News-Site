 <?php

 use App\Http\Controllers\BaseController;
 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\AdminPanel\BaseController as AdminBaseController;
 use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
 use App\Http\Controllers\AdminPanel\NewsController as NewsController;
 use App\Http\Controllers\AdminPanel\ImageController as ImageController;
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
    return '<h1>ara ara</h1>';
});
Route::get('/welcome', function () {
    return view('welcome1');
});

 Route::get('/',[BaseController::class,'test'])->name('test');

 Route::get('/index',[BaseController::class,'index'])->name('test');

Route::get('/Parameter/{id}/{Number}',[BaseController::class,'param'])->name('parameter');

Route::post('/save',[BaseController::class,'save'])->name('save');

 Route::get('/news/{id}',[BaseController::class,'newspage'])->name('newspage');


Route::get('/iop',[BaseController::class,'iop'])->name('iop');

 Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
     return view('dashboard');
 })->name('dashboard');


// ------------------ Admin Panel Routes -------------------//
// Route::get('/',[AdminBaseController::class,'admin'])->name('admin');
 Route::prefix('laravelAdmin')->name('laravelAdmin.')->group(function(){
    Route::get('/',[AdminBaseController::class,'index'])->name('index');
 // ------------------ Admin Category Routes -------------------//
         Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function() {
             Route::get('/', 'index')->name('index');
             Route::get('/create', 'create')->name('create');
             Route::post('/store', 'store')->name('store');
             Route::get('/edit/{id}', 'edit')->name('edit');
             Route::get('/destroy/{id}', 'destroy')->name('destroy');
             Route::get('/show/{id}', 'show')->name('show');
             Route::post('/update/{id}', 'update')->name('update');
         });
     // ------------------ Admin News Routes -------------------//
         Route::prefix('/news')->name('news.')->controller(NewsController::class)->group(function() {
             Route::get('/', 'index')->name('index');
             Route::get('/create', 'create')->name('create');
             Route::post('/store', 'store')->name('store');
             Route::get('/edit/{id}', 'edit')->name('edit');
             Route::get('/destroy/{id}', 'destroy')->name('destroy');
             Route::get('/show/{id}', 'show')->name('show');
             Route::post('/update/{id}', 'update')->name('update');
         });
     // ------------------ Admin News Image Gallery Routes -------------------//
         Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function() {
             Route::get('/{pid}', 'index')->name('index');
             Route::post('/store/{pid}', 'store')->name('store');
             Route::get('/destroy/{pid}/{id}', 'destroy')->name('destroy');
         });
 });
