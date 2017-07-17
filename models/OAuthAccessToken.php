<?php namespace Octobro\API\Models;

use Model;

/**
 * OAuthAccessToken Model
 */
class OAuthAccessToken extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'oauth_access_tokens';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}