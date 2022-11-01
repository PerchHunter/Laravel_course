<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddNews extends Controller
{
    public static function index() {
        return view('admin.news.add');
    }
}
