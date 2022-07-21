<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">"Правда"</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
   data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Поиск" aria-label="Поиск">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap" >
      @if (Route::has('login'))
                @auth
                    <a href="{{ route('account.logout')}}" class="text-sm text-gray-700 dark:text-gray-500 underline">Выйти</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Залогинится</a>
      
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Регистрация</a>
                    @endif
                @endauth
            @endif
    </div>
  </div>
</header>