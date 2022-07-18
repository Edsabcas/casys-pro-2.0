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
            <strong><p style="font-size: 14px">CREDENCIALES DE ACCESO PARA CASYS {{$datos_usuario[0]}}</p></strong></center>
    </div>
    <br>
    <hr>
    <p style="text-align: justify; font-size: 11px">Estimado encargado(a) por medio de la presente se le hace entrega
    de sus respectivas credenciales para el acceso a su perfil de CASYS: </p>
    <ul>
        <h4>Usuario del ENCARGADO::</h4>
        <li style="text-align: justify; font-size: 11px">Usuario: {{$datos_usuario[1]}}</li>
        <li style="text-align: justify; font-size: 11px">Contraseña: Cole2023</li>
        <li style="text-align: justify; font-size: 11px">Correo electrónico: {{$datos_usuario[2]}}</li>
    </ul>
    <br>
    <hr>
    <ul>
        <h4>Usuario del ALUMNO::</h4>
        <li style="text-align: justify; font-size: 11px">Usuario: {{$datos_usuario[3]}}</li>
        <li style="text-align: justify; font-size: 11px">Contraseña: Cole2023</li>
        <li style="text-align: justify; font-size: 11px">Correo electrónico: {{$datos_usuario[4]}}</li>
    </ul>

    <p style="text-align: center; font-size: 13px"><strong>"Formando Mentes Brillantes"</strong></p>
    

</body>
</html>