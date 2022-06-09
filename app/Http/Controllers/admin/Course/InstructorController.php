<?php

namespace App\Http\Controllers\admin\Course;
use App\Http\Controllers\Controller;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Image;
class InstructorController extends Controller
{


    public function store(Request $request)
    {
        $valid=$request->validate([
            'instructor_name'=>'required',
            'position'=>'required',
            'photo'=>'required|mimes:jpeg,jpg,png|max:1000',
        ]);

        if($valid){

        $file = $request->file('photo');
        $path = $file->hashName('instractor-pic');
        $image = Image::make($file);
        $image->fit(250, 250, function ($constraint) {
            $constraint->aspectRatio();
        });
       Storage::put($path, (string) $image->encode());
            $ins =new Instructor();
            $ins->instructor_name=$request->instructor_name;
            $ins->position=$request->position;
            $ins->facebook=$request->facebook;
            $ins->twitter=$request->twitter;
            $ins->linkedin=$request->linkedin;
            $ins->photo=$path;
            $ins->author=Auth::id();
            $ins->course_id=$request->course;
            $ins->save();

            return response()->json(['success'=>'Instructor added Successfully']);

        }
        							
    }

    public function destroy($id)
    {
        
        $ins=Instructor::find($id);
        Storage::delete($ins->photo);
        $ins->delete();
        
    }

    public function edit($id)
    {
        $ins=Instructor::find($id);
        return response()->json($ins);
    }


    public function update(Request $request)
    {
        $valid=$request->validate([
            'instructor_name'=>'required',
            'position'=>'required',
        ]);

        if($valid){
            if($request->hasFile('photo')){

             $ins =Instructor::find($request->instructor);
             $file = $request->file('photo');
             $path = $file->hashName('instractor-pic');
             $image = Image::make($file);
             $image->fit(160, 160, function ($constraint) {
                 $constraint->aspectRatio();
             });
            Storage::put($path, (string) $image->encode());

            Storage::delete($ins->photo);
             $ins->instructor_name=$request->instructor_name;
             $ins->position=$request->position;
             $ins->facebook=$request->facebook;
             $ins->twitter=$request->twitter;
             $ins->linkedin=$request->linkedin;
             $ins->photo=$path;
             $ins->save();
            return response()->json(['success'=>'Instructor updated Successfully']);

            }else{
                $ins =Instructor::find($request->instructor);
                $ins->instructor_name=$request->instructor_name;
                $ins->position=$request->position;
                $ins->facebook=$request->facebook;
                $ins->twitter=$request->twitter;
                $ins->linkedin=$request->linkedin;
                $ins->save();
            return response()->json(['success'=>'Instructor updated Successfully']);
            }
        }
    }
}
