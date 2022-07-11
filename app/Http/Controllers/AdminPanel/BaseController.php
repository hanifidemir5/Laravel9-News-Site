<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Asetting;
use App\Models\Setting;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    //
    public function index(){
        return view("admin.index");
    }

    public function asetting()
    {
        $data = Asetting::first();
        if($data===null)
        {
            $data = new Asetting();
            $data->title='Project Title';
            $data->save();
            $data=Asetting::first();
        }

       return view("admin.asetting",['data'=>$data]);
    }

    public function profile()
    {
        return view("admin.profile");
    }


    public function settingUpdate(Request $request)
    {

            $id = $request->input('id');

            $data = Asetting::find($id);

            $data->title = $request->input('title');
            $data->keywords = $request->input('keywords');
            $data->description = $request->input('description');
            $data->company = $request->input('company');
            $data->address = $request->input('address');
            $data->phone = $request->input('phone');
            $data->fax = $request->input('fax');
            $data->email = $request->input('email');
            $data->smtpserver = $request->input('smtpserver');
            $data->smtpemail = $request->input('smtpemail');
            $data->smtppasword = $request->input('smtppasword');
            $data->smtpport = $request->input('smtpport');
            $data->facebook = $request->input('facebook');
            $data->instagram = $request->input('instagram');
            $data->twitter = $request->input('twitter');
            $data->youtube = $request->input('youtube');
            $data->aboutus = $request->input('aboutustext');
            $data->contact = $request->input('contacttext');
            $data->references = $request->input('referencestext');

            if($request->file('icon')){
                $data->icon= $request->file('icon')->store('images');
            }
            $data->status = $request->input('status');

            $data->save();
            return redirect()->route('laravelAdmin.setting');
    }
}
