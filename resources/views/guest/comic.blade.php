@extends('guest.layout.base')

@section('documentTitle')
  {{$nomePagina}}
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('css/comic.css') }}">
@endsection

@section('content')
  <div class="container-card">
    <img src="{{ $comic['thumb'] }}" alt="">
    <div class="card-text-title">
      comic book
    </div>
    <div class="card-text-subtitle">
      view gallery
    </div>
  </div>
@endsection