<?php
 require 'admin/config.php';
 include 'header.php';

    // id  aluno   serie   curso   matricula   data    horainicio  horafim motivo  token   
$pegareserva=$conn->query("SELECT * FROM reserva");
if(isset($_POST['aluno'])){
    $aluno=$_POST['aluno'];
    $serie=$_POST['serie'];
    $curso=$_POST['curso'];
    $matricula=$_POST['matricula'];
    $data=$_POST['data'];
    $horainicio=$_POST['horainicio'];
    $horafim=$_POST['horafim'];
    $motivo=$_POST['motivo'];
    $token=md5($aluno);

    
    $cad=$conn->query("INSERT INTO reserva SET aluno='$aluno',serie='$serie',curso='$curso',matricula='$matricula',data='$data',horainicio='$horainicio',horafim='$horafim',motivo='$motivo',token='$token' ");

}




 ?>
    
    <div class="titulo">
        <h1>EEEPEOAC</h1>
        <span>Reseva do Laboratório de Informática</span>
    </div>
    <div class="all">
        <div class="meuform "> 
                   
                    <form method="POST" class="col-12"> 
                        <div class="container">
                        <div class="row">  
                            
                        <input type="text" class="col-12" name="aluno"   placeholder="aluno" >
                           
                                <select name="serie"  class="col-4" >
                                    <option value="">Série</option>
                                    <option value="1">1º </option>
                                    <option value="2">2º </option>
                                    <option value="3">3º </option>
                                   <!--  <option value="">1º B</option>
                                    <option value="">2º B</option>
                                    <option value="">3º B</option>
                                    <option value="">1º C</option>
                                    <option value="">2º C</option>
                                    <option value="">3º C</option>
                                    <option value="">1º D</option>
                                    <option value="">2º D</option>
                                    <option value="">3º D</option> -->
                                </select>
                          
                       
                            <select name="curso" class="col-4 ">
                                <option value="">Curso</option>
                                <option value="ADMINISTRAÇÃO">ADMINISTRAÇÃO</option>
                                <option value="ENFERMAGEM">ENFERMAGEM</option>
                                <option value="CONTABILIDADE">CONTABILIDADE</option>
                                <option value="REDES">REDES</option>
                            </select>

                            <input type="text" class="col-4" placeholder="matricula" name="matricula"  id="">
                        
                        
                       
                        <input type="date" name="data"   class="col-4" >
                        <input type="time" name="horainicio" class="col-4" >
                        <input type="time" name="horafim" class="col-4" >
                   
                        
                        <textarea name="motivo" rows="5"  class="col-12" ></textarea>

                        <input type="submit" class="btn btn-success col-12 but" value="RESERVAR">
                    </form>
                    
            </div>
        </div>
        
        </div>
        <h2>Lista do dia</h2>
 <table>
  <thead>
    <tr>
      <th>Aluno</th>
      <th>Matricula</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php foreach($pegareserva->fetchAll() as $list){?>
      <td><?=$list['aluno'];?></td>
      <td><?=$list['matricula'];?></td>
    </tr>
 <?php }?>  
  </tbody>
 
</table>

        
    </div>
    
<?php include 'footer.php';?>