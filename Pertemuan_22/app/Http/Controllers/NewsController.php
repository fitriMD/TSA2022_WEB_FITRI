<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($id = null)
    {
        if ($id == null) return '<a href="https://www.educastudio.com/news">
         https://www.educastudio.com/news</a>';
        return '<a href="https://www.educastudio.com/news/' . $id . '">
        https://www.educastudio.com/news/' . $id . '</a>';
    }
}
