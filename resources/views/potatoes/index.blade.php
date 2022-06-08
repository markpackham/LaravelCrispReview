<x-layout>
    <h1>Potatoes</h1>
    @include('partials._potato_search')
    <div>
        @if (count($potatoes) > 0)
            @foreach ($potatoes as $potato)
                <ul>
                    <li>
                        <a href="potatoes/{{ $potato->id }}">
                            {{ $potato->potato_name }}</a> : {{ $potato->potato_country }}
                    </li>
                </ul>
            @endforeach
        @else
            <p>No potatoes</p>
        @endif
    </div>

    <div class="mt-6 p-4">
        {{ $potatoes->links() }}
    </div>
</x-layout>
