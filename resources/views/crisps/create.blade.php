<x-layout>
    <h1>Create Crisp</h1>
    <form method="POST" action="{{ route('crisps') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="crisp_name">Crisp Name</label>
            <input class="form-control" type="text" name="crisp_name" value="{{ old('crisp_name') }}" />
            @error('crisp_name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="crisp_weight">Crisp Weight in grams</label>
            <input class="form-control" type="number" name="crisp_weight" value="{{ old('crisp_weight') }}" />
            @error('crisp_weight')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="crisp_review">Crisp Review</label>
            <input class="form-control" type="text" name="crisp_review" value="{{ old('crisp_review') }}" />
            @error('crisp_review')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="crisp_score">Crisp Review Score</label>
            <input class="form-control" min="1" max="5" type="number" name="crisp_score"
                value="{{ old('crisp_score') }}" />
            @error('crisp_score')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="crisp_image">Crisp Image</label>
            <input class="form-control" type="file" name="crisp_image" value="{{ old('crisp_image') }}" />
            @error('crisp_image')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="brand_name">Brand Name</label>
            <input class="form-control" type="text" name="brand_name" value="{{ old('brand_name') }}" />
            @error('brand_name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="flavour_name">Flavour Name</label>
            <input class="form-control" type="text" name="flavour_name" value="{{ old('flavour_name') }}" />
            @error('flavour_name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-success mt-2">
            Create Crisp
        </button>
    </form>
</x-layout>
