@props(['flavour'])

<x-card>
    <div class="col-4 mt-1"><a href="flavours/{{ $flavour->id }}">{{ $flavour->flavour_name }}</a>
    </div>
</x-card>
