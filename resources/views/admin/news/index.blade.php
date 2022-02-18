@extends('layouts.admin')
@section('title')
  @parent - главная.
@endsection

@section('header')
  <h2 class="h2">Список категорий</h2>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a href="{{ route('admin.category.create')}}" type="button" class="btn btn-sm btn-outline-secondary">Добавить</a>
      </div>
    </div>
@endsection

@section('content')

<link href ="{{ asset ('css/index.css')}}" rel="stylesheet" >

  <h3> Категории</h3>
  <br>
  @foreach($news as $newsItemKey=>$value)
  
    <div>
        <h2>
          <a href="{{route('admin.news.categoryShow', ['category'=>$newsItemKey])}}">
            <?=$newsItemKey?>
          </a>
        </h2>
    </div>
  @endforeach
@endsection
