<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // Получить все задачи
    public function index()
    {
        return Todo::all();
    }

    // Создать новую задачу
    public function store(Request $request)
    {
        $todo = Todo::create($request->validate([
            'title' => 'required|string',
            'completed' => 'boolean',
        ]));

        return response()->json($todo, 201);
    }

    // Получить задачу по ID
    public function show(Todo $todo)
    {
        return $todo;
    }

    // Обновить задачу по ID
    public function update(Request $request, Todo $todo)
    {
        $todo->update($request->validate([
            'title' => 'sometimes|required|string',
            'completed' => 'sometimes|boolean',
        ]));

        return $todo;
    }

    // Удалить задачу по ID
    public function destroy(Todo $todo)
    {
        $todo->delete();

        return response()->noContent();
    }
}
