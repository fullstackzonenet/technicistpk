<?php

namespace Technicist\Portfolio\Models;

use Winter\Storm\Database\Model;

/**
 * Service Model
 */
class Service extends Model
{
    use \Winter\Storm\Database\Traits\Validation;

    public $table = 'technicist_portfolio_services';

    protected $guarded = [];

    protected $fillable = [
        'title', 'slug', 'description', 'content',
        'icon', 'badge', 'image', 'url_slug',
        'title_urdu', 'description_urdu',
        'features_json', 'featured', 'sort_order',
    ];

    public $rules = [
        'title' => 'required',
        'slug'  => 'required',
    ];

    protected $jsonable = ['features_json'];

    protected $casts = [
        'featured'   => 'boolean',
        'sort_order' => 'integer',
    ];

    protected $dates = ['created_at', 'updated_at'];

    public $hasOne = [];
    public $hasMany = [];
    public $hasOneThrough = [];
    public $hasManyThrough = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
