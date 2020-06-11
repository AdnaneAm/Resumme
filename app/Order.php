<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['status'];
    // Attached resumes
    public function resumes(){
        return $this->belongsToMany(Resume::class);
    }
    

    // Owner user
    public function user(){
        return $this->belongsTo(User::class);
    }
}