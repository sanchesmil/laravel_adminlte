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
                <h3>0</h3>

                <p>Usuários</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">Administrar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div><!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section> <!-- /.content -->

@endsection