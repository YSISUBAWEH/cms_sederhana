<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(){
        $content =Postingan::latest()->paginate(6);
        return view ('postingan.index',compact('content'));
    }
    public function create()
    {
        return view('postingan/buat');
    }
    public function store(Request $buat)
    {
        //validate form
        $this->validate($buat, [
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        //upload image
        $image = $buat->file('image');
        $image->storeAs('public/post', $image->hashName());

       Postingan::create([
            'image'     => $image->hashName(),
            'title'     => $buat->title,
            'content'   => $buat->content
        ]);
        echo $buat->id_post;
//a
        return redirect('/postingan')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function edit($id)
    {
        $post = Postingan::find($id);
        return view('postingan.edit',compact(['post']));
    }
    public function update($id,Request $edit)
    {
        $post = Postingan::find($id);
        $this->validate($edit, [
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        if ($edit->hasFile('image'))
        {
            $image=$edit->file('image');
            $image->storeAs('public/post',$image->hashName());
            Storage::delete('public/post/'.$post->image);

            $post->update([
                'image'     => $image->hashName(),
                'title'     => $edit->title,
                'content'   => $edit->content
            ]);
        }else{
            $post->update([
                'title'     => $edit->title,
                'content'   => $edit->content
            ]);
        }
        return redirect('/postingan')->with(['success' => 'Data Berhasil Diganti!']);
    }
    public function delete($id)
    {
        $post = Postingan::find($id);
        Storage::delete('public/post/'.$post->image);
        $post->delete();
        return redirect('/postingan')->with(['success' => 'Data Berhasil Diganti!']);
    }
    public function show(){
        $artikel =Postingan::latest()->paginate(6);
        return view ('postingan.show',compact('artikel'));
    }
}
