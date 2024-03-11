<div class="shadow-xl rounded p-10 w-[40%] mx-auto">
    <ul wire:sortable="updateTaskOrder">
        @foreach ($tasks as $task)
            <li wire:sortable.item="{{ $task->id }}" wire:key="task-{{ $task->id }}" class="flex justify-between">
                <div class="my-4 w-full p-2 flex justify-between p-3">
                    <span wire:sortable.handle class="flex cursor-pointer">
                        {{ $task->name }}
                        </span>
                    <button wire:click="removeTask({{ $task->id }})">Remove</button>
                </div>
            </li>
            <hr>
        @endforeach
    </ul>
</div>
