<?php

namespace App\Http\Controllers;

use App\Models\Asetting;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;
use function GuzzleHttp\Promise\all;

class BaseController extends Controller
{
    public function categorynews($id)
    {
        $category = Category::find($id);
        $news= News::all();
        return view('home.categorynews',[
            'news'=>$news,
            'category'=>$category
        ]);
    }

    public function categories()
    {
        $categories= Category::all();
        return view('home.categories',[
            'categories'=>$categories
        ]);
    }


    public static function getnews($id)
    {
        $user = User::find($id);
        return view('home.user.userindex',[
           $user => 'user'
        ]);
    }

    public static function maincategorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public static function allcategorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }


    public static function allnews()
    {
        $news = News::all();
        return view('home.allnews',[
            'news'=>$news
        ]);
    }

    //
    public function searchNews(Request $request)
    {
        $result = $request->query('search');

        if ($result)
        {
            $news = News::where('title', 'LIKE', "%{$result}%")->get();
        }
        else
            $news = null;

        return view('home.search',[
            'news'=>$news
        ]);
    }

    public function test()
    {

        $counter = count(News::all());
        $secontcounter = $counter -3;
        $news = News::all();
        $newestnews = DB::table('news')->skip($counter-3)->take(3)->get();
        $oldestnews = DB::table('news')->skip($counter-$secontcounter)->take(3)->get();
        $mainslider = DB::table('news')->skip($counter-5)->take(5)->get();
        $sliderdata = News::all();
        $topnewsdata = DB::table('news')->skip($counter-4)->take(4)->get();
        $mainnewsdata = DB::table('news')->skip($counter-9)->take(9)->get();
        $readmoredata = Category::limit(10)->get();
        $setting = Asetting::first();
       return view('home.index',[
           'oldestnews'=> $oldestnews,
           'newestnews'=> $newestnews,
           'mainslider'=>$mainslider,
           'news'=>$news,
           'sliderdata'=>$sliderdata,
           'setting'=>$setting,
           'topnewsdata'=>$topnewsdata,
           'mainnewsdata'=>$mainnewsdata,
           'readmoredata'=>$readmoredata
       ]);
    }

    public function about()
    {
        $setting = Asetting::first();
        return view('home.aboutus',[
            'setting'=>$setting,
        ]);
    }

    public function contact()
    {
        $setting = Asetting::first();
        return view('home.contact',[
            'setting'=>$setting,
        ]);
    }

    public function faq()
    {
        $setting = Asetting::first();
        $datalist = Faq::all();
        return view('home.faq',[
            'setting'=>$setting,
            'datalist'=>$datalist
        ]);
    }

    public function references()
    {
        $setting = Asetting::first();
        return view('home.references',[
            'setting'=>$setting,
        ]);
    }

    public function storemessage(Request $request)
    {
        $data = new Message();
        $data->name =$request->input('name');
        $data->email =$request->input('email');
        $data->phone =$request->input('phone');
        $data->subject =$request->input('subject');
        $data->message =$request->input('message');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info','Your message has been sent , Thank you.');
    }

    public function storecomment(Request $request)
    {

        $data = new Comment();
        $data->user_id =Auth::id();
        $data->news_id =$request->input('news_id');
        $data->subject =$request->input('subject');
        $data->review =$request->input('review');
        $data->rate =$request->input('rate');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('newspage',['id'=>$request->input('news_id'),'slug'=>$request->input('title')])->with('info','Your comment has been sent , Thank you.');
    }



    public function newspage($id)
    {
        $images = DB::table('images')->where('news_id',$id)->get();
        $reviews = Comment::where('news_id',$id)->where('status','True')->get();
        $data = News::find($id);
        $newsdata = News::all();
        $relateddata = News::all();
        $categorydata = Category::limit(5)->get();
        return view('home.news',[
            'images'=>$images,
            'newsdata'=>$newsdata,
            'data'=>$data,
            'categorydata'=>$categorydata,
            'relateddata' =>$relateddata,
            'reviews'=>$reviews
        ]);
    }




    function save(Request $request)
    {
        echo "Save function<br>";
        echo "<br>First Name:", $_REQUEST["fname"],"<br>";

        echo "<br>Last Name:", $_REQUEST["lname"];
    }

    public function news($id)
    {
        $data= News::find($id);
        $images = DB::table('images')->where('news_id',$id)->get();
        return view('home.news',[
            'data'=>$data,
            'images'=>$images
        ]);
    }
    public function iop($id)
    {
        $category = News::find($id);
        $news= DB::table('news')->where('category_id',$id)->get();
        return view('home.news',[
            'category'=>$category,
            'news'=>$news
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function loginadmincheck(Request $request)
    {
        //dd($request);
        $credentials = $request->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('/laravelAdmin');
        }
        return back()->withErrors([
            'error'=>'The provided credendtials do not match with our records',
        ])->onlyInput('email');

    }

}
