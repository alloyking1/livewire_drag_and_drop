<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class LivewireSortTable extends Component
{

    public function updateTaskOrder($tasks)
    {
        foreach ($tasks as $task) {
            Task::whereId($task['value'])->update(['order' => $task['order']]);
        }
    }

    public function removeTask($id)
    {
        Task::whereId($id)->delete();
    }

    public function render()
    {
        return view('livewire.livewire-sort-table', ['tasks' => Task::orderBy('order')->get()]);
    }
}
