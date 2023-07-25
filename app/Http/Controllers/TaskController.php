<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('tasks')->get();
        return view('tasks', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('task', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required',
            'user_id' => 'nullable|exists:users,id',
        ]);

        // Create a new task instance with the input data
        $task = new Task([
            'name' => $request->input('name'),
            'number' => $request->input('number'),
        ]);

        // If user_id is provided, assign the task to the user
        if ($request->has('user_id')) {
            $user = User::find($request->input('user_id'));
            if ($user) {
                $task->user_id = $user->id;
            }
        }

        // Save the task
        $task->save();

        return redirect()->route('tasks.create')->with('success', 'Task created and assigned successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
