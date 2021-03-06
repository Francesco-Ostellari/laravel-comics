@extends('guest.layout.base')

@section('documentTitle')
  {{$nomePagina}}
@endsection

@section('content')
  <main>
    <div class="main-top flex">
      <div class="container-main-top" >
        <div class="title">
          <h1>current series</h1>
        </div>
        <div class="container-img flex">
          @foreach ($comics as $comic)
          <a href="{{route('comic', $comic['id']) }}">
            <div class="container-card">
              <div class="thumb-img">
                <img src="{{ $comic['thumb'] }}" alt="">
              </div>
              <div class="text">
                <span>{{ $comic['title'] }}</span>
              </div>
            </div>
          </a>
          @endforeach
        </div>
        <div class="container-button flex">
          <div class="button">
            load more
          </div>
        </div>
      </div>
    </div>
    <div class="main-bottom flex">
      <div class="container-main-bottom">
        <ul class="flex">
          <li>
            <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
            <span> digital comics </span>
          </li>
          <li>
            <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
            <span> dc merchandise </span>
          </li>
          <li>
            <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
            <span> subscription </span>
          </li>
          <li>
            <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
            <span> comic shop locator </span>
          </li>
          <li>
            <img class="svg" src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
            <span> dc power visa </span>
          </li>
        </ul>
      </div>
    </div>
  </main>
@endsection

@section('scripts')
  <script src="{{asset('js/app.js')}}"></script>
@endsection