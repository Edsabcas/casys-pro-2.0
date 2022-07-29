<div  wire:ignore.self class="modal fade" id="eliminaradmision" data-bs-toggle="modal" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" tabindex="-1" aria-labelledby="eliminaranuncio" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header"  style="background:#a4cb39;color:rgba(255, 255, 255, 255.255)">
        
        </div>
        <div class="modal-body">
            <h5 class="modal-title text-center" id="staticBackdropLabel" style="color:#3a3e7b"><b>¿Está seguro de eliminar esta gestión?, esta acción será irreversible.</b></h5>    
            <table class="table table-striped">
                <table class="table table-light table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">NÚMERO_GESTION</th>
                        <th scope="col">NOMBRES</th>
                        <th scope="col">APELLIDOS</th>
                        <th scope="col">CUI</th>
                        <th scope="col">GRADO</th>
                        <th scope="col">DPI</th>
                      </tr>
                    </thead>
            <tbody>
                @foreach ($gestion_a_eliminar as $gestion_eliminar)
                <tr>
                    <th scope="row">{{ $gestion_eliminar->NO_GESTION}}</th>
                    <td>{{ $gestion_eliminar->NOMBRES}}</td>
                    <td>{{ $gestion_eliminar->APELLIDOS}}</td>
                    <td>{{ $gestion_eliminar->CUI}}</td>
                    <td>{{ $gestion_eliminar->GRADO}}</td>
                    <td>{{ $gestion_eliminar->DPI}}</td>
                  
                  </tr>                        
                @endforeach
            
            </tbody>
        </table> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-editb"  style="border-radius: 12px;" wire:click='eliminar_la_gestion({{$eliminar_no_gestion}})'  data-bs-dismiss="modal">Si</button>
          <button type="button" class="btn btn-secondary"  style="border-radius: 12px;"  id="info"  data-bs-dismiss="modal">No</button>
          
        </div>
      </div>
    </div>
    </div>