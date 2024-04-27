<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tast extends Model
{
    use HasFactory;
    protected $fillable = [
        'S/N',
        'SEX',
        'NAME',
        'email',
        'ENGSCORE',
        'ENGGRD',
        'ENGPOS',
        'ENGRE',
        'KISWSCORE',
        'KISWGRD',
        'KISWPOS',
        'KISWRE',
        'CMSCORE',
        'CMGRD',
        'CMPOS',
        'CMRE',
        'SSTSCORE',
        'SSTGRD',
        'SSTPOS',
        'SSTRE',
        'SCIESCORE',
        'SCIEGRD',
        'SCIEPOS',
        'SCIERE',
        'MATHSCORE',
        'MATHGRD',
        'MATHPOS',
        'MATHRE',
        'TOTAL',
        'AVERAGE',
        'POSITION',
        'GRADE',
        'STREAM', 
        'sports',
        'Cooperation',
        'Discipline',
        'Cleanliness',
        'Hardworking',
        'REMARKS',    
        'dop',
        'clasteachcoment',
        'clasteachname',
        'clasteachphone',
        'principalcoment',
        'principalname',
        'principalphone',
        'CLASS',
        'ENGTE',
        'KISWTE',
        'CMETE',
        'SSTTE',
        'SCIETE',
        'MATHTE',
      


    ];
}



