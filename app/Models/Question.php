<?php

namespace App\Models;
use App\Models\Reponse;
use Dom\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'user_id',
        'like',
        'location',
    ];
    public function responses(){
        return $this-> hasMany(Reponse::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}

