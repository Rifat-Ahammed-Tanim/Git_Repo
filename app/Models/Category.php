<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    // setting relation with Blog
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
