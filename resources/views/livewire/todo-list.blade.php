<div>
    <h2>Todo List</h2>
    <form wire:submit.prevent="addTask">
        <input type="text" wire:model="newTask" placeholder="Add a task...">
        <button type="submit">Add</button>
    </form>
    <ul wire:poll>
        @foreach ($tasks as $index => $task)
            <li>{{ $task }} <button wire:click="removeTask({{ $index }})">Remove</button></li>
        @endforeach
    </ul>

        {{-- <ul wire:poll.1000ms="render">
        @foreach ($tasks as $index => $task)
            <li>{{ $task }} <button wire:click="removeTask({{ $index }})">Remove</button></li>
        @endforeach
    </ul> --}}


</div>
