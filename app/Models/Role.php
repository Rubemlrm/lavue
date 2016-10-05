<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
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
    protected $table = "roles";

    /**
    * Stores the field that can be fulfill by user
    *
    * @var array
    */
    protected $fillable = ['name', 'slug'];

    /**
    * Stores the field that cant be fulfill by user
    *
    * @var array
    **/
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

     /**
      * Specifies the type of each field
      *
      * @var array
      */
    protected $casts = [
        'name' => 'string',
        'slug' => 'string',
    ];

    /**
     * RELATIONS
     */

    /**
     * define relation of role to users
     *
     * @return Eloquent object
     */
    public function user()
    {
        return $this->hasMany(\App\Models\User::class);
    }
}
