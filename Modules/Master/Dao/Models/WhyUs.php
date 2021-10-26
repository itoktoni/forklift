<?php

namespace Modules\Master\Dao\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class WhyUs extends Model
{
    protected $table = 'why_us';
    protected $primaryKey = 'why_us_id';

    protected $fillable = [
        'why_us_id',
        'why_us_name',
        'why_us_description',
    ];

    // public $with = ['module'];

    public $timestamps = false;
    public $incrementing = true;
    public $rules = [
        'why_us_name' => 'required|min:3',
    ];

    public $searching = 'why_us_name';
    public $datatable = [
        'why_us_id' => [false => 'Code', 'width' => 50],
        'why_us_name' => [true => 'Name'],
        'why_us_description' => [true => 'Description'],
    ];
}
