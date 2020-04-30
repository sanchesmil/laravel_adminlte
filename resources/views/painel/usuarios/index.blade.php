@extends('painel.layouts.index')

@section('content')
<!-- Conteúdo principal -->
<section class="content">
    <div class="container-fluid">  <!-- Apresenta os módulos/icones do sistema -->
        <!-- Small boxes (Stat box) -->
        <div class="row">

          <!-- Cria a div que contém a tabela de usuários -->
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabela de Usuários</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
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
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nome</th>
                      <th>Data Criação</th>
                      <th>E-mail</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div><!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section> <!-- /.content -->

@endsection