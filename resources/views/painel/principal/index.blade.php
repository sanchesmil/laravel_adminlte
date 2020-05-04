@extends('painel.layouts.index')

@section('content')

<!-- Cria a área que receberá o conteúdo da página -->
<div class="content-wrapper">

<div class="content-header"> <!-- Cabeçalho da página -->
  <div class="container-fluid"> 
    <div class="row mb-6">
      <div class="col-sm-6">
            <h1>Painel de Controle - <small>Sistema {{env('APP_NAME')}}</small> </h1>  
      </div>
      <div class="col-sm-6"> <!-- Define o caminho da página -->
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active"><a href="{{route('home.index')}}">Home</a></li>

          <!-- Mostra o caminho da página atual no topo da página  -->
          @if(isset($urlAtual))
              <li class="breadcrumb-item"> {{$urlAtual}}</li>
          @else
              <li class="breadcrumb-item"> Página Principal</li>
          @endif
        
        </ol>
      </div>
    </div>
  </div>
</div> 

<!-- Conteúdo principal -->
<section class="content">
    <div class="container-fluid">  <!-- Apresenta os módulos/icones do sistema -->
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-teal">
              <div class="inner">

                <!-- Injeta a model User na variável 'usuarios' -->
                @inject('usuarios', 'App\User') 
                  <h3>{{$usuarios->count()}}</h3>  <!-- Recupera a qtd usuários no banco -->
               
                  @if($usuarios->count() == 1)
                    <p>Usuário</p>
                  @else
                    <p>Usuários</p>
                  @endif

              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="{{route('painel.usuarios.index')}}" class="small-box-footer">Administrar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div><!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section> <!-- /.content -->

</div> <!-- ./Content Wrapper -->
@endsection