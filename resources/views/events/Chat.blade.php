@extends('layouts.main')

@section('content')

    <div id = "slider">
        <div class = "container">
          <div  class = "row pt-5">
            <div class= "col-md-6 text-center">
              <h1>Chat</h1>
            </div>
            <div class= "col-md-6 text-right " >
                <img src="/imagens/ask.svg" width="460" height="470">
            </div>
        </div>
      </div>

      <div id = "Info">
        <div class = "container" >
          <div  class = "row" >
            <div class= "col-md-12 align-self-center" >
              <div class="alert alert-secondary" role="alert">
                    <h3 class="mb-4">Interaja conosco</h3>
                    <p class="mb-4">Essa seção destina-se para você deixar seu comentário sobre o nosso site, feedback
                      positivo ou negativo, contar a sua experiência de vida com a tecnologia, pedir conselhos 
                      sobre a área tecnológica, ou até mesmo dar dicas pra quem quer inserir-se na área.
                    </div>
                    <h5 class="py-5">Entre em contato através do formulário abaixo:</h5>
                  </div>
               </div>    
            </div>

            <form action="/coments" method="POST">
            <!--diretiva pro formulario funcionar-->
            @csrf 
              <div class="container">
                <div class="card border-dark mb-3 shadow-none p-3 mb-5 bg-light rounded" style="max-width: 40rem;">
                  
                  <div class="card-body text-dark">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="Nome" name="Nome" placeholder="digite seu nome">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="Email" name="Email" placeholder="@email.com">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Área de texto</label>
                <textarea class="form-control" id="Comentario" name="Comentario" rows="3" placeholder="escreva seu comentário"></textarea>
              </div>
              <div class="col-12">
              <input type="submit" class="btn  button-primay btn-primary button" value="Enviar comentário">
              </div>
              </div>
            </div>
          </div>
        </div>
      </form>

      

      <div class="coment  ">
        <div class = "container">
          <div  class = "row">
            <h3 class="py-5"><i class="bi bi-chat-left-text"></i> Comentários</h3>
          </div>
        </div> 
      @foreach ($coments as $coment) 
      <div id="chat" class = "container ">
        <div class= "col-md-6 offset-md-3">
          <div  class = "row">
            <div class="card ">
              <div class="card-body ">
                <h6>{{$coment->Nome}}</h6>
                <p>{{$coment->Comentario}}</p>
                    </div>
                </div>  
            </div>
        </div>
  </div>
</div>
@endforeach
@endsection