<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Override;

class Message extends Model
{
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'is_read',
    ];

    #[Override]
    protected function casts(): array
    {
        return [
            'is_read' => 'boolean'
        ];
    }
}
