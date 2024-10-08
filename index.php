<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras, chaves, para, o site">
    <meta name="description" content="SITE DINAMICO FEITO COM O CURSO DANKI CODE DE DESENVOLVEDOR WEB">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet" />
    <title>Site Dinâmico - Dev Rodriguez</title>
</head>
<body>

    <?php 

        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch ($url){
            case 'depoimentos':
                echo '<target target="depoimentos"/>';
                break;
                
            case 'servicos':
                echo '<target target="servicos"/>';
                break;
        }
    ?>

    <header>
        <div class="center"><!--center-->
        <div class="logo left"><a href="">DEV RODRIGUEZ</a></div>
        <nav class="desktop right">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
            </ul>
        </nav>
        <nav class="mobile right">
            <div class="menu-mobile">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
            </ul>
        </nav>
        <div class="clear"></div><!--clear-->
        </div><!--center-->
    </header>

    <?php 

        $url = isset($_GET['url']) ? $_GET['url'] : 'home';

        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{
            // FAZER O QUE QUISER, POIS A PAGINA NAO EXISTE! PAGINA DE ERRO - 404 - REDIRECIONAR PARA HOME E ETC...
            if($url != 'depoimentos' && $url != 'servicos' ){
                $pagina404 = true;
                include('pages/404.php');
            }else{
                include('pages/home.php');
            }
        }

    ?>

    <footer <?php if(isset($pagina404) && $pagina404 == true)echo 'class="fixeds"'; ?> >
        <div class="center">
            <p>Todos os direitos reservados - DEV RODRIGUEZ</p>
        </div>
    </footer>
<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
</body>
</html>