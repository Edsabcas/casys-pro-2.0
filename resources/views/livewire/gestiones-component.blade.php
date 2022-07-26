<div class="container">
    <div class="card shadow rounded">
        <div class="text-center">
          <br>
          <h1 style="color: #3a3e7b"><strong>Gestiones @php echo date('Y'); @endphp</strong></h1>
          <br>
        </div>
      </div>
    @if(Session::get('op')=='gest_pendi')
    @include('gestiones.pendientes')
    {{session()->forget('op');}}
    
    @elseif(Session::get('op')=='gest_aten')
    @include('gestiones.atendidas')
    {{session()->forget('op');}}
    
    @elseif(Session::get('op')=='gest_repo')
    @include('gestiones.reportes')
    {{session()->forget('op');}}

    @endif
    
</div>
