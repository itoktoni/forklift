<?php

namespace Modules\Master\Dao\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Faq extends Model
{
    protected $table = 'faq';
    protected $primaryKey = 'faq_id';

    protected $fillable = [
        'faq_id',
        'faq_name',
        'faq_description',
    ];

    // public $with = ['module'];

    public $timestamps = false;
    public $incrementing = true;
    public $rules = [
        'faq_name' => 'required|min:3',
    ];

    public $searching = 'faq_name';
    public $datatable = [
        'faq_id' => [false => 'Code', 'width' => 50],
        'faq_name' => [true => 'Name'],
        'faq_description' => [true => 'Description'],
    ];
}
