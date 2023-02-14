<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">

                <li><a href="#" class="nav-link px-2 link-secondary">Главная</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Товары</a></li>

            </ul>

            <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                   data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="mdo" class="rounded-circle" width="32" height="32">
                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                    @if(auth()->check())
                        <li><a class="dropdown-item" href="#">Профиль ({{auth()->user()->name}})</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Выйти</a></li>
                    @else
                        <li><button>Log in/Sign up</button></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</header>
