<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> CASYS 2.0 </title>
    <link rel="icon" href="{{ asset('img/logocastano.png')}}" />

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- tutorial de jalar archivos-->
    <link href="filepond.css" rel="stylesheet" />

    <style>
        .navbar-casys {
          border: 0px solid #3a3e7b;
          -webkit-border-radius: 10px;
          border-radius: 10px;
          color:#3a3e7b;
          background: -webkit-linear-gradient(-90deg,  #3a3e7b 0,  #3a3e7b 100%);
          background: -moz-linear-gradient(180deg,  #3a3e7b 0,  #3a3e7b 100%);
          background: linear-gradient(180deg, r #3a3e7b 0,  #3a3e7b 100%);
          background-position: 50% 50%;
          -webkit-background-origin: padding-box;
          background-origin: padding-box;
          -webkit-background-clip: border-box;
          background-clip: border-box;
          -webkit-background-size: auto auto;
          background-size: auto auto;
        }


        .btn-editb {
          border: 0px solid #5ab507;
          -webkit-border-radius: 12px;
          border-radius: 12px;
          color:#ffffff;
          background: -webkit-linear-gradient(-90deg,  #5ab507 0,  #5ab507 100%);
          background: -moz-linear-gradient(180deg,  #5ab507 0,  #5ab507 100%);
          background: linear-gradient(180deg, r #5ab507 0,  #5ab507 100%);
          background-position: 50% 50%;
          -webkit-background-origin: padding-box;
          background-origin: padding-box;
          -webkit-background-clip: border-box;
          background-clip: border-box;
          -webkit-background-size: auto auto;
          background-size: auto auto;
        }

        .btn-editb:hover {
          border: 0px solid #a5df6f;
          color:#ffffff; 
          -webkit-border-radius: 12px;
          border-radius: 12px;
          background: -webkit-linear-gradient(-90deg,  #a5df6f 0,  #a5df6f 100%);
          background: -moz-linear-gradient(180deg,  #a5df6f 0,  #a5df6f 100%);
          background: linear-gradient(180deg, r #a5df6f 0,  #a5df6f 100%);
          background-position: 50% 50%;
          -webkit-background-origin: padding-box;
          background-origin: padding-box;
          -webkit-background-clip: border-box;
          background-clip: border-box;
          -webkit-background-size: auto auto;
          background-size: auto auto;
        }

        .btn-pre2 {
          border: 0px solid #3a3e7b;
          -webkit-border-radius: 12px;
          border-radius: 12px;
          color:#ffffff;
          background: -webkit-linear-gradient(-90deg,  #3a3e7b 0,  #3a3e7b 100%);
          background: -moz-linear-gradient(180deg,  #3a3e7b 0,  #3a3e7b 100%);
          background: linear-gradient(180deg, r #3a3e7b 0,  #3a3e7b 100%);
          background-position: 50% 50%;
          -webkit-background-origin: padding-box;
          background-origin: padding-box;
          -webkit-background-clip: border-box;
          background-clip: border-box;
          -webkit-background-size: auto auto;
          background-size: auto auto;
        }

        .btn-pre2:hover {
          border: 0px solid #8b91e4;
          color:#ffffff; 
          -webkit-border-radius: 12px;
          border-radius: 12px;
          background: -webkit-linear-gradient(-90deg,  #8b91e4 0,  #8b91e4 100%);
          background: -moz-linear-gradient(180deg,  #8b91e4 0,  #8b91e4 100%);
          background: linear-gradient(180deg, r #8b91e4 0,  #8b91e4 100%);
          background-position: 50% 50%;
          -webkit-background-origin: padding-box;
          background-origin: padding-box;
          -webkit-background-clip: border-box;
          background-clip: border-box;
          -webkit-background-size: auto auto;
          background-size: auto auto;
        }

        .btn-pre:hover {
          border: 0px solid #4d57e6;
          -webkit-border-radius: 12px;
          border-radius: 12px;
          background: -webkit-linear-gradient(-90deg,  #3a3e7b 0,  #3a3e7b 100%);
          background: -moz-linear-gradient(180deg,  #3a3e7b 0,  #3a3e7b 100%);
          background: linear-gradient(180deg, r #3a3e7b 0,  #3a3e7b 100%);
          background-position: 50% 50%;
          -webkit-background-origin: padding-box;
          background-origin: padding-box;
          -webkit-background-clip: border-box;
          background-clip: border-box;
          -webkit-background-size: auto auto;
          background-size: auto auto;
        }
        
        .btn-pre:active {
          -webkit-border-radius: 17px;
          border-radius: 12px;
          background: -webkit-linear-gradient(-90deg, #626bdd 0,  #626bdd 100%);
          background: -moz-linear-gradient(180deg,  #626bdd 0,  #626bdd 100%);
          background: linear-gradient(180deg,  #626bdd 0,  #626bdd 100%);
          background-position: 50% 50%;
          -webkit-background-origin: padding-box;
          background-origin: padding-box;
          -webkit-background-clip: border-box;
          background-clip: border-box;
          -webkit-background-size: auto auto;
          background-size: auto auto;
        }
        </style>
        <script>
            function loadPage(){
        var frame = $('#iframe_pdf');
        var url = '';
        frame.attr('src',url).show();
    }
        </script>
      
    @livewireStyles
</head>

<body id="page-top" style="font-family: Century Gothic">
    
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar   sidebar-dark accordion" style="background-color: #a4cb39" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon">
                    <img  src="img/Logo-casyy29052022.png" class="rounded mx-auto d-block" width="50" height="50" alt="...">
                </div>
                <div class="sidebar-brand-text mx-3" style="font-size: 25px; color:#3a3e7b"> CASYS <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->
           

            <ul class="navbar-nav sticky-sm-top bd-layout sidebar sidebar-dark accordion fw-bold" style="background-color: #a4cb39" id="accordionSidebar">
                @if(Session::get('menu_rol')!=null)
                @foreach (Session::get('menu_rol') as $menu_rol)
                <li class="nav-item">
                    <a class="nav-link collapsed btn-pre" href="#" data-toggle="collapse" data-target="#collapseUtilities{{$menu_rol->ID_MENU}}"
                        aria-expanded="true" aria-controls="collapseUtilities{{$menu_rol->ID_MENU}}">
                        @php
                        echo $menu_rol->ICONO;
                        @endphp
                        <span>{{$menu_rol->DESCRIPCION}}</span>
                    </a>
                 
                    <div id="collapseUtilities{{$menu_rol->ID_MENU}}" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            @foreach(Session::get('submenu_rol') as $submenu_rol)
                            @if($submenu_rol->ID_MENU==$menu_rol->ID_MENU)
                            @php
                            $opcion=str_replace(" ", "_", $submenu_rol->DESCRIPCION);
                        @endphp
                            <a class="collapse-item" href="{{$opcion}}">{{$submenu_rol->DESCRIPCION}}</a>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </li>
                @endforeach
                @endif

                
                
            </ul>

            

            <!-- Nav Item - Utilities Collapse Menu -->
           
            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 navbar-static-top">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                    <!-- SELECCIÓN PERFIL ALUMNO EN PERFIL DE PADRE -->
                    
                      <!--FIN SELECCIÓN-->

                    <!-- Topbar Search -->
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
    
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->

                    <li class="nav-item dropdown no-arrow navbar-static-top">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                            @if(auth()->check())
                            Bienvenido | <b>{{ auth()->user()->name }} </b>
                            </span>
                            
                            <img class="img-profile rounded-circle"  src="imagen/perfil/{{auth()->user()->img_users}}" />

                            @endif
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="/configperfil">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Perfil 
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Cerrar sesión
                            </a>
                        </div>
                    </li>
                </ul>

            </nav>
                <!-- End of Topbar -->
                @yield('content')
            </div>
            
             <div class="container">
                 @yield('inicio')
             </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto"  style="color:#3a3e7b">
                    <div class="copyright text-center my-auto">
                        <span>Copyright by Castaño | Promo 2021-2022 &copy;</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center">¿Esta seguro que quiere cerrar sesión?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Al cerrar la sesión, se finalizarán todos los procesos que haya 
                realizado en su cuenta. Si desea iniciar sesión nuevamente, puede iniciar como <b>{{ auth()->user()->name }} </b></div>
            <div class="modal-footer">
                <button class="btn btn-secondary" style="border-radius: 12px;" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-pre2" href="/logout">Cerrar sesión</a>
            </div>
        </div>
    </div>
</div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
 
     <!-- tutorial de jalar-->
     <script src="{{ asset('js/app.js') }}"></script>
<script src='https://code.jquery.com/jquery-1.12.4.min.js'></script>
        @livewireScripts
        <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/super-build/ckeditor.js"></script>

    <script>
        // This sample still does not showcase all CKEditor 5 features (!)
        // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
        CKEDITOR.ClassicEditor.create(document.getElementById("edit-area"), {
            // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
            toolbar: {
                items: [
                    'bold', 'italic','|',
                    'bulletedList', 'numberedList', 'todoList', '|',
                    'outdent', 'indent', '|',                    
                    'fontSize', 'fontFamily',
                    'alignment',
                    'link','|','undo', 'redo',
                ],
                shouldNotGroupWhenFull: true
            },
            // Changing the language of the interface requires loading the language file using the <script> tag.
            // language: 'es',
            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
            placeholder: 'Publicación..',
            // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
            fontFamily: {
                options: [
                    'default',
                    'Arial, Helvetica, sans-serif',
                    'Courier New, Courier, monospace',
                    'Georgia, serif',
                    'Lucida Sans Unicode, Lucida Grande, sans-serif',
                    'Tahoma, Geneva, sans-serif',
                    'Times New Roman, Times, serif',
                    'Trebuchet MS, Helvetica, sans-serif',
                    'Verdana, Geneva, sans-serif'
                ],
                supportAllValues: true
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
            fontSize: {
                options: [ 10, 12, 14, 'default', 18, 20, 22 ],
                supportAllValues: true
            },
            // Be careful with enabling previews
            // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
            htmlEmbed: {
                showPreviews: true
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
            link: {
                decorators: {
                    addTargetToExternalLinks: true,
                    defaultProtocol: 'https://',
                    toggleDownloadable: {
                        mode: 'manual',
                        label: 'Downloadable',
                        attributes: {
                            download: 'file'
                        }
                    }
                }
            },
            // The "super-build" contains more premium features that require additional configuration, disable them below.
            // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
            removePlugins: [
                // These two are commercial, but you can try them out without registering to a trial.
                // 'ExportPdf',
                // 'ExportWord',
                'CKBox',
                'CKFinder',
                'EasyImage',
                // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                // Storing images as Base64 is usually a very bad idea.
                // Replace it on production website with other solutions:
                // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                // 'Base64UploadAdapter',
                'RealTimeCollaborativeComments',
                'RealTimeCollaborativeTrackChanges',
                'RealTimeCollaborativeRevisionHistory',
                'PresenceList',
                'Comments',
                'TrackChanges',
                'TrackChangesData',
                'RevisionHistory',
                'Pagination',
                'WProofreader',
                // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                // from a local file system (file://) - load this site via HTTP server if you enable MathType
                'MathType'
            ]
        });
    </script>
</body>

</html>