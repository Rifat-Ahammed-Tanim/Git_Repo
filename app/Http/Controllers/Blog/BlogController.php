<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Blog\Requests\BlogRequest;
use App\Http\Controllers\Blog\Services\BlogService;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    protected $blogService;


    public function __construct( BlogService $blogService )
    {
        $this->blogService = $blogService;
    }


    public function index()
    {
        $blogs = $this->blogService->getAllBlogs();
        return view('', [
            'blogs' => $blogs
        ]);
    }

    public function show( string $id )
    {
        $blog = $this->blogService->getBlogDetails($id);
        return view('', [
            'blog' => $blog
        ]);
    }

    public function create()
    {
        return view('');
    }


    public function store( BlogRequest $request )
    {
        $data = $request->validated();

        $blog = $this->blogService->postBlog($data);

        return redirect()
            ->back()
            ->with('message', 'SAVE HOISE yeeee');
    }


    public function update( BlogRequest $request, $blogId )
    {
        $data = $request->validated();

        $this->blogService->updateBlog($blogId, $data);

        return redirect()
            ->back()
            ->with('message', 'SAVE HOISE yeeee');
    }

    public function desctroy( $blogId )
    {
        $this->blogService->deleteBlog($blogId);

        return redirect()
            ->back()
            ->with('message', 'DELETED');
    }
}
