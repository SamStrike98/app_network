<x-layout>
    <h1>App Page</h1>

    <ul>
        @foreach ($apps as $app)
            <li>
                <x-card href="{{ route('apps.show', $app->id) }}" :highlight="$app->rating > 4">
                    <h3>{{ $app->name }}</h3>
                    <p>Collection: {{ $app->collection->name }}</p>
                </x-card>
            </li>
        @endforeach
    </ul>

    {{ $apps->links() }}
</x-layout>
