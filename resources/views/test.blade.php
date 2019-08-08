<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="initial-scale=1, shrink-to-fit=no, width=device-width" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS -->
    <!-- Add Material font (Roboto) and Material icon as needed -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Add Material CSS, replace Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <header class="navbar navbar-dark navbar-full bg-primary doc-navbar-default py-3">
        <button aria-controls="navdrawerDefault" aria-expanded="false" aria-label="Toggle Navdrawer"
            class="navbar-toggler" data-target="#navdrawerDefault" data-toggle="navdrawer">
            <span class="navbar-toggler-icon text-dark"></span>
        </button>
        <span class="navbar-brand mr-auto"><img class="my_logo" src="{{asset('img/logo/armonia.png')}}" alt="logo">
        </span>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown text-dark">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </header>
    <div aria-hidden="true" class="navdrawer" id="navdrawerDefault" tabindex="-1">
        <div class="navdrawer-content">
            <div class="navdrawer-header">
                <a class="navbar-brand px-0 py-4" href="#">Juan Carlos Suazo</a>
            </div>
            <nav class="navdrawer-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons mr-3">receipt</i> Noticias
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Listar Noticias</a>
                        <a class="dropdown-item" href="#">Agregar Noticia</a>
                        <a class="dropdown-item" href="#">Palabras Importantes</a>
                    </div>
                </li>
            </nav>
            <nav class="navdrawer-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons mr-3">notes</i> Titulares y Editoriales
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Listar Titulares</a>
                        <a class="dropdown-item" href="#">Agregar Titulares</a>
                    </div>
                </li>
            </nav>
            <nav class="navdrawer-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons mr-3">local_offer</i> Categorías
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Listar Categoría</a>
                        <a class="dropdown-item" href="#">Agregar Categoría</a>
                    </div>
                </li>
            </nav>
            <nav class="navdrawer-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons mr-3">location_city</i> Empresas
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Listar Empresas</a>
                        <a class="dropdown-item" href="#">Agregar Empresa</a>
                    </div>
                </li>
            </nav>
            <nav class="navdrawer-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons mr-3">assignment</i> Periódicos
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Listar Periódicos</a>
                        <a class="dropdown-item" href="#">Agregar Periódicos</a>
                        <div class="navdrawer-divider"></div>
                        <a class="dropdown-item" href="#">Listar Secciones</a>
                        <a class="dropdown-item" href="#">Agregar Secciones</a>
                        <div class="navdrawer-divider"></div>
                        <a class="dropdown-item" href="#">Listar SubSecciones</a>
                        <a class="dropdown-item" href="#">Agregar SubSecciones</a>
                    </div>
                </li>
            </nav>
            <nav class="navdrawer-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons mr-3">trending_up</i> Estadísticas
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Informe</a>
                    </div>
                </li>
            </nav>
            <nav class="navdrawer-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons mr-3">people</i> Usuarios
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Listar Usuarios</a>
                        <a class="dropdown-item" href="#">Agregar Usuarios</a>
                    </div>
                </li>
            </nav>
            <nav class="navdrawer-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons mr-3">update</i> Actualizaciones
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Listar Actualizaciones</a>
                        <a class="dropdown-item" href="#">Enviar Archivo PDF</a>
                        <a class="dropdown-item" href="#">Enviar Archivo Word</a>
                    </div>
                </li>
            </nav>
            <nav class="navdrawer-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons mr-3">backup</i> Respaldo
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Respaldar base de datos</a>
                    </div>
                </li>
            </nav>

        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-between">
            <div class="col-sm d-flex">
                <h2 class="mr-4">Noticias</h2>
                <button type="button" class="btn btn-info btn-lg my-1">Agregar Noticia</button>
            </div>
            <div class="col-sm">
                <h2 class="text-right">Miercoles, 07 Agosto 2019</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="card">
            <div class="card-header d-flex pr-0">
                {{-- <h5 class="card-title mb-0">Card title</h5> --}}
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Periódicos</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Todos</option>
                        <option>Listin Diario</option>
                        <option>El Caribe</option>
                        <option>El País</option>
                        <option>Diario Libre</option>
                    </select>
                </div>
                <div class="card-actions ml-auto py-0">
                    <div class="dropdown">
                        <button aria-expanded="false" aria-haspopup="true" class="btn btn-outline my-0"
                            data-toggle="dropdown" id="cardTableDrop1" type="button"><i
                                class="material-icons">filter_list</i></button>
                        <div aria-labelledby="cardTableDrop1" class="dropdown-menu dropdown-menu-right menu">
                            <a class="dropdown-item" href="#">Filter 1</a>
                            <a class="dropdown-item" href="#">Filter 2</a>
                            <a class="dropdown-item" href="#">Filter 3</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button aria-expanded="false" aria-haspopup="true" class="btn btn-outline my-0"
                            data-toggle="dropdown" id="cardTableDrop2" type="button"><i
                                class="material-icons">more_vert</i></button>
                        <div aria-labelledby="cardTableDrop2" class="dropdown-menu dropdown-menu-right menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table mb-0">
                <thead class="text-dark">
                    <tr>
                        <th scope="col">
                            <h4 class="m-0">Editar</h4>
                        </th>
                        <th scope="col">
                            <h4 class="m-0">Fecha</h4>
                        </th>
                        <th scope="col">
                            <h4 class="m-0">Periódico</h4>
                        </th>
                        <th scope="col">
                            <h4 class="m-0">Titular</h4>
                        </th>
                        <th scope="col">
                            <h4 class="m-0">Sección</h4>
                        </th>
                        <th scope="col">
                            <h4 class="m-0">SubSección</h4>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><i class="material-icons mr-3">notes</i> </th>
                        <td>27/04/1998</td>
                        <td>Argentarium.com</td>
                        <td>Ea et ut officiis eum vitae.</td>
                        <td>Congreso/congresistas/ leyes</td>
                        <td>Accidentes de tránsito</td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="material-icons mr-3">notes</i> </th>
                        <td>27/04/1998</td>
                        <td>El Nacional</td>
                        <td>Quia architecto asperiores quam enim voluptas.</td>
                        <td>CMA DE SERVICIOS - Casa del Conductor</td>
                        <td>Accidente Aéreo</td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="material-icons mr-3">notes</i> </th>
                        <td>27/04/1998</td>
                        <td>El Día</td>
                        <td>Autem rerum hic et temporibus ipsa.</td>
                        <td>Claro-Codetel</td>
                        <td>Acceso información</td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="material-icons mr-3">notes</i> </th>
                        <td>27/04/1998</td>
                        <td>Argentarium.com</td>
                        <td>Ea et ut officiis eum vitae.</td>
                        <td>Congreso/congresistas/ leyes</td>
                        <td>Accidentes de tránsito</td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="material-icons mr-3">notes</i> </th>
                        <td>27/04/1998</td>
                        <td>El Nacional</td>
                        <td>Quia architecto asperiores quam enim voluptas.</td>
                        <td>CMA DE SERVICIOS - Casa del Conductor</td>
                        <td>Accidente Aéreo</td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="material-icons mr-3">notes</i> </th>
                        <td>27/04/1998</td>
                        <td>El Día</td>
                        <td>Autem rerum hic et temporibus ipsa.</td>
                        <td>Claro-Codetel</td>
                        <td>Acceso información</td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="material-icons mr-3">notes</i> </th>
                        <td>27/04/1998</td>
                        <td>Argentarium.com</td>
                        <td>Ea et ut officiis eum vitae.</td>
                        <td>Congreso/congresistas/ leyes</td>
                        <td>Accidentes de tránsito</td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="material-icons mr-3">notes</i> </th>
                        <td>27/04/1998</td>
                        <td>El Nacional</td>
                        <td>Quia architecto asperiores quam enim voluptas.</td>
                        <td>CMA DE SERVICIOS - Casa del Conductor</td>
                        <td>Accidente Aéreo</td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="material-icons mr-3">notes</i> </th>
                        <td>27/04/1998</td>
                        <td>El Día</td>
                        <td>Autem rerum hic et temporibus ipsa.</td>
                        <td>Claro-Codetel</td>
                        <td>Acceso información</td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="material-icons mr-3">notes</i> </th>
                        <td>27/04/1998</td>
                        <td>Argentarium.com</td>
                        <td>Ea et ut officiis eum vitae.</td>
                        <td>Congreso/congresistas/ leyes</td>
                        <td>Accidentes de tránsito</td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="material-icons mr-3">notes</i> </th>
                        <td>27/04/1998</td>
                        <td>El Nacional</td>
                        <td>Quia architecto asperiores quam enim voluptas.</td>
                        <td>CMA DE SERVICIOS - Casa del Conductor</td>
                        <td>Accidente Aéreo</td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="material-icons mr-3">notes</i> </th>
                        <td>27/04/1998</td>
                        <td>El Día</td>
                        <td>Autem rerum hic et temporibus ipsa.</td>
                        <td>Claro-Codetel</td>
                        <td>Acceso información</td>
                    </tr>
                </tbody>
            </table>
            <hr class="my-0 w-100">
            <div class="card-actions align-items-center justify-content-end">
                <span class="align-self-center mb-1 mx-1 text-muted">Rows per page:</span>
                <div class="dropdown">
                    <button aria-expanded="false" aria-haspopup="true" class="btn btn-outline dropdown-toggle"
                        data-toggle="dropdown" type="button">3</button>
                    <div class="dropdown-menu dropdown-menu-right menu">
                        <a class="dropdown-item active" href="#">3</a>
                        <a class="dropdown-item" href="#">10</a>
                        <a class="dropdown-item" href="#">100</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Show all</a>
                    </div>
                </div>
                <span class="align-self-center mb-1 mr-2 text-muted">1-3 of 300</span>
                <a class="btn btn-outline" href="#"><i class="material-icons">chevron_left</i></a>
                <a class="btn btn-outline" href="#"><i class="material-icons">chevron_right</i></a>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <!-- Then Material JavaScript on top of Bootstrap JavaScript -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
