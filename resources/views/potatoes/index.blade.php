<x-layout>
    <h1>Potatoes</h1>
    <div>
        @if (count($potatoes) > 0)
            @foreach ($potatoes as $potato)
                <ul>
                    <li>{{ $potato->potato_name }} : {{ $potato->potato_country }}</li>
                </ul>
            @endforeach
        @else
            <p>No potatoes</p>
        @endif
    </div>
</x-layout>
