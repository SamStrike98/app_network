<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $fillable = ['name', 'rating', 'description', 'collection_id'];
    /** @use HasFactory<\Database\Factories\AppFactory> */
    use HasFactory;

    public function collection() {
        return $this->belongsTo(Collection::class);
    }
}
