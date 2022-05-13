<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> CASYS </title>
    <link rel="icon" href="{{ asset('img/logocastano.png')}}" />

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    @livewireStyles
</head>

<body class="bg-gradient" style="background-color: #a4cb39; font-family: Century Gothic">


    

    <div class="row justify-content-center">
        <br>

        <div class="col-xl-10 col-lg-12 col-md-10">
            <br>
            <br>
            <br>
            <br>
    
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block">
                            <img src="img/logocastano.png" class="rounded mx-auto d-block" width="450" height="445" alt="...">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="text-center" style="color:#3a3e7b"><strong>¡BIENVENIDO!</strong></h1>
                                    <h5 class="text-center" style="color: black">Ingresa con tu usuario y contraseña.</h5>
                                </div>


                                <form class="mt-4" method="POST" action="/ingresar" >
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input type="text" style="border-color: #a4cb39" class="form-control rounded-pill" id="floatingInput" placeholder="Usuario" name="usuario">
                                        <span></span>
                                      </div>
                                      @if ($errors->has('usuario'))
                                      <p>{{ $errors->first('usuario')}}</p>
                                      @endif
                                      <div class="form-floating">
                                        <input type="password" style="border-color: #a4cb39" class="form-control rounded-pill" id="floatingPassword" name="password" placeholder="Contraseña">  
                                        
                                    </div>
                                      @error('password')
                                      <div class="alert alert-danger d-flex align-items-center" role="alert">
                                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                      <span>Pendiente de ingreso</span>
                                      </div>
                                      @enderror
                                    </div>
                                    
                                    <hr>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Ingresar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    
    </div>
    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    
    @livewireScripts
</body>

</html>
