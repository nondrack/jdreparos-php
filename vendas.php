<?php include 'header.php'; ?>

<main>
  <h1 class="display-4 fw-bold text-danger text-center">JD Reparos</h1>
  <h3 class="text-muted text-center">Vendas de produtos usados</h3>

  <!-- Primeira seção de cards -->
  <section class="container mt-5">
    <div class="row g-4 justify-content-center">

      <?php
      $produtos1 = [
        [
          'titulo' => 'Geladeiras Usadas',
          'descricao' => 'Disponibilidade de geladeiras usadas em bom estado e com garantia.',
          'imagem' => 'image/geladeiraVenda.png',
          'alt' => 'Geladeira usada'
        ],
        [
          'titulo' => 'Máquinas de Lavar',
          'descricao' => 'Máquinas de lavar seminovas à venda com ótimo desempenho.',
          'imagem' => 'image/MaquinaDeLavar.png',
          'alt' => 'Máquina de lavar usada'
        ],
        [
          'titulo' => 'Micro-ondas',
          'descricao' => 'Micro-ondas usados, testados e com ótimo custo-benefício.',
          'imagem' => 'image/microondasVendas.png',
          'alt' => 'Micro-ondas usado'
        ]
      ];

      foreach ($produtos1 as $produto) {
        echo '
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 shadow-sm border-0">
            <div class="row g-0 h-100">
              <div class="col-4">
                <img src="' . $produto['imagem'] . '" class="img-fluid rounded-start h-100 object-fit-cover" alt="' . $produto['alt'] . '">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title">' . $produto['titulo'] . '</h5>
                  <p class="card-text">' . $produto['descricao'] . '</p>
                  <p class="card-text"><small class="text-muted">Atualizado há 3 minutos</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>';
      }
      ?>

    </div>
  </section>

  <!-- Segunda seção de cards -->
  <section class="container mt-5 mb-5">
    <div class="row g-4 justify-content-center">

      <?php
      $produtos2 = [
        [
          'titulo' => 'Fornos Usados',
          'descricao' => 'Fornos elétricos e convencionais usados, em ótimo funcionamento.',
          'imagem' => 'image/fornoVendas.png',
          'alt' => 'Forno elétrico usado'
        ],
        [
          'titulo' => 'Pequenos Eletros',
          'descricao' => 'Ferro de passar, espremedores e outros itens menores seminovos disponíveis.',
          'imagem' => 'image/ferroVendas.png',
          'alt' => 'Ferro de passar e outros itens pequenos'
        ],
        [
          'titulo' => 'Freezers Usados',
          'descricao' => 'Freezers e congeladores usados disponíveis com garantia e bom preço.',
          'imagem' => 'image/freezarVendas.png',
          'alt' => 'Freezer usado'
        ]
      ];

      foreach ($produtos2 as $produto) {
        echo '
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 shadow-sm border-0">
            <div class="row g-0 h-100">
              <div class="col-4">
                <img src="' . $produto['imagem'] . '" class="img-fluid rounded-start h-100 object-fit-cover" alt="' . $produto['alt'] . '">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title">' . $produto['titulo'] . '</h5>
                  <p class="card-text">' . $produto['descricao'] . '</p>
                  <p class="card-text"><small class="text-muted">Atualizado há 3 minutos</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>';
      }
      ?>

    </div>
  </section>

  <!-- Botão de contato -->
  <section class="text-center mb-5">
    <a href="formulario.php" class="btn btn-danger btn-lg">
      <i class="fab fa-whatsapp me-2"></i> Fale Conosco
    </a>
  </section>
</main>

<?php include 'footer.php'; ?>
