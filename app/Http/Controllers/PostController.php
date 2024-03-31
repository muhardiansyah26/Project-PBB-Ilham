<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\View\View;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): View
    {
        //get posts
        $posts = Post::paginate(100);

        //render view with posts
        return view('information', compact('posts'));
    }

    public function create(): View
    {
        return view('create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'NOP_SPPT'     => 'required',
            'NM_WP_SPPT'     => 'required',
            'NILAI_SPPT'   => 'required',
            'JALAN_OP' =>'required',
            'JLN_WP_SPPT'   => 'required',
            'NM_WP_SPPT'   => 'required',
            'NM_KELURAHAN'   => 'required',
            'NM_KECAMATAN'   => 'required',
            'THN_PAJAK_SPPT'   => 'required',
        ]);

        // //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/posts', $image->hashName());

        //create post
        Post::create([
            'NOP_SPPT'     => $request->NOP_SPPT,
            'NM_WP_SPPT'     => $request->NM_WP_SPPT,
            'JALAN_OP' => $request->JALAN_OP,
            'JLN_WP_SPPT' =>$request->JLN_WP_SPPT,
            'NM_KELURAHAN' =>$request->NM_KELURAHAN,
            'NM_KECAMATAN' => $request->NM_KECAMATAN,
            'THN_PAJAK_SPPT' => $request->THN_PAJAK_SPPT,
            'NILAI_SPPT'   => $request->NILAI_SPPT
        ]); 
        return redirect()->route('information.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
