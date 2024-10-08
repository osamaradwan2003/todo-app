<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskModel;
use App\Http\Requests\CreateTask as CreateTaskRequest;
use App\Http\Requests\UpdateTask as UpdateTaskRequest;

class TaskController extends Controller
{
    //handle get request
    function index(Request $request){
        try{
            $tasks = TaskModel::orderBy('created_at', 'desc')->get();
            return response()->json([
                "sucess" => true,
                "data" => $tasks,
                "message" => "success",
            ],200);
        }catch(\Exception $e){
            return response()->json([
                "sucess" => false,
                "data" => [],
                "message" => "Error while fetching tasks"
            ], 500);
        }
    }

    //handel post request
    public function create(CreateTaskRequest $request){
        try {
            $validatedData = $request->validated();
            $task = TaskModel::create($validatedData);
            return response()->json([
                'success' => true,
                'data' => $task,
                'message' => 'Task created successfully.',
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to create the task. Please try again.',
                'err' => $e,
            ], 500);
        }

    }

    public function update(UpdateTaskRequest $request, int $id){
        try{
        $validatedData = $request->validated();
        $task = TaskModel::findOrFail($id);
        $task->update($validatedData);
        return response()->json([
            "sucess" => true,
            "data" => $task,
            "message" => "Task \"$task->name\" updated successfully"
        ], 202);
        }catch(\Exception $e){
            return response()->json(['success' => false, 'message' => 'Task not found'], 404);
        }
    }
    public function delete(UpdateTaskRequest $request, int $id){
        try{
            $task = TaskModel::findOrFail($id);
            $validatedData = $request->validated();
            $task->delete();
            return response()->json([
                "sucess" => true,
                "data" => [],
                "message" => "Task \"$task->name\" deleted successfully"
            ], 200);
        }catch(\Exception  $e){
            return response()->json(['success' => false, 'message' => 'Task not found'], 404);
        }
    }


}
