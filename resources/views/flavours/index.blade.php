<x-layout>
    <h1>Flavours</h1>
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
</x-layout>
