<?php

namespace Sakila\Http\Controllers;

use Illuminate\Http\Request;

use Sakila\Http\Requests;

class FrontController extends Controller
{
    public function home()
    {
        $actors = \Sakila\Actor::first();
        return $actors->films;
    }
}
