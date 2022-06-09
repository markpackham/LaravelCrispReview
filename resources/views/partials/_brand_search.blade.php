<form action="/brands">
    <div class="relative border-2 border-gray-100 m-4 rounded-lg">
        <input type="text" name="searchBrand" placeholder="Search Brand names" /> <i
            class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
        <div class="absolute top-2 right-2">
            <button type="submit" class="btn btn-secondary mt-2">
                Brand Search
            </button>
            <button class="btn btn-secondary mt-2" href="{{ route('brands') }}">Clear Search</button>
        </div>
    </div>
</form>
