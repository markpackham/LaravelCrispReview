<x-layout>
    <h1>Edit Brand</h1>
    <form method="POST" action="/brands/{{ $brand->id }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="brand_name">Brand Name</label>
            <input class="form-control" type="text" name="brand_name" value="{{ $brand->brand_name }}" />
            @error('brand_name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button class="btn btn-success">
            Update Brand
        </button>
    </form>
</x-layout>
