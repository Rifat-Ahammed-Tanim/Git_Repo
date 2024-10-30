<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Blog\Requests\BlogRequest;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view();
    }

    public function show( string $id )
    {
        return view();
    }

    public function create(  )
    {

    }

    public function store( BlogRequest $request )
    {
        $data = $request->validated();

        $blog = Blog::create($data);

        return redirect()
            ->back()
            ->with('message', 'SAVE HOISE yeeee');
    }

    public function update( BlogRequest $request, $blogId )
    {
        $blog = Blog::findOrFail($blogId);

        $data = $request->validated();

        $blog->update($data);

        return redirect()
            ->back()
            ->with('message', 'SAVE HOISE yeeee');
    }
}
