<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'data' => 'required|array',
        ]);

        $data = [
            'data' => $request->input('data'),
        ];

        $post = Post::create($data);

        return response()->json(['message' => 'Data berhasil disimpan!'], 201);
    }
}