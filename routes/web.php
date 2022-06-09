 <?php

 use App\Http\Controllers\AdminPanel\CommentController;
 use App\Http\Controllers\AdminPanel\FaqController;
 use App\Http\Controllers\AdminPanel\MessageController;
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
 // ------------------Home Page Routes -------------------//

 Route::get('/',[BaseController::class,'test'])->name('test');
 Route::get('/about',[BaseController::class,'about'])->name('about');
 Route::get('/references',[BaseController::class,'references'])->name('references');
 Route::get('/contact',[BaseController::class,'contact'])->name('contact');
 Route::post('/storemessage',[BaseController::class,'storemessage'])->name('storemessage');
 Route::get('/faq',[BaseController::class,'faq'])->name('faq');
 Route::post('/storecomment',[BaseController::class,'storecomment'])->name('storecomment');
 Route::view('/loginuser','home.login');
 Route::get('/index',[BaseController::class,'index'])->name('test');

 Route::get('/Parameter/{id}/{Number}',[BaseController::class,'param'])->name('parameter');

 Route::post('/save',[BaseController::class,'save'])->name('save');

 Route::get('/news/{id}/{slug}',[BaseController::class,'newspage'])->name('newspage');

 Route::get('/categorynews/{id}/{slug}',[BaseController::class,'categorynews'])->name('categorynews');


 Route::get('/iop',[BaseController::class,'iop'])->name('iop');

 Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
     return view('dashboard');
 })->name('dashboard');


// ------------------ Admin Panel Routes -------------------//
 Route::prefix('laravelAdmin')->name('laravelAdmin.')->group(function(){
    Route::get('/',[AdminBaseController::class,'index'])->name('index');
     // ------------------ Admin General Routes -------------------//
     Route::get('/asetting',[AdminBaseController::class,'asetting'])->name('asetting');
     Route::post('/asetting/update',[AdminBaseController::class,'settingUpdate'])->name('asetting.update');

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
     // ------------------ Admin FAQ Routes -------------------//
         Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function() {
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
     // ------------------ Admin Messages Routes -------------------//

         Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function() {
             Route::get('/', 'index')->name('index');
             Route::get('/show/{id}', 'show')->name('show');
             Route::post('/update/{id}', 'update')->name('update');
             Route::get('/destroy/{id}', 'destroy')->name('destroy');
         });
     // ------------------ Admin Comment & Review Routes -------------------//
         Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function() {
             Route::get('/', 'index')->name('index');
             Route::get('/destroy/{id}', 'destroy')->name('destroy');
             Route::get('/show/{id}', 'show')->name('show');
             Route::post('/update/{id}', 'update')->name('update');
         });
 });
