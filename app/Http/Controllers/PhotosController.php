<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use Illuminate\Support\Facades\Storage;

class PhotosController extends Controller
{
    public function create($album_id){
        return view('photos.create')->with('album_id', $album_id);
    }
    public function store(Request $request){
        
        $this->validate($request, [
            'photos' => 'required'
        ]);
 //Handle File Uploading Here 
 if($request->hasFile('photos')){
     foreach($request->photos as $file){
        $filenameWithExt = $file->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $filesize = $file->getClientSize();
        $FilenametoStore = $filename.'_'.time().'.'.$extension;
        $path = $file->storeAs('public/photos/'.$request->input('album_id'), $FilenametoStore);
        $photo = new Photo;
        $photo->album_id = $request->input('album_id');
        $photo->title = $request->input('title');
        $photo->description = $request->input('description');
        $photo->size = $file->getClientSize();
        $photo->photo = $FilenametoStore;
        $photo->save();
     }
      return redirect('/albums/'.$request->input('album_id'))->with('success', 'Photos Uploaded');
}
}

    public function destroy($id){
        $photo = Photo::find($id);
        if(Storage::delete('public/photos/'.$photo->album_id.'/'.$photo->photo)){
            $photo->delete();
            return redirect('albums/')->with('success', 'Photo Deleted');
        }


    }

    }
