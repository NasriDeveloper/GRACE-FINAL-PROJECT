<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasfi extends Model
{
    use HasFactory;

    protected $fillable = [
        'S/N',
        'NAME',
        'SEX',
        'ClASS',
        'STREAM',
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
        'V/SKILSCORE',
        'V/SKILGRD',
        'V/SKILPOS',
        'V/SKILRE',
        'TOTAL',
        'AVERAGE',
        'GRADE',
        'REMARK',
        'POSITION',
        'sports',
        'Cooperation',
        'Discipline',
        'Cleanliness',
        'Hardworking',
    ];
}
