<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskModel;
use Illuminate\Foundation\Http\FormRequest\CreateTask as CreateTaskRequest;
use Illuminate\Foundation\Http\FormRequest\UpdateTask as UpdateTaskRequest;

class TaskController extends Controller
{
    //handle get request
    function index(Request $request):JsonResponse{
        try{
            $tasks = Task::orderBy('created_at', 'desc')->get();
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
    public function create(CreateTaskRequest $request):JsonResponse{
        try {
            $task = Task::create($validatedData);
            return response()->json([
                'success' => true,
                'data' => $task,
                'message' => 'Task created successfully.',
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to create the task. Please try again.',
            ], 500);
        }

    }

    public function update(UpdateTaskRequest $request, int $id): JsonResponse{
        try{
        $validatedData = $request->validate();
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
    public function delete(UpdateTaskRequest $request, int $id): JsonResponse{
        try{
            $task = TaskModel::findOrFail($id);
            $validatedData = $request->validate();
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
