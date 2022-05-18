<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>


<br>
<div class="shadow-lg card" style="background-color: #f4f4f4;">
  <div class="container-sm">
    <br>
    <br>
    <h1 class="form-label" style="font-size:50px">Crear Anuncio</h1>
    <form wire:submit.prevent='' enctype="multipart/form-data">
      @csrf
      <div>
        
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" wire:click="tipo_anuncio()" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          Personalizado
        </label>
      </div>
      @if($tanuncio == 1)
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label" style="font-size:20px">Coloque el público para el anuncio</label>
        <select class="form-select" aria-label="Default select example" wire:model="publico_anuncio">
          <option selected >Elige el público para que vea el anuncio</option>
          @isset($rol)
          @foreach($rol as $role)
          
          @if($role->ID_ROL==3)
          <option value="{{$role->ID_ROL}}">{{$role->DESCRIPCION}}</option>
          @elseif($role->ID_ROL==4)
          <option value="{{$role->ID_ROL}}">{{$role->DESCRIPCION}}</option>
          @elseif($role->ID_ROL==5)
          <option value="{{$role->ID_ROL}}">{{$role->DESCRIPCION}}</option>
          @endif
          @endforeach
          @endisset
        </select>
      </div>
      @if($publico_anuncio==4 or $publico_anuncio==5)
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label" style="font-size:20px">Coloque el grado para el anuncio</label>
        <select class="form-select" aria-label="Default select example" wire:model="grado_anuncio">
          <option selected >Elige el grado para que vea el anuncio</option>
          <option value="0">Todos</option>
          @isset($grado_objetivo)
          @foreach($grado_objetivo as $g_objetivo)
          <option value="{{$g_objetivo->ID_GR}}">{{$g_objetivo->GRADO}}</option>
          @endforeach
          @endisset

        </select>
      </div>
      @endif
       @if($publico_anuncio==3)
       <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label" style="font-size:20px">Desea escojer un idioma en especifíco de maestros?</label>
        <select class="form-select" aria-label="Default select example" wire:model="idioma_maestro">
          <option selected>Desea escojer un idioma en especifíco de maestros?</option>
          @isset($idiomas)
          @foreach($idiomas as $idioma)
          <option value="{{$idioma->ID_IDIOMA}}">{{$idioma->DESCRIPCION_IDIOMA}}</option>
          @endforeach
          @endisset
        </select>
      </div>
       
      <label for="exampleInputPassword1" class="form-label" style="font-size:20px">Coloque el grado para el anuncio</label>
        <select class="form-select" aria-label="Default select example" wire:model="grado_anuncio">
          <option selected >Elige el grado para que vea el anuncio</option>
          <option value="0">Todos</option>
          @isset($grado_objetivo)
          @foreach($grado_objetivo as $g_objetivo)
          <option value="{{$g_objetivo->ID_GR}}">{{$g_objetivo->GRADO}}</option>
          @endforeach
          @endisset

        </select>
      
      @endif
      @if($op_grado==1)
       
       @endif
      
      @endif
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="font-size:20px">Inserte una descripción para el anuncio</label>
          </div>
        <div class="mb-3">
          <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor" rows="4" wire:model="texto_anuncio"></textarea>
        </div>
          
          <label for="exampleInputPassword1" class="form-label" style="font-size:20px">Inserte un archivo para el anuncio</label>
          <div class="mb-3">
            
            <input type="file" id="archivo"  wire:model="archivo_anuncio">
            
          </div>
          @error('file') <span class="error form-label text-white">{{ $message }}</span> @enderror
          <br>
          <br>
          <div class="mb-3">
            @if($tipo==1)
            <h3 class="form-label">Visualización de Imagen</h3>
            <div class="offset-4 col-10">
              <img src="{{$archivo_anuncio->temporaryURL()}}" height="350" weight="350" alt="...">
            </div>
            @endif
            @if($tipo==2)
            <h3 class="form-label">Visualización de Video</h3>
            <video height="500" weight="500" class="card-img-top" alt="..." controls>
              <source src="{{$archivo_anuncio->temporaryURL()}}"  type="video/mp4">
            </video>
            @endif
            @if($tipo==3)
            <h3 class="form-label">Visualización de PDF</h3>
              <iframe width="1250" height="600" src="/imagen/temporalpdf/{{$img}}" frameborder="0"></iframe>
            @endif
          </div>
          
          
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="font-size:20px">Coloque una calidad para el anuncio</label>
            <select class="form-select" aria-label="Default select example" wire:model="calidad_anuncio" required>
              <option selected >Elige la calidad del anuncio</option>
              <option value="1">Informativo</option>
              <option value="2">Importante</option>
              <option value="3">Urgente</option>
            </select>
          </div>
          @error('calidad_anuncio')
          <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
              Es necesario que llenes por lo menos un campo para publicar el anuncio
            </div>
          </div>
          @enderror
          
          <hr>
          <button type="submit" class="btn btn-success" wire:click="guardaranuncio()">Publicar</button>
          @isset($mensaje)
          @if($mensaje!=null)
          
          @endif
          @endisset
          <br>
          <br>
    </form>
    @isset($mensaje)
@if($mensaje!=null)

<div class="alert alert-success" role="alert">
    Agregado Correctamente!
  </div>
@endif
@endisset
@isset($mensaje1)
  @if($mensaje1!=null)
  <div class="alert alert-success" role="alert">
    No fue agregado Correctamente!
  </div>
  @endif
@endisset

</div>
</div>


