@extends('painel.layouts.index')

@section('content')

<!-- Cria a área que receberá o conteúdo da página -->
<div class="content-wrapper">
                
  <div class="content-header"> <!-- Cabeçalho da página -->
    <div class="container-fluid"> 
      <div class="row mb-6">
        <div class="col-sm-6">
          <h1>Lista de Usuários - <small>Sistema {{env('APP_NAME')}}</small> </h1>
        </div>
        <div class="col-sm-6"> <!-- Define o caminho da página -->
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active"><a href="{{route('home.index')}}">Home</a></li>

            <!-- Mostra o caminho da página atual no topo da página  -->
            @if(isset($urlAtual))
                <li class="breadcrumb-item"> {{$urlAtual}}</li> 
            @else
                <li class="breadcrumb-item"> Lista de usuários</li>
            @endif
          
          </ol>
        </div>
      </div>
    </div>
  </div> 
  
  <!-- Conteúdo principal -->
  <section class="content">
    <div class="row">  
      <div class="col-12">  <!-- Cria a div que contém a tabela de usuários -->
       Chegou!
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row (main row) -->
  </section> <!-- /.content -->

</div> <!-- ./Content Wrapper -->

@endsection