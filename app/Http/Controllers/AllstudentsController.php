<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Allstudents;
use DB;
use File;

class AllstudentsController extends Controller
{


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
        $allstudents = Allstudents::all();
        $counter = $allstudents->count();
        $nursery = Allstudents::where('class', 'Nursery')->get()->count();
        $LKG = Allstudents::where('class', 'LKG')->get()->count();
        $UKG = Allstudents::where('class', 'UKG')->get()->count();
        $classI = Allstudents::where('class', 'I')->get()->count();
        $classII = Allstudents::where('class', 'II')->get()->count();
        $classIII = Allstudents::where('class', 'III')->get()->count();
        $classIV = Allstudents::where('class', 'IV')->get()->count();
        $classV = Allstudents::where('class', 'V')->get()->count();
        $classVI = Allstudents::where('class', 'VI')->get()->count();
        $classVII = Allstudents::where('class', 'VII')->get()->count();
        $classVIII = Allstudents::where('class', 'VIII')->get()->count();
        $classIX = Allstudents::where('class', 'IX')->get()->count();
        $classX = Allstudents::where('class', 'X')->get()->count();
        return view('allstudents.index')
        ->with('allstudents', $allstudents)
        ->with('counter', $counter)
        ->with('nursery', $nursery)
        ->with('LKG', $LKG)
        ->with('UKG', $UKG)
        ->with('classI', $classI)
        ->with('classII', $classII)
        ->with('classIII', $classIII)
        ->with('classIV', $classIV)
        ->with('classV', $classV)
        ->with('classVI', $classVI)
        ->with('classVII', $classVII)
        ->with('classVIII', $classVIII)
        ->with('classIX', $classIX)
        ->with('classX', $classX);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('allstudents.create');
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
        ]);
        
        if ($request->hasFile('cover_image')) {
            $image = $request->file('cover_image');
            $FilenametoStore = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $FilenametoStore);
            // return back()->with('success','Image Upload successfully');
        }else {
            $FilenametoStore = "noimage.jpg";
        }
         //Create the News
         $students = new Allstudents;
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
        //  return redirect('/singleclass/{{$students->id}}')->with('success', 'Post Created');

//might be a problem
         return redirect()->action(
            'AllstudentsController@singleclass', ['id' => $students->class]
        );
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $edit = Allstudents::where('class', 'X')->first();
         $editstudent = Allstudents::find($id);
         return view('allstudents.show')->with('editstudent', $editstudent);   
        // return view('allstudents.show')->with('edit', $edit);   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editstudent = Allstudents::find($id);
        if(auth()->user()->id !== $editstudent->user_id){
            return redirect('/dashboard')->with('error', 'Unauthorized Page');    
        }
        return view('allstudents.edit')->with('editstudent', $editstudent);
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
        ]);
        

        // //Handle File Uploading Here 
        // if($request->hasFile('cover_image')){
        //     //Get Filename with Extension ... gets the image exactly with the extension
        //     $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
        //     //Get Just Filename
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); //this is just php
        //     //Get Just the Extension 
        //     $extension = $request->file('cover_image')->getClientOriginalExtension();
        //     //filename to store
        //     $FilenametoStore = $filename.'_'.time().'.'.$extension; // call the filname and timestamp
        //     //UPload Image
        //     $path = $request->file('cover_image')->storeAs('public/cover_images', $FilenametoStore); // goes to storage/app/public write php artisan storage:link cause by default it is not accesible
        // } else {
        //     $FilenametoStore = "noimage.jpg";
        // }

            // this is the method to just move in public folder. This can be accessed easily.
        if ($request->hasFile('cover_image')) {
            $image = $request->file('cover_image');
            $FilenametoStore = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $FilenametoStore);
            // return back()->with('success','Image Upload successfully');
        }
        




         //Create the News
         $students = Allstudents::find($id);
         $students->f_name = $request->input('f_name');
         $students->m_name = $request->input('m_name');
         $students->l_name = $request->input('l_name');
         $students->gender = $request->input('gender');
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
         if($request->hasFile('cover_image')){
            $students->cover_image = $FilenametoStore;
        }

            $students->user_id = auth()->user()->id;
            $students->save();
            return redirect('/allstudents')->with('success', 'Post Updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delstudent = Allstudents::find($id);
        //Verifying
        if(auth()->user()->id !== $delstudent->user_id){
            return redirect('/allstudents')->with('error', 'Unauthorized Page');    
        }
        if($delstudent->cover_image != 'noimage.jpg'){
            //Delete Image
            File::delete('images/'.$delstudent->cover_image);
        }
        $delstudent->delete();
        // return redirect('/allstudents')->with('success', 'Post Removed');
        return redirect('singleclass/'.$delstudent->class)->with('success', 'Post Deleted');
    }
    public function singleclass($id)
    {
        // $allstudents = Allstudents::all();
        // return $allstudents;
        // $edit = Allstudents::where('class', 'X')->first();
        // $editstudent = Allstudents::find($id);
        // return view('allstudents.show')->with('editstudent', $editstudent);   
        // return view('allstudents.show')->with('edit', $edit); 
        $allstudents = Allstudents::where('class', $id)->orderBy('roll_no', 'asc')->get();
        return view('allstudents.singleclass')->with('allstudents', $allstudents);   
    }
    public function search(Request $request){
        $searchData =  $request->searchData;
        //start of search query
        $data = DB::table('allstudents')
        ->where('f_name', 'like', '%'. $searchData . '%')
        ->orWhere('m_name', 'like', '%'. $searchData . '%')
        ->orWhere('l_name', 'like', '%'. $searchData . '%')
        ->orWhere('class', 'like', '%'. $searchData . '%')
        ->orWhere('gender', 'like', '%'. $searchData . '%')
        ->get();
        return view('allstudents.search', ['allstudents'=> $data, 'getByName'=>$searchData]);
    }
}
