<?php

namespace Modules\Master\Dao\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Slider extends Model
{
    protected $table = 'slider';
    protected $primaryKey = 'slider_id';

    protected $fillable = [
        'slider_id',
        'slider_name',
        'slider_description',
    ];

    // public $with = ['module'];

    public $timestamps = false;
    public $incrementing = true;
    public $rules = [
        'slider_name' => 'required|min:3',
    ];

    public $searching = 'slider_name';
    public $datatable = [
        'slider_id' => [false => 'Code', 'width' => 50],
        'slider_name' => [true => 'Name'],
        'slider_description' => [true => 'Description'],
    ];
}
