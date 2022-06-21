@extends('layouts.admin')
@section('title')
  @parent - главная.
@endsection
@section('header')
@include('inc.message')
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
  @foreach($categorys as $category)
  
    <div>
        <h2>
          <a href="{{route('admin.news.categoryShow', ['category'=>Str::replaceLast('.', '', $category->Title) ])}}">
            <?=$category->Title?>
          </a>
        </h2>
        {{-- <div> <p>Количество новостей {{$category->newsCategory()->count()}}</p></div>//много запросов --}}
        <div> <p>Количество новостей {{$category->newsCategory->count()}}</p></div>
    </div>
  @endforeach
  {{$categorys->links()}}
@endsection
