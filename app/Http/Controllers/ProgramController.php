<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        return '<a href="https://www.educastudio.com/program/">https://www.educastudio.com/program</a>';
    }
    public function program($program)
    {
        return '<a href="https://www.educastudio.com/program/' . $program . '" target="_blank">https://www.educastudio.com/program/' . $program . '</a>';
    }
}
