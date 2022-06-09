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
            <input class="form-control" min=1 type="number" name="crisp_weight" value="{{ old('crisp_weight') }}" />
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
            <label for="crisp_review_score">Crisp Review Score out of 5</label>
            <select class="form-control" name="crisp_review_score">
                <option value="1">1</option>
                <option value="1">2</option>
                <option value="1">3</option>
                <option value="1">4</option>
                <option value="1">5</option>
            </select>
            @error('crisp_review_score')
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
            <label for="brand_id">Brand Name</label>
            <select class="form-control" name="brand_id">
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                @endforeach
            </select>
            @error('brand_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="flavour_id">Flavour Name</label>
            <select class="form-control" name="flavour_id">
                @foreach ($flavours as $flavour)
                    <option value="{{ $flavour->id }}">{{ $flavour->flavour_name }}</option>
                @endforeach
            </select>
            @error('flavour_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-success mt-2">
            Create Crisp
        </button>
    </form>
</x-layout>
