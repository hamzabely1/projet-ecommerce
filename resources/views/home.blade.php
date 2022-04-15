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
@foreach ($article as $key => $articles)

      <div class="qua col-md-3 d-flex flex-column">
          <p>{{$articles->nom}}</p>
        <img src={{$articles->image}}  style="height: 200px; width: 200px;" alt="">
          <div id="quaa"><button type="button" class="btn btn-pericolo"
          style="height: 100%;">Achète</button></div>


          <div id="quaa1">
            <div id="quaa1"><a href="post/{{$key = $key +2 }}">info</a></div>
          </div>


          <br>
      </div>

      @endforeach
   </div>
</div>
