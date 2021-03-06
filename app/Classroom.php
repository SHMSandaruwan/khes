<?php

namespace KindHubElementrySchool;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'classrooms';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    
}
