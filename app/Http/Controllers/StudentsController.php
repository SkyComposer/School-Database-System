<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentsController extends Controller
{


// to throw out if people try to login unauthorized
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index')->with('students',$students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'f_name' => 'required',
            'm_name' => 'required',
            'l_name' => 'required',
            'gender' => 'required',
            'cover_image' => 'image|nullable|max:1999',
            'roll_no' => 'required',
            'dob' => 'required',
            'class' => 'required',
            'blood_group' => 'required',
            'birth_place' => 'required',
            'nationality' => 'required',
            'mother_tongue' => 'required',
            'permanent_address' => 'required',
            'permanent_city' => 'required',
            'permanent_state' => 'required',
            'permanent_zip' => 'required',
            'permanent_country' => 'required',
            'permanent_phone' => 'required',
            'present_address' => 'required',
            'present_city' => 'required',
            'present_state' => 'required',
            'present_zip' => 'required',
            'present_country' => 'required',
            'present_phone' => 'required',
            'father_name' => 'required',
            'father_profession' => 'required',
            'father_national_id_card_type' => 'required',
            'father_national_id_card_number' => 'required',
            'father_mobile_number' => 'required',
            'mother_name' => 'required',
            'mother_profession' => 'required',
            'mother_national_id_card_type' => 'required',
            'mother_national_id_card_number' => 'required',
            'mother_mobile_number' => 'required',
            'guardian_name' => 'required',
            'guardian_profession' => 'required',
            'guardian_national_id_card_type' => 'required',
            'guardian_national_id_card_number' => 'required',
            'guardian_mobile_number' => 'required'
            //38
        ]);

        //Handle File Uploading Here 
        if($request->hasFile('cover_image')){
            //Get Filename with Extension ... gets the image exactly with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get Just Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); //this is just php
            //Get Just the Extension 
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $FilenametoStore = $filename.'_'.time().'.'.$extension; // call the filname and timestamp
            //UPload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $FilenametoStore); // goes to storage/app/public write php artisan storage:link cause by default it is not accesible
        } else {
            $FilenametoStore = "noimage.jpg";
        }




         //Create the News
         $students = new Student;
         $students->f_name = $request->input('f_name');
         $students->m_name = $request->input('m_name');
         $students->l_name = $request->input('l_name');
         $students->gender = $request->input('gender');
         $students->cover_image = $FilenametoStore;
         $students->roll_no = $request->input('roll_no');
         $students->dob = $request->input('dob');
         $students->class = $request->input('class');
         $students->blood_group = $request->input('blood_group');
         $students->birth_place = $request->input('birth_place');
         $students->nationality = $request->input('nationality');
         $students->mother_tongue = $request->input('mother_tongue');
         $students->permanent_address = $request->input('permanent_address');
         $students->permanent_city = $request->input('permanent_city');
         $students->permanent_state = $request->input('permanent_state');
         $students->permanent_zip = $request->input('permanent_zip');
         $students->permanent_country = $request->input('permanent_country');
         $students->permanent_phone = $request->input('permanent_phone');
         $students->present_address = $request->input('present_address');
         $students->present_city = $request->input('present_city');
         $students->present_state = $request->input('present_state');
         $students->present_zip = $request->input('present_zip');
         $students->present_country = $request->input('present_country');
         $students->present_phone = $request->input('present_phone');
         $students->father_name = $request->input('father_name');
         $students->father_profession = $request->input('father_profession');
         $students->father_national_id_card_type = $request->input('father_national_id_card_type');
         $students->father_national_id_card_number = $request->input('father_national_id_card_number');
         $students->father_mobile_number = $request->input('father_mobile_number');
         $students->mother_name = $request->input('mother_name');
         $students->mother_profession = $request->input('mother_profession');
         $students->mother_national_id_card_type = $request->input('mother_national_id_card_type');
         $students->mother_national_id_card_number = $request->input('mother_national_id_card_number');
         $students->mother_mobile_number = $request->input('mother_mobile_number');
         $students->guardian_name = $request->input('guardian_name');
         $students->guardian_profession = $request->input('guardian_profession');
         $students->guardian_national_id_card_type = $request->input('guardian_national_id_card_type');
         $students->guardian_national_id_card_number = $request->input('guardian_national_id_card_number');
         $students->guardian_mobile_number = $request->input('guardian_mobile_number');

         $students->user_id = auth()->user()->id;
         
         $students->save();

         return redirect('/students')->with('success', 'Post Created');
    }

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
    public function destroy($id)
    {
        //
    }
}
