<x-layout>
    <h1>Flavours Descending Order</h1>
    @include('partials._flavour_order')
    <div>
        @if (count($flavours) > 0)
            <ul class="index-list row align-items-start">
                @foreach ($flavours as $flavour)
                    <div class="col-4 mt-1"><a
                            href="flavours/{{ $flavour->id }}">{{ $flavour->flavour_name }}</a>
                    </div>
                @endforeach
            </ul>
        @else
            <p>No flavours</p>
        @endif
    </div>
</x-layout>
