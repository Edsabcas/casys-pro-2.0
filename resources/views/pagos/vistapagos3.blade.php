<div class="card shadow rounded">
    <div class="card-body">
        <br>
        <center><h2 style="color: #3a3e7b"><strong>PAGOS MENSUALES</strong></h2></center>
        <hr>
        <div class="card-body">
                    <div class="container">
                        <div class="row">

                            {{-- No. Recibo: --}}

                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><strong>No. Recibo:</strong></label>
                                    <input type="number" class="form-control" id="exampleInputEmail1"{{-- wire:model="" --}}>
                                </div>
                            </div>
                            @error('nombre_docente') 
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                                    <span>¡Pendiente!</span>
                                </div> 
                            @enderror

                            {{-- Usuario --}}

                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><strong>Usuario:</strong></label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"{{-- wire:model="" --}}>
                                </div>
                            </div>
                            @error('ape_casada') 
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                                    <span>¡Pendiente el ingreso del apellido de casado!</span>
                                </div> 
                            @enderror
                        </div>
                    </div>         

                            {{-- Recibimos de: --}}
                            
                    <div class="container">
                        <div class="row"> 
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><strong>Recibimos de:</strong></label>

                                    <input type="text" class="form-control" id="exampleInputEmail1"{{-- wire:model="" --}}>
                                </div>
                            </div>
                        
                            @error('dpi') 
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                                    <span>¡Pendiente de ingresar el DPI!</span>
                                </div> 
                            @enderror

                            {{--  FECHA DE PAGO --}}

                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><strong>Fecha de pago:</strong></label>
                                    <input type="date" class="form-control" id="exampleInputEmail1"{{-- wire:model="" --}}>
                                </div>
                            </div>

                            @error('extendido') 
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                    <span>¡Pendiente de ingresar!</span>
                                </div> 
                            @enderror
                        </div>
                    </div>

                            {{-- PAGA --}}

                    <div class="container">
                        <div class="row">    
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><strong>Paga:</strong></label>
                                    <select class="form-select" aria-label="Default select example" {{-- wire:model="" --}}>
                                        <option selected>Seleccionar rubro:</option>
                                        <option value="1">Inscripción A</option>
                                        <option value="2">Inscripción B</option>
                                        <option value="3">Cuota Anual</option>
                                        <option value="4">Enero</option>
                                        <option value="5">Febrero</option>
                                        <option value="6">Marzo</option>
                                        <option value="7">Abril</option>
                                        <option value="8">Mayo</option>
                                        <option value="9">Junio</option>
                                        <option value="10">Julio</option>
                                        <option value="11">Agosto</option>
                                        <option value="12">Septiembre</option>
                                        <option value="13">Octubre</option>
                                    </select>
                                </div>
                            </div>

                            @error('edad') 
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                    <span>¡Pendiente de ingresar!</span>
                                </div> 
                            @enderror

                            {{-- PRECIO UNITARIO --}}

                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><strong>Precio unitario:</strong></label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" {{-- wire:model="" --}}>
                                </div>
                            </div>
                        </div>
                    </div>

                            @error('estado_civil') 
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                                    <span>¡Pendiente de seleccionar el estado civil!</span>
                                </div> 
                            @enderror

                            {{-- RECIBO COLEGIO --}}

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><strong>Recibo colegio:</strong></label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" {{-- wire:model="" --}}>
                                </div>
                            </div>
                        
                            @error('nit') 
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                    <span>¡Pendiente de ingresar!</span>
                                </div> 
                            @enderror

                            {{-- TIPO DE PAGO --}}
                            
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><strong>Tipo de pago:</strong></label>
                                    <select class="form-select" aria-label="Default select example" {{-- wire:model="" --}}>
                                        <option selected>Seleccionar un tipo de pago:</option>
                                        <option value="1">Efectivo</option>
                                        <option value="2">Cheque</option>
                                        <option value="3">Tarjeta de crédito/débito</option>
                                        <option value="4">Banco G&T continental</option>
                                        <option value="5">Banco Industrial</option>
                                        <option value="6">Banco BAM</option>
                                        <option value="7">Banco BANRURAL</option>
                                        <option value="8">Banco Reformador</option>
                                        <option value="9">Banco Agromercantil</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- OBSERVACIÓN --}}

                    <div class="container">
                        <div class="row">
                            <div class="col-md">
                                <label for="message-text" class="col-form-label"><strong>Observación:</strong></label>
                                <textarea class="form-control" id="message-text" {{-- wire:model="" --}}></textarea>
                            </div>
                        </div>
                    </div>
                            @error('nit') 
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                    <span>¡Pendiente de ingresar!</span>
                                </div> 
                            @enderror
                            <br>                
                &nbsp;&nbsp;<button class="btn btn-pre2 shadow" data-bs-dismiss="modal" {{-- wire:click="" --}}>Agregar y Guardar</button>
        </div>
    </div>
</div>
