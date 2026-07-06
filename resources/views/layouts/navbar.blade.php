<nav class="navbar navbar-expand-lg bg-white shadow-sm">

    <div class="container-fluid">

        <span class="navbar-brand">
            IT Remote Inventory System
        </span>

        <div class="ms-auto">

            <span class="me-3">

                {{ auth()->user()->name }}

            </span>

            <form
                method="POST"
                action="{{ route('logout') }}"
                class="d-inline">

                @csrf

                <button
                    class="btn btn-outline-danger btn-sm">

                    Logout

                </button>

            </form>

        </div>

    </div>

</nav>