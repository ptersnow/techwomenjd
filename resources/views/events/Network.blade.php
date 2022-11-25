@extends('layouts.main')

@section('content')

    <div id = "slider">
        <div class = "container">
            <div  class = "row">
                <div class= "col-md-6 text-center">
                    <h1> Network</h1>
                </div>
    <div class= "col-md-6 text-right ">
        <img src="/imagens/work.svg"  width="500" height="500">
            </div>
        </div>
    </div>
    <div id = "introdution">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-secondary" role="alert">
                        <h3 class="mb-4">Propósito</h3>
                        <p> Este espaço foi idealizado com o intuito de, gerar opotunidades 
                        trabalhistas na área tecnológica para as mulheres da cidade de Jardim-MS e região, que identificam-se 
                        com a área. Nessa seção são exibidas as vagas de emprego disponibilizadas 
                        por algumas empresas da região ou fora. A empresa pode indicar a vaga respondendo o formulário disponível logo abaixo. 
                        </p>
                        <br>
                        <p>Caso o usuário do site se encaixe nos requisitos necessários da vaga, basta entrar em 
                        contato com a empresa pelos meios informados na vaga...</p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id = "cad_empresa">
        <div class="container">
            <div class="row">
                <div class="col-md-12" class="align-self-center">
                    <div class="card w-100" >
                        <div class="card-body">
                            <h3 class="card-title mb-4">Cadastre sua Empresa Aqui!</h3>
                            <p class="card-text">Informe os requisitos das vagas disponíveis a partir deste formulário. Após responder o formulário os dados serão exibidos com os 
                            requisitos e demais informações logo abaixo. </P>
                           
                            <a href ="/events/formvaga" class = "btn button-primay-outline btn-outline-primary button card-title"> <h4>Cadastrar vaga</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- realação com bd-->
    @foreach ($events as $event)
        <div id="network" class="block py-9">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3><i class="bi bi-briefcase-fill"></i> Vaga disponível:</h3>
                        <p class="mb-4">Os interessados deverão entrar em contato com a empresa... </p>
                        <h3 class="card-title">{{$event->nome}}</h3>
                        <p>{{$event->descriçãoE}}</p>
                    </div>
    <div class="col-4" class="campo">
        <div class="card">
            <div class="card-body">
                <h4 class="title text-center mb-3">Descrição da vaga </h4> 
                <p>{{$event->descriçãoV}}</p> <!--retorna o valor da variavel-->
            </div>
        </div>               
    </div>
    <div class="col-4" >
        <div class="card">
            <div class="card-body">
                <h4 class="title text-center mb-3">Requisitos</h4>
                <p>{{$event->requisitos}}</p>
            </div>
        </div> 
    </div>
    <div class="col-4" >
        <div class="card">
            <div class="card-body">
              <h4 class="title text-center mb-3">Benefícios</h4>
              <p>{{$event->beneficios}}</p>
            </div>
        </div> 
    </div>
</div>
</div>
</div>
@endforeach    
@endsection


