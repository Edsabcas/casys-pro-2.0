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

</head>

<body class="bg-gradient-primary">

    

    <div class="container">
        <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 
        rounded-lg shadow-lg"> 
        
            <h1 class="text-3xl text-center font-bold">Ingresar</h1>
        
            <form class="mt-4" method="POST" action="/ingresar" >
             @csrf
              <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Usuario" name="usuario">
        
            @error('usuario')
        <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <span>Pendiente de ingreso</span>
        </div>
        @enderror
        
            <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña"
            id="password" name="password">
            
            @error('password')
        <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <span>Pendiente de ingreso</span>
        </div>
        @enderror
        
            <div>
            <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg
            text-white font-semibold p-2 my-3 hover:bg-indigo-600"  >Ingresar</button>
          </div>
        
        
        
            </form>
        
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
