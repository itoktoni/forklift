<?php

namespace Modules\Master\Dao\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Article extends Model
{
    protected $table = 'article';
    protected $primaryKey = 'article_id';

    protected $fillable = [
        'article_id',
        'article_name',
        'article_description',
    ];

    // public $with = ['module'];

    public $timestamps = false;
    public $incrementing = true;
    public $rules = [
        'article_name' => 'required|min:3',
    ];

    public $searching = 'article_name';
    public $datatable = [
        'article_id' => [false => 'Code', 'width' => 50],
        'article_name' => [true => 'Name'],
        'article_description' => [true => 'Description'],
    ];
}
