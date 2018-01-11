<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Blog de JF</title>
    <!--link rel="stylesheet" type="text/css" href="Public/Bootstrap/bootstrap.css"-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Public/css/styleNew.css">
    <!--link rel="stylesheet" type="text/css" href="Public/css/style.css"-->
    <script src="Public/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({
            selector:'textarea#textAdmin',
            mode: 'textareas',
            branding: false,
            preview_styles: true,
            menu: {
                table: {title: 'Table', items: 'inserttable tableprops deletetable | cell row column'},
                tools: {title: 'Tools', items: 'spellchecker code'}
            },
            setup: function (editor) { editor.on('change', function () { editor.save(); }); }
    });
    </script>
    <!--script src="Public/jQuery/jquery-3.2.1.js"></script-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

    <script src="Public/scriptJS.js"></script>

</head>

<body id="page" class="container-fluid mr-0">

    <header id="banniere" class="container-fluid mr-0">
        <div class="row">
            <div class="row">
                <div class="col-md">
                    <img src="Public/Images/aircraftMini.png" class="img-rounded">
                </div>
            </div>
            <div class="row justify-content-center align-items-center col-md">
                <!--div class="col-md"-->
                <a class="align-self-center text-center col-md-12" id="blogTitle" href="index.php" >
                <h1 class="">Le blog de Jean Forteroche</h1>
                    <h2>Billet simple pour l'Alaska</h2>
                </a>
                 <div class="nav align-self-end justify-content-center col-md-12">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=list">Liste des chapitres</a>
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