<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // जिन फ़ील्ड्स को डेटाबेस में सेव करना है उन्हेंfillable में डालें।
    protected $fillable = ['name', 'description', 'price'];
}
