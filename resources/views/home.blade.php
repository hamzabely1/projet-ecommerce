@include('layouts.apphome')


<img class="img-fluid" src="{{ asset('img/hom.jpg') }}" alt="">


<div class="mama" style="background-color: gainsboro;height:300px">

<h1 class="categori" style="display: flex;justify-content:center">categories</h1>
<div class="ma">

    <img class='m' style="height: 180px;border-radius:10px" src="{{ asset('img/cate1.jpg') }}"
        class="rounded float-start " alt="...">
    <img class='m' style="height: 180px;border-radius:10px" src="{{ asset('img/cate2.webp') }}"
        class="rounded float-center" alt="...">
    <img class='m' style="height: 180px;border-radius:10px" src="{{ asset('img/cate3.jpg') }}"
        class="rounded float-center" alt="...">
    <img class='m' style="height: 180px;border-radius:10px;" src="{{ asset('img/cate4.jpg') }}"
        class="rounded float-center" alt="...">
</div>
</div>
<h2 style="display: flex;justify-content:center">En évidence</h2>

<div class="container">
    <div class="row flex">
      <div class="qua col-md-3 d-flex flex-column">
        <img src="{{asset('img/kaido.jpg')}}"   style="height: 200px; width: 200px;" alt="">
          <div id="quaa"><button type="button" class="btn btn-pericolo"
          style="height: 100%;">Achète</button></div>


          <div id="quaa1">
            <div id="quaa1"><button type="button" class="btn btn-"
                data-bs-target="#exampleModal" data-bs-toggle="modal"
                style="height: 100%; color: white;"><i>info</i></button></div>
          </div>


          <br>
      </div>

      <div class="qua col-md-3 d-flex flex-column">
        <img src="{{asset('img/zoro.jpg')}}"   style="height: 200px; width:200px;" alt="">
          <div id="quaa"><button type="button" class="btn btn-pericolo"
          style="height: 100%;">Achète</button></div>


          <div id="quaa1">
            <div id="quaa1"><button type="button" class="btn btn-"
                data-bs-target="#exampleModal" data-bs-toggle="modal"
                style="height: 100%; color: white;"><i>info</i></button></div>
          </div>



          <br>
      </div>
      <div class="qua col-md-3 d-flex flex-column">
        <img src="{{asset('img/roger.jpg')}}"   style="height: 200px; width: 200px;" alt="">
          <div id="quaa"><button type="button" class="btn btn-pericolo"
          style="height: 100%;">Achète</button></div>


          <div id="quaa1">
            <div id="quaa1"><button type="button" class="btn btn-"
                data-bs-target="#exampleModal" data-bs-toggle="modal"
                style="height: 100%; color: white;"><i>info</i></button></div>
          </div>


          <br>
      </div>
      <div class="qua col-md-3 d-flex flex-column">
        <img src="{{asset('img/dragon bool.jpg')}}"   style="height: 200px; width: 200px;" alt="">
          <div id="quaa"><button type="button" class="btn btn-pericolo"
          style="height: 100%;">Achète</button></div>


          <div id="quaa1">
            <div id="quaa1"><button type="button" class="btn btn-"
                data-bs-target="#exampleModal" data-bs-toggle="modal"
                style="height: 100%; color: white;"><i>info</i></button></div>
          </div>

          <br>
      </div>*$
    @foreach ($article as $key => $articles)
<p>{{$articles->nom}}</p>
    @endforeach

