<x-layout>
    <h1>Flavours</h1>
    @include('partials._flavour_search')
    @include('partials._flavour_order')
    <div>
        @if (count($flavours) > 0)
            <ul class="index-list row align-items-start">
                @foreach ($flavours as $flavour)
                    <x-flavour-card :flavour="$flavour" />
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
