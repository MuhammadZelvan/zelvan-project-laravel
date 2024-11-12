<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $primaryKey = 'gallery_id';

    protected $fillable = [
        'gallery_img'
    ];
}
