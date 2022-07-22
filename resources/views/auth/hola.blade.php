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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
@livewireStyles 
</head>

<body class="bg-gradient" style="background-color: #a4cb39; font-family: Century Gothic">

   
    <div class="row justify-content-center">
        <br>

        <div class="col-xl-10 col-lg-12 col-md-10">
            <br>
            <br>
            <br>
            
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block">
                            <img src="img/logofusion.gif" class="rounded mx-auto d-block" width="450" height="445" alt="...">
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
                                      
                                      <div class="form-floating">
                                        <input type="password" style="border-color: #a4cb39" class="form-control rounded-pill" id="password" name="password" placeholder="Contraseña">  
                                        <div>
                                            <div style="margin-top:15px;">
                                                <input style="margin-left:20px;" type="checkbox" id="mostrar_contrasena" title="clic para mostrar contraseña"/>
                                                &nbsp;&nbsp;Mostrar Contraseña</div>
                                            </div>
                                            <br>
                                        
                                        @error('mensaje20')
                                        <div class="alert alert-danger alert-dismissible fade show rounded-pill" role="alert">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                              </svg>
                                            Usuario y/o contraseña <strong>incorrectos.</strong>
                                        </div>
                                        @enderror
                                        </div>
                                
                                        <button type="submit" class="btn btn-user btn-block text-light rounded-pill" style="background-color: #3a3e7b">

                                            <strong>Ingresar</strong>
                                        </button>
                                    </div>
                                </form>
                                <script>
                                    $(document).ready(function () {
                                      $('#mostrar_contrasena').click(function () {
                                        if ($('#mostrar_contrasena').is(':checked')) {
                                          $('#password').attr('type', 'text');
                                        } else {
                                          $('#password').attr('type', 'password');
                                        }
                                      });
                                    });
                                    </script> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    
    </div>
    
    <footer class="sticky-footer">
        <div class="container my-auto">
            <div class="copyright text-center my-auto" style="color:#3a3e7b">
                <span>Copyright by Castaño | Promo 2021-2022 &copy;</span>
            </div>
        </div>
    </footer>
    

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