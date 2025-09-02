<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Camiseta Gaming "Warrior's Quest" - TusJuegos.com</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      --secondary-gradient: linear-gradient(135deg, #ff6b6b 0%, #ffa500 100%);
      --accent-gradient: linear-gradient(135deg, #4ecdc4 0%, #44a08d 100%);
      --success-gradient: linear-gradient(135deg, #56ab2f 0%, #a8e6cf 100%);
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
      background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
      line-height: 1.6;
      padding-top: 80px;
    }

    .navbar {
      background: var(--primary-gradient) !important;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }

    .navbar-brand {
      font-size: 1.8rem;
      font-weight: 800;
      background: linear-gradient(45deg, #ffd700, #ffed4e);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .product-container {
      background: white;
      border-radius: 25px;
      box-shadow: 0 15px 40px rgba(0,0,0,0.1);
      overflow: hidden;
      margin: 40px 0;
    }

    .product-gallery {
      background: linear-gradient(135deg, #667eea, #764ba2);
      min-height: 500px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    .main-product-image {
      font-size: 12rem;
      color: white;
      opacity: 0.9;
      transition: transform 0.3s ease;
    }

    .main-product-image:hover {
      transform: scale(1.1) rotate(5deg);
    }

    .thumbnail-gallery {
      display: flex;
      gap: 10px;
      margin-top: 20px;
      justify-content: center;
    }

    .thumbnail {
      width: 80px;
      height: 80px;
      background: rgba(255,255,255,0.2);
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.5rem;
      cursor: pointer;
      transition: all 0.3s ease;
      border: 2px solid transparent;
    }

    .thumbnail:hover,
    .thumbnail.active {
      background: rgba(255,255,255,0.3);
      transform: scale(1.1);
      border-color: #ffd700;
    }

    .badge-new {
      position: absolute;
      top: 20px;
      left: 20px;
      background: var(--secondary-gradient);
      color: white;
      padding: 8px 20px;
      border-radius: 25px;
      font-weight: 700;
      font-size: 0.9rem;
    }

    .product-info {
      padding: 40px;
    }

    .product-title {
      font-size: 2.5rem;
      font-weight: 900;
      background: var(--primary-gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      margin-bottom: 15px;
    }

    .product-rating {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 20px;
    }

    .stars {
      color: #ffc107;
      font-size: 1.2rem;
    }

    .price-section {
      background: linear-gradient(135deg, #f8f9fa, #e9ecef);
      padding: 25px;
      border-radius: 20px;
      margin: 30px 0;
      border-left: 5px solid #667eea;
    }

    .original-price {
      font-size: 1.2rem;
      text-decoration: line-through;
      color: #6c757d;
    }

    .current-price {
      font-size: 2.5rem;
      font-weight: 900;
      color: #dc3545;
      margin: 10px 0;
    }

    .discount-percentage {
      background: var(--secondary-gradient);
      color: white;
      padding: 5px 15px;
      border-radius: 20px;
      font-weight: 700;
      font-size: 0.9rem;
      display: inline-block;
    }

    /* Sistema de talles */
    .size-selector {
      margin: 30px 0;
    }

    .size-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(80px, 1fr));
      gap: 15px;
      margin: 20px 0;
    }

    .size-option {
      aspect-ratio: 1;
      border: 2px solid #dee2e6;
      border-radius: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      cursor: pointer;
      transition: all 0.3s ease;
      background: white;
      position: relative;
      overflow: hidden;
    }

    .size-option:hover {
      border-color: #667eea;
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(102, 126, 234, 0.2);
    }

    .size-option.selected {
      background: var(--primary-gradient);
      color: white;
      border-color: #667eea;
      transform: scale(1.05);
      box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
    }

    .size-option.unavailable {
      background: #f8f9fa;
      color: #6c757d;
      cursor: not-allowed;
      opacity: 0.5;
    }

    .size-option.unavailable::after {
      content: '';
      position: absolute;
      top: 50%;
      left: 10%;
      right: 10%;
      height: 2px;
      background: #dc3545;
      transform: translateY(-50%) rotate(-45deg);
    }

    /* Guía de talles */
    .size-guide {
      background: linear-gradient(135deg, #e3f2fd, #f3e5f5);
      border-radius: 20px;
      padding: 25px;
      margin: 20px 0;
      border: 1px solid #e1bee7;
    }

    .size-chart {
      background: white;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .size-chart table {
      margin: 0;
    }

    .size-chart th {
      background: var(--primary-gradient);
      color: white;
      font-weight: 700;
      padding: 15px;
      border: none;
    }

    .size-chart td {
      padding: 12px 15px;
      border-bottom: 1px solid #f8f9fa;
      font-weight: 600;
    }

    .size-chart tr:hover {
      background: #f8f9fa;
    }

    /* Colores disponibles */
    .color-selector {
      margin: 25px 0;
    }

    .color-options {
      display: flex;
      gap: 15px;
      flex-wrap: wrap;
    }

    .color-option {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      cursor: pointer;
      border: 3px solid transparent;
      transition: all 0.3s ease;
      position: relative;
    }

    .color-option:hover {
      transform: scale(1.1);
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .color-option.selected {
      border-color: #333;
      transform: scale(1.15);
    }

    .color-option.selected::after {
      content: '✓';
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-weight: bold;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
    }

    /* Botones de acción */
    .action-buttons {
      display: flex;
      gap: 15px;
      margin: 30px 0;
      flex-wrap: wrap;
    }

    .btn-add-cart {
      background: var(--accent-gradient);
      border: none;
      color: white;
      font-weight: 700;
      padding: 15px 30px;
      border-radius: 50px;
      transition: all 0.3s ease;
      flex: 1;
      min-width: 200px;
    }

    .btn-add-cart:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(78, 205, 196, 0.4);
      color: white;
    }

    .btn-wishlist {
      background: white;
      border: 2px solid #dee2e6;
      color: #6c757d;
      font-weight: 600;
      padding: 15px 25px;
      border-radius: 50px;
      transition: all 0.3s ease;
    }

    .btn-wishlist:hover {
      border-color: #dc3545;
      color: #dc3545;
      transform: translateY(-2px);
    }

    /* Información adicional */
    .product-tabs {
      margin-top: 50px;
    }

    .nav-pills .nav-link {
      border-radius: 50px;
      font-weight: 600;
      padding: 12px 25px;
      margin: 0 5px;
      transition: all 0.3s ease;
    }

    .nav-pills .nav-link.active {
      background: var(--primary-gradient);
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(102, 126, 234, 0.3);
    }

    .tab-content {
      background: white;
      border-radius: 20px;
      padding: 30px;
      margin-top: 20px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    /* Alertas personalizadas */
    .stock-alert {
      background: linear-gradient(45deg, #ff9800, #ffc107);
      color: white;
      border-radius: 15px;
      padding: 15px;
      margin: 20px 0;
      border: none;
      font-weight: 600;
    }

    .delivery-info {
      background: var(--success-gradient);
      color: white;
      border-radius: 15px;
      padding: 20px;
      margin: 20px 0;
      text-align: center;
    }

    /* Animaciones */
    @keyframes slideInRight {
      from {
        opacity: 0;
        transform: translateX(50px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes slideInLeft {
      from {
        opacity: 0;
        transform: translateX(-50px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    .animate-slide-right {
      animation: slideInRight 0.8s ease-out;
    }

    .animate-slide-left {
      animation: slideInLeft 0.8s ease-out;
    }

    /* Breadcrumb personalizado */
    .custom-breadcrumb {
      background: rgba(255,255,255,0.8);
      backdrop-filter: blur(10px);
      border-radius: 50px;
      padding: 15px 25px;
      margin: 20px 0;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .breadcrumb-item a {
      color: #667eea;
      text-decoration: none;
      font-weight: 600;
    }

    .breadcrumb-item a:hover {
      color: #ff6b6b;
    }

    /* Footer simplificado */
    .mini-footer {
      background: var(--primary-gradient);
      color: white;
      padding: 30px 0;
      margin-top: 60px;
      text-align: center;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .product-title {
        font-size: 2rem;
      }
      
      .current-price {
        font-size: 2rem;
      }
      
      .action-buttons {
        flex-direction: column;
      }
      
      .size-grid {
        grid-template-columns: repeat(4, 1fr);
      }
    }

    /* Indicador de talle seleccionado */
    .size-indicator {
      background: linear-gradient(45deg, #e8f5e8, #f0f8f0);
      border: 1px solid #28a745;
      border-radius: 15px;
      padding: 15px;
      margin: 15px 0;
      display: none;
    }

    .size-indicator.show {
      display: block;
      animation: slideInRight 0.5s ease-out;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <i class="fas fa-gamepad me-2"></i>TusJuegos.com
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a href="#" class="nav-link">Inicio</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Categorías</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Merchandising</a></li>
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

  <!-- Breadcrumb -->
  <div class="container">
    <nav class="custom-breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
        <li class="breadcrumb-item"><a href="#">Merchandising</a></li>
        <li class="breadcrumb-item"><a href="#">Camisetas Gaming</a></li>
        <li class="breadcrumb-item active">Warrior's Quest Tee</li>
      </ol>
    </nav>
  </div>

  <!-- Producto Principal -->
  <div class="container">
    <div class="product-container">
      <div class="row g-0">
        <!-- Galería de imágenes -->
        <div class="col-lg-6">
          <div class="product-gallery animate-slide-left">
            <div class="badge-new">
              <i class="fas fa-fire me-1"></i>¡NUEVO!
            </div>
            <div class="main-product-image">
              <i class="fas fa-tshirt"></i>
            </div>
            <div class="thumbnail-gallery">
              <div class="thumbnail active">
                <i class="fas fa-tshirt"></i>
              </div>
              <div class="thumbnail">
                <i class="fas fa-eye"></i>
              </div>
              <div class="thumbnail">
                <i class="fas fa-tags"></i>
              </div>
              <div class="thumbnail">
                <i class="fas fa-info"></i>
              </div>
            </div>
          </div>
        </div>

        <!-- Información del producto -->
        <div class="col-lg-6">
          <div class="product-info animate-slide-right">
            <h1 class="product-title">Camiseta Gaming "Warrior's Quest"</h1>
            
            <div class="product-rating">
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <span class="text-muted">(4.8 de 5 - 234 reseñas)</span>
            </div>

            <p class="lead text-muted mb-4">
              Camiseta oficial del juego Warrior's Quest. Diseño exclusivo con estampado de alta calidad 
              y materiales premium. Perfecta para gamers que buscan estilo y comodidad.
            </p>

            <!-- Precios -->
            <div class="price-section">
              <div class="d-flex align-items-center gap-3 mb-2">
                <span class="original-price">$34.99</span>
                <span class="discount-percentage">-30% OFF</span>
              </div>
              <div class="current-price">$24.99</div>
              <small class="text-muted">
                <i class="fas fa-truck me-1"></i>Envío gratis en compras superiores a $50
              </small>
            </div>

            <!-- Selector de color -->
            <div class="color-selector">
              <h5 class="fw-bold mb-3">
                <i class="fas fa-palette me-2"></i>Color: 
                <span id="selected-color">Negro Gaming</span>
              </h5>
              <div class="color-options">
                <div class="color-option selected" 
                     style="background: linear-gradient(45deg, #2c3e50, #34495e);"
                     data-color="Negro Gaming"
                     title="Negro Gaming"></div>
                <div class="color-option" 
                     style="background: linear-gradient(45deg, #3498db, #2980b9);"
                     data-color="Azul Épico"
                     title="Azul Épico"></div>
                <div class="color-option" 
                     style="background: linear-gradient(45deg, #e74c3c, #c0392b);"
                     data-color="Rojo Dragon"
                     title="Rojo Dragon"></div>
                <div class="color-option" 
                     style="background: linear-gradient(45deg, #27ae60, #229954);"
                     data-color="Verde Bosque"
                     title="Verde Bosque"></div>
                <div class="color-option" 
                     style="background: linear-gradient(45deg, #8e44ad, #7d3c98);"
                     data-color="Púrpura Místico"
                     title="Púrpura Místico"></div>
              </div>
            </div>

            <!-- Selector de talle -->
            <div class="size-selector">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fw-bold mb-0">
                  <i class="fas fa-ruler me-2"></i>Talle: 
                  <span id="selected-size">Selecciona tu talle</span>
                </h5>
                <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#sizeGuideModal">
                  <i class="fas fa-question-circle me-1"></i>Guía de Talles
                </button>
              </div>
              
              <div class="size-grid">
                <div class="size-option" data-size="XS" data-chest="86-89" data-length="66">XS</div>
                <div class="size-option" data-size="S" data-chest="90-93" data-length="68">S</div>
                <div class="size-option" data-size="M" data-chest="94-97" data-length="70">M</div>
                <div class="size-option" data-size="L" data-chest="98-101" data-length="72">L</div>
                <div class="size-option" data-size="XL" data-chest="102-105" data-length="74">XL</div>
                <div class="size-option unavailable" data-size="XXL" data-chest="106-109" data-length="76">XXL</div>
              </div>

              <div class="size-indicator" id="sizeIndicator">
                <div class="d-flex align-items-center">
                  <i class="fas fa-check-circle text-success me-2"></i>
                  <div>
                    <strong>Talle <span id="indicatorSize"></span> seleccionado</strong>
                    <br>
                    <small class="text-muted">
                      Pecho: <span id="indicatorChest"></span>cm | Largo: <span id="indicatorLength"></span>cm
                    </small>
                  </div>
                </div>
              </div>
            </div>

            <!-- Stock y entrega -->
            <div class="stock-alert">
              <i class="fas fa-clock me-2"></i>
              <strong>¡Últimas unidades disponibles!</strong> Solo quedan 7 en stock
            </div>

            <div class="delivery-info">
              <div class="row text-center">
                <div class="col-4">
                  <i class="fas fa-shipping-fast fs-3 mb-2"></i>
                  <div class="small">Envío Express</div>
                  <div class="fw-bold">24-48h</div>
                </div>
                <div class="col-4">
                  <i class="fas fa-undo fs-3 mb-2"></i>
                  <div class="small">Devolución</div>
                  <div class="fw-bold">30 días</div>
                </div>
                <div class="col-4">
                  <i class="fas fa-shield-alt fs-3 mb-2"></i>
                  <div class="small">Garantía</div>
                  <div class="fw-bold">1 año</div>
                </div>
              </div>
            </div>

            <!-- Cantidad y botones -->
            <div class="d-flex align-items-center gap-3 mb-4">
              <label class="fw-bold">Cantidad:</label>
              <div class="input-group" style="width: 130px;">
                <button class="btn btn-outline-secondary" type="button" id="decreaseQty">-</button>
                <input type="number" class="form-control text-center" value="1" min="1" max="10" id="quantity">
                <button class="btn btn-outline-secondary" type="button" id="increaseQty">+</button>
              </div>
            </div>

            <!-- Botones de acción -->
            <div class="action-buttons">
              <button class="btn btn-add-cart" id="addToCartBtn" disabled>
                <i class="fas fa-cart-plus me-2"></i>Agregar al Carrito
              </button>
              <button class="btn btn-wishlist">
                <i class="far fa-heart"></i>
              </button>
            </div>

            <!-- Características rápidas -->
            <div class="row mt-4">
              <div class="col-6">
                <div class="d-flex align-items-center mb-2">
                  <i class="fas fa-check-circle text-success me-2"></i>
                  <small>100% Algodón</small>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="fas fa-check-circle text-success me-2"></i>
                  <small>Estampado Duradero</small>
                </div>
              </div>
              <div class="col-6">
                <div class="d-flex align-items-center mb-2">
                  <i class="fas fa-check-circle text-success me-2"></i>
                  <small>Diseño Oficial</small>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="fas fa-check-circle text-success me-2"></i>
                  <small>Edición Limitada</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Tabs de información -->
  <div class="container">
    <div class="product-tabs">
      <ul class="nav nav-pills justify-content-center">
        <li class="nav-item">
          <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#description">
            <i class="fas fa-info-circle me-2"></i>Descripción
          </button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#specifications">
            <i class="fas fa-list me-2"></i>Especificaciones
          </button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#reviews">
            <i class="fas fa-star me-2"></i>Reseñas (234)
          </button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#shipping">
            <i class="fas fa-truck me-2"></i>Envío
          </button>
        </li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane fade show active" id="description">
          <h4 class="fw-bold mb-3">Descripción del Producto</h4>
          <p>
            La camiseta oficial "Warrior's Quest" es más que una prenda, es una declaración de tu pasión por los videojuegos. 
            Fabricada con 100% algodón premium, ofrece máxima comodidad para largas sesiones de gaming.
          </p>
          <p>
            El diseño exclusivo presenta gráficos del icónico protagonista del juego, creados con técnicas de estampado 
            de última generación que garantizan durabilidad y colores vibrantes que no se desvanecen.
          </p>
          <div class="row mt-4">
            <div class="col-md-6">
              <h6 class="fw-bold">Características destacadas:</h6>
              <ul class="list-unstyled">
                <li><i class="fas fa-check text-success me-2"></i>Diseño oficial licenciado</li>
                <li><i class="fas fa-check text-success me-2"></i>Estampado resistente al lavado</li>
                <li><i class="fas fa-check text-success me-2"></i>Corte cómodo unisex</li>
                <li><i class="fas fa-check text-success me-2"></i>Edición limitada</li>
              </ul>
            </div>
            <div class="col-md-6">
              <h6 class="fw-bold">Cuidado del producto:</h6>
              <ul class="list-unstyled">
                <li><i class="fas fa-info text-primary me-2"></i>Lavar en agua fría</li>
                <li><i class="fas fa-info text-primary me-2"></i>No usar blanqueador</li>
                <li><i class="fas fa-info text-primary me-2"></i>Secar a la sombra</li>
                <li><i class="fas fa-info text-primary me-2"></i>Planchar del revés</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="specifications">
          <h4 class="fw-bold mb-3">Especificaciones Técnicas</h4>
          <div class="row">
            <div class="col-md-6">
              <table class="table table-borderless">
                <tr><th>Material:</th><td>100% Algodón Peinado</td></tr>
                <tr><th>Peso:</th><td>180 GSM</td></tr>
                <tr><th>Tipo de cuello:</th><td>Cuello redondo reforzado</td></tr>
                <tr><th>Mangas:</th><td>Manga corta</td></tr>
              </table>
            </div>
            <div class="col-m