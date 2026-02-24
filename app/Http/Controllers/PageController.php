<?php

//gabungan HomeController, AboutController, ArticleController

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return "Welcome";
    } 

    public function about() {
        return "Brian Serafino Donovan - 244107020035";
    }

    public function articles($id) {
        return "Article Page with ID {$id} ";
    }
}
