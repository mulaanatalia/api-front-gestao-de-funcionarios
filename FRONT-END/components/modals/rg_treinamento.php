<?php
    //session_start();
    //include_once './security/control.php';
    include_once 'includes.php';
    include_once './security/control.php';
    include_once './app/api/callapi.php';

   
?>


<!-- Modal -->
<div class="modal fade" id="modal_registar_treinamento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registo de Treinamento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         
          <div class="modal-body"> 
            <form id="formulario_registo" method="POST" enctype="multipart/form-data"> 
                <div class="row">
                    <div class="col-md-4">
                        <div class="kv-avatar">
                            <div class="file-loading">
                                <input id="foto_perfil" name="foto_perfil" type="file">
                            </div>
                        </div>
                    </div>
                </div>                  
                                            
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="" style="font-family: 'Arial narrow'; font-size: 14px; color: #2C304D; font-weight: 600;"> Nome<span class="text-danger" style="font-family: 'Arial narrow'; font-size: 14px; color: #6b6076; line-height: 21px; font-weight: bold">*</span></label>
                        <input type="text" name="nome" id="nome_treinamento" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="" style="font-family: 'Arial narrow'; font-size: 14px; color: #2C304D; font-weight: 600;">Descrição<span class="text-danger" style="font-family: 'Arial narrow'; font-size: 14px; color: #6b6076; line-height: 21px; font-weight: bold">*</span></label>
                        <input type="text" name="descricao" id="descricao" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="" style="font-family: 'Arial narrow'; font-size: 14px; color: #2C304D; font-weight: 600;"> Duração<span class="text-danger" style="font-family: 'Arial narrow'; font-size: 14px; color: #6b6076; line-height: 21px; font-weight: bold">*</span></label>
                        <input type="text" name="duracao" id="duracao" class="form-control" required>
                    </div>
                                                              
                </div>  
            </form>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Fechar</button>
            <button class="btn btn-success btn-lg" type="button" id="registar_treinamento">Registar</button>
           </div>
        </div>
    </div>
</div>

