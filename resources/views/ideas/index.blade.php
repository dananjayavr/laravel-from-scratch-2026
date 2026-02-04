<x-layout title="Ideas">
    @if($ideas->count())
        <div class="mt-6">
            <h2 class="text-white font-bold">Your Ideas:</h2>
            <ul class="mt-6">
                @foreach($ideas as $idea)
                    <li>
                        <a href="/ideas/{{$idea->id}}" class="text-gray-300 text-sm">{{ $idea->description }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    @else
        <p class="text-white">No ideas yet. <a href="/ideas/create" class="underline">Create a new one.</a></p>
    @endif
</x-layout>
