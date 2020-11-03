<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class advisoridea extends Model
{
    protected $primaryKey = 'ideaID';
    protected $fillable = [
        'advisorID', 'IdeaName', 'IdeaPDF',
    ];
    public $timestamps = false;
}
 