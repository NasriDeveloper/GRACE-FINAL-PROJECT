<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tost extends Model
{
    use HasFactory;

    protected $fillable = [
        's/n',
        'sex',
        'name',
        'email',
        'readscore',
        'readgrd',
        'readpos',
        'readre',
        'writngscore',
        'writnggrd',
        'writngpos',
        'writngre',
        'artscore',
        'artgrd',
        'artpos',
        'artre',
        'kiswscore',
        'kiswgrd',
        'kiswpos',
        'kiswre',
        'healthscore',
        'healthgrd',
        'healthpos',
        'healthre',
        'numercyscore',
        'numercygrd',
        'numercypos',
        'numercyre',
        'total',
        'average',
        'position',
        'grade',
        'stream', 
        'remarks',    
        'class',
    ];
}


