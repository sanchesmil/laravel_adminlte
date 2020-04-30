<!DOCTYPE html>
<html>

    @includeIf('painel.layouts.head')  <!-- Inclui o head no template -->

    <body class="hold-transition sidebar-mini layout-fixed">
    
        <div class="wrapper">

            @includeIf('painel.layouts.navbar') <!-- Inclui o menu superior no template -->

            @includeIf('painel.layouts.sidebar')  <!-- Inclui o menu lateral esquerdo no template -->

            <!-- Cria a área que receberá o conteúdo da página -->
            <div class="content-wrapper">
                
                <div class="content-header"> <!-- Cabeçalho da página -->
                    <div class="container-fluid"> 
                        <div class="row mb-6">
                            <div class="col-sm-6">
                                <h1><a href="{{route('painel.index')}}" style="color: inherit;">Painel de Controle </a>   
                                    <!-- Mostra o caminho da página atual no topo da página  -->
                                    @if(isset($urlAtual))
                                        <small class="breadcrumb-item active"> - {{$urlAtual}}</small>
                                    @else
                                        <small class="breadcrumb-item active"> - Página Principal</small>
                                    @endif
                                </h1>
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
                
                @yield('content') <!-- Injeta o conteúdo da section 'content' do arquivo chamador  -->

            </div> <!-- ./Content Wrapper -->

            @includeIf('painel.layouts.footer') <!-- inclui o arquivo de rodapé -->

            @includeIf('painel.layouts.asside') <!-- Inclui o menu lateral direito no template -->
            
        </div><!-- ./wrapper -->

    @includeIf('painel.layouts.javascript') <!-- Inclui os scripts no template -->

    </body>
</html>
