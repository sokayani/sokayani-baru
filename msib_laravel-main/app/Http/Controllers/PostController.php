<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
Use App\Models\Product;

class PostController extends Controller
{
    // crud
    // create
    // read (done)
    // update
    // delete
    // filter
    // search


    public function index() {
        // $posts = Post::paginate();
        // $posts = Post::all();
        // $posts = Post::get();
        $posts = Post::latest()->paginate(10);

        return view('posts.index', compact('posts'));
    }
    public function profiles() {
        return view('profiles.index');
    }

    public function create() {
        return view('posts.create');
    }
    public function Product() {
        $Product = Products::all();
        return view('posts.product');
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required',
            'stock' => 'required',
            'berat' => 'required',
            'harga' => 'required',
            'kondisi' => 'required',
        ]);

        // Post::create([
        //     'nama' => $request->nama,
        //     'stock' => $request->stock,
        //     'berat' => $request->berat,
        //     'harga' => $request->harga,
        //     'kondisi' => $request->kondisi,
        // ]);

        $post = new Post();
        $post->nama = $request->nama;
        $post->stock = $request->stock;
        $post->berat = $request->berat;
        $post->harga = $request->harga;
        $post->kondisi = $request->kondisi;
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post created successfully');

    }

    public function edit($id) {
        $post = Post::find($id);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama' => 'required',
            'stock' => 'required',
            'berat' => 'required',
            'harga' => 'required',
            'kondisi' => 'required',
        ]);

        // $post = Post::find($id);
        // $post = Post::where('id', $id)->first();
        // $post->nama = $request->nama;
        // $post->stock = $request->stock;
        // $post->berat = $request->berat;
        // $post->harga = $request->harga;
        // $post->kondisi = $request->kondisi;
        // $post->save();

        Post::where('id', $id)->update([
            'nama' => $request->nama,
            'stock' => $request->stock,
            'berat' => $request->berat,
            'harga' => $request->harga,
            'kondisi' => $request->kondisi,
        ]);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }

    public function delete(Request $request, $id) {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }
}