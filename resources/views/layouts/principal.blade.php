<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
  </head>
  <body>
<nav class="navbar navbar-default-border">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Livraria</a>
    </div>


      <div class="container">
        <div class="page-header">
          <h1>Livraria IME</h1>
          <p></p>
        </div>

      @yield('content')

      <footer class="footer">
        <p>Curso de verao 2017 - IME USP</p>
      </footer>

      </div>

      <script type="text/javascript" src="/js/app.js">
      </script>      
    </div>
  </nav>
    </body>
</html>

{{--
@yield('title') para cada pagina poder adicinar seu titulo --}}


{{-- É necessario utilizar o conteudo dentro de @@section('content')
 e @@section --}}
