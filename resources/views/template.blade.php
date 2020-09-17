<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TorpedeX &#10146; @yield('titulo', '')</title>
        <meta name="keywords" content="@yield('keywords', 'torpedex, envio, sms, grátis, envio de sms grátis')">
        <meta name="description" content="@yield('description', 'Envie SMS grátis para todo o Brasil!')">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    </head>

    <body>


      <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ asset('/') }}">TorpedeX &#10146;</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ asset('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ asset('planos') }}">Para Empresas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ asset('sobre') }}">Sobre</a>
              </li>
            </ul>



              @if (Route::has('login'))
              <span class="navbar-text">
                <ul class="navbar-nav mr-auto mb-0 mb-lg-0">
                      @auth
                        <li class="nav-item">
                          <a href="{{ url('/home') }}" class="nav-link">{{ Auth::user()->name }}</a>
                        </li>
                        <li class="nav-item">
                          <a href="{{ route('logout') }}" class="nav-link"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              Sair
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                        </li>






                      @else
                        <li class="nav-item">
                          <a href="{{ route('login') }}" class="nav-link">Login</a>
                        </li>

                          @if (Route::has('register'))
                            <li class="nav-item">
                              <a href="{{ route('register') }}" class="nav-link">Register</a>
                            </li>
                          @endif
                      @endif
                    </ul>
                  </span>
              @endif




          </div>
        </div>
      </nav>


<div class="container" style="padding-top: 80px">

  <div class="title m-b-md">
        <h1>&#10146; @yield('titulo', '')</h1>
  </div>
 <section class="content">
                @yield('conteudo')
</section>

        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
            Build v{{ Illuminate\Foundation\Application::VERSION }}
        </div>
</div>






<!-- Modal -->
<div class="modal fade" id="modal_aguarde" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Aguarde...</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        @yield('js')
    </body>
</html>
