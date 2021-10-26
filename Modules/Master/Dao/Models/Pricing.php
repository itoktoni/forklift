<?php

namespace Modules\Master\Dao\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Pricing extends Model
{
    protected $table = 'pricing';
    protected $primaryKey = 'pricing_id';

    protected $fillable = [
        'pricing_id',
        'pricing_name',
        'pricing_description',
    ];

    // public $with = ['module'];

    public $timestamps = false;
    public $incrementing = true;
    public $rules = [
        'pricing_name' => 'required|min:3',
    ];

    public $searching = 'pricing_name';
    public $datatable = [
        'pricing_id' => [false => 'Code', 'width' => 50],
        'pricing_name' => [true => 'Name'],
        'pricing_description' => [true => 'Description'],
    ];
}
