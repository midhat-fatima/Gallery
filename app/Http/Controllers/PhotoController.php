<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Photo;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photo = Photo::all();
        return view('photo/photo', ['photo' => $photo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photo/add_photo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->photo);
        $photo = Photo::create([
            'photo' => $request->photo,
            'category_id' => $request->category_id,
        ]);
        
        return redirect(route('photo.index'))->with(['success' => 'photo is added!!!!']);
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
        $photo = Photo::where('id', $id)->first();
        $categories = Category::all();

        $categoriesData = array();
        foreach( $categories as $category )
        {            
            $temp = $category->category_name;
            $categoriesData[$category->id] = $temp; 
        }
        return view('photo/edit_photo', ['photo' => $photo, 'edit_photo' => $categoriesData]);
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

        // Photo::where('id', $id)->update([
            
        //     'photo' => $request->photo,
        //     'category_id' => $request->category_id,
        // ]);

        $rules = [
            'photo' => 'mimes:jpg,jpeg,png',
            'category_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        
        if($validator->fails())
        {
            $messages     = $validator->messages();
            return redirect()->back()->withInput()->withErrors($messages);
        }
    
            $photo = '';
    
            if($request->has('photo'))
            {
                $fileDirectory          = 'uploads';
    
                $path = 'public/'.$fileDirectory;
    
                File::isDirectory($path) or File::makeDirectory($path, 777, true, true);
    
                $photo = $request->photo->store($path);
            }
    
            $save_data          = new Content();

            $save_data->photo  = $photo;
    
            $save_data->save();

    
        return redirect(route('photo.index'))->with(['success' => 'photo is updated!!!!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
    
        Photo::where('id', $id)->delete();
        return redirect(route('photo.index'))->with(['success' => 'photo is Deleted!!!!']);
}
}
