<?php

namespace Modules\Master\Dao\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Service extends Model
{
    protected $table = 'service';
    protected $primaryKey = 'service_id';

    protected $fillable = [
        'service_id',
        'service_name',
        'service_description',
    ];

    // public $with = ['module'];

    public $timestamps = false;
    public $incrementing = true;
    public $rules = [
        'service_name' => 'required|min:3',
    ];

    public $searching = 'service_name';
    public $datatable = [
        'service_id' => [false => 'Code', 'width' => 50],
        'service_name' => [true => 'Name'],
        'service_description' => [true => 'Description'],
    ];
}
