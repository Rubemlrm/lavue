<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logger extends Model
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
    protected $table = "logs";

    /**
    * Stores the field that can be fulfill by user
    *
    * @var array
    */
    protected $fillable = [
        'user_id',
        'level',
        'controller',
        'action',
        'description'
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
        'user_id' => 'integer',
        'level' => 'string',
        'controller' => 'string',
        'action' => 'string',
        'description' => 'string'
    ];
}
