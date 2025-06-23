<?php include 'header.php'; ?>

 <main>
    <section class="py-5 bg-light">
      <div class="container text-center">
        <div class="mb-4">
          <h1 class="display-4 fw-bold text-danger">JD Reparos</h1>
          <h3 class="text-muted">Conserto de Eletrodomésticos</h3>
        </div>

        <div class="row align-items-center banner">
          <div class="col-md-6 mb-4 mb-md-0 texto">
            <img src="image/banner.jpg" class="img-fluid rounded shadow" alt="JD Reparos">
          </div>
          <div class="col-md-6 text-start">
            <p class="lead">
              Seu eletrodoméstico parou de funcionar? Faça uma avaliação conosco!
              Na <strong>JD Reparos</strong>, oferecemos consertos especializados em componentes elétricos de diversos
              produtos.
              Atendemos em <strong>Araruna-PR</strong> e região.
            </p>
            <p class="mb-4">Entre em contato e agende seu atendimento com rapidez e confiança.</p>
            <a href="formulario.html" class="btn btn-danger btn-lg"><i class="fab fa-whatsapp me-2"></i> Fale
              Conosco</a>
          </div>
        </div>
      </div>
    </section>

    <section class="servicos py-4 bg-light">
      <div class="container">
        <h2 class="text-center text-danger fw-bold mb-4">Tipos de Serviços</h2>

        <div id="carouselExampleDark" class="carousel slide carousel-fade" data-bs-ride="carousel">

          <!-- Indicadores -->
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>

          <!-- Slides -->
          <div class="carousel-inner shadow rounded-4 overflow-hidden">
            <div class="carousel-item active" data-bs-interval="5000">
              <img src="image/maquina.png" class="d-block w-100 img-fluid carousel-img-sm" alt="Máquina de Lavar">
              <div class="carousel-caption bg-dark bg-opacity-75 rounded-3 p-2">
                <h5 class="text-white">Máquina de Lavar</h5>
                <p class="text-light small">Conserto de lavadoras de todas as marcas com diagnóstico técnico
                  especializado.</p>
              </div>
            </div>

            <div class="carousel-item" data-bs-interval="5000">
              <img src="image/geladeira.png" class="d-block w-100 img-fluid carousel-img-sm" alt="Geladeira">
              <div class="carousel-caption bg-dark bg-opacity-75 rounded-3 p-2">
                <h5 class="text-white">Geladeiras</h5>
                <p class="text-light small">Reparo eficiente em sistemas de refrigeração doméstica.</p>
              </div>
            </div>

            <div class="carousel-item">
              <img src="image/microondas.png" class="d-block w-100 img-fluid carousel-img-sm" alt="Micro-ondas">
              <div class="carousel-caption bg-dark bg-opacity-75 rounded-3 p-2">
                <h5 class="text-white">Micro-ondas</h5>
                <p class="text-light small">Diagnóstico ágil e conserto completo de micro-ondas.</p>
              </div>
            </div>
          </div>

          <!-- Controles -->
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
          </button>
        </div>
      </div>
    </section>



  </main>

<?php include 'footer.php'; ?>
