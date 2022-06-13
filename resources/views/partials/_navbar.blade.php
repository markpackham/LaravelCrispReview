<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <ul class="navbar-nav mr-auto">
        <li>
            <a href="{{ route('home') }}">
                Home <i class="fa-solid fa-house"></i>
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
        @auth
            <li>
                <form method="POST" action="/logout">
                    @csrf
                    <button class="btn btn-secondary" type="submit">
                        Logout <i class="fa-solid fa-door-closed"></i>
                    </button>
                </form>
            </li>
        @else
            <li>
                <a class="btn btn-secondary" href="{{ route('users-login') }}">
                    Login <i class="fa-solid fa-door-open"></i>
                </a>
            </li>
            <li>
                <a class="btn btn-primary" href="{{ route('users-create') }}">
                    Register <i class="fa-solid fa-file-alt"></i>
                </a>
            </li>
        @endauth
    </ul>
</nav>
