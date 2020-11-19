<?php
require "app/controller/usuarioDAO.php";
require "app/model/usuario.model.php";
require "app/core/password.class.php";

$UsuarioDAO = new UsuarioDAO($db);
$usuario    = new Usuario();

$id       = isset($_POST['id']) ? $_POST['id'] : "";
$opcao    = isset($_POST['opcao']) ? $_POST['opcao'] : "";
$pesquisa = isset($_GET['pesquisa']) ? $_GET['pesquisa'] : "";

if (!empty($cod) || !empty($opcao)) {
 if ($opcao == "apagar") {
  $usuario->setId($id);
  $UsuarioDAO->usuario = $usuario;
  $UsuarioDAO->delete();
 }
}
if (empty($pesquisa)) {
 $usuarios = $UsuarioDAO->listAll();
}
?>
<link rel="public/assets/css/datatables.css">
<script src="public/assets/js/jquery.datatables.min.js" charset="utf-8"></script>
<style media="screen">
  label{
    width: 100%;
  }
  img{
    border-radius: 100%;
  }
</style>
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-danger">
            <div class="row">
              <div class="col-md-12">
                <h4 class="card-title">Gerenciar Usuario</h4>
              </div>
            </div>
          </div>
              <div class="card-body table-responsive">
                <table id="example" class="display  table table-striped table-hover">
                        <thead class="text-danger">
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Editar</th>
                            <th>Remover </th>
                        </thead>
                        <tbody>
                          <?php foreach ($usuarios as $user) {?>
                            <tr>
                                <td><?=$user['nome']?></td>
                                <td><?=$user['email']?></td> 
                                <td>
                                  <form method="POST" action="editarUsuario">
                                    <button type="submit" class="btn btn-primary btn-link btn-sm" style="color:#FF7E01" name="editar"><i class="material-icons">edit</i></button>
                                    <input type="hidden" name="id" value="<?=$user['id']?>">
                                    <input type="hidden" name="opcao" value="editar">
                                  </form>
                                </td>
                              <td>
                            <form method="POST">
                              <button type="submit" class="btn btn-danger btn-link btn-sm"><i class="material-icons">close</i></button>
                              <input type="hidden" name="id" value="<?=$user['id']?>">
                              <input type="hidden" name="opcao" value="apagar">
                          </form>
                        </td>
                      </tr>
                    <?php }?>
                  </tbody>
                </table>
                  <div class="col-md-12">
                  <a class="btn btn-danger pull-right  btn-round btn-just-icon" href="cadastrarUsuario" ><i class="material-icons ">add</i></a>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
$(document).ready(function() {
  $('#example').DataTable({
    "info": false,
    "pageLength": 5,
    "lengthChange": false,
    "bAutoWidth": false,
    "language":{
      "sEmptyTable": "Nenhum registro encontrado",
      "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
      "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
      "sInfoFiltered": "(Filtrados de _MAX_ registros)",
      "sInfoPostFix": "",
      "sInfoThousands": ".",
      "sLengthMenu": "_MENU_ resultados por página",
      "sLoadingRecords": "Carregando...",
      "sProcessing": "Processando...",
      "sZeroRecords": "Nenhum registro encontrado",
      "sSearch": "Pesquisar",
      "oPaginate": {
          "sNext": "Próximo",
          "sPrevious": "Anterior",
          "sFirst": "Primeiro",
          "sLast": "Último"
      },
      "oAria": {
          "sSortAscending": ": Ordenar colunas de forma ascendente",
          "sSortDescending": ": Ordenar colunas de forma descendente"
      }
    }
  });
  $('.dataTables_filter').parent().removeClass('col-md-6').addClass('col-md-12');
});
</script>
