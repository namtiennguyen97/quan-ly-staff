<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index(){
        $group = Group::all();
        return view('groups.list', compact('group'));
    }

}
