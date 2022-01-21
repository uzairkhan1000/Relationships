<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class TestController extends Controller
{
    public function index()
    {
        $data = Project::with('floors')->get();
        dd($data->toArray());
    }
}
