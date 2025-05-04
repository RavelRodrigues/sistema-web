<?php include_once './config/config.php'?>
<?php
//Se usuário não estiver logado, ele será direcionado para o login.php
  if(!isset($_SESSION['userLogged'])){
    header("Location: login.php");
   }
?>
<!DOCTYPE html>
 <html lang="pt-br">
   <?php include_once './partials/head.php'; ?>


   <body>
     <!-- Header -->
     <section>
       <?php include_once './partials/menu.php'; ?>
       
       <?php include_once './pages/home.php'; ?>
     </section>
 
        <?php include_once './partials/scripts.php'; ?>
   </body>
 </html>