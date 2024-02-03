<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parametres extends Model
{
    use HasFactory;
    protected $table='parametres';
    protected $fillable =['id','client','NB_decoupe','NB_rouleau','longueur_decoupe','date'];

}
