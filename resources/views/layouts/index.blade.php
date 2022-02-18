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
            @section('content')
                <a href = "{{route('news.category')}}">
                    <h3> Категории новостей</h3>
                </a> 
            @show
        </div>  
        <br>
        <div class = "body-2">    
            @section('perehod')
                <hr> 
                <a href="<?=route('news.autorize')?>">
                    <p>Авторизация</p>
                </a>
                <hr> 
            @show 
        </div>
    </main>
        <x-foter></x-foter>
        <script src="{{ asset ('js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>