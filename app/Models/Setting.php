<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /**
     * Enable Soft Delete Security Measure
     *
     * @var boolean
     */
    protected $softDelete = true;

    /**
     * Define the table that Model it will use
     *
     * @var string
     */
    protected $table = "settings";

    /**
    * Stores the field that can be fulfill by user
    *
    * @var array
    */
    protected $fillable = [
        'site_name',
        'site_description',
        'seo_title',
        'seo_description',
        'seo_image',
        'google_analytics_id',
        'google_analytics_user_id',
        'maintance',
        'contact_email'
    ];

    /**
    * Stores the field that cant be fulfill by user
    *
    * @var array
    **/
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

     /**
      * Specifies the type of each field
      *
      * @var array
      */
    protected $casts = [
        'site_name' => 'string',
        'site_description' => 'title',
        'seo_title' => 'string',
        'seo_description' => 'string',
        'seo_image' => 'string',
        'google_analytics_id' => 'string',
        'google_analytics_user_id' => 'string',
        'maintance' => 'boolean',
        'contact_email' => 'string'
    ];
}
