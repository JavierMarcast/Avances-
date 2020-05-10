<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewpoert" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="../css/main.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <main >
  
  <?php
   $response = json_decode(file_get_contents('http://localhost/p1/api/Apiproductos/apiproductos.php?categoria=Anaquel'),true);
   if($response['statuscode'] == 200){
foreach ($response ['items'] as $item) {
  include('../layout/items.php');

    }

  }else {



  }
   ?>

    </main>
    </body>
    </html>
