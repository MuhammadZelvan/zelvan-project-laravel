<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $primaryKey = 'contact_id';

    protected $fillable = [
        'contact_name',
        'contact_email',
        'contact_subject',
        'contact_message'
    ];
}
