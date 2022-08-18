<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use HasFactory;

    protected $table='users';
    protected $primaryKey='id';
    protected $fillable=['username','email','password'];

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

}
