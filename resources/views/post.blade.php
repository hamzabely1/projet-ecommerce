@include('layouts.apphome')

<link rel="stylesheet" href="{{ asset('css/post.css') }}">

<div class="boby">


    <div class="conta">
        <p style="display: flex;justify-content:center">{{$article->nom}}</p>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{$article->image}}" class="d-block w-50" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{$article->image2}}" class="d-block w-50" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{$article->image3}}" class="d-block w-50" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>


            <p>{{$article->prix}}</p>
            <p>{{$article->description}}</p>

            <button>ajioute au panier</button>





          </div>

    </div>



</div>
