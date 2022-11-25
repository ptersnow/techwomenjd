<!DOCTYPE html>
<html lang="pt-br" >

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/imagens/favicon.ico" type="image/x-icon">
    <title>Tech Women</title>
    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('js/main.css')}}">
    

    <link rel = "preconnect" href = "//fonts.googleapis.com">
    <link rel = "preconnect" href = "//fonts.gstatic.com" crossorigin>
    <link href="//fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <header> 
        <div id = "header" class="active">
        <div class = "container">
            <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
        <div class="logo">
        <a class="navbar-brand" href="#">Tech Women</a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="menu">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
               <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
               </li>
               <li class="nav-item">
                <a class="nav-link"  aria-current="page" href="/events/Sobre">Sobre o site</a>
               </li>
               <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/events/Pioneiras">História das Pioneiras</a>
               </li>
               <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/events/Network" >Network</a>
               </li>
               <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/events/formvaga" >Cadastrar vaga</a>
               </li>
               <li class="nav-item">
                <a class="nav-link "  aria-current="page" href="/events/Midias" >Mídias</a>
               </li>
               <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/events/Chat" >Chat</a>
               </li>
            </ul>
        </div>
        </div>
        </div>
            </nav>
        </div>
        </div>
</header>

    @yield('content')

    <footer id = "contato">
      <div class =  "container">
        <div class= "email">
            <img
            src="draw/undraw_real_time_collaboration_c62i.svg" id="img" class="img-fluid" width="150" height="100">
           <h2 class = "title text-center"> Cadastre-se e fique por dentro das novidades </h2>
           <h4 class="subtitle text-center mb-4">
            Receba emails com avisos e informações de novas vagas de emprego e novas atualizações do conteúdos do site  
           </h4>
           
        <form action="/peoples" method="POST" >
        @csrf
             <div class="flex-md-grow-1 pr-md-3 pb-md-0 pb-3">
                <label for = "email" class= "sr-only">Email</label>
                <input type="email" class="form-control w-100" name="email" id ="email" placeholder="Digite seu email">
            </div>
            <div class="flex-grow-1 flex-md-grow-0 ">
            <input type="submit" id="edit_btn" class="btn btn-light button mb-3 d-md-inline d-block w-100" value="Cadastre-se">
        </div>
        </form>
        <div class="icon">
        <div class="row">
        <div class="col-md-12 align-self-right text-right">
              <ul>
                <li>
                <a href="https://www.instagram.com/techwomen.jd/" ><i class="bi bi-instagram" style="font-size: 25px; color: black;"></i></a>
                </li>
                <li>
                <a href="mailto:meninasnati.jd@ifms.edu.br?Subject=mensagem%20sobre%20site" ><i class="bi bi-envelope" style="font-size: 25px; color: black;"></i></a>
               </li>
               <li>
                <a href="https://youtube.com/channel/UC0Axq57aQyx5-dnn2N-TuXw" ><i class="bi bi-youtube" style="font-size: 25px; color: black;"></i></a>
                </li>
              </ul>
            </div>
        </div>
    </div>
    </div>
        </div>
      </div>
      
         
         
             


<script 
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script 
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
</script>
    <script> src = js/main.js</script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
