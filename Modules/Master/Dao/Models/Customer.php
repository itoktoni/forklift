<?php

namespace Modules\Master\Dao\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'customer_id';

    protected $fillable = [
        'customer_id',
        'customer_name',
        'customer_description',
    ];

    // public $with = ['module'];

    public $timestamps = false;
    public $incrementing = true;
    public $rules = [
        'customer_name' => 'required|min:3',
    ];

    public $searching = 'customer_name';
    public $datatable = [
        'customer_id' => [false => 'Code', 'width' => 50],
        'customer_name' => [true => 'Name'],
        'customer_description' => [true => 'Description'],
    ];
}
