<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = ['legend', 'description', 'url', 'statut'];
    use HasFactory;

    //$cat = App\Models\Chat::firstOrCreate(['legend'=>'Potit chat','description'=>'un chat','url'=>'https://cataas.com/cat','statut'=>'true'])
}
