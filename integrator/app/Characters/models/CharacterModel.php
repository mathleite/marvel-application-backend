<?php


namespace App\Characters\models;


use Illuminate\Database\Eloquent\Model;

class CharacterModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'characters';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable
        = [
            'name',
            'image_src',
            'user_name',
        ];
}
