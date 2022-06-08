<x-layout>
    <h1>Edit Crisp</h1>
    <form method="POST" action="/brands/{{ $crisp->id }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="crisp_name">Crisp Name</label>
            <input class="form-control" type="text" name="crisp_name" value="{{ $crisp->crisp_name }}" />
            @error('crisp_name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="crisp_weight">Crisp Weight in grams</label>
            <input class="form-control" type="number" name="crisp_weight" value="{{ $crisp->crisp_weight }}" />
            @error('crisp_weight')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="crisp_review">Crisp Review</label>
            <input class="form-control" type="text" name="crisp_review" value="{{ $crisp->crisp_review }}" />
            @error('crisp_review')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="crisp_score">Crisp Score out of 5</label>
            <input class="form-control" min="1" max="5" type="number" name="crisp_score"
                value="{{ $crisp->crisp_score }}" />
            @error('crisp_score')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="crisp_image">Crisp Image</label>
            <input class="form-control" type="file" name="crisp_image" value="{{ $crisp->crisp_image }}" />
            <img class="w-48 mr-6 mb-6"
                src="{{ $crisp->crisp_image ? asset('storage/' . $crisp->crisp_image) : asset('/images/no-image.png') }}"
                alt="{{ $crisp->crisp_name }} />
            @error('crisp_image')
    <p class="  text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button class="btn btn-success mt-2">
            Update Crisp
        </button>
    </form>
</x-layout>
