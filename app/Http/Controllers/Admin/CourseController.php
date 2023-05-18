<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    //

    public function index(){
          $course = Course::all();
          return view('admin.courselist',compact('course'));
    }

    public function create(){
        return view('admin.addcourse');
    }

    public function edit($id){
        $course = Course::find($id);
        return view('admin.editcourse',compact('course'));
    }

    public function save(Request $request){
        $validate = Validator::make($request->all(),
        ['course_name'=>'required',
        'course_catg'=>'required',
        'course_summry'=>'required',
        'course_reqments'=>'required',
        'course_banner_1'=>'required|mimes:jpeg,jpg,png',
        'course_banner_2'=>'required|mimes:jpeg,jpg,png',
        'course_duration'=>'required',
        'live_session_day'=>'required',
        'fee_days_2'=>'required',
        'fee_days_3'=>'required',
        'fee_days_4'=>'required',
        'fee_days_5'=>'required',
        'course_assgn_teacher'=>'required',
        'course_teacher_role'=>'required',
        'course_teacher_intro'=>'required',
        'course_teacher_img1'=>'required|mimes:jpeg,jpg,png',
        'course_teacher_img2'=>'required|mimes:jpeg,jpg,png',
        'course_status'=>'required'

        ]

        );

        if($validate->fails()){

            return redirect()->back()->with('messages','Insert the Requried fields');
        }else{
            $course = new   Course();
            $course->course_name = $request->course_name;
            $course->course_catg = $request->course_catg;
            $course->course_duration = $request->course_duration;
            $course->live_session_day = $request->live_session_day;
            $course->fee_days_2 = $request->fee_days_2;
            $course->fee_days_3 = $request->fee_days_3;
            $course->fee_days_4 = $request->fee_days_4;
            $course->fee_days_5 = $request->fee_days_5;
            //$course->course_banner_1 = $request->course_banner_1;
            //$course->course_banner_2 = $request->course_banner_2;
            $course->course_summry = $request->course_summry;
            $course->course_reqments = $request->course_reqments;
            $course->course_assgn_teacher = $request->course_assgn_teacher;
            $course->course_teacher_role = $request->course_teacher_role;
            $course->course_teacher_intro = $request->course_teacher_intro;
            //$course->course_teacher_img1 = $request->course_teacher_img1;
            //$course->course_teacher_img2 = $request->course_teacher_img2;
            $course->course_status = $request->course_status;

            if($request->hasfile('course_banner_1')){
            $file = $request->file('course_banner_1');
            $filename = time().'_1.'.$file->getClientOriginalExtension();
            $file->move('uploads/course_banner',$filename);
            $course->course_banner_1 = $filename;

        }
        if($request->hasfile('course_banner_2')){
            $file2 = $request->file('course_banner_2');
            $filename2 = time().'_2.'.$file2->getClientOriginalExtension();
            $file2->move('uploads/course_banner',$filename2);
            $course->course_banner_2 = $filename2;
        }
        if($request->hasfile('course_teacher_img1')){
            $file3 = $request->file('course_teacher_img1');
            $filename3 = time().'_3.'.$file3->getClientOriginalExtension();
            $file3->move('uploads/course_teacher',$filename3);
            $course->course_teacher_img1 = $filename3;
        }
        if($request->hasfile('course_teacher_img2')){
            $file4 = $request->file('course_teacher_img2');
            $filename4 = time().'_4.'.$file4->getClientOriginalExtension();
            $file4->move('uploads/course_teacher',$filename4);
            $course->course_teacher_img2 = $filename4;
        }

        $response = $course->save();
        if($response==true){
            return redirect()->back()->with('messages','Record Inserted Successfully');

        }else{
            return redirect()->back()->with('messages','Record not Inserted');

        }

    }
}

public function update(Request $request){
    $validate = Validator::make($request->all(),
    ['course_name'=>'required',
    'course_catg'=>'required',
    'course_summry'=>'required',
    'course_reqments'=>'required',
    'course_banner_1'=>'mimes:jpeg,jpg,png',
    'course_banner_2'=>'mimes:jpeg,jpg,png',
    'course_duration'=>'required',
    'live_session_day'=>'required',
    'fee_days_2'=>'required',
    'fee_days_3'=>'required',
    'fee_days_4'=>'required',
    'fee_days_5'=>'required',
    'course_assgn_teacher'=>'required',
    'course_teacher_role'=>'required',
    'course_teacher_intro'=>'required',
    'course_teacher_img1'=>'mimes:jpeg,jpg,png',
    'course_teacher_img2'=>'mimes:jpeg,jpg,png',
    'course_status'=>'required'

    ]

    );

    if($validate->fails()){

        return redirect()->back()->with('messages','Insert the Requried fields');
    }else{
        $course = Course::find($request->id);
        $course->course_name = $request->course_name;
        $course->course_catg = $request->course_catg;
        $course->course_duration = $request->course_duration;
        $course->live_session_day = $request->live_session_day;
        $course->fee_days_2 = $request->fee_days_2;
        $course->fee_days_3 = $request->fee_days_3;
        $course->fee_days_4 = $request->fee_days_4;
        $course->fee_days_5 = $request->fee_days_5;
        //$course->course_banner_1 = $request->course_banner_1;
        //$course->course_banner_2 = $request->course_banner_2;
        $course->course_summry = $request->course_summry;
        $course->course_reqments = $request->course_reqments;
        $course->course_assgn_teacher = $request->course_assgn_teacher;
        $course->course_teacher_role = $request->course_teacher_role;
        $course->course_teacher_intro = $request->course_teacher_intro;
        //$course->course_teacher_img1 = $request->course_teacher_img1;
        //$course->course_teacher_img2 = $request->course_teacher_img2;
        $course->course_status = $request->course_status;

        if($request->hasfile('course_banner_1')){
        $file = $request->file('course_banner_1');
        $filename = time().'_1.'.$file->getClientOriginalExtension();
        $file->move('uploads/course_banner',$filename);
        //delete the banner image
        $destination = 'uploads/course_banner/'.$course->course_banner_1;
        if(File::exists($destination)){
            File::delete($destination);
        }

        $course->course_banner_1 = $filename;



    }
    if($request->hasfile('course_banner_2')){
        $file2 = $request->file('course_banner_2');
        $filename2 = time().'_2.'.$file2->getClientOriginalExtension();
        $file2->move('uploads/course_banner',$filename2);
        //delete the banner image
        $destination = 'uploads/course_banner/'.$course->course_banner_2;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $course->course_banner_2 = $filename2;
    }
    if($request->hasfile('course_teacher_img1')){
        $file3 = $request->file('course_teacher_img1');
        $filename3 = time().'_3.'.$file3->getClientOriginalExtension();
        $file3->move('uploads/course_teacher',$filename3);
        //delete the banner image
        $destination = 'uploads/course_teacher/'.$course->course_teacher_img1;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $course->course_teacher_img1 = $filename3;
    }
    if($request->hasfile('course_teacher_img2')){
        $file4 = $request->file('course_teacher_img2');
        $filename4 = time().'_4.'.$file4->getClientOriginalExtension();
        $file4->move('uploads/course_teacher',$filename4);

        //delete the banner image
        $destination = 'uploads/course_teacher/'.$course->course_teacher_img2;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $course->course_teacher_img2 = $filename4;
    }

    $response = $course->update();
    if($response==true){
        return redirect()->back()->with('messages','Record Updated Successfully');

    }else{
        return redirect()->back()->with('messages','Record not Updated');

    }

}
}

}
