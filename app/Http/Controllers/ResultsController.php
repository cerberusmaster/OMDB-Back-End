<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Results;

class ResultsController extends Controller
{
    public function add_score() {
        $result = new Results;
        $result->username = request()->get('username');
        $result->term = request()->get('terminator');
        $result->score = request()->get('score');
        return $result->save();
    }

    public function all_score() {
        $results = Results::all();
        return $results->toArray();
    }
    
    public function clear_all() {
        return Results::whereNotNull('id')->delete();
    }
}
