<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'user_id', 'status'];

    public function user()
    {
        // To make a relationship between this Model (Project) and another one (User). 
        // We write this code when we need to make a 'one to many' relationship 
        // (this mean that the Project related to only one user)
        return $this->belongsTo(User::class);
    }
}
