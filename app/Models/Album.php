<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'img',
        'featured',
        'user_id'
    ];

    public function photographer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
