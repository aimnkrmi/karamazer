<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>
<div class="page-heading row">
    <div class="col-6">
        <h3>@yield('page_title', 'Dashboard')</h3>
    </div>
    <div class="col-6 text-end">
        <a class="btn btn-link text-decoration-none" href=""><i class="bi bi-person-circle"></i>
            {{ auth()->user()->name }}</a>

        |
        <form method="POST" action="{{ route('logout') }}" class="d-inline"> @csrf <button type="submit"
                class="btn btn-link text-decoration-none">Logout</button> </form>
    </div>

</div>