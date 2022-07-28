
    <div>
        <h1>tareas</h1>
        <h1>{{$DOCUMENTO1}}</h1>
        @php
        $foo = 0;
        $vid = 0;
        $pdf = 0;
         if (strpos($DOCUMENTO1, '.jpg' ) !== false || strpos($DOCUMENTO1, '.png' ) !== false || strpos($DOCUMENTO1, '.jpeg' ) !== false) 
         { $foo=1; }
         elseif(strpos($DOCUMENTO1, '.mp4' ) !== false || strpos($DOCUMENTO1, '.mpeg' ) !== false)
         {$vid=1;}
         elseif(strpos($DOCUMENTO1, '.pdf' ) !== false)
         {$pdf=1;}
        @endphp
        @if($foo==1)
        <div class="offset-4 col-10">
        <img src="imagen/tareas/{{$DOCUMENTO1}}" height="360" weight="360" class="card" alt="...">
        </div>
        @endif
        @if($vid==1)
        <video height="500" weight="500" class="card-img-top" alt="..." controls>
        <source src="imagen/tareas/{{$DOCUMENTO1}}"  type="video/mp4">
        <source src="imagen/tareas/{{$DOCUMENTO1}}"  type="video/ogg">
        </video>
        @endif
        @if($pdf==1)
        <iframe style="width: 49rem; text-align:center" width="400" height="400" src="/imagen/pdf_tareas/{{$DOCUMENTO1}}" frameborder="0"></iframe>
        @endif
        
        </div>

         




