<?php
@session_start();
include_once './includes.php';
include_once './security/control.php';
include_once './app/api/callapi.php';


?>
<!DOCTYPE html>
<html lang="en" dir="">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Gestão de funcionários</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="./dist-assets/css/themes/lite-purple.min.css" rel="stylesheet" />
    <link href="./dist-assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
    <link href="./dist-assets/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="dist-assets/select2/css/select22.min.css" />
    <link rel="stylesheet" href="dist-assets/css/plugins/sweetalert2.min.css">
    <link rel="stylesheet" href="dist-assets/select2-bootstrap4-theme/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="dist-assets/css/toastr.min.css">
    <link href="dist-assets/bootstrap-fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />

    
    <!-- preloader css-->
    <!-- <link rel="stylesheet" href="dist-assets/css/preloader.css" /> -->
    <!-- favicon -->
    <link href="./dist-assets/images/logo1.png" rel="shortcut icon">
    <link href="dist-assets/css/flatpickr.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="dist-assets/css/plugins/sweetalert2.min.css"> -->
    
</head>

<body class="text-left">
    <!-- Start preloader -->
    <div class="loader-bg">
        <div class="loader-p"></div>
    </div>
    <!-- End preloader -->
    <div class="app-admin-wrap layout-sidebar-large">
        <?php include_once './sidebar.phtml' ?>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1 class="font-weight-bold">Lista de Treinamentos</h1>
                    <!-- <ul>
                        <li><a href="#">Home</a></li>
                        <li>Buttons</li>
                    </ul> -->
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <!-- <h1 class="font-weight-bold">Multas</h1><br> -->
                                <div class="dropdown">
                                    <button class="btn btn-success btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Mais opções
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#modal_registar_treinamento" style="color: purple;">Registar</a>
                                        <a class="dropdown-item" href="listagem_presencas.php" style="color: purple;">Ver treinamentos</a>
                                        
                                    </div>
                                    <!-- <div>
                                        <button id="registo_funcionario" data-toggle="modal" data-target="#modal_registar_funcionario" class="btn btn-success"> Registar</button>
                                    </div> -->
                                </div>

                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="" style="font-family: 'Arial narrow'; font-size: 14px; color: #2C304D; font-weight: 600;">Nome</label>
                                        <input type="text" class="form-control" name="nome" id="nome" />
                                    </div>
                                    
                                    <div class="col-md-12 mb-3 text-right" style="text-align: right">
                                        <button class="btn btn-secondary btn-lg search pesquisar">Pesquisar</button>
                                    </div>
                                </div>
                                <br><br>
                                
                                <div class="table-responsive">
                                    <div class="list_funcionarios"></div>
                                </div>
                                
                                
                                <?php include_once './components/modals/update_treinamento.php'; ?>
                                <?php include_once './components/modals/rg_treinamento.php';?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of main-content -->
            
            <!-- Footer Start -->
            <?php include_once './copyright.php'; ?>
            
            <!-- fotter end -->
        </div>
    </div>

    <script src="./dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="./dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="./dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./dist-assets/js/scripts/script.min.js"></script>
    <script src="./dist-assets/js/scripts/sidebar.large.script.min.js"></script>
    <script src="dist-assets/js/flatpickr.js"></script>
    <script src="./js/imask.js"></script>
    <!-- Script geral -->
    <script src="./js/scripts.js"></script>
    <script src="dist-assets/js/plugins/sweetalert2.min.js"></script>
    <script src="dist-assets/js/scripts/sweetalert.script.min.js"></script>
    <script src="dist-assets/select2/js/lodash.min.js"></script>
    <script src="dist-assets/select2/js/select22.min.js"></script>
    <script src="dist-assets/js/toastr.min.js"></script>

    <!-- VentanaCentrada.js -->
    <script src="./reports/pdf/js/VentanaCentrada.js"></script>
    <!-- pdf.js -->
    <script src="./reports/pdf/js/pdf.js"></script>
    <!-- <script src="./js/anexo_script.js"></script> -->
    <script src="dist-assets/js/jquery.inputmask.min.js"></script>
    <script src="./js/api_queries.js"></script>
    <script src="./js/pagination.js"></script>
    <script src="./js/imask.js"></script>
    <script src="./dist-assets/bootstrap-fileinput/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
     <script src="./dist-assets/bootstrap-fileinput/js/plugins/piexif.js" type="text/javascript"></script>
     <script src="./dist-assets/bootstrap-fileinput/js/plugins/sortable.js" type="text/javascript"></script>
     <script src="./dist-assets/bootstrap-fileinput/js/fileinput.js" type="text/javascript"></script>
     <script src="./dist-assets/bootstrap-fileinput/js/locales/pt.js" type="text/javascript"></script>
     <script src="./dist-assets/bootstrap-fileinput/js/locales/es.js" type="text/javascript"></script>
     <script src="./dist-assets/bootstrap-fileinput/themes/fas/theme.js" type="text/javascript"></script>
     <script src="./dist-assets/bootstrap-fileinput/themes/explorer-fas/theme.js" type="text/javascript"></script>
     <!-- <script src="dist-assets/js/plugins/sweetalert2.all.min.js"></script> -->
     


    <script>
        $(document).ready(function() {
            $(".select2").select2({
                allowClear: true,
            });

            list("");

            $(document).on('click', '.pagination a', paginaClickHandler);

            $("#listagem_funcionarios_li").addClass("nav-item-active")
            $("#listagem_funcionarios_link").addClass("nav-item-active-text")

            $(".pesquisar").click(function() {
                list("")
            })
        });




         hideLoader();

        function list(page) {
            // alert(page)
            showLoader();
            $.ajax({
                url: './app/ajax/treinamento/list.php',
                method: 'GET',
                data: {
                   
                    // "nome": $("#nome").val(),
                   
                    // "id_provincia": $("#provincia_id").val(),
                    // "id_distrito": $("#distrito_id").val(),
                },
                dataType: 'html',
                success: function(data) {
                    // console.log(data);
                    $(".list_funcionarios").html(data)
                },
                error: function(err) {
                    console.log(err);
                }
            }).always(function() {
                hideLoader();
            });
        }


       
        $("#foto_perfil").fileinput({ overwriteInitial: true, maxFileSize: 10000, showClose: false, showCaption: false, showBrowse: false, browseOnZoneClick: true, removeLabel: '', removeIcon: '<i class="bi-x-lg"></i>', removeTitle: 'Cancel or reset changes', elErrorContainer: '#kv-avatar-errors-2', msgErrorClass: 'alert alert-block alert-danger', defaultPreviewContent: '<img src="dist-assets/images/user.png" alt="Your IMG" style="width: 70%; height: 40%"><h6 class="text-muted">Clica para selecionar a fotografia</h6>', layoutTemplates: { main2: '{preview} ' + ' {remove} {browse}' }, allowedFileExtensions: ["jpg", "jpeg", "png", "gif", "tiff"] });
            $(document).on("click", "#registar_treinamento", function() { 
                // alert("ola")
                let formulario = new FormData(document.getElementById("formulario_registo"))
                formulario.append("nome", $("#nome_treinamento").val())
                formulario.append("descricao", $("#descricao").val())
                formulario.append("duracao", $("#duracao").val())
                
                console.log(formulario)

                $.ajax({
                url: './app/ajax/treinamento/create.php',
                method: 'POST',
                data: formulario,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    //$(".list_funcionarios").html(data)
                    
                    swal({
                        type: 'success',
                        title: 'Success!',
                        text: `${data.message}`, //para trazer a mensagem da
                        buttonsStyling: false,
                        confirmButtonClass: 'btn btn-lg btn-success'
                        });
                        $('#modal_registar_treinamento').modal('hide');
                         // Fechar o SweetAlert após 3 segundos (3000 milissegundos)
                        setTimeout(function() {
                            swal.close();
                        }, 2000);
                },
                error: function(err) {
                    console.log(err);
                }
            }).always(function() {
                hideLoader();
            });
                
            });
         

        function getOneFunc(id_func){
            $.ajax({
                     url: './app/ajax/treinamento/getOne.php',
                     method: 'GET',
                     data: {
                         "id": id_treinamento
                     },
                     dataType: 'html',
                     success: function(data) {
                        // console.log(data)       
                         $("#form_modal_update").html(data)
                     },
                     error: function(err) {
                         console.log(err);
                     }
                 }).always(function() {
                     // hideLoader();
                 });
        }
            
        
        
       

            


            
            

    </script>
</body>
</html>