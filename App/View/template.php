<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Blog de JF</title>
    <link rel="stylesheet" type="text/css" href="Public/Bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Public/css/style.css">
</head>

<body class="container-fluid mr-0">

    <header class="container-fluid mr-0">
        <div class="row">
            <div class="row">
                <div class="col-md">
                    <img src="Public/Images/aircraftMini.png" class="img-rounded">
                </div>
            </div>
            <div class="row justify-content-center align-items-center col-md">
                <!--div class="col-md"-->
                <a class="align-self-center text-center col-md-12" href="index.php" >
                <h1 class="">Le blog de Jean Forteroche</h1>
                </a>
                 <div class="nav align-self-end justify-content-center col-md-12">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=chapter&id=1">Chapitre 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=chapter&id=2">Chapitre 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=chapter&id=7">Chapitre 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=chapter&id=4">Chapitre 4</a>
                    </li>
                     <li class="nav-item">
                         <a class="nav-link" href="index.php?p=login">Connexion</a>
                     </li>
                 </div>
            </div>
        </div>
    </header>

    <section class="container">
    <div class="row">
            <div class="col-sm-10">
                <?= $content ?>
            </div>
    </div>


    </section>
</body>

</html>