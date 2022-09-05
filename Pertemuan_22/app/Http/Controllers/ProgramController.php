<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function program($id)
    {
        return '<a href="https://www.educastudio.com/program/' . $id . '">
        https://www.educastudio.com/program/' . $id . '</a>';
    }
}
