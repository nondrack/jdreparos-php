<?php include 'header.php'; ?>

<main>
  <!-- Seção: Nossos Serviços -->
  <section class="servicos py-5 bg-light">
    <div class="container">
      <h2 class="text-center text-danger fw-bold mb-5">Nossos Serviços</h2>
      <div class="row justify-content-center g-4">

        <?php
        $servicos = [
          [
            'titulo' => 'Concerto',
            'descricao' => 'Manutenção sem a necessidade de trocar componentes, com foco em soluções técnicas.',
            'imagem' => 'image/semTrocaDePecas.png',
            'alt' => 'Serviço sem troca de peças'
          ],
          [
            'titulo' => 'Troca de Peças',
            'descricao' => 'Utilizamos peças de qualidade com garantia para substituir componentes danificados.',
            'imagem' => 'image/ComTrocaDePecas.png',
            'alt' => 'Troca de peças'
          ],
          [
            'titulo' => 'Produtos Menores',
            'descricao' => 'Realizamos reparos elétricos em aparelhos pequenos, com agilidade e eficiência.',
            'imagem' => 'image/ProdutosMenores.png',
            'alt' => 'Produtos menores'
          ]
        ];

        foreach ($servicos as $item) {
          echo '
          <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
              <img src="' . $item['imagem'] . '" class="card-img-top" alt="' . $item['alt'] . '">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">' . $item['titulo'] . '</h5>
                <p class="card-text flex-grow-1">' . $item['descricao'] . '</p>
                <a href="formulario.php" class="btn btn-success mt-3" target="_blank">
                  <i class="fab fa-whatsapp me-2"></i>Entre em contato
                </a>
              </div>
            </div>
          </div>';
        }
        ?>

      </div>
    </div>
  </section>

  <!-- Seção: Endereço -->
  <section class="py-5 bg-light">
    <h2 class="text-center text-danger fw-bold mb-4">Endereço</h2>
    <div class="container d-flex justify-content-center">
      <div class="card mb-5 w-100 shadow" style="max-width: 900px;">
        <div class="row g-0">
          <div class="col-md-4">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3646.9248713210186!2d-52.485192700000006!3d-23.927714299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ed6e2dc9c4027d%3A0x92e028c66b6a1267!2sJD%20REPAROS!5e0!3m2!1spt-PT!2sbr!4v1750036897001!5m2!1spt-PT!2sbr"
              width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title fw-bold">Venha nos visitar</h5>
              <p class="card-text">Buscamos seu eletrodoméstico em região próxima.</p>
              <p class="mb-2">
                <strong>Endereço:</strong><br>
                Av. Ramiro Roselen, Nº 90<br>
                Araruna - PR<br>
                <strong>CNPJ:</strong> 29.834.104/8203-4
              </p>
              <p class="text-muted mb-3"><small>Atualizado há 3 minutos</small></p>
              <a href="formulario.php" class="btn btn-danger">
                <i class="fas fa-envelope me-2"></i>Contato
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>
