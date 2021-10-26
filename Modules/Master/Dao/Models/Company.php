<?php

namespace Modules\Master\Dao\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Company extends Model
{
    protected $table = 'company';
    protected $primaryKey = 'company_id';

    protected $fillable = [
        'company_id',
        'company_name',
        'company_description',
    ];

    // public $with = ['module'];

    public $timestamps = false;
    public $incrementing = true;
    public $rules = [
        'company_name' => 'required|min:3',
    ];

    public $searching = 'company_name';
    public $datatable = [
        'company_id' => [false => 'Code', 'width' => 50],
        'company_name' => [true => 'Name'],
        'company_description' => [true => 'Description'],
    ];
}
