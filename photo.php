<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  </head>
  <body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


    <div class="row">


    </div>
    <div class="container-fluid">
      <div class="row">
        <?php
          $xml = simplexml_load_file("photo.xml");


          foreach($xml->photo as $Item) {
            echo "<div class=\"col-md-3 col-sm-3 col-xs-3\"><img class=\"img-responsive\" src=\"".$Item."\"></div>";
          }
         ?>

      </div>

      <div class="row">
        <div class="">

        </div>
      </div>
    </div>
  </body>
</html>
