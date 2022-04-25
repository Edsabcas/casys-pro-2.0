<br>
<br>
<div class="card" style="width: 80rem;"> 
    <div class="table-responsive">
        <table class="table">
        <thead>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>ROL</th>
          <th>ESTADO</th>
        </thead>
        <tbody>
    
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{$usuario->ID_USUARIO}}</td>
                <td>{{$usuario->NOMBRE}}</td>
                

                @if($usuario->ROL==1)
                <td>Padre</td>
                @else
                <td>Alumno</td>
                @endif
    
                @if($usuario->ESTADO==1)
                <td>Deudor</td>
                @else
                <td>No deudor</td>
                @endif
              
                
                <td>
                    <span>
                        
                        <td>
                            @include('deudores.modaldeudores')
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal{{$usuario->ID_USUARIO}}">
                              No Deudor
                            </button>
                            
                        </td>
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    
        </table>
      </div>
</div>
