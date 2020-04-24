<!DOCTYPE html>
<html>

    @includeIf('painel.layouts.head')  <!-- Inclui o head no template -->

    <body class="hold-transition sidebar-mini layout-fixed">
    
        <div class="wrapper">

            @includeIf('painel.layouts.navbar') <!-- Inclui o menu superior no template -->

            @includeIf('painel.layouts.sidebar')  <!-- Inclui o menu lateral esquerdo no template -->

            <!-- Content Wrapper. Contém o conteúdo da página -->
            <div class="content-wrapper">
                
                <div class="content-header"> <!-- Content Header (Cabeçalho da página) -->
                    <div class="container-fluid">
                        <div class="row mb-6">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">Painel de Controle</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Página Principal</li>
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
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
