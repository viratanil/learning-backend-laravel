<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CornLearn extends Model
{
    use HasFactory;

    // Specify the table name if it's different from Laravel's convention
    protected $table = 'corn_learns';

    // Define fillable fields for mass assignment
    protected $fillable = [
        'name',
        'description'
    ];
}
