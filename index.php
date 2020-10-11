<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Clone</title>
    <link rel="stylesheet" href="CSS/style.css">

    <!--owl css -->
    <link rel="stylesheet" href="CSS/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="CSS/owl/owl.theme.default.min.css">

    <!--responsividade css -->
    <link rel="stylesheet" href="CSS/responsive.css">


</head>
<body>
    <header>
        <div class="container">
            <h2 class='logo'>NETFLIX</h2>
            <nav>
                <a href="#">Início</a>
                <a href="#">Séries</a>
                <a href="#">Filmes</a>
                <a href="#">Documentários</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="filme-principal">
            <div class="container">
                <h3 class='titulo'>THE 100</h3>
                <p class="descricao">
                Quase 100 anos após um apocalipse nuclear devastar a Terra, 100 sobreviventes de uma estação espacial voltam para avaliar as condições do planeta.
                </p>
                <div class="botoes">
                    <button role='button' class='botao'>
                        <i class="fas fa-play"></i>
                        ASSISTIR AGORA
                    </button>
                    <button role='button' class='botao'>
                        <i class="fas fa-info-circle"></i>
                        MAIS INFORMAÇÔES
                    </button>
                </div>
            </div>
            
        </div>
    </main>

    <div class="carrosel-filmes">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="IMG/Capas/mini1.jpg" alt="Minitatura" class="box-filme">
            </div>
            <div class="item">
                <img src="IMG/Capas/mini2.jpg" alt="Minitatura" class="box-filme">
            </div>
            <div class="item">
                <img src="IMG/Capas/mini3.jpg" alt="Minitatura" class="box-filme">
            </div>
            <div class="item">
                <img src="IMG/Capas/mini4.jpg" alt="Minitatura" class="box-filme">
            </div>
            <div class="item">
                <img src="IMG/Capas/mini5.jpg" alt="Minitatura" class="box-filme">
            </div>
            <div class="item">
                <img src="IMG/Capas/mini6.jpg" alt="Minitatura" class="box-filme">
            </div>
            <div class="item">
                <img src="IMG/Capas/mini7.jpg" alt="Minitatura" class="box-filme">
            </div>
            <div class="item">
                <img src="IMG/Capas/mini8.jpg" alt="Minitatura" class="box-filme">
            </div>
            <div class="item">
                <img src="IMG/Capas/mini9.jpg" alt="Minitatura" class="box-filme">
            </div>
            <div class="item">
                <img src="IMG/Capas/mini10.jpg" alt="Minitatura" class="box-filme">
            </div>
            <div class="item">
                <img src="IMG/Capas/mini11.jpg" alt="Minitatura" class="box-filme">
            </div>
            <div class="item">
                <img src="IMG/Capas/mini12.jpg" alt="Minitatura" class="box-filme">
            </div>
        </div>
    </div>


    
    <script src="JS/FontAwesomeKit.js"></script>
    <script src="JS/owl/jquery.min.js"></script>
    <script src="JS/owl/owl.carousel.min.js"></script>
    <script src="JS/setup.js"></script>
    
</body>
</html>