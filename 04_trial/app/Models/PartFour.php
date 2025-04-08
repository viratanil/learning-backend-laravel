<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartFour extends Model
{
    use HasFactory;

    // Specify the table name if it's different from Laravel's convention
    protected $table = 'part_four';

    // Define fillable fields for mass assignment
    protected $fillable = [
        'title',
        'content'
    ];
}
