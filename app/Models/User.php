<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;


class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'location',
        'password',
        'profile_picture',
        'about'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function question(){
        return $this->hasMany(Question::class)->latest();
    }
    public function reponses(){
        return $this->hasMany(Reponse::class)->latest();
    }
    public function getImage(){
        if ($this->profile_picture ) {
            return url('storage/' . $this->profile_picture);
        }
        return "https://api.dicebear.com/6.x/fun-emoji/svg?seed={{$this->name}}";
    }

    public function following(){
        return $this->belongsToMany(User::class,'followers_user','follower_id','user_id');
    }
    public function followers(){
        return $this->belongsToMany(User::class,'followers_user','user_id','follower_id');
    }
}
