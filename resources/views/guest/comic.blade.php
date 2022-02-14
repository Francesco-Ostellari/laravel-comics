@extends('guest.layout.base')

@section('documentTitle')
  {{$nomePagina}}
@endsection

@section('content')
  <div class="blue-bar">
  </div>
  <div class="container-relative">
    <div class="container-absolute">
      <div class="container-card">
        <img src="{{ $comic['thumb'] }}" alt="">
        <div class="card-text-title">
          comic book
        </div>
        <div class="card-text-subtitle">
          view gallery
        </div>
      </div>
    </div>
  </div>
  <div class="text">
    <div class="left-text">
      <h1>{{ $comic['title'] }}</h1>
      <div class="bar">
        <div class="green-bar">
          <div class="container-text">
            <span class="green-text">
              U.S. Price
            </span>
            <span class="price">
              {{ $comic['price'] }}
            </span>
          </div>
          <span class="green-text-right">
            AVAILABLE
          </span>
        </div>
        <button class="btn">
          Check Availability <i class="fa-solid fa-caret-down"></i>
        </button>
      </div>
      <div class="description">
        {{ $comic['description'] }}
      </div>
    </div>
    <div class="right-text">
      <h3>advertisement</h3>
      <img src="{{asset('img/adv.jpg')}}" alt="">
    </div>
  </div>
  <div class="details">
    <div class="details-top">
      <div class="details-left">
        <h2>
          Talent
        </h2>
        <div class="artist">
          <div class="artist-left">
            Art by:
          </div>
          <div class="artist-right">
            @foreach ($comic["artists"] as $artist)
              @if ($loop->last)
              <span>{{$artist}}</span>
              @else 
              <span>{{$artist}},</span>
              @endif
            @endforeach
          </div>
        </div>
        <div class="artist border">
          <div class="artist-left">
            Written by:
          </div>
          <div class="artist-right">
            @foreach ($comic["writers"] as $writer)
              @if ($loop->last)
              <span>{{$writer}}</span>
              @else 
              <span>{{$writer}},</span>
              @endif
            @endforeach
          </div>
        </div>
      </div>
      <div class="details-right">
        <h2>
          Specs
        </h2>
        <div class="artist">
          <div class="artist-left">
            Series:
          </div>
          <div class="artist-right">
            {{$comic['series']}}
          </div>
        </div>
        <div class="artist">
          <div class="artist-left">
            U.S. Price:
          </div>
          <div class="artist-right-blue">
            {{$comic['price']}}
          </div>
        </div>
        <div class="artist border">
          <div class="artist-left">
            On Sale Date:
          </div>
          <div class="artist-right-blue">
            {{$comic['sale_date']}}
          </div>
        </div>
      </div>
    </div>
    <div class="details-bottom"></div>
  </div>
@endsection