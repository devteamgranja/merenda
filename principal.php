<?php 
session_start();
require 'admin/config.php';
error_reporting(0);
ini_set("display_errors", 0);
$matricula = $_SESSION['matricula'];
$hoje=date('Y-m-d');
$pegadia=$conn->query("SELECT * FROM merenda WHERE matricula='$matricula' ");
$dia=$pegadia->fetch();

// var_dump($hoje);
    include 'header.php';?>
    <div class="site">
         <div class="logo">
                <img src="assets/img/logoeeep.png" alt="">
            </div>
            <h1>EEEPEOAC - 29/08/2024</h1>
            <div class="barra"></div>
        <div class="boxers">
           

            <a href="#" id="registerActionLink">
                <?php if($dia['data'] != $hoje){?>
                    <div class="box">
                <img src="assets/img/mdi_food-turkey.png" alt="">
                <span>Almoçar</span>
            </div>
            <?php }else{
            echo "<div class='box' style='height:50px;opacity:0.4;cursor:not-allowed' disabled>Ja pedi almoço</div>";
        } ?>
        </a>
        

            <a href="#" id="openPopupLink"><div class="box">
                <img src="assets/img/tdesign_laptop.png" alt="">
                <span>Reservar Laboratorio</span>
            </div></a>
        </div>
    </div>

    <div id="popup" class="popup" style="display:none">
        <div class="popup-content">
            <span id="closePopup" class="close">&times;</span>
        <div class="meuform "> 
                   
                    <form method="POST" id="registerForm" class="col-12"> 
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
<?php 
    include 'footer.php';?>