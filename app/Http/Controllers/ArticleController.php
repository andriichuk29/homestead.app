<?php

namespace Sakila\Http\Controllers;

use Illuminate\Http\Request;

use Sakila\Http\Requests;

class ArticleController extends Controller
{
    public function index()
    {
        var_dump(\URL::action('upload'));exit;
        return view('article.index');
    }

    public function show()
    {
        var_dump('ths');exit;
        return view('article.single');
    }
}
