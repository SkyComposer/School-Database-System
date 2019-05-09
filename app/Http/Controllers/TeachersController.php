<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Teacher;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::orderBy('created_at','desc')->get();
        return view('teachers.index')->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("teachers.create");
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
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'entry_date' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

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
                $path = $request->file('cover_image')->storeAs('public/teachers', $FilenametoStore); // goes to storage/app/public write php artisan storage:link cause by default it is not accesible
            } else {
                $FilenametoStore = "noimage.jpg";
            }
            //Create the News
            $teachers = new Teacher;
            $teachers->name = $request->input('name');
            $teachers->mobile = $request->input('mobile');
            $teachers->email = $request->input('email');
            $teachers->entry_date = $request->input('entry_date');
            $teachers->cover_image = $FilenametoStore;
            $teachers->save();
            return redirect('/teachers')->with('success', 'Teacher has been created');
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
        $teachers = Teacher::find($id);
        // check for correct user 
        return view('teachers.edit')->with('teachers', $teachers);   
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
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'entry_date' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

            if($request->hasFile('cover_image')){
                
                $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); //this is just php
                
                $extension = $request->file('cover_image')->getClientOriginalExtension();
                
                $FilenametoStore = $filename.'_'.time().'.'.$extension; // call the filname and timestamp
                
                $path = $request->file('cover_image')->storeAs('public/teachers', $FilenametoStore); // goes to storage/app/public write php artisan storage:link cause by default it is not accesible
            }
            //Create the News
            $teachers = Teacher::find($id);
            $teachers->name = $request->input('name');
            $teachers->mobile = $request->input('mobile');
            $teachers->email = $request->input('email');
            $teachers->entry_date = $request->input('entry_date');
            if($request->hasFile('cover_image')){
                $teachers->cover_image = $FilenametoStore;
            }
            $teachers->save();
            return redirect('/teachers')->with('success', 'Teacher has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teachers = Teacher::find($id);
        if($teachers->cover_image != 'noimage.jpg'){
            //Delete Image
            Storage::delete('public/teachers/'.$teachers->cover_image);
            $teachers->delete();
        }
        
        return redirect('/teachers')->with('success', 'Teacher Deleted');
    }
}
