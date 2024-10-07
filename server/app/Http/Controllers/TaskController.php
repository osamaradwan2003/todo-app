<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskModel;

class TaskController extends Controller
{

    function index(Request $request){
        try{
            return response()->json([
                "sucess" => true,
                "data" => TaskModel::select()->orderByDesc('created_at'),
                "message" => "FetchSuccess"
            ]);
        }catch(\Exception $e){
            return response()->json([
                "sucess" => false,
                "data" => [],
                "message" => "Error while fetching tasks"
            ]);
        }
    }

    //handel post request
    public function create(Request $request){

    }
}
