<?php

namespace KindHubElementrySchool;

use Illuminate\Database\Eloquent\Model;

class AssignStudent extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'assign_students';

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
    protected $fillable = ['classroom', 'teachersname', 'studentfirstname', 'studentlastname', 'gender', 'joinedyear'];

    
}
