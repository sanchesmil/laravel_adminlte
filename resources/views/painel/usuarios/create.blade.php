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

            <!-- Mostra o caminho da página atual no topo da página  -->
            <li class="breadcrumb-item"> {{$title}}</li>
         
          
          </ol>
        </div>
      </div>
    </div>
  </div> 
  
  
  <!-- Conteúdo principal -->
  <section class="content">
    <div class="row">  
      <div class="col-12">  <!-- Cria a div que contém a tabela de usuários -->
      
        <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">Cadastrando Usuário</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form role="form" method="POST" action="{{route('painel.usuarios.store')}}">
                @csrf  <!-- Cria input token de validacao do form contra ataques "cross-site request forgery" -->
              
                @if(session('error'))  <!-- Exibe erros se não criar novo usuario -->
                  <span class="alert alert-danger">{{session('error')}}</span>
                @endif

                <!-- input nome -->
                <div class="form-group">
                  <label class="col-form-label" for="name"><i class="far fa-times-circle"></i> Nome Completo</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome ... " value="{{old('name')}}" required>
                </div>

                <!-- input email -->
                <div class="form-group">
                  <label class="col-form-label" for="email"><i class="far fa-times-circle"></i> E-mail</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Digite o e-mail ... " value="{{old('email')}}" required>
                </div>

                <!-- input senha -->
                <div class="form-group">
                  <label class="col-form-label" for="password"><i class="far fa-times-circle"></i> Senha</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Digite a senha ..." required>
                </div>

                <!-- select -->
                <div class="form-group">
                  <label>Função</label>
                  <select class="form-control"  required>
                    <option value="" >Escolha a função</option>
                    @foreach($roles as $role)
                      <option value="{{$role->id ?? ''}}">{{$role->name ?? ''}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                  <a href="{{route('painel.principal.index')}}" type="submit" class="btn btn-danger pull-right">Cancelar</a>
                </div>

              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col 6 -->
      </div>
      <!-- /.col 12 -->
    </div>
    <!-- /.row (main row) -->
  </section> <!-- /.content -->

</div> <!-- ./Content Wrapper -->

@endsection