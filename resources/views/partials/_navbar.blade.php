<nav class="navbar navbar-expand-lg">
    <ul class="navbar-nav mr-auto">
        <li>
            <a href=" {{ url('/') }}">
                Home
            </a>
        </li>
        <li>
            <a href="{{ route('brands') }}">
                Brands
            </a>
        </li>
        <li>
            <a href="{{ route('brands-create') }}">
                Create Brand
            </a>
        </li>
        <li>
            <a href="{{ route('companies') }}">
                Companies
            </a>
        </li>
        <li>
            <a href="{{ route('companies-create') }}">
                Create Company
            </a>
        </li>
        <li>
            <a href="{{ route('crisps') }}">
                Crisps
            </a>
        </li>
        <li>
            <a href="{{ route('crisps-create') }}">
                Create Crisps
            </a>
        </li>
        <li>
            <a href="{{ route('flavours') }}">
                Flavours
            </a>
        </li>
        <li>
            <a href="{{ route('flavours-create') }}">
                Create Flavour
            </a>
        </li>
        <li>
            <a href="{{ route('potatoes') }}">
                Potatoes
            </a>
        </li>
        <li>
            <a href="{{ route('potatoes-create') }}">
                Create Potatoes
            </a>
        </li>
        <li>
            <a href="{{ route('users-create') }}">
                Register
            </a>
        </li>
        <li>
            <form method="POST" action="/logout">
                @csrf
                <button class="btn btn-secondary" type="submit">
                    Logout <i class="fa-solid fa-door-closed"></i>
                </button>
            </form>
        </li>
    </ul>
</nav>
