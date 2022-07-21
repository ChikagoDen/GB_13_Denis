<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>
        @section('title')
            cтраница 
        @show      
    </title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset ('css/bootstrap.min.css')}}" rel="stylesheet" >

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
    <x-header></x-header>  
    <main>
        @section('include')
            @include('inc.include', ['name'=>'Наши сплетни самые правдивые!!!'])
        @show
        <link href ="{{ asset ('css/index.css')}}" rel="stylesheet" >
        <div class = "body-1">
            @if ((Auth::user()&&Auth::user()->is_admin))
              <p>Добро пожаловать товарисч -- {{Auth::user()->name}}</p>
              <a href = "{{route('admin.index')}}">
                <h3> Редактирование новостей</h3>
              </a>
              <a href="{{route('sortProfile')}}">
                <h3>Редактирование профиля пользователей </h3>
              </a>
            @else
               @section('content')
                <a href = "{{route('news.category')}}">
                    <h3> Категории новостей</h3>
                </a> 
              @show 
            @endif
        </div>  
        <br>
    </main>
        <x-foter></x-foter>
        <script src="{{ asset ('js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>