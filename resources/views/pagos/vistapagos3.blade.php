<center>
<div class="card">
    <div class="card-body">
                <div class="container">
                    <div class="row">

                        {{-- No. Recibo: --}}

                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">No. Recibo:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"{{-- wire:model="" --}}>
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
                                <label for="exampleInputEmail1" class="form-label">Usuario</label>
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
                                <label for="exampleInputEmail1" class="form-label">Recibimos de:</label>

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
                                <label for="exampleInputEmail1" class="form-label">Fecha de pago:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"{{-- wire:model="" --}}>
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
                                <label for="exampleInputEmail1" class="form-label">Paga:</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" {{-- wire:model="" --}}>
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
                                <label for="exampleInputEmail1" class="form-label">Precio unitario:</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" {{-- wire:model="" --}}>
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

                        {{-- NIT --}}

                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Recibo colegio:</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" {{-- wire:model="" --}}>
                            </div>
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
                        
    </div>
</div>
</center>