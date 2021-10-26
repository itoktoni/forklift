<?php

namespace Modules\Master\Dao\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class HowTo extends Model
{
    protected $table = 'how_to';
    protected $primaryKey = 'how_to_id';

    protected $fillable = [
        'how_to_id',
        'how_to_name',
        'how_to_description',
    ];

    // public $with = ['module'];

    public $timestamps = false;
    public $incrementing = true;
    public $rules = [
        'how_to_name' => 'required|min:3',
    ];

    public $searching = 'how_to_name';
    public $datatable = [
        'how_to_id' => [false => 'Code', 'width' => 50],
        'how_to_name' => [true => 'Name'],
        'how_to_description' => [true => 'Description'],
    ];
}
