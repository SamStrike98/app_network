<x-layout>
    <h1>{{ $app->name }}</h1>
    <p>{{ $app->id }}</p>
    <p>{{ $app->description }}</p>
    <p>Rating: {{ $app->rating }}/5</p>
    
    <div>
        <h3>Collection Name: {{ $app->collection->name }}</h3>
        <p>Description: {{ $app->collection->description }}</p>
    </div>


    <form action="{{ route('apps.destroy', $app->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button class="btn my-4" type="submit">Delete App</button>
    </form>

</x-layout>