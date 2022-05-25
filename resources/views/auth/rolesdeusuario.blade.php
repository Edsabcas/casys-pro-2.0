<div class="table-responsive">
    <table class="table table-bordered">
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
                    <td>{{$rol->ESTADO}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>