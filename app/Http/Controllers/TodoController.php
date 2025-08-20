<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        return Todo::all();
    }

    public function store(Request $request)
    {
        return Todo::create([
            'title' => $request->title,
        ]);
    }

    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        return response()->json(['message' => 'Deleted']);
    }

        public function update(Request $request, $id)
        {
            $todo = Todo::findOrFail($id);
            $todo->update($request->only(['title', 'completed']));
            return $todo;
        }
}

