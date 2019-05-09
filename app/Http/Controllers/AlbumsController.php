<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Album;

class AlbumsController extends Controller
{
    public function index(){
        $albums = Album::with('Photos')->get();
        return view('albums.index')->with('albums', $albums);
    }
    public function create(){
        return view('albums.create');
    }
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'cover_image' => 'image|max:1999 '
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
    $path = $request->file('cover_image')->storeAs('public/album_images', $FilenametoStore); 
    // goes to storage/app/public write php artisan storage:link cause by default it is not accesible
    
} else {
    $FilenametoStore = "noimage.jpg";
}

$albums = new Album;
$albums->name = $request->input('name');
$albums->description = $request->input('description');
$albums->cover_image = $FilenametoStore;
$albums->save();
return redirect('/albums')->with('success', 'Album Created');
    }
    public function show($id){
        $album = Album::with('Photos')->find($id);
        return view('albums.show')->with('album',$album);
    }
}
