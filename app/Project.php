<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //protected $table = 'my_table';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'url';
    }
}
