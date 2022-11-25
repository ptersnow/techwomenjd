@extends('layouts.main')

@section('content')

    <form action="/events" method="POST" class="py-5" id="vag">
    <!--diretiva pro formulario funcionar-->
        @csrf 
        <div id="vaga" class="container">
        <div class= "col-md-6 offset-md-3">
        <div id="linha" class="card text-dark bg-light mb-3" style="max-width: 100rem;">
        <div class="card-body text-dark">

        <div id="topo" class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome da empresa</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="digite o nome da empresa">
        </div>
                        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Descrição da empresa</label>
            <textarea class="form-control" id="descriçãoE" name="descriçãoE" rows="3" placeholder="descreva a empresa"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Descrição da vaga de emprego (ex: setor...)</label>
            <textarea class="form-control" id="descriçãoV" name="descriçãoV" rows="3" placeholder="descreva a vaga"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Requisitos da vaga (ex: ensino médio completo...)</label>
            <textarea class="form-control" id="requisitos" name="requisitos" rows="3" placeholder="descreva os requisitos"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Benefícios da vaga (ex: salário, vale refeição...)</label>
            <textarea class="form-control" id="beneficios" name="beneficios" rows="3" placeholder="descreva os benefícios"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Informações para Contato:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email de contato">
            <p> ou </p>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Número de Telefone">
        </div>
        <div class="col-12">
            <input type="submit" class="btn  button-primay btn-primary button" value="Cadastrar">
        </div>
        </div>
    </div>
</div>
</div>
</div>
</form>
@endsection

