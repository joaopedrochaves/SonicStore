<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, user-scalable=0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/trabalhos/trabalho/slick-1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/trabalhos/trabalho/slick-1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="style.css">
    <title>Sonic Store</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="navigation-wrap">
                

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <h1><img class="Logo" src="/trabalhos/trabalho/DesenvolvimentoWeb/fotos/Logo.jpeg" alt="Sonic Store" width="60"> Sonic Store</h1>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                      <ul class="navbar-nav">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="produtos.html">Produtos</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="contatos.html">Contatos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre.html">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="parceiros.html">Parceiros</a>
                        </li>
                      </ul>
                    </div>
                  </nav>
            </div>
            
            
        </div>
    </header>

    <div id="sorteador-container" class="banner">
        <div class="container">Não sabe qual mangá começar a ler?<br> sorteie um:</div>
    <?php
    function sortearItem() {
        $itens = [
            ['img' => '/trabalhos/trabalho/DesenvolvimentoWeb/fotos/Bleach.jpg', 'texto' => 'Bleach'],
            ['img' => '/trabalhos/trabalho/DesenvolvimentoWeb/fotos/jujutsu-kaisen.jpg', 'texto' => 'Jujutsu kaisen'],
            ['img' => '/trabalhos/trabalho/DesenvolvimentoWeb/fotos/Kagurabachi.jpg', 'texto' => 'Kagurabachi'],
            ['img' => '/trabalhos/trabalho/DesenvolvimentoWeb/fotos/one-piece.jpg', 'texto' => 'One Piece'],
            ['img' => '/trabalhos/trabalho/DesenvolvimentoWeb/fotos/one-punch-man.jpg', 'texto' => 'OPM'],
        ];

        $indiceSorteado = array_rand($itens);
        return $itens[$indiceSorteado];
    }

    if (isset($_POST['sortear'])) {
        $itemSorteado = sortearItem();
        echo '<div class="sorteado">';
        echo '<img src="' . $itemSorteado['img'] . '" alt="' . $itemSorteado['texto'] . '">';
        echo '<p>' . $itemSorteado['texto'] . '</p>';
        echo '</div>';
    } else {
        // Exibe uma imagem padrão quando o botão ainda não foi clicado
        echo '<div class="sorteado">';
        echo '<img src="/trabalhos/trabalho/DesenvolvimentoWeb/fotos/interrogacao.jpg" alt="Imagem Padrão">';
        echo '<p>Imagem Padrão</p>';
        echo '</div>';
    }
    ?>
 
<form method="POST" action="" >
    <button  type="submit" name="sortear">Sorteie um Mangá</button>
</form>

</div>

            <P class="TITULO">GAMER</P>

        <div class="destaque">
            <div class="item" id="gamer">
                <img src="/trabalhos/trabalho/DesenvolvimentoWeb/fotos/mousepad.jpeg" alt="Gamer em Destaque">
                <h2>Mouse Pad Gamer</h2>
            
                <a href="#" class="btn">Comprar Agora</a>
            </div>
            <div class="item" id="gamer">
                <img src="/trabalhos/trabalho/DesenvolvimentoWeb/fotos/headfone.jpeg" alt="Gamer em Destaque">
                <h2>Headfone Gamer</h2>
                
                <a href="#" class="btn">Comprar Agora</a>
            </div>
            <div class="item" id="gamer">
                <img src="/trabalhos/trabalho/DesenvolvimentoWeb/fotos/microfone.jpeg" alt="Gamer em Destaque">
                <h2>Microfone Gamer</h2>
                
                <a href="#" class="btn">Comprar Agora</a>
            </div>
            <div class="item" id="gamer">
                <img src="/trabalhos/trabalho/DesenvolvimentoWeb/fotos/teclado.jpeg" alt="Gamer em Destaque">
                <h2>Teclado Mecanico</h2>
              
                <a href="#" class="btn">Comprar Agora</a>
            </div>
            <div class="item" id="gamer">
                <img src="/trabalhos/trabalho/DesenvolvimentoWeb/fotos/mouse.jpeg" alt="Gamer em Destaque">
                <h2>Mouse Gamer G203</h2>
                
                <a href="#" class="btn">Comprar Agora</a>
            </div>
        </div>
            
            <p class="TITULO">MANGÁS</p>

        <div class="destaque">
            <div class="item" id="manga">
                <img src="/trabalhos/trabalho/DesenvolvimentoWeb/fotos/Bleach.jpg" alt="Mangá em destaque">
                <h2>Bleach</h2>
            
                <a href="#" class="btn">Comprar Agora</a>
            </div>
            <div class="item" id="manga">
                <img src="/trabalhos/trabalho/DesenvolvimentoWeb/fotos/jujutsu-kaisen.jpg" alt="Mangá em destaque">
                <h2>jujutsu kaisen</h2>
                
                <a href="#" class="btn">Comprar Agora</a>
            </div>
            <div class="item" id="manga">
                <img src="/trabalhos/trabalho/DesenvolvimentoWeb/fotos/Kagurabachi.jpg" alt="Mangá em destaque">
                <h2>Kagurabachi</h2>
                
                <a href="#" class="btn">Comprar Agora</a>
            </div>
            <div class="item" id="manga">
                <img src="/trabalhos/trabalho/DesenvolvimentoWeb/fotos/one-piece.jpg" alt="Mangá em destaque">
                <h2>One Piece</h2>
              
                <a href="#" class="btn">Comprar Agora</a>
            </div>
            <div class="item" id="manga">
                <img src="/trabalhos/trabalho/DesenvolvimentoWeb/fotos/one-punch-man.jpg" alt="Mangá em destaque">
                <h2>OPM</h2>
                
                <a href="#" class="btn">Comprar Agora</a>
            </div>
        </div>
        <!-- Mais seções podem ser adicionadas para outros livros em destaque, promoções, etc. -->

    <footer>
        <div class="container">
            <p>&copy; 2023 Sonic Store</p>
        </div>
    </footer>


    <!--carrossel-->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="/trabalhos/trabalho/slick-1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript" src="carrossel.js"></script>			
    <!--bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>