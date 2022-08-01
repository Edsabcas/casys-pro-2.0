<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF_Usuarios</title>
</head>
<body style="
margin-left: 75px;
margin-right: 75px;
margin-top: 35px;
margin-bottom: 35px;
">
    <div class="row">
        <img align="left" src="imagen/actividades/img1651798574.png" height="80" weight="80" alt="...">
        <center>
            <br>
            <strong><p style="text-align: center; font-size: 20px; color:#a4cb39;">CREDENCIALES DE ACCESO PARA CASYS {{$datos_usuario[0]}}</p></strong></center>
    </div>
    <p style="text-align: justify; font-size: 14px">Estimado encargado(a) por medio de la presente se le hace entrega
    de sus respectivas credenciales para el acceso a su perfil de CASYS: </p>
    <ul>
        <h4 style="color:#a4cb39">Usuario del ENCARGADO: </h4>
        <li style="text-align: justify; font-size: 12px;"><strong>Usuario:</strong> {{$datos_usuario[1]}}</li>
        <li style="text-align: justify; font-size: 12px;"><strong>Contraseña:</strong> Cole2023</li>
        <li style="text-align: justify; font-size: 12px;"><strong>Correo electrónico:</strong> {{$datos_usuario[2]}}</li>
    </ul>
    <br>
    <hr>
    <ul>
        <h4 style="color:#a4cb39">Usuario del ALUMNO: </h4>
        <li style="text-align: justify; font-size: 12px"><strong>Usuario:</strong> {{$datos_usuario[3]}}</li>
        <li style="text-align: justify; font-size: 12px"><strong>Contraseña:</strong> Cole2023</li>
        <li style="text-align: justify; font-size: 12px"><strong>Correo electrónico:</strong> {{$datos_usuario[4]}}</li>
    </ul>
    <br>
    <br>
    <div class="row">
        <p style="text-align: center; font-size: 15"><strong>"Formando Mentes Brillantes"</strong></p>
        <img align="left" src="imagen//casys logo.jpeg" height="80" weight="80" alt="...">
        <center>
            <br>
            <strong><p style="text-align: center; font-size: 20px; color:#a4cb39;">CREDENCIALES DE ACCESO PARA CASYS {{$datos_usuario[0]}}</p></strong></center>
    </div>
    

</body>
</html>