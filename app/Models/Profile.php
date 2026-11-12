<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Profile.php
class Profile extends Model
{
    protected $fillable = [
        'name',
        'headline',
        'bio',
        'email',
        'phone',
        'location',
        'photo',
        'cv_path'
    ];
}
