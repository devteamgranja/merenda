<?php 
session_start();
require 'admin/config.php';

if(isset($_POST['matricula']) && !empty($_POST['senha'])){
    $matricula=$_POST['matricula'];
    $senha=$_POST['senha'];
    $acesso=$conn->query("SELECT * FROM usuario WHERE matricula='$matricula' AND senha='$senha' ");
    $pegaaluno=$acesso->fetch();
    if($acesso->rowCount() > 0){
        $_SESSION['user']=$pegaaluno['aluno'];
        $_SESSION['matricula']=$pegaaluno['matricula'];
        header("location: principal.php");


            }
}
    include 'header.php';?>
    <div class="site">
         <div class="logo">
                <img src="assets/img/logoeeep.png" alt="">
            </div>
            <h1>EEEPEOAC - 29/08/2024</h1>
            <div class="barra"></div>
        <div class="boxers">
         
         <div class="">
            <form method="POST">
             <input type="text" class="m-2 col-10" name="matricula" id="" placeholder="matricula">
             <input type="password" class="m-2 col-10" name="senha" id="" placeholder="senha">
             <input type="submit" class="btn btn-success col-10" value="ACESSAR">

             <h5 class="col-12" style="color:#dedede">Ainda não tenho cadastro! <strong>Cadastrar</strong></h5>
         </form>
            </div>
        </div>
    </div>
<?php 
    include 'footer.php';?>