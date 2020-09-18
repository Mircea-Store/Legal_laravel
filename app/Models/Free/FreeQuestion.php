<?php

namespace App\Models\Free;

use App\Models\BaseModel;

/**
 * Class FreeQuestion
 * package App.
 */
class FreeQuestion extends BaseModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'free_question';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['area', 'city', 'subject', 'question', 'name', 'email', 'number'];
}
