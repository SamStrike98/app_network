<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $fillable = ['name', 'description']; //fillable for mass assignment
    /** @use HasFactory<\Database\Factories\CollectionFactory> */
    use HasFactory;


    public function apps()
    {
        return $this->hasMany(App::class);
    }
}
