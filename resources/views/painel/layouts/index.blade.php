<!DOCTYPE html>
<html>

    @includeIf('painel.layouts.head')  <!-- Inclui o head no template -->

    <body class="hold-transition sidebar-mini layout-fixed">
    
        <div class="wrapper">

            @includeIf('painel.layouts.navbar') <!-- Inclui o menu superior no template -->

            @includeIf('painel.layouts.sidebar')  <!-- Inclui o menu lateral esquerdo no template -->                
                
            @yield('content') <!-- Injeta o conteúdo PRINCIPAL da section 'content' do arquivo chamador  -->
           
            @includeIf('painel.layouts.footer') <!-- inclui o arquivo de rodapé -->

            @includeIf('painel.layouts.asside') <!-- Inclui o menu lateral direito no template -->
            
        </div><!-- ./wrapper -->

    @includeIf('painel.layouts.javascript') <!-- Inclui os scripts no template -->

    </body>
</html>
