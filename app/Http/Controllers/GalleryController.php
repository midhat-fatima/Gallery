<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Category;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('gallery/gallery', ['categories' => $categories]);
    }

    public function show($id)
    {
        $categories = Category::all();
        $photoget = Photo::where('category_id', $id)->get();
        return view('gallery/gallery' , ['photoget' => $photoget, 'categories' =>$categories]);
    }
}
