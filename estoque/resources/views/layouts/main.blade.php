{{-- arquivo principal --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">


        <!-- Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	

        <!-- CSS -->
        <link rel="stylesheet" href="/css/styles.css">
        <!-- JS -->
        <script src="/js/script.js"></script>
       
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-ligh">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/01.jpg" alt="logo do projeto">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="/categorias" class="nav-link">Categoria</a></li>
                        <li class="nav-item"><a href="/categorias/create" class="nav-link">Nova Categoria</a></li>
                        <li class="nav-item"><a href="/produtos" class="nav-link">Produto</a></li>
                        <li class="nav-item"><a href="/produtos/create" class="nav-link">Novo Produto</a></li>
                        <li class="nav-item"><a href="/movimentacao/create" class="nav-link">Movimentar Estoque</a></li>
                        <!-- <li class="nav-item"><a href="/entradas" class="nav-link"> Entrada</a></li>
                        <li class="nav-item"><a href="/saidas" class="nav-link"> Saída </a></li> -->
                    </ul>
                </div>

            </nav>
        </header>

        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                        <p class="msg">{{ session('msg') }}</p>
                    @endif
                    @yield('content')

                </div>
            </div>
        </main>

       



        <footer>
            <hr>
            <p> Aplicação criada para controle de estoque</p>
        </footer>

        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    
    </body>
</html>