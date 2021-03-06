<x-layout>
    <h1>Edit Potato</h1>
    <form method="POST" action="/potatoes/{{ $potato->id }}">
        @csrf
        @method('PUT')
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

        <button class="btn btn-success mt-2">
            Update Potato
        </button>
        <a class="btn btn-secondary mt-2" href="{{ route('potatoes') }}">
            Back <i class="fa-solid fa-arrow-left"></i>
        </a>
    </form>
</x-layout>
