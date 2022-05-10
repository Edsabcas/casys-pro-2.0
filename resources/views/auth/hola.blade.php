<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> CASYS </title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    

    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">
    
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block">
                            <img src="https://scontent.fgua3-4.fna.fbcdn.net/v/t1.6435-9/86498843_608790926346868_7368970768085942272_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=0debeb&_nc_ohc=_V5tgzPwEhcAX8SV-IC&_nc_ht=scontent.fgua3-4.fna&oh=00_AT8VKJ_WXwNP6d_5idtvic2ksvXV5kYQJLctlbjYJNXbfw&oe=6270C593" class="rounded mx-auto d-block" width="500" height="415" alt="...">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Bienvenido</h1>
                                </div>


                                    

                                <form class="mt-4" method="POST" action="/ingresar" >
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Usuario" name="usuario">
                                        <label for="floatingInput">Usuario</label>
                                      </div>
                                      @error('usuario')
                                      <div class="alert alert-danger d-flex align-items-center" role="alert">
                                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                      <span>Pendiente de ingreso</span>
                                      </div>
                                      @enderror

                                      <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                                        <label for="floatingPassword">Contraseña</label>
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
                                @isset($mensaje20)
                                @if($mensaje20 != null)
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                  <div>{{$mensaje20}}
                                  </div>
                                </div>
                                @endif
                                @endisset

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

</body>

</html>
