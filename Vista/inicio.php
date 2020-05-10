<?php
session_start();
 if(!isset($_SESSION["validarIngreso"])){
     echo '<script>window.location ="../index.php?pagina=ErrorLogin"; </script>';
     return;

   }
   else{
     if($_SESSION["validarIngreso"]!="ok"){
       echo '<script>window.location ="../index.php?pagina=registro"; </script>';
       return;
     }
 }

     include "HTML/headerini.html";
		 include "HTML/nav.html";
     include "HTML/footer.html";
        ?>
 </body>
</html>
