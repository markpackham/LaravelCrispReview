<form action="/potatoes">
    <div class="relative border-2 border-gray-100 m-4 rounded-lg">
        <input class="potatoSearch" type="text" name="searchPotato" placeholder="Search Potato names or countries" />
        <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
        <div class="absolute top-2 right-2">
            <button type="submit" class="btn btn-secondary mt-2">
                Potato Search
            </button>
            <button class="btn btn-secondary mt-2" href="{{ route('potatoes') }}">Clear Search</button>
        </div>
    </div>
</form>
