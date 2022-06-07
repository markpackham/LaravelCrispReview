<x-layout>
    <h1>Edit Potato</h1>
    <form method="POST" action="{{ route('potatoes') }}">
        @csrf
        <div class="form-group">
            <label for="potato_name">Potato Name</label>
            <input class="form-control" type="text" name="potato_name" value="{{ $potato->potato_name }}" />
            @error('potato_name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="potato_country">Country Name</label>
            <input class="form-control" type="text" name="potato_country" value="{{ $potato->potato_country }}" />
            @error('potato_country')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">
            Update Potato
        </button>
    </form>
</x-layout>
