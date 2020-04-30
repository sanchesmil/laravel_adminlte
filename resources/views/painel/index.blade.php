@extends('painel.layouts.index')

@section('content')
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

@endsection