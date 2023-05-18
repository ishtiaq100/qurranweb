<?php

namespace App\Http\Controllers\Admin;

use App\Models\Culrm;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CurculmController extends Controller
{
    //

    public function index(){
        $currculum =  Culrm::all();
        return view('admin.currculumlisting',compact('currculum'));
    }
    public function create(){
        $course = Course::where('course_status',1)->get();
        return view('admin.addcurculm',compact('course'));
    }

    public function save(Request $request){
        $validate = Validator::make($request->all(),
        ['course_id'=>'required',
        'lesson_heading'=>'required',
        'lesson_duration'=>'required',
        'lesson_descp'=>'required',

        ]

        );

        if($validate->fails()){

            return redirect()->back()->with('messages','Insert the Requried fields');
        }else{
            $culrm = new   Culrm();
            $culrm->course_id = $request->course_id;
            $culrm->lesson_heading = $request->lesson_heading;
            $culrm->lesson_duration = $request->lesson_duration;
            $culrm->lesson_descp = $request->lesson_descp;

        $response = $culrm->save();
        if($response==true){
            return redirect()->back()->with('messages','Record Inserted Successfully');

        }else{
            return redirect()->back()->with('messages','Record not Inserted');

        }

    }
}

public function edit($id){
    $culrm = Culrm::find($id);
    $course = Course::where('course_status',1)->get();
    return view('admin.editcurculm',compact('culrm','course'));
}

public function update(Request $request){
    $validate = Validator::make($request->all(),
    ['course_id'=>'required',
    'lesson_heading'=>'required',
    'lesson_duration'=>'required',
    'lesson_descp'=>'required',

    ]

    );

    if($validate->fails()){

        return redirect()->back()->with('messages','Insert the Requried fields');
    }else{
        $culrm = Culrm::find($request->id);
        $culrm->course_id = $request->course_id;
        $culrm->lesson_heading = $request->lesson_heading;
        $culrm->lesson_duration = $request->lesson_duration;
        $culrm->lesson_descp = $request->lesson_descp;

    $response = $culrm->update();
    if($response==true){
        return redirect()->back()->with('messages','Record Updated Successfully');

    }else{
        return redirect()->back()->with('messages','Record not Update');

    }

}



}

public function delete($id){
    $culrm = Culrm::find($id);
    
    $culrm->delete();
    return redirect()->back()->with('messages','Record Deleted');


}

}
