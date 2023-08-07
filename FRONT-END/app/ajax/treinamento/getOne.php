<?php @session_start();
$_SESSION['html'] = null;
$_SESSION['title'] = null;
$content = null;
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/html; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include "../../api/callapi.php";
include('../../../includes.php');
include('../../Extras.php');
include_once "../pagination.php";

$extras = new Extras();




$treinamento = callapi($mainUrl . "treinamento/".$_GET["id"], "GET");



if(!empty($treinamento->data)){

?>

<form action="#" method="post">

                                     <div class="row">
                                         <div class="col-md-12">
                                             <div class="row" hidden>
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
                                                    <input type="text" value="<?=$treinamento->data->nome?>" name="nome" id="nome_modal" class="form-control" required>
                                                    </div>
                                                 <div class="col-md-4 mb-3">
                                                     <label for="" style="font-family: 'Arial narrow'; font-size: 14px; color: #2C304D; font-weight: 600;">Data de Nascimento <span class="text-danger" style="font-family: 'Arial narrow'; font-size: 14px; color: #6b6076; line-height: 21px; font-weight: bold">*</span></label>
                                                     <input type="text" name="descricao" id="descricao" class="form-control start_date" value="<?=$treinamento->data->descricao?>" required>
                                                 </div>
                                                 
                                                 
                                                 <div class="col-md-4 mb-3">
                                                     <label for="" style="font-family: 'Arial narrow'; font-size: 14px; color: #2C304D; font-weight: 600;">Contacto<span class="text-danger" style="font-family: 'Arial narrow'; font-size: 14px; color: #6b6076; line-height: 21px; font-weight: bold">*</span></label>
                                                     <input type="text" value="<?=$treinamento->data->duracao?>" name="duracao" id="duracao" class="form-control" required>
                                                 </div>
                                                 
                                                 
                                                 
                                             </div>
                                         </div>
                                     </div>
                                 </form>

<?php } ?>