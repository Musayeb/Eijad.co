<?php

namespace App\Http\Controllers\entrepreneur;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Course;
use App\Models\Entreprenuer;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    // public function index()
    // {
    //     //  return view('entrepreneur.home');
    // }
    public function avetar_change(Request $request){
        $folderPath="public";
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $file = uniqid() . '.png';

        $path=Storage::disk('avatar')->put($file,$image_base64); 

        echo json_encode(["image uploaded successfully."]);

    } 


    public function purchase_history()
    {

        $check=Checkout::where('user_id',Auth::id())->orderBy('created_at','DESC')->get();
        return view('user.purchase_history',compact('check'));
    }


    public function accountsettings()
    {
          $ent=Entreprenuer::where('user_id',Auth::id())->get();
            $ent=$ent[0];
            return view('user.dashboard',compact('ent'));
    }



   
}
