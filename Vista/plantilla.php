<?php
     include "Vista/HTML/header.html";
     include "Vista/HTML/nav.html";

     if(isset($_GET["pagina"])){
        if($_GET["pagina"]=="registro")
            include "".$_GET["pagina"].".php";
              else
                 if($_GET["pagina"]=="ErrorLogin")
                   include "Vista/HTML/section.html";
                      else
                          include "paginas/error404.php";
        }
          else
              include "Vista/HTML/section.html";

     include "Vista/HTML/aside.html";
     include "Vista/HTML/footer.html";
        ?>
 </body>
</html>
