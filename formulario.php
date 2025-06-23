<?php include 'header.php'; ?>

<main>
    <section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center text-danger fw-bold mb-4">Agende nossa visita</h2>

    <form id="whatsappForm" class="row g-3">
      <!-- Nome completo -->
      <div class="col-md-6">
        <label for="nome" class="form-label">Nome completo</label>
        <input type="text" class="form-control" id="nome" required>
      </div>

      <!-- Número para contato -->
      <div class="col-md-6">
        <label for="telefone" class="form-label">Número para Contato</label>
        <input type="tel" class="form-control" id="telefone" required placeholder="(00) 00000-0000">
      </div>

      <!-- Google Maps -->
      <div class="col-12">
        <label for="maps" class="form-label">Link do Google Maps (opcional)</label>
        <input type="url" class="form-control" id="maps" placeholder="https://maps.app.goo.gl/exemplo">
      </div>

      <!-- Endereço -->
      <div class="col-md-4">
        <label for="cidade" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="cidade" required>
      </div>

      <div class="col-md-4">
        <label for="jardim" class="form-label">Jardim / Bairro</label>
        <input type="text" class="form-control" id="jardim" required>
      </div>

      <div class="col-md-4">
        <label for="rua" class="form-label">Rua</label>
        <input type="text" class="form-control" id="rua" required>
      </div>

      <!-- Mensagem -->
      <div class="col-12">
        <label for="mensagem" class="form-label">Mensagem</label>
        <textarea class="form-control" id="mensagem" rows="4" required placeholder="Descreva o problema ou solicitação..."></textarea>
      </div>

      <!-- Botão -->
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-success px-4 py-2">
          <i class="fab fa-whatsapp me-2"></i>Enviar para WhatsApp
        </button>
      </div>
    </form>
  </div>
</section>

<!-- JavaScript corrigido -->
<script>
  document.getElementById("whatsappForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const nome = document.getElementById("nome").value.trim();
    const telefone = document.getElementById("telefone").value.trim();
    const maps = document.getElementById("maps").value.trim();
    const cidade = document.getElementById("cidade").value.trim();
    const jardim = document.getElementById("jardim").value.trim();
    const rua = document.getElementById("rua").value.trim();
    const mensagem = document.getElementById("mensagem").value.trim();

    const texto = `*Agendamento de Visita*` +
      `*Nome:* ${nome}` +
      `*Contato:* ${telefone}` +
      `*Endereço:* ${rua}, ${jardim}, ${cidade}` +
      (maps ? `*Google Maps:* ${maps}` : '') +
      `*Mensagem:* ${mensagem}`;

    const numero = "5544999366815"; // Seu número com DDI (55) e DDD (ex: 44)
    const url = `https://wa.me/${numero}?text=${encodeURIComponent(texto)}`;

    window.open(url, '_blank');
  });
</script>

<?php include 'footer.php'; ?>
