<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    
    
?>


<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <script src="loja.js" async></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-PRrgQVJ8NNHGieOA1grGdCTIt4h21CzJs6SnWH4YMQ6G5F5+IEzOHz67L4SQaF0o" crossorigin="anonymous">
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <nav class="navbar col-12 position-fixed navbar-expand-lg navbar-dark bg-dark" style="z-index: 999;">
      <div class="container-fluid col-11 m-auto">
        <a class="navbar-brand" href="#">
          <img src="img/pipoca.png" alt="..." height="36">
        </a>
        <a class="navbar-brand" href="#">Senai Filmes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-1">
            <li class="nav-item">
              
              <a class="nav-link active" aria-current="page" href="index.html"> Home <form action="index.html"></a>
            </li>

              <a class="nav-link" href="loja.html">Loja</a>
              <div class="d-flex">
            
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Filmes</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="criticabarbie.html">Barbie</a></li>
                <li><a class="dropdown-item" href="criticaguardioes.html">Guardiões das Galáxia</a></li>
                <li><a class="dropdown-item" href="criticaoppen.html">Oppenheimer</a></li>
              </ul>
              
            </li>
          </ul>
          <a href="sair.php" class="btn btn-danger me-4 mb-2 mb-lg-1">Sair</a>
        </div>
      </div>
    </nav>
  </head>
  <body>

      

    <main class="main-section">
      <section class="container normal-section">
        <h2 class="section-title">Posters</h2>

        <div class="products-container">
          <div class="movie-product">
            <strong class="product-title">Poster 1</strong>
            <!-- <br> -->
            <img src="img/107294g.jpeg" alt="Poster 1" class="product-image" >
            <div class="product-price-container">
              <span class="product-price">R$29,99</span>
              <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
            </div>
          </div>

          <div class="movie-product">
            <strong class="product-title">Poster 2</strong>
            <!-- <br> -->
            <img src="img/oppenheimer.jpg" alt="Poster 2" class="product-image">
            <div class="product-price-container">
              <span class="product-price">R$39,99</span>
              <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
            </div>
          </div>
  
          <div class="movie-product">
            <strong class="product-title">Poster 3</strong>
            <!-- <br> -->
            <img src="img/baixados.jpeg" alt="Poster 3" class="product-image" class="Camiseta">
            <div class="product-price-container">
              <span class="product-price">R$19,99</span>
              <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
            </div>
          </div>
  
          <div class="movie-product">
            <strong class="product-title">Poster 4</strong>
            <!-- <br> -->
            <img src="img/barbenheimer.jpg" alt="Poster 4" class="product-image" class="Camiseta">
            <div class="product-price-container">
              <span class="product-price">R$79,99</span>
              <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
            </div>
          </div>
        </div>
      </section>

      <section class="container normal-section">
        <h2 class="section-title">Produtos</h2>

        <div class="products-container">
          <div class="movie-product">
            <strong class="product-title">Camiseta</strong>
            <!-- <br> -->
            <img src="img/Preto_1136833.png" alt="Camiseta" class="product-image">
            <div class="product-price-container">
              <span class="product-price">R$39,90</span>
              <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
            </div>
          </div>

          <div class="movie-product">
            <strong class="product-title">Miniatura</strong>
            <!-- <br> -->
            <img src="img/rocket-raccoon-guardioes-da-galaxia-pop-marvel-48-funko-03792_a.jpg" alt="Miniatura" class="product-image">
            <div class="product-price-container">
              <span class="product-price">R$69,90</span>
              <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
            </div>
          </div>
        </div>
      </section>

      <section class="container normal-section">
        <h2 class="section-title">Carrinho</h2>

        <table class="cart-table">
          <thead>
            <tr>
              <th class="table-head-item first-col">Item</th>
              <th class="table-head-item second-col">Preço</th>
              <th class="table-head-item third-col">Quantidade</th>
            </tr>
          </thead>

          <tbody>
            <!-- <tr class="cart-product">
              <td class="product-identification">
                <img src="images/produto2.png" alt="Miniatura" class="cart-product-image">
                <strong class="cart-product-title">Miniatura</strong>
              </td>
              <td>
                <span class="cart-product-price">R$69,90</span>
              </td>
              <td>
                <input type="number" value="2" min="0" class="product-qtd-input">
                <button type="button" class="remove-product-button">Remover</button>
              </td>
            </tr>
            <tr class="cart-product">
              <td class="product-identification">
                <img src="images/poster3.png" alt="Poster 3" class="cart-product-image">
                <strong class="cart-product-title">Poster 3</strong>
              </td>
              <td>
                <span class="cart-product-price">R$19,99</span>
              </td>
              <td>
                <input type="number" value="1" min="0" class="product-qtd-input">
                <button type="button" class="remove-product-button">Remover</button>
              </td>
            </tr> -->
          </tbody>

          <tfoot>
            <tr>
              <td colspan="3" class="cart-total-container">
                <strong>Total</strong>
                <span>R$0,00</span>
              </td>
            </tr>
          </tfoot>
        </table>

        <button type="button" class="purchase-button">Finalizar Compra</button>
      </section>
    </main>
  </body>
</html>