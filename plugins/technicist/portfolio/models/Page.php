<?php

namespace Technicist\Portfolio\Models;

use Winter\Storm\Database\Model;

/**
 * Page Model
 */
class Page extends Model
{
    use \Winter\Storm\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'technicist_portfolio_pages';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'title', 'slug', 'content',
        // Hero
        'hero_badge', 'hero_badge_urdu',
        'hero_title', 'hero_title_urdu',
        'hero_subtitle', 'hero_subtitle_urdu',
        'hero_video',
        // Stats
        'stats_json',
        // Intro
        'intro_badge', 'intro_badge_urdu',
        'intro_title', 'intro_title_urdu',
        'intro_text', 'intro_text_urdu',
        // Contact
        'phone', 'whatsapp', 'email', 'address', 'address_urdu',
        // SEO
        'meta_title', 'meta_description',
        // Extra
        'sections_json',
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'title' => 'required',
        'slug'  => 'required',
    ];

    /**
     * @var array JSON-decoded attributes
     */
    protected $jsonable = ['stats_json', 'sections_json'];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

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
