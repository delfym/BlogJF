<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Blog de JF</title>
    <link rel="stylesheet" type="text/css" href="Public/Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Public/css/style.css">
</head>

<body class="page">

    <header class="container-fluid ">
        <div class="row">
            <div class="col-sm-2">
            <img src="Public/Images/aircraftMini.png" class="img-rounded">
            </div>
            <div class="col-sm-1"></div>
            <a href="index.php" >
            <h1 class="col-sm-9">Le blog de Jean Forteroche</h1>
            </a>
        </div>
    </header>

    <div class="container">
        <?= $content ?>
    </div>

</body>

</html>