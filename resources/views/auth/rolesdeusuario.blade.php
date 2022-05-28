<h1 class="text-3xl text-center font-bold">Roles disponibles</h1>
<br>

<div class="table-responsive">
    <table class="table table-bordered table-success table-striped">
        <thead>
            <tr>
                <th>NO.</th>
                <th>ROL</th>
                <th>ESTADO</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $rol)
                <tr>
                    <td>{{$rol->ID_ROL}}</td>
                    <td>{{$rol->DESCRIPCION}}</td>
                    @if($rol->ESTADO==1)
                    <td>Activo</td>   
                    @else
                        <td>Inactivo</td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</div>