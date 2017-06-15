<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table ='Unit';
    protected $primaryKey = 'unit_id';
    public $timestamp = false;
    public $incrementing = false;
}
