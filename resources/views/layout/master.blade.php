<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    {{-- Data Table --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    {{-- End --}}
    <title>
        @yield('todolist')
    </title>
</head>
<body>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            {{-- Sidebar --}}
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-primary">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none col-md-3">
                        <div class="offset-md-10 pt-2">
                            <h3>TMS</h3>
                        </div>
                        <img src="images/logo.png" width="50rem" height="auto" alt="logo">
                    </a>
                    <h6 class="mt-3">Task Management System</h6>
    
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li>
                            <a href="{{route('dashboard.index')}}"  class="nav-link px-0 align-middle mt-4 text-white">
                                <i class="fa-solid fa-gauge"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                        </li>
                        <li>
                            <a href="{{route('projects.index')}}" class="nav-link px-0 align-middle text-white">
                                <i class="fa-solid fa-diagram-project"></i> <span class="ms-1 d-none d-sm-inline">Projects</span></a>
                        </li>
                        <li>
                            <a href="{{route('tasks.index')}}" class="nav-link px-0 align-middle text-white ">
                                <i class="fa-solid fa-list-check"></i> <span class="ms-1 d-none d-sm-inline">Task</span></a>
                        </li>
                        <li>
                            <a href="{{route('history.index')}}" class="nav-link px-0 align-middle text-white ">
                                <i class="fa-solid fa-box-archive"></i> <span class="ms-1 d-none d-sm-inline">Task History</span></a>
                        </li>
                        <li>
                            <a href="{{route('reports.index')}}"  class="nav-link px-0 align-middle text-white">
                                <i class="fa-solid fa-chart-simple"></i> <span class="ms-1 d-none d-sm-inline">Reports</span> </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"  id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user" class="rounded-circle"></i>
                            <span class="d-none d-sm-inline mx-1">Admin</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- End of Sidebar --}}
    
            <div class="col py-3">
                <div class="card col-sm-12 btn btn-outline-white ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 text-white">
                                <div class="card bg-primary" style="height:3rem">
                                    <a href="{{route('dashboard.index')}}" class="nav-link px-0 align-middle ">
                                        <i class="fa-solid fa-diagram-project"></i> <span class="ms-1 d-none d-sm-inline">Projects</span></a>
                                </div>
                              </div>
                              <div class="col-md-3  text-white">
                                <div class="card bg-primary" style="height:3rem">
                                    <a href="{{route('tasks.index')}}" class="nav-link px-0 align-middle ">
                                        <i class="fa-solid fa-list-check"></i> <span class="ms-1 d-none d-sm-inline">Task</span></a>
                                </div>
                              </div>
                              <div class="col-md-3 text-white">
                                <div class="card bg-primary" style="height:3rem">
                                    <a href="{{route('history.index')}}" class="nav-link px-0 align-middle ">
                                        <i class="fa-solid fa-box-archive"></i> <span class="ms-1 d-none d-sm-inline">Task History</span></a>
                                </div>
                              </div>
                              <div class="col-md-3 text-white">
                                <div class="card bg-primary" style="height:3rem">
                                    <a href="{{route('reports.index')}}" class="nav-link px-0 align-middle">
                                        <i class="fa-solid fa-chart-simple"></i> <span class="ms-1 d-none d-sm-inline">Reports</span> </a>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
               <div class="card col-sm-12 mt-3">
                <div class="card-body">
                    @yield('content')
                </div>
               </div>

            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/4970a3c003.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    {{-- Data Table --}}
       <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
       <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
       <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    {{-- End --}}
    @if (session('status'))
            <script>
                swal("{{ session('status') }}");
            </script>
    @endif

    <script>
        $(document).ready(function() {
            var table = $('#table').DataTable( {
                responsive: true
            } );
        
            new $.fn.dataTable.FixedHeader( table );
        } );
   </script>
</body>
</html>