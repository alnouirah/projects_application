<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table = 'projects';

    protected $fillable = ['title','description'];

    public function tasks(){

        return $this->hasMany(Tasks::class);
        
    }

    // protected $fillable = ['title','description'];
}

