
<?php

$mysqli = new mysqli("localhost", "root", "", "arriendo");

if($mysqli === false){

    die("ERROR: Could not connect. " . $mysqli->connect_error);

}

		$sql = "SELECT `id_cancha`, `id_gym`, `Nombre`, `Precio` FROM `canchas` WHERE `id_cancha`= 12";
         $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $idCancha = $row["id_cancha"] ;
            $idGym = $row["id_gym"]; 
            $nombre = $row["Nombre"];
            $valor = $row["Precio"]; 
         }
		} else {
   			 echo "0 results";
		}

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Condor Rojas Norte</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Condor Rojas Norte</div>
    <div class="address-bar">El lugar donde te divertiras</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Menu principal</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="gymCRN.php">principal</a>
                    </li>  
                    <li>
                        <a href="Futbolsala1.php">C.Futbol sala 1</a>
                    </li>
                    <li>
                        <a href="Futbolsala2.php">C.Futbol sala 2</a>
                    </li>                     
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">

                    <h1 class="brand-name">2° cancha de futbol</h1>
                    <hr class="tagline-divider">
                    <br>

                    <h2 class="brand-before">
                        <small>a continuacion se mostrara los datos caracteristicos de nuestro recinto</small>
                    </h2>
                    
                    <!--tabla-->



                        <table class="table  table-bordered table-hover ">
                            <thead>
                                <tr class="info">
                                    <th>contenidos</th>
                                    <th>descripcion</th>
                                </tr>
                            </thead>

                              <tbody>
                                <!--
                                <tr>
                                    <th class="success" scope="row">ID cancha</th> 
                                    <th class="success" ><p><?php echo $idCancha; ?></p></th>
                                </tr>

                                 <tr>
                                    <th class="success" scope="row">ID gym</th> 
                                    <th class="success" ><p><?php echo $idGym; ?></p></th>
                                </tr>

                                -->
                                <tr>
                                    <th class="success" scope="row">Nombre</th> 
                                    <th class="success"><p><?php echo $nombre; ?></p></th>
                                </tr>
                                <tr>
                                    <th class="success" scope="row">Precio</th> 
                                    <th class="success"><p><?php echo $valor; ?></p></th>
                                </tr>

                              </tbody>
                            </table>

                    <!--fin tabla-->   
                    
                </div>
            </div>
        </div>     

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>