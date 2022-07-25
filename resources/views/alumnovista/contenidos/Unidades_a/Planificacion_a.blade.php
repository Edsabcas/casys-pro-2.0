
<div class="card; align-items-center">             
    <td>
       
      </td>
      <center>
      @foreach($PlanUnion as $PlanUni)
        <div class="align-items-center card-body">             
          @include('Unidades.VistaPlan')
        </div>
      </div>
     @endforeach 
    </center>