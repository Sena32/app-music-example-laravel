@extends('layouts.base')

@section('content')
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
        <div class="content-item">
            <div class="playlist-item">
                <img src="{{ asset('img/malta.jpg') }}" class="d-block" alt="...">
                <span class="title">Banda Malta</span>
            </div>
            <div class="playlist-item">
                <img src="{{ asset('img/malta.jpg') }}" class="d-block" alt="...">
                <span class="title">Banda Malta</span>
            </div>
            <div class="playlist-item">
                <img src="{{ asset('img/malta.jpg') }}" class="d-block" alt="...">
                <span class="title">Banda Malta</span>
            </div>    
        </div>
    </div>
    <div class="carousel-item" data-interval="2000">
              <div class="content-item">
            <div class="playlist-item">
                <img src="{{ asset('img/malta.jpg') }}" class="d-block" alt="...">
                <span class="title">Banda Malta</span>
            </div>
            <div class="playlist-item">
                <img src="{{ asset('img/malta.jpg') }}" class="d-block" alt="...">
                <span class="title">Banda Malta</span>
            </div>
            <div class="playlist-item">
                <img src="{{ asset('img/malta.jpg') }}" class="d-block" alt="...">
                <span class="title">Banda Malta</span>
            </div>    
        </div>
    </div>
    <div class="carousel-item">
              <div class="content-item">
            <div class="playlist-item">
                <img src="{{ asset('img/malta.jpg') }}" class="d-block" alt="...">
                <span class="title">Banda Malta</span>
            </div>
            <div class="playlist-item">
                <img src="{{ asset('img/malta.jpg') }}" class="d-block" alt="...">
                <span class="title">Banda Malta</span>
            </div>
            <div class="playlist-item">
                <img src="{{ asset('img/malta.jpg') }}" class="d-block" alt="...">
                <span class="title">Banda Malta</span>
            </div>    
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
    <div class="content">
        <h3 class="title-session">QUEM SOMOS</h3>
        <div class="content-text">
            <p class="paragraph">
                A música é uma forma de arte que se constitui na combinação de vários sons e ritmos,
                seguindo uma pré-organização ao longo do tempo. É considerada por diversos autores como
                uma prática cultural e humana. Não se conhece nenhuma civilização ou agrupamento que não
                possua manifestações musicais próprias.
            </p>
        </div>
    </div>
</div>



    <div class="wrapper-plane">
        <div class="content-plane">
            <div class="item-plane">
                <div class="top-item">
                    <p class="btn btn-outline-success">GRATIS</p>
                    <p class="btn btn-dark">Divirtasse Muito</p>
                </div>
                <h4 class="title-plane">Individual</h4>
                <ul class="list-plane">
                    <li> <span>A musica é para ouvir</span></li>
                    <li><span>A musica é para ouvir</span></li>
                    <li><span>A musica é para ouvir</span></li>
                </ul>

                <button class="btn btn-success btn-lg">CONTINUE</button>
            </div>
            <div class="item-plane">
                <div class="top-item">
                    <p class="btn btn-outline-success">GRATIS</p>
                    <p class="btn btn-dark">Divirtasse Muito</p>
                </div>
                <h4 class="title-plane">Individual</h4>
                <ul class="list-plane">
                    <li> <span>A musica é para ouvir</span></li>
                    <li><span>A musica é para ouvir</span></li>
                    <li><span>A musica é para ouvir</span></li>
                </ul>

                <button class="btn btn-success btn-lg">CONTINUE</button>
            </div>

            <div class="item-plane">
                <div class="top-item">
                    <p class="btn btn-outline-success">GRATIS</p>
                    <p class="btn btn-dark">Divirtasse Muito</p>
                </div>
                <h4 class="title-plane">Individual</h4>
                <ul class="list-plane">
                    <li> <span>A musica é para ouvir</span></li>
                    <li><span>A musica é para ouvir</span></li>
                    <li><span>A musica é para ouvir</span></li>
                </ul>

                <button class="btn btn-success btn-lg">CONTINUE</button>
            </div>
        </div>
    </div>

@foreach($musics as $item)
<script>
    var array = {{ $item }}
    console.log(array)
</script>
@endforeach
@endsection