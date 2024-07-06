<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Box;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        $content->body(view('admin.home'));

        return $content;
    }
}
