<?php

namespace App\Http\Controllers;

use App\Tools\Template;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request) {
        return view(Template::route() .'index');
    }
}
