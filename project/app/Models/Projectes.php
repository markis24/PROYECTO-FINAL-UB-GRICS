<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projectes extends Model
{
    use HasFactory;
            protected $fillable = ['title_projecte', 'text_projecte','text_resultat'];

}
