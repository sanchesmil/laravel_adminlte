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
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Adicionar | <a href="{{route('painel.usuarios.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i></a></h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="tab_users" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Data Criação</th>
                  <th>E-mail</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                @foreach($usuarios as $usuario)
                  <tr>
                    <td>{{$usuario->id}}</td>
                    <td>{{$usuario->name}}</td>
                    <td>{{$usuario->created_at->diffForHumans()}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>
                        <a href="" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Data Criação</th>
                  <th>E-mail</th>
                  <th>Ações</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row (main row) -->
  </section> <!-- /.content -->

</div> <!-- ./Content Wrapper -->

@endsection