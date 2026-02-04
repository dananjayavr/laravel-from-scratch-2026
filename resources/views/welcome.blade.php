<x-layout title="Home">
    @if(count($tasks))
        <p>we got some tasks</p>
        @foreach($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    @else
        <p>no tasks found</p>
    @endif
    <h1>{{ $greeting }} {{ $person }}!</h1>
</x-layout>
