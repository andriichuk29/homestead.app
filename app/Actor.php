<?php

namespace Sakila;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public $timestamps = false;
    protected $table = 'actor';
    protected $primaryKey = 'actor_id';
    protected $fillable = ['first_name', 'last_name'];

    public function films()
    {
        return $this->belongsToMany(FilmActor::class);
    }
}
