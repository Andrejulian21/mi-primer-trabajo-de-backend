<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TusJuegos.com</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f8f9fa;
      color: #212529;
    }
    .hero {
      background: linear-gradient(135deg, #0d6efd, #20c997);
      color: #fff;
      padding: 100px 20px;
      text-align: center;
      border-radius: 12px;
    }
    .category, .product, .benefit, .testimonial {
      background: #fff;
      padding: 20px;
      border-radius: 12px;
      margin-bottom: 20px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      transition: transform 0.2s ease-in-out;
    }
    .category:hover, .product:hover, .benefit:hover, .testimonial:hover {
      transform: scale(1.05);
    }
    footer {
      background: linear-gradient(135deg, #6610f2, #e83e8c);
      padding: 20px;
      text-align: center;
      margin-top: 40px;
      color: #fff;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">TusJuegos.com</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a href="#categorias" class="nav-link">Categorías</a></li>
          <li class="nav-item"><a href="#productos" class="nav-link">Juegos</a></li>
          <li class="nav-item"><a href="#beneficios" class="nav-link">Beneficios</a></li>
          <li class="nav-item"><a href="#contacto" class="nav-link">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section class="hero container my-5">
    <h1 class="display-4 fw-bold">Bienvenido a TusJuegos.com</h1>
    <p class="lead">Los mejores videojuegos en un solo lugar</p>
    <a href="#productos" class="btn btn-warning btn-lg text-dark fw-bold">🎮 Explorar Juegos</a>
  </section>

  <!-- Categorías -->
  <section id="categorias" class="container my-5">
    <h2 class="mb-4 text-center text-primary">Categorías Populares</h2>
    <div class="row g-4">
      <div class="col-md-4"><div class="category border border-primary">Acción</div></div>
      <div class="col-md-4"><div class="category border border-info">Aventura</div></div>
      <div class="col-md-4"><div class="category border border-success">Deportes</div></div>
    </div>
  </section>

  <!-- Productos -->
  <section id="productos" class="container my-5">
    <h2 class="mb-4 text-center text-success">Juegos Destacados</h2>
    <div class="row g-4">
      <div class="col-md-3"><div class="product border border-warning">Juego 1<br><strong>$59.99</strong></div></div>
      <div class="col-md-3"><div class="product border border-danger">Juego 2<br><strong>$49.99</strong></div></div>
      <div class="col-md-3"><div class="product border border-info">Juego 3<br><strong>$39.99</strong></div></div>
      <div class="col-md-3"><div class="product border border-primary">Juego 4<br><strong>$29.99</strong></div></div>
    </div>
  </section>

  <!-- Beneficios -->
  <section id="beneficios" class="container my-5">
    <h2 class="mb-4 text-center text-danger">¿Por qué elegirnos?</h2>
    <div class="row g-4">
      <div class="col-md-4"><div class="benefit border border-success">Entrega digital inmediata</div></div>
      <div class="col-md-4"><div class="benefit border border-warning">Ofertas exclusivas</div></div>
      <div class="col-md-4"><div class="benefit border border-info">Soporte 24/7</div></div>
    </div>
  </section>

  <!-- Testimonios -->
  <section class="container my-5">
    <h2 class="mb-4 text-center text-info">Lo que dicen nuestros gamers</h2>
    <div class="row g-4">
      <div class="col-md-4"><div class="testimonial border border-primary">"Excelente servicio, conseguí mis juegos favoritos al instante."</div></div>
      <div class="col-md-4"><div class="testimonial border border-success">"Ofertas geniales y buena atención, recomendado 100%."</div></div>
      <div class="col-md-4"><div class="testimonial border border-danger">"TusJuegos.com es mi tienda gamer de confianza."</div></div>
    </div>
  </section>

  <!-- Newsletter -->
  <section id="contacto" class="container my-5 text-center">
    <h2 class="mb-4 text-warning">Suscríbete a nuestro boletín</h2>
    <form class="row justify-content-center">
      <div class="col-md-6">
        <input type="email" class="form-control mb-3" placeholder="Tu correo electrónico">
        <button class="btn btn-success w-100 fw-bold">🚀 Suscribirme</button>
      </div>
    </form>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 TusJuegos.com - Todos los derechos reservados</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
