<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use const http\Client\Curl\AUTH_ANY;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::where('user_id',Auth::id());
        return view('home.user.userindex',[
            'comments'=>$comments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function reviews()
    {
        $comments = Comment::where('user_id','=',Auth::id())->get();
        return view('home.user.comments',[
            'comments' => $comments
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $news
     * @return \Illuminate\Http\Response
     */



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reviewdestroy(News $news,$id)
    {
        //
        $data= Comment::find($id);
        $data->delete();
        return redirect(route('userpanel.reviews'));
    }

    public function reviewupdate(Request $request, $id)
    {
        $data = Comment::find($id);
        $data->status = $request->status;
        $data->save();
        return redirect(route('userpanel.reviews',['id'=>$id]));
    }

    public function mynewscreate()
    {
        $data = Category::all();
        return view('home.user.mynewscreate',[
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function mynewsstore(Request $request)
    {
        $data = new News();
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        if($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->category_id = $request->category_id;
        $data->detail = $request->detail;
        $data->type = $request->type;
        $data->user_id =Auth::id();
        $data->status = $request->status;
        $data->save();
        return redirect(route('userpanel.mynews'));
    }


    public function mynews()
    {
        $news= DB::table('news')->where('user_id','=',Auth::id())->get();
        return view('home.user.mynews',[
            'news' => $news
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */

    public function mynewsshow(News $news,$id)
    {
        $data = News::find($id);
        return view('home.user.mynewsshow',[
            'data' => $data
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */

    public function mynewsedit(News $news,$id)
    {
        $data = News::find($id);
        $datalist = Category::all();
        return view('home.user.mynewsedit',[
            'data' => $data,
            'datalist' => $datalist
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */

    public function mynewsupdate(Request $request, News $news,$id)
    {
        //
        $data=News::find($id);
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        if($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->category_id = $request->category_id;
        $data->detail = $request->detail;
        $data->type = $request->type;
        $data->status = $request->status;
        $data->save();
        return redirect(route('userpanel.mynews'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */

    public function mynewsdestroy(News $news,$id)
    {
        //
        $data= News::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect(route('userpanel.mynews'));
    }
}
