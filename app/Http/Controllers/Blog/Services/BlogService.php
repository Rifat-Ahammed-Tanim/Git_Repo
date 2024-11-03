<?php

namespace App\Http\Controllers\Blog\Services;

use App\Models\Blog;

class BlogService // class
{
    protected $model;

    public function __construct( Blog $model )
    {
        $this->model = $model;
    }

    public function getAllBlogs()
    {
        return $this->model
            ->orderBy('created_at', 'desc')
            ->paginate(15);
    }

    public function getBlogDetails( $blogId )
    {
        return $this->model->findOrFail($blogId);
    }

    public function postBlog( array $data )
    {
        return $this->model->create($data);
    }

    public function updateBlog( $blogId, $data )
    {
        $blog = $this->model->findOrFail($blogId);

        return $blog->update($data);
    }

    public function deleteBlog( $blogId )
    {
        $blog = $this->model->findOrFail($blogId);
        return $blog->delete();
    }
}
