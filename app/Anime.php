<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    public $fillable = [
        'title',
        'licenced',
        'release_date',
        'end_date',
        'status',
        'summary',
        'pictures',
        'vod',
        'note',
        'season',
        'episode',
    ];

}
