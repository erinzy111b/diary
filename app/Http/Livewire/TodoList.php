<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TodoList extends Component
{
    // public function render()
    // {
    //     return view('livewire.todo-list');
    // }
    public $tasks = [];
    public $newTask;

    public function getTasksProperty()
    {
        return $this->tasks;
    }

    // public function addTask()
    // {
    //     // 添加新任務的邏輯
    //     if ($this->newTask) {
    //         $this->tasks[] = $this->newTask;
    //         $this->newTask = '';
    //     }
    //     $this->emit('taskAdded');

    //     // 將 To-Do List 的內容保存到 Cookie 中
    //     $tasksJson = json_encode($this->tasks);
    //     Cookie::queue('tasks', $tasksJson); // 保存 60 分鐘

    //     $this->emit('refreshComponent'); // 手動觸發重新載入組件

    // }

    public function addTask()
    {
        // 添加新任務的邏輯
        if ($this->newTask) {
            $this->tasks[] = $this->newTask;
            $this->newTask = '';
        }
        $this->emit('taskAdded');

        // 將 To-Do List 的內容保存到 localStorage 中
        \Illuminate\Support\Facades\Storage::disk('local')->put('tasks', json_encode($this->tasks));
    }

    // public function removeTask($index)
    // {
    //     // 刪除任務的邏輯
    //     unset($this->tasks[$index]);
    //     $this->tasks = array_values($this->tasks); // 重新索引陣列

    //     // 將更新後的 To-Do List 的內容保存到 Cookie 中
    //     $tasksJson = json_encode($this->tasks);
    //     Cookie::queue('tasks', $tasksJson); // 保存 60 分鐘

    //     $this->emit('refreshComponent'); // 手動觸發重新載入組件

    // }

    public function removeTask($index)
    {
        // 刪除任務的邏輯
        unset($this->tasks[$index]);

        // 將更新後的 To-Do List 的內容保存到 localStorage 中
        \Illuminate\Support\Facades\Storage::disk('local')->put('tasks', json_encode($this->tasks));
    }

    // public function mount()
    // {
    //     // 從 Cookie 中讀取 To-Do List 的內容，如果 Cookie 存在的話
    //     if ($tasksCookie = Cookie::get('tasks')) {
    //         $this->tasks = json_decode($tasksCookie);
    //     }
    // }

    public function mount()
    {
        // 從 localStorage 中讀取 To-Do List 的內容，如果存在的話
        if ($tasksData = \Illuminate\Support\Facades\Storage::disk('local')->get('tasks')) {
            $this->tasks = json_decode($tasksData, true);
        } else {
            $this->tasks = [];
        }
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}