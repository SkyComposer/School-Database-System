<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\News;

// use DB;

class NewsController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        // $getallnews = News::orderBy('created_at','desc')->get();
        $getallnews = News::orderBy('created_at','desc')->paginate(5);
        //return News::all();
        // return News::where('title','youngdumbbroke')->get();
        // return DB::select('SELECT * FROM table');
        return view('news.index')->with('allnews', $getallnews);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
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
            'title' => 'required',
            'author' => 'required',
            'content' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        if ($request->hasFile('cover_image')) {
            $image = $request->file('cover_image');
            $FilenametoStore = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/news');
            $image->move($destinationPath, $FilenametoStore);
            // return back()->with('success','Image Upload successfully');
        } else {
            $FilenametoStore = "noimage.jpg";

        }
            //Handle File Uploading Here 
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




            //Create the News
            $news = new News;
            $news->title = $request->input('title');
            $news->author = $request->input('author');
            $news->content = $request->input('content');
            $news->published_at = $request->input('published_at');
            $news->user_id = auth()->user()->id;
            $news->cover_image = $FilenametoStore;
            $news->save();

            return redirect('/news')->with('success', 'Post Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $viewnews = News::find($id);
        return view('news.show')->with('shownews',$viewnews);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editnews = News::find($id);

        // check for correct user 

        if(auth()->user()->id !== $editnews->user_id){
            return redirect('/news')->with('error', 'Unauthorized Page');    
        }
        return view('news.edits')->with('editnews', $editnews);
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
        // $update = News::where('id', $id)->update([
        //     'title' -> $request->input('title'),
        //     'author' -> $request->input('author'),
        //     'content' -> $request->input('content')
        // ]);
        // if($update){
        //     return redirect()->route('news.show')->with('success');
        // }
        // //rediect 
        // return back()->withInput();
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'content' => 'required',
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
        }
            //Create the News
            $news = News::find($id);
            $news->title = $request->input('title');
            $news->author = $request->input('author');
            $news->content = $request->input('content');
            $news->published_at = $request->input('published_at');
            if($request->hasFile('cover_image')){
                $news->cover_image = $FilenametoStore;
            }
            $news->save();

            return redirect('/news')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delnews = News::find($id);
        
        if(auth()->user()->id !== $delnews->user_id){
            return redirect('/news')->with('error', 'Unauthorized Page');    
        }
        if($delnews->cover_image != 'noimage.jpg'){
            //Delete Image
            Storage::delete('public/cover_images/'.$delnews->cover_image);
        }
        $delnews->delete();
        return redirect('/news')->with('success', 'Post Removed');
    }
}
