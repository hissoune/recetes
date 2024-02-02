<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recets extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'description',
        'image',
        'categories_id',
        'user_id',
    ];
    public function category()
    {
        return $this->belongsTo(Categories::class, 'categories_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
