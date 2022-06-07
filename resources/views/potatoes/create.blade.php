<x-layout>
    <h1>Create Potato</h1>
    <form method="POST" action="{{ route('potatoes') }}">
        @csrf
        <div class="form-group">
            <label for="potato_name">Potato Name</label>
            <input class="form-control" type="text" name="potato_name" value="{{ old('potato_name') }}" />
            @error('potato_name')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="country_name">Country Name</label>
            <input class="form-control" type="text" name="country_name" value="{{ old('country_name') }}" />
            @error('country_name')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="button" class="btn btn-success">
            Create Potato
        </button>
    </form>
</x-layout>
