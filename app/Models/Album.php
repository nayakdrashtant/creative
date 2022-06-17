<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $casts = [
        'featured' => 'boolean'
    ];

    protected $appends = [
        'date'
    ];

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

    public function getDateAttribute(){
        return $this->created_at->format('Y-m-d');
    }

    protected $hidden = [
        'user_id',
        'created_at',
        'updated_at'
    ];
}
