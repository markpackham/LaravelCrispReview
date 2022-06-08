<x-layout>
    <h1>Create Potato</h1>
    <form method="POST" action="{{ route('potatoes') }}">
        @csrf
        <div class="form-group">
            <label for="potato_name">Potato Name</label>
            <input class="form-control" type="text" name="potato_name" value="{{ old('potato_name') }}" />
            @error('potato_name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="potato_country">Country Name</label>
            <input class="form-control" type="text" name="potato_country" value=" {{ old('potato_country') }}" />
            @error('potato_country')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-success mt-2">
            Create Potato
        </button>
    </form>
</x-layout>
