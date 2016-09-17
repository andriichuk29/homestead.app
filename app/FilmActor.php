<?php

namespace Sakila;

use Illuminate\Database\Eloquent\Model;

class FilmActor extends Model
{
    public $timestamps = false;
    public $table = 'film_actor';
}
