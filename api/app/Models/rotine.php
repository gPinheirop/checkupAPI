<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rotine extends Model
{

    protected $fillable = [
        'API CLIENT',
        'SGBD',
        'ATS APP',
        'ONEDRIVE',
        'BKUP30m',
        'RIMP',
        'ENV EMAIL',
        'ENV NFE',
        'API SERVER',
        'OBS'
    ];

    protected $cast =[
        
    ];
    
    use HasFactory;
}
