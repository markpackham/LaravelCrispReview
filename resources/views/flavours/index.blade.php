<x-layout>
    <h1>Flavours</h1>
    @include('partials._flavour_search')
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

    <div class="mt-6 p-4">
        {{ $flavours->links() }}
    </div>
</x-layout>
