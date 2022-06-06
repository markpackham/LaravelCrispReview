<x-layout>
    <h1 class="text-3xl">Flavours</h1>
    <div>
        @if (count($flavours) > 0)
            @foreach ($flavours as $flavour)
                <ul>
                    <li>{{ $flavour->flavour_name }}</li>
                </ul>
            @endforeach
        @else
            <p>No flavours</p>
        @endif
    </div>
</x-layout>
