<x-layout>
    <h1>Create Flavour</h1>
    <form method="POST" action="{{ route('flavours') }}">
        @csrf
        <div class="form-group">
            <label for="flavour_name">Flavour Name</label>
            <input class="form-control" type="text" name="flavour_name" value="{{ old('flavour_name') }}" />
            @error('flavour_name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">
            Create Flavour
        </button>
    </form>
</x-layout>
