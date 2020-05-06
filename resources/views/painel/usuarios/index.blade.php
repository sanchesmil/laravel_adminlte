@extends('painel.layouts.index')

@section('content')

<!-- Cria a área que receberá o conteúdo da página -->
<div class="content-wrapper">
                
  <div class="content-header"> <!-- Cabeçalho da página -->
    <div class="container-fluid"> 
      <div class="row mb-6">
        <div class="col-sm-6">
          <h1>{{$title}} - <small>Sistema {{env('APP_NAME')}}</small> </h1>
        </div>
        <div class="col-sm-6"> <!-- Define o caminho da página -->
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active"><a href="{{route('home.index')}}">Home</a></li>
            <li class="breadcrumb-item">{{$title}}</li>         
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
            <h3 class="card-title">Adicionar | <a href="{{route('painel.usuarios.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i></a>
                @if(session('success'))  <!-- Exibe erros se não criar novo usuario -->
                  <span class="alert alert-success">| {{session('success')}}</span>
                @endif
            </h3>
          </div>


          <!-- /.card-header -->
          <div class="card-body">
            <table id="tab_users" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>E-mail</th>
                  <th>Cadastro</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                @foreach($usuarios as $usuario)
                  <tr>
                    <td>{{$usuario->id}}</td>
                    <td>{{$usuario->name}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>{{$usuario->created_at->diffForHumans()}}</td>
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
                  <th>E-mail</th>
                  <th>Cadastro</th>
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