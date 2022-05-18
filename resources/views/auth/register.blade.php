@extends('welcome')
@section('contenido')




    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block">
                        <img src="https://scontent.fgua3-4.fna.fbcdn.net/v/t1.6435-9/86498843_608790926346868_7368970768085942272_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=0debeb&_nc_ohc=_V5tgzPwEhcAX8SV-IC&_nc_ht=scontent.fgua3-4.fna&oh=00_AT8VKJ_WXwNP6d_5idtvic2ksvXV5kYQJLctlbjYJNXbfw&oe=6270C593" class="rounded mx-auto d-block" width="500" height="415" alt="...">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registrar</h1>
                            </div>
                            <form class="mt-4" method="POST" action="/register">
    @csrf
    
    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre"
    id="name" name="name">

    @error('name')
<div class="alert alert-danger d-flex align-items-center" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
<span>Pendiente de ingreso</span>
</div>
@enderror

    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="usuario"
    id="usuario" name="usuario">

    @error('usuario')
<div class="alert alert-danger d-flex align-items-center" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
<span>Pendiente de ingreso</span>
</div>
@enderror

    <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="email"
    id="email" name="email">

    @error('email')
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

    <input type="password" class="border border-gray-200 rounded-md bg-gray-200 
    w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" 
    placeholder="Confirmar contraseña" id="password_confirmation" 
    name="password_confirmation">

    <hr>
    <button type="submit" class="btn btn-primary btn-user btn-block">
        Registrar
    </button>
                                    </div>
                                </div>
                
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>

</body>

</html>