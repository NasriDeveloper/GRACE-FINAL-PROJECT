<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasto extends Model
{
    use HasFactory;
    protected $fillable = [
        'S/N',
        'NAME',
        'SEX',
        'ClASS',
        'STREAM',
        'READSCORE',
        'READGRD',
        'READPOS',
        'READRE',
        'WTRSCORE',
        'WTRGRD',
        'WTRPOS',
        'WTRRE',
        'KWSCORE',
        'KWGRD',
        'KWPOS',
        'KWRE',
        'HEALSCORE',
        'HEALGRD',
        'HEALPOS',
        'HEALRE',
        'NUMSCORE',
        'NUMGRD',
        'NUMPOS',
        'NUMRE',
        'ARTSCORE',
        'ARTGRD',
        'ARTPOS',
        'ARTRE',
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
