<?php
require "app/model/usuario.model.php";
require "app/controller/usuarioDAO.php";
require "app/model/prioridade.model.php";
require "app/controller/prioridadeDAO.php";

require "app/core/password.class.php";
$usuario       = new Usuario();
$UsuarioDAO    = new UsuarioDAO($db);
$password      = new Password();
$prioridade    = new Prioridade();
$PrioridadeDAO = new PrioridadeDAO($db);

$prioridadde = $PrioridadeDAO->listAll();
$id         = isset($_POST['id']) ? $_POST['id'] : "";
$nome         = isset($_POST['nome']) ? $_POST['nome'] : "";
$foto         = isset($_FILES['fileUpload']) ? $_FILES['fileUpload'] : "";
$senha        = isset($_POST['senha']) ? $_POST['senha'] : "";
$novasenha        = isset($_POST['novasenha']) ? $_POST['novasenha'] : "";
$email        = isset($_POST['email']) ? $_POST['email'] : "";
$idPrioridade = isset($_POST['prioridade']) ? $_POST['prioridade'] : "";


if (!empty($id)) {
    $usuario->setId($id);
    $UsuarioDAO->usuario = $usuario;
    $usuariolist            = $UsuarioDAO->take();
   } else {
   // echo ("<script>javascript:history.back()</script>");
    $usuario->setId($id);
    $UsuarioDAO->usuario = $usuario;
    $usuariolist            = $UsuarioDAO->take();
   }

   if (!empty($nome) && !empty($senha) && !empty($email)) {
    $usuario->setEmail($usuariolist['email']);
    $usuario->setSenha($password->encrypt($senha));
    $UsuarioDAO->usuario = $usuario;
    $request = $UsuarioDAO->request();
    var_dump($request);

    if ($UsuarioDAO->rowCount() == 1) {
      $value = $request->fetch(PDO::FETCH_ASSOC);
      echo("entrou");
      $password = $password->encrypt($novasenha);
      echo($password);
    }
    
    if ($ferramentaList['foto'] != $foto['name']) {
     $ext     = ltrim(substr($_FILES['fileUpload']['name'], strrpos($_FILES['fileUpload']['name'], '.')), '.'); //Pegando a extensão do arquivo
     $newName = md5(time()) . '.' . $ext; //Definindo um novo nome para o arquivo
     $dir     = 'public/assets/img/ferramentas/'; //Diretório para uploads
     move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir . $newName); //Fazer upload do arquivo
    } else {
     $foto = $foto['name'];
    }
    
 /*$usuario->setId($id);
 $usuario->setNome($nome);
 $usuario->setEmail($email);
 $usuario->setSenha($password);
 $usuario->setFoto($newName);
 $usuario->setIdPrioridade($idPrioridade);
 $UsuarioDAO->usuario = $usuario;
 $UsuarioDAO->update();*/
 $components->notify('success', 'Cadastro efetuado com sucesso');
 //echo ("<script>window.location.replace('gerenciarUsuario');</script>");
} elseif (!empty($nome) || !empty($foto) || !empty($senha) || !empty($idPrioridade)) {
 $components->notify('danger', ' Ocorreu algum erro no cadastro, Por favor tente novamente');
}
?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-danger">
            <div class="row">
              <div class="col-md-12">
                <h4 class="card-title">Cadastrar Usuarios</h4>
                <p class="card-category">Aqui você cadastra os usuarios</p>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
              <div class="row" style="margin-top:5%;margin-bottom:5%;">
                <div class="col-md">
                  <div class="card-profile">
                      <div class="card-avatar">
                        <div id="image-holder">
                          <img class="img" src="public/assets/img/users/<?=$usuariolist['foto']?>" style="width: 130px; height: 130px"/>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nome</label>
                      <input type="text" class="form-control" name="nome" id="nome" value="<?=$usuariolist['nome']?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <select class="form-control" name="prioridade">
                        <option selected disabled><strong>Selecionar prioridade</strong></option>
                        <?php foreach ($prioridadde as $prioridade) {?>
                        <option class="form-control" value="<?=$prioridade['id']?>"><?=$prioridade['nome']?></option>
                        <?php }?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Email</label>
                      <input type="email" class="form-control" name="email" id="email" value="<?=$usuariolist['email']?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Senha Atual</label>
                      <input type="password" class="form-control" name="senha" id="senha">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nova Senha</label>
                      <input type="password" class="form-control" name="novasenha" id="novasenha">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <input id="fileUpload" name="fileUpload" class="form-control" type="file" accept="image/*" style="display:none">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-danger pull-right">Cadastrar Usuario</button>
                <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $("#fileUpload").on('change', function () {
 if (typeof (FileReader) != "undefined") {
     var image_holder = $("#image-holder");
     image_holder.empty();
     var reader = new FileReader();
     reader.onload = function (e) {
         $("<img />", {
             "src": e.target.result,
             "class": "thumb-image"
         }).appendTo(image_holder);
     }
     image_holder.show();
     reader.readAsDataURL($(this)[0].files[0]);
 } else{
     alert("Este navegador nao suporta FileReader.");
 }
});

$('.card-avatar').bind ('click', function () {
  $('#foto_branca_file').click ();
});

$('#image-holder').click (function () {
  $('#fileUpload').click();
});
</script>
