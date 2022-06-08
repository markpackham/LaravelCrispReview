<x-layout>
    <h1>Flavours</h1>
    @include('partials._flavour_search')
    <div>
        @if (count($flavours) > 0)
            @foreach ($flavours as $flavour)
                <ul>
                    <li><a href="flavours/{{ $flavour->id }}">{{ $flavour->flavour_name }}</a></li>
                </ul>
            @endforeach
        @else
            <p>No flavours</p>
        @endif
    </div>

    <div class="mt-6 p-4">
        {{ $flavours->links() }}
    </div>
</x-layout>
