<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserImage extends Model
{
    use HasFactory;

    protected $fillable = ['image','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function user_images(){
        return $this->hasMany(ImageSharing::class, 'image_id');
    }
}
