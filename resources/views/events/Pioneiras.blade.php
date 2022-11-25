@extends('layouts.main')

@section('content')
  <div id = "slider">
    <div class = "container">
      <div  class = "row">
        <div class= "col-md-6 text-center">
          <h1>As Histórias das Pioneiras</h1>
        </div>
          <div class= "col-md-6 text-right">
            <img src="/imagens/historia.svg" width="500" height="500">
          </div>
        </div>
      </div>
        <div id = "Info">
          <div class = "container" >
            <div  class = "row" >
              <div class= "col-md-12 align-self-center" >
                <h3 class="mb-4">Propósito</h3>
                <p> Nessa seção você encontra os nomes e a história dos grandes modelos femininos que contribuíram para o
                desenvolvimento da tecnologia. Esperamos que isso se torne um incentivo e estímulo para que outras mulheres
                se disponham a mudar a realidade atual.</p>
              </div>
            </div>    
          </div>
  <div id = "pioneiras" class="block">
    <div class = "container pt-5">
      <h3 class="mb-5 text-left" >Conheça a história das Pioneiras a seguir:</h3>
    <div  class = "row">
      <div class="col-lg-4 col-md-4 mb-4 mb-lg-0">
        <div class="card border-dark mb-3 text-center" style="max-width: 18rem; max-height: 22rem;">
            <div class="card-body text-dark">
              <a href ="/events/ada" class = "btn button-primay-outline btn-outline-primary button card-title"> <h4>Ada Lovelace</h4></a>
              <img src="/imagens/ada.jpg" class="card-img-top" height="270">
            </div>
          </div>
        </div>
  <div class="col-lg-4 col-md-4 mb-4 mb-lg-0">
    <div class="card border-dark mb-3 text-center" style="max-width: 18rem; max-height: 22rem;">
        <div class="card-body text-dark">
          <a href ="#" class = "btn button-primay-outline btn-outline-primary button card-title"> <h4>Susan wojcicki</h4></a>
          <img src="/imagens/Susan.jpg" class="card-img-top" height="270">
        </div>
      </div>
    </div>
  <div class="col-lg-4 col-md-4 mb-4 mb-lg-0">
    <div class="card border-dark mb-5 text-center" style="max-width: 18rem; max-height: 22rem;">
        <div class="card-body text-dark">
          <a href ="#" class = "btn button-primay-outline btn-outline-primary button card-title"> <h4 class="card-title text-center">Grace Hopper</h4></a>
          <img src="/imagens/grace.jpg" class="card-img-top" height="270">
        </div>
      </div>
    </div>
  <div class="col-lg-4 col-md-4 mb-4 mb-lg-0">
    <div class="card border-dark mb-3 text-center" style="max-width: 18rem; max-height: 22rem;">
        <div class="card-body text-dark">
          <a href ="#" class = "btn button-primay-outline btn-outline-primary button card-title"> <h4 class="card-title text-center">Hedy Lamarr</h4></a>
          <img src="/imagens/Hedy.jpg" class="card-img-top" height="270">
        </div>
      </div>
    </div>
  <div class="col-lg-4 col-md-4 mb-4 mb-lg-0">
    <div class="card border-dark mb-3 text-center" style="max-width: 18rem; max-height: 22rem;">
        <div class="card-body text-dark">
          <a href ="#" class = "btn button-primay-outline btn-outline-primary button card-title"> <h4 class="card-title text-center">Margaret Hamilton</h4></a>
          <img src="/imagens/Margaret.jpg" class="card-img-top" height="270">
        </div>
      </div>
    </div>
  <div class="col-lg-4 col-md-4 mb-4 mb-lg-0">
    <div class="card border-dark mb-3 text-center" style="max-width: 18rem; max-height: 22rem;">
        <div class="card-body text-dark">
          <a href ="#" class = "btn button-primay-outline btn-outline-primary button card-title"> <h4 class="card-title text-center">Mary Jackson</h4></a>
          <img src="/imagens/mary.jpg" class="card-img-top" height="270">
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div> 
@endsection