<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TusJuegos.com - La Mejor Tienda de Videojuegos Online</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      --secondary-gradient: linear-gradient(135deg, #ff6b6b 0%, #ffa500 100%);
      --accent-gradient: linear-gradient(135deg, #4ecdc4 0%, #44a08d 100%);
      --dark-gradient: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
    }

    * {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
      background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
      line-height: 1.6;
    }

    /* Navbar mejorada */
    .navbar {
      background: var(--primary-gradient) !important;
      backdrop-filter: blur(10px);
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
    }

    .navbar.scrolled {
      background: rgba(102, 126, 234, 0.95) !important;
    }

    .navbar-brand {
      font-size: 1.8rem;
      font-weight: 800;
      background: linear-gradient(45deg, #ffd700, #ffed4e);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .nav-link {
      font-weight: 600;
      position: relative;
      overflow: hidden;
    }

    .nav-link::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      width: 0;
      height: 2px;
      background: #ffd700;
      transition: all 0.3s ease;
      transform: translateX(-50%);
    }

    .nav-link:hover::after {
      width: 80%;
    }

    /* Hero section renovada */
    .hero {
      background: var(--secondary-gradient);
      padding: 120px 0;
      position: relative;
      overflow: hidden;
      border-radius: 0 0 50px 50px;
    }

    .hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
      opacity: 0.3;
    }

    .hero-content {
      position: relative;
      z-index: 2;
    }

    .hero h1 {
      font-size: 3.5rem;
      font-weight: 900;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
      margin-bottom: 1rem;
    }

    .hero p {
      font-size: 1.3rem;
      margin-bottom: 2rem;
      opacity: 0.95;
    }

    /* Botones mejorados */
    .btn-hero {
      background: linear-gradient(45deg, #ffd700, #ffed4e);
      color: #333;
      font-weight: 700;
      padding: 15px 40px;
      border: none;
      border-radius: 50px;
      font-size: 1.1rem;
      box-shadow: 0 8px 25px rgba(255, 215, 0, 0.3);
      transition: all 0.3s ease;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .btn-hero:hover {
      transform: translateY(-3px) scale(1.05);
      box-shadow: 0 12px 35px rgba(255, 215, 0, 0.4);
      color: #333;
    }

    /* Cards mejoradas */
    .modern-card {
      background: white;
      border-radius: 20px;
      padding: 30px;
      border: none;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      transition: all 0.4s ease;
      position: relative;
      overflow: hidden;
    }

    .modern-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: var(--accent-gradient);
      transform: scaleX(0);
      transition: transform 0.3s ease;
    }

    .modern-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }

    .modern-card:hover::before {
      transform: scaleX(1);
    }

    .category-icon {
      font-size: 3rem;
      margin-bottom: 1rem;
      background: var(--primary-gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    /* Productos mejorados */
    .product-card {
      background: white;
      border-radius: 20px;
      overflow: hidden;
      transition: all 0.4s ease;
      border: none;
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
      position: relative;
    }

    .product-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: var(--accent-gradient);
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .product-card:hover {
      transform: translateY(-8px) scale(1.02);
      box-shadow: 0 15px 40px rgba(0,0,0,0.2);
    }

    .product-card:hover::before {
      opacity: 0.1;
    }

    .product-image {
      height: 200px;
      background: linear-gradient(135deg, #667eea, #764ba2);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 4rem;
      color: white;
      position: relative;
    }

    .price-tag {
      background: var(--secondary-gradient);
      color: white;
      padding: 8px 20px;
      border-radius: 25px;
      font-weight: 700;
      display: inline-block;
      margin: 10px 0;
      box-shadow: 0 4px 15px rgba(255, 107, 107, 0.3);
    }

    /* Estadísticas */
    .stats-section {
      background: var(--dark-gradient);
      color: white;
      padding: 60px 0;
      margin: 60px 0;
      border-radius: 25px;
    }

    .stat-item {
      text-align: center;
      padding: 20px;
    }

    .stat-number {
      font-size: 3rem;
      font-weight: 900;
      background: linear-gradient(45deg, #ffd700, #ffed4e);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      display: block;
    }

    .stat-label {
      font-size: 1.1rem;
      opacity: 0.9;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    /* Testimonios mejorados */
    .testimonial-card {
      background: white;
      border-radius: 20px;
      padding: 30px;
      border: none;
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
      position: relative;
      margin-bottom: 30px;
    }

    .testimonial-card::before {
      content: '"';
      position: absolute;
      top: -10px;
      left: 20px;
      font-size: 6rem;
      color: #667eea;
      opacity: 0.2;
      line-height: 1;
    }

    .testimonial-avatar {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: var(--primary-gradient);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: bold;
      font-size: 1.5rem;
      margin: 0 auto 15px;
    }

    /* Newsletter mejorada */
    .newsletter-section {
      background: var(--accent-gradient);
      padding: 60px 0;
      border-radius: 25px;
      color: white;
      position: relative;
      overflow: hidden;
    }

    .newsletter-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="white" opacity="0.1"/><circle cx="80" cy="40" r="1" fill="white" opacity="0.1"/><circle cx="40" cy="80" r="1.5" fill="white" opacity="0.1"/></svg>');
    }

    .newsletter-content {
      position: relative;
      z-index: 2;
    }

    .form-control-modern {
      border: none;
      border-radius: 50px;
      padding: 15px 25px;
      font-size: 1.1rem;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .btn-newsletter {
      background: white;
      color: #4ecdc4;
      border: none;
      border-radius: 50px;
      padding: 15px 30px;
      font-weight: 700;
      transition: all 0.3s ease;
    }

    .btn-newsletter:hover {
      background: #f8f9fa;
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }

    /* Footer mejorado */
    footer {
      background: var(--dark-gradient);
      color: white;
      padding: 50px 0 30px;
      margin-top: 60px;
    }

    .footer-section h5 {
      color: #ffd700;
      margin-bottom: 20px;
      font-weight: 700;
    }

    .footer-section a {
      color: #e2e8f0;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .footer-section a:hover {
      color: #ffd700;
    }

    .social-icons a {
      display: inline-block;
      width: 45px;
      height: 45px;
      background: var(--accent-gradient);
      border-radius: 50%;
      text-align: center;
      line-height: 45px;
      margin: 0 10px;
      color: white;
      font-size: 1.2rem;
      transition: all 0.3s ease;
    }

    .social-icons a:hover {
      transform: translateY(-3px) scale(1.1);
      box-shadow: 0 8px 20px rgba(78, 205, 196, 0.4);
    }

    /* Animaciones */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes pulse {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.05); }
    }

    .animate-on-scroll {
      animation: fadeInUp 0.8s ease-out;
    }

    .pulse-animation {
      animation: pulse 2s infinite;
    }

    /* Carousel personalizado */
    .game-carousel .carousel-item img {
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: rgba(102, 126, 234, 0.8);
      border-radius: 50%;
      width: 50px;
      height: 50px;
    }

    /* Badge de descuento */
    .discount-badge {
      position: absolute;
      top: 15px;
      right: 15px;
      background: #dc3545;
      color: white;
      padding: 5px 15px;
      border-radius: 20px;
      font-weight: 700;
      font-size: 0.9rem;
      z-index: 3;
    }

    /* Efectos hover mejorados */
    .hover-lift {
      transition: all 0.3s ease;
    }

    .hover-lift:hover {
      transform: translateY(-5px);
    }

    /* Responsive mejoras */
    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2.5rem;
      }
      
      .stat-number {
        font-size: 2rem;
      }
    }

    /* Botón flotante de WhatsApp */
    .whatsapp-float {
      position: fixed;
      width: 60px;
      height: 60px;
      bottom: 30px;
      right: 30px;
      background: #25d366;
      color: white;
      border-radius: 50%;
      text-align: center;
      font-size: 24px;
      line-height: 60px;
      box-shadow: 0 4px 20px rgba(37, 211, 102, 0.4);
      z-index: 1000;
      transition: all 0.3s ease;
      text-decoration: none;
    }

    .whatsapp-float:hover {
      transform: scale(1.1);
      box-shadow: 0 6px 25px rgba(37, 211, 102, 0.6);
      color: white;
    }
  </style>
</head>
<body>
  <!-- Navbar mejorada -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNavbar">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="fas fa-gamepad me-2"></i>TusJuegos.com
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a href="#inicio" class="nav-link">Inicio</a></li>
          <li class="nav-item"><a href="#categorias" class="nav-link">Categorías</a></li>
          <li class="nav-item"><a href="#productos" class="nav-link">Juegos</a></li>
          <li class="nav-item"><a href="#ofertas" class="nav-link">Ofertas</a></li>
          <li class="nav-item"><a href="#contacto" class="nav-link">Contacto</a></li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-shopping-cart"></i>
              <span class="badge bg-warning text-dark ms-1">3</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section mejorada -->
  <section id="inicio" class="hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 hero-content">
          <h1 class="display-3 fw-bold mb-4">
            Los Mejores Videojuegos 
            <span class="d-block">¡Ahora al Alcance!</span>
          </h1>
          <p class="lead mb-4">
            Descubre miles de títulos, ofertas exclusivas y entrega inmediata. 
            Tu aventura gaming comienza aquí.
          </p>
          <div class="d-flex flex-column flex-sm-row gap-3">
            <a href="#productos" class="btn btn-hero">
              <i class="fas fa-play me-2"></i>Explorar Catálogo
            </a>
            <a href="#ofertas" class="btn btn-outline-light btn-lg">
              <i class="fas fa-fire me-2"></i>Ver Ofertas
            </a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="text-center pulse-animation">
            <i class="fas fa-gamepad" style="font-size: 12rem; opacity: 0.8;"></i>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Estadísticas -->
  <section class="stats-section container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-3 stat-item">
          <span class="stat-number">10K+</span>
          <div class="stat-label">Juegos Disponibles</div>
        </div>
        <div class="col-md-3 stat-item">
          <span class="stat-number">50K+</span>
          <div class="stat-label">Gamers Felices</div>
        </div>
        <div class="col-md-3 stat-item">
          <span class="stat-number">24/7</span>
          <div class="stat-label">Soporte Online</div>
        </div>
        <div class="col-md-3 stat-item">
          <span class="stat-number">5★</span>
          <div class="stat-label">Calificación Promedio</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Categorías mejoradas -->
  <section id="categorias" class="container my-5 py-5">
    <div class="text-center mb-5">
      <h2 class="display-5 fw-bold text-primary mb-3">Explora por Categorías</h2>
      <p class="lead text-muted">Encuentra exactamente lo que buscas</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6">
        <div class="modern-card text-center hover-lift">
          <div class="category-icon">
            <i class="fas fa-rocket"></i>
          </div>
          <h4 class="fw-bold mb-3">Acción & Aventura</h4>
          <p class="text-muted mb-3">Adrenalina pura con los mejores títulos de acción</p>
          <a href="#" class="btn btn-outline-primary btn-sm">Ver Juegos</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="modern-card text-center hover-lift">
          <div class="category-icon">
            <i class="fas fa-futbol"></i>
          </div>
          <h4 class="fw-bold mb-3">Deportes</h4>
          <p class="text-muted mb-3">Vive la emoción del deporte desde casa</p>
          <a href="#" class="btn btn-outline-primary btn-sm">Ver Juegos</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="modern-card text-center hover-lift">
          <div class="category-icon">
            <i class="fas fa-brain"></i>
          </div>
          <h4 class="fw-bold mb-3">Estrategia</h4>
          <p class="text-muted mb-3">Pon a prueba tu mente con desafíos épicos</p>
          <a href="#" class="btn btn-outline-primary btn-sm">Ver Juegos</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Carousel de juegos destacados -->
  <section class="container my-5">
    <h2 class="text-center fw-bold mb-5">🎮 Juegos Más Populares</h2>
    <div id="gamesCarousel" class="carousel slide game-carousel" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row g-4">
            <div class="col-md-6">
              <div class="product-image">
                <i class="fas fa-dragon"></i>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
              <div>
                <h3 class="fw-bold">Epic Fantasy RPG</h3>
                <p class="text-muted">Sumérgete en un mundo de magia y aventuras épicas</p>
                <div class="d-flex align-items-center gap-3">
                  <span class="price-tag">$59.99</span>
                  <div class="text-warning">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="ms-2 text-muted">(4.8)</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row g-4">
            <div class="col-md-6">
              <div class="product-image">
                <i class="fas fa-car"></i>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
              <div>
                <h3 class="fw-bold">Speed Racing Pro</h3>
                <p class="text-muted">La experiencia de carreras más realista</p>
                <div class="d-flex align-items-center gap-3">
                  <span class="price-tag">$49.99</span>
                  <div class="text-warning">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span class="ms-2 text-muted">(4.6)</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#gamesCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#gamesCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </section>

  <!-- Productos mejorados -->
  <section id="productos" class="container my-5 py-5">
    <div class="text-center mb-5">
      <h2 class="display-5 fw-bold text-success mb-3">🔥 Juegos Destacados</h2>
      <p class="lead text-muted">Los títulos más vendidos de la semana</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6">
        <div class="product-card">
          <div class="discount-badge">-20%</div>
          <div class="product-image">
            <i class="fas fa-sword"></i>
          </div>
          <div class="p-3">
            <h5 class="fw-bold mb-2">Warrior's Quest</h5>
            <p class="text-muted small mb-3">RPG • Aventura</p>
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <span class="text-decoration-line-through text-muted me-2">$74.99</span>
                <span class="price-tag">$59.99</span>
              </div>
              <button class="btn btn-outline-primary btn-sm">
                <i class="fas fa-cart-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="product-card">
          <div class="product-image">
            <i class="fas fa-space-shuttle"></i>
          </div>
          <div class="p-3">
            <h5 class="fw-bold mb-2">Space Explorer</h5>
            <p class="text-muted small mb-3">Sci-Fi • Simulación</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="price-tag">$49.99</span>
              <button class="btn btn-outline-primary btn-sm">
                <i class="fas fa-cart-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="product-card">
          <div class="discount-badge">NUEVO</div>
          <div class="product-image">
            <i class="fas fa-magic"></i>
          </div>
          <div class="p-3">
            <h5 class="fw-bold mb-2">Mystic Legends</h5>
            <p class="text-muted small mb-3">Fantasía • Multijugador</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="price-tag">$39.99</span>
              <button class="btn btn-outline-primary btn-sm">
                <i class="fas fa-cart-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="product-card">
          <div class="product-image">
            <i class="fas fa-trophy"></i>
          </div>
          <div class="p-3">
            <h5 class="fw-bold mb-2">Champion League</h5>
            <p class="text-muted small mb-3">Deportes • Competitivo</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="price-tag">$29.99</span>
              <button class="btn btn-outline-primary btn-sm">
                <i class="fas fa-cart-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de ofertas especiales -->
  <section id="ofertas" class="container-fluid py-5" style="background: linear-gradient(135deg, #ff9a56 0%, #ffad56 100%);">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h2 class="display-4 fw-bold text-white mb-4">
            ¡Ofertas Flash! 
            <i class="fas fa-bolt text-warning"></i>
          </h2>
          <p class="lead text-white mb-4">
            Hasta 70% de descuento en títulos seleccionados. 
            ¡Solo por tiempo limitado!
          </p>
          <button class="btn btn-light btn-lg fw-bold">
            <i class="fas fa-tags me-2"></i>Ver Todas las Ofertas
          </button>
        </div>
        <div class="col-md-6 text-center">
          <div class="position-relative">
            <i class="fas fa-gift" style="font-size: 8rem; color: rgba(255,255,255,0.8);"></i>
            <div class="position-absolute top-0 start-50 translate-