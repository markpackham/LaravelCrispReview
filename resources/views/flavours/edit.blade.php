<x-layout>
    <h1>Edit Flavour</h1>
    <form method="POST" action="/flavours/{{ $flavour->id }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="flavour_name">Flavour Name</label>
            <input class="form-control" type="text" name="flavour_name" value="{{ $flavour->flavour_name }}" />
            @error('flavour_name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button class="btn btn-success">
            Update Flavour
        </button>
    </form>
</x-layout>
