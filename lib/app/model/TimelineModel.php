<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class TimelineModel extends Model
{
    protected $table = 'tb_timeline';
    protected $primaryKey = 'timeline_id';
    protected $guarded = [];
}
