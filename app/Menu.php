<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function parent()
    {
        return $this->belongsTo('App\Menu', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Menu', 'parent_id');
    }


    public function services()
    {
        return $this->hasMany('App\Service');
    }

    public function portfolios()
    {
        return $this->hasMany('App\Portfolio');
    }
}
