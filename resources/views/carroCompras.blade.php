<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Carrito - TusJuegos.com</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      --secondary-gradient: linear-gradient(135deg, #ff6b6b 0%, #ffa500 100%);
      --accent-gradient: linear-gradient(135deg, #4ecdc4 0%, #44a08d 100%);
      --success-gradient: linear-gradient(135deg, #56ab2f 0%, #a8e6cf 100%);
      --warning-gradient: linear-gradient(135deg, #ff9800 0%, #ffc107 100%);
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
      background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
      line-height: 1.6;
      padding-top: 80px;
      min-height: 100vh;
    }

    .navbar {
      background: var(--primary-gradient) !important;
      box-shadow: 0 4px 20px rgba(0,0,0,0.15);
    }

    .navbar-brand {
      font-size: 1.8rem;
      font-weight: 800;
      background: linear-gradient(45deg, #ffd700, #ffed4e);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    /* Header del carrito */
    .cart-header {
      background: white;
      border-radius: 20px;
      padding: 30px;
      margin: 30px 0;
      box-shadow: 0 8px 30px rgba(0,0,0,0.1);
      border-left: 5px solid #667eea;
    }

    .cart-title {
      font-size: 2.5rem;
      font-weight: 900;
      background: var(--primary-gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      margin-bottom: 10px;
    }

    .cart-subtitle {
      color: #6c757d;
      font-size: 1.1rem;
    }

    /* Breadcrumb personalizado */
    .custom-breadcrumb {
      background: rgba(255,255,255,0.9);
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

    /* Items del carrito */
    .cart-items-container {
      background: white;
      border-radius: 20px;
      padding: 0;
      box-shadow: 0 8px 30px rgba(0,0,0,0.1);
      overflow: hidden;
    }

    .cart-item {
      padding: 25px;
      border-bottom: 1px solid #f8f9fa;
      transition: all 0.3s ease;
      position: relative;
    }

    .cart-item:hover {
      background: linear-gradient(135deg, #f8f9fa, #e9ecef);
      transform: translateX(5px);
    }

    .cart-item:last-child {
      border-bottom: none;
    }

    .product-image {
      width: 120px;
      height: 120px;
      border-radius: 15px;
      background: var(--primary-gradient);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 3rem;
      transition: transform 0.3s ease;
    }

    .product-image:hover {
      transform: scale(1.05) rotate(2deg);
    }

    .product-details h5 {
      font-weight: 700;
      color: #2d3748;
      margin-bottom: 8px;
    }

    .product-meta {
      color: #718096;
      font-size: 0.9rem;
      margin-bottom: 10px;
    }

    .product-features {
      display: flex;
      gap: 15px;
      flex-wrap: wrap;
      margin: 10px 0;
    }

    .feature-badge {
      background: linear-gradient(45deg, #e3f2fd, #f3e5f5);
      color: #667eea;
      padding: 4px 12px;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 600;
      border: 1px solid #e1bee7;
    }

    /* Controles de cantidad */
    .quantity-controls {
      background: #f8f9fa;
      border-radius: 15px;
      padding: 5px;
      display: flex;
      align-items: center;
      width: fit-content;
      box-shadow: inset 0 2px 4px rgba(0,0,0,0.1);
    }

    .qty-btn {
      background: white;
      border: none;
      width: 40px;
      height: 40px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      color: #667eea;
      transition: all 0.2s ease;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .qty-btn:hover {
      background: var(--primary-gradient);
      color: white;
      transform: scale(1.1);
    }

    .qty-btn:disabled {
      opacity: 0.5;
      cursor: not-allowed;
    }

    .qty-input {
      border: none;
      background: transparent;
      text-align: center;
      width: 50px;
      font-weight: 700;
      color: #2d3748;
    }

    .qty-input:focus {
      outline: none;
      background: white;
      border-radius: 8px;
    }

    /* Precios */
    .price-section {
      text-align: right;
    }

    .original-price {
      text-decoration: line-through;
      color: #a0aec0;
      font-size: 0.9rem;
    }

    .current-price {
      font-size: 1.4rem;
      font-weight: 900;
      color: #2d3748;
      margin: 5px 0;
    }

    .total-price {
      font-size: 1.6rem;
      font-weight: 900;
      background: var(--accent-gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .discount-amount {
      color: #e53e3e;
      font-weight: 600;
      font-size: 0.9rem;
    }

    /* Botón eliminar */
    .remove-btn {
      position: absolute;
      top: 15px;
      right: 15px;
      background: rgba(229, 62, 62, 0.1);
      border: none;
      color: #e53e3e;
      width: 35px;
      height: 35px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
      opacity: 0;
    }

    .cart-item:hover .remove-btn {
      opacity: 1;
    }

    .remove-btn:hover {
      background: #e53e3e;
      color: white;
      transform: scale(1.1);
    }

    /* Resumen del carrito */
    .cart-summary {
      background: white;
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 8px 30px rgba(0,0,0,0.1);
      position: sticky;
      top: 100px;
      height: fit-content;
    }

    .summary-title {
      font-size: 1.8rem;
      font-weight: 800;
      color: #2d3748;
      margin-bottom: 25px;
      padding-bottom: 15px;
      border-bottom: 2px solid #f7fafc;
    }

    .summary-row {
      display: flex;
      justify-content: between;
      align-items: center;
      padding: 12px 0;
      border-bottom: 1px solid #f7fafc;
    }

    .summary-row:last-child {
      border-bottom: none;
      padding-top: 20px;
      margin-top: 15px;
      border-top: 2px solid #e2e8f0;
    }

    .summary-label {
      font-weight: 600;
      color: #4a5568;
    }

    .summary-value {
      font-weight: 700;
      color: #2d3748;
    }

    .total-row .summary-label,
    .total-row .summary-value {
      font-size: 1.3rem;
      font-weight: 900;
    }

    .total-row .summary-value {
      background: var(--accent-gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    /* Cupones de descuento */
    .coupon-section {
      background: linear-gradient(135deg, #fff5f5, #fed7d7);
      border-radius: 15px;
      padding: 20px;
      margin: 20px 0;
      border: 1px solid #feb2b2;
    }

    .coupon-input {
      border: 2px solid #e2e8f0;
      border-radius: 10px;
      padding: 12px 15px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .coupon-input:focus {
      border-color: #667eea;
      box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
    }

    .coupon-btn {
      background: var(--secondary-gradient);
      border: none;
      color: white;
      padding: 12px 25px;
      border-radius: 10px;
      font-weight: 700;
      transition: all 0.3s ease;
    }

    .coupon-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(255, 107, 107, 0.3);
      color: white;
    }

    /* Botones principales */
    .checkout-btn {
      background: var(--accent-gradient);
      border: none;
      color: white;
      font-weight: 700;
      padding: 18px 30px;
      border-radius: 50px;
      font-size: 1.1rem;
      width: 100%;
      margin: 15px 0;
      transition: all 0.3s ease;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .checkout-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 30px rgba(78, 205, 196, 0.4);
      color: white;
    }

    .continue-shopping {
      background: white;
      border: 2px solid #e2e8f0;
      color: #667eea;
      font-weight: 600;
      padding: 15px 25px;
      border-radius: 50px;
      width: 100%;
      transition: all 0.3s ease;
    }

    .continue-shopping:hover {
      border-color: #667eea;
      background: #667eea;
      color: white;
      transform: translateY(-2px);
    }

    /* Carrito vacío */
    .empty-cart {
      background: white;
      border-radius: 20px;
      padding: 60px 30px;
      text-align: center;
      box-shadow: 0 8px 30px rgba(0,0,0,0.1);
      margin: 40px 0;
    }

    .empty-cart-icon {
      font-size: 6rem;
      color: #cbd5e0;
      margin-bottom: 30px;
    }

    .empty-cart h3 {
      color: #2d3748;
      font-weight: 700;
      margin-bottom: 15px;
    }

    .empty-cart p {
      color: #718096;
      font-size: 1.1rem;
      margin-bottom: 30px;
    }

    /* Recomendaciones */
    .recommendations {
      background: white;
      border-radius: 20px;
      padding: 30px;
      margin: 30px 0;
      box-shadow: 0 8px 30px rgba(0,0,0,0.1);
    }

    .recommendation-card {
      background: linear-gradient(135deg, #f7fafc, #edf2f7);
      border-radius: 15px;
      padding: 20px;
      transition: all 0.3s ease;
      border: 2px solid transparent;
      cursor: pointer;
    }

    .recommendation-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      border-color: #667eea;
    }

    .recommendation-image {
      width: 80px;
      height: 80px;
      border-radius: 12px;
      background: var(--secondary-gradient);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 2rem;
      margin-bottom: 15px;
    }

    /* Progreso del checkout */
    .checkout-progress {
      background: white;
      border-radius: 20px;
      padding: 25px;
      margin: 20px 0;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .progress-steps {
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: relative;
    }

    .progress-step {
      display: flex;
      flex-direction: column;
      align-items: center;
      z-index: 2;
      position: relative;
    }

    .step-circle {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: #e2e8f0;
      color: #a0aec0;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      font-size: 1.1rem;
      margin-bottom: 10px;
      transition: all 0.3s ease;
    }

    .step-circle.active {
      background: var(--accent-gradient);
      color: white;
      transform: scale(1.1);
      box-shadow: 0 4px 15px rgba(78, 205, 196, 0.4);
    }

    .step-circle.completed {
      background: var(--success-gradient);
      color: white;
    }

    .step-label {
      font-weight: 600;
      color: #4a5568;
      font-size: 0.9rem;
      text-align: center;
    }

    .progress-line {
      position: absolute;
      top: 25px;
      left: 0;
      right: 0;
      height: 3px;
      background: #e2e8f0;
      z-index: 1;
    }

    .progress-line-fill {
      height: 100%;
      background: var(--accent-gradient);
      width: 33%;
      border-radius: 3px;
      transition: width 0.5s ease;
    }

    /* Métodos de pago */
    .payment-methods {
      display: flex;
      gap: 15px;
      flex-wrap: wrap;
      margin: 20px 0;
    }

    .payment-method {
      background: white;
      border: 2px solid #e2e8f0;
      border-radius: 12px;
      padding: 15px;
      display: flex;
      align-items: center;
      gap: 10px;
      cursor: pointer;
      transition: all 0.3s ease;
      flex: 1;
      min-width: 120px;
      justify-content: center;
    }

    .payment-method:hover {
      border-color: #667eea;
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(102, 126, 234, 0.2);
    }

    .payment-method.selected {
      border-color: #667eea;
      background: linear-gradient(135deg, #f0f4ff, #e6f3ff);
    }

    /* Información de envío */
    .shipping-info {
      background: var(--success-gradient);
      color: white;
      border-radius: 15px;
      padding: 20px;
      margin: 20px 0;
      text-align: center;
    }

    .shipping-options {
      margin: 20px 0;
    }

    .shipping-option {
      background: white;
      border: 2px solid #e2e8f0;
      border-radius: 15px;
      padding: 20px;
      margin-bottom: 15px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .shipping-option:hover {
      border-color: #667eea;
      transform: translateX(5px);
    }

    .shipping-option.selected {
      border-color: #667eea;
      background: linear-gradient(135deg, #f0f4ff, #e6f3ff);
    }

    .shipping-option input[type="radio"] {
      margin-right: 15px;
    }

    /* Alertas y notificaciones */
    .promo-alert {
      background: var(--warning-gradient);
      color: white;
      border-radius: 15px;
      padding: 20px;
      margin: 20px 0;
      border: none;
      font-weight: 600;
      animation: slideInDown 0.5s ease;
    }

    .security-badge {
      background: linear-gradient(135deg, #f0fff4, #c6f6d5);
      border: 1px solid #9ae6b4;
      border-radius: 15px;
      padding: 15px;
      margin: 15px 0;
      text-align: center;
      color: #22543d;
    }

    /* Animaciones */
    @keyframes slideInDown {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeOut {
      from {
        opacity: 1;
        transform: scale(1);
      }
      to {
        opacity: 0;
        transform: scale(0.8);
      }
    }

    .removing {
      animation: fadeOut 0.3s ease forwards;
    }

    /* Loading states */
    .loading {
      position: relative;
      pointer-events: none;
    }

    .loading::after {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 20px;
      height: 20px;
      border: 2px solid #f3f3f3;
      border-top: 2px solid #667eea;
      border-radius: 50%;
      animation: spin 1s linear infinite;
      transform: translate(-50%, -50%);
    }

    @keyframes spin {
      to { transform: translate(-50%, -50%) rotate(360deg); }
    }

    /* Responsive */
    @media (max-width: 768px) {
      .cart-title {
        font-size: 2rem;
      }
      
      .product-image {
        width: 80px;
        height: 80px;
        font-size: 2rem;
      }
      
      .cart-item {
        padding: 20px 15px;
      }
      
      .payment-methods {
        flex-direction: column;
      }
      
      .payment-method {
        min-width: auto;
      }
      
      .progress-steps {
        flex-direction: column;
        gap: 20px;
      }
      
      .progress-line {
        display: none;
      }
    }

    /* Stock warnings */
    .stock-warning {
      background: linear-gradient(45deg, #fed7d7, #fbb6ce);
      color: #742a2a;
      padding: 8px 15px;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 600;
      display: inline-block;
      margin-top: 5px;
    }

    .stock-low {
      background: linear-gradient(45deg, #fef5e7, #ffd89b);
      color: #744210;
    }

    .stock-ok {
      background: linear-gradient(45deg, #f0fff4, #c6f6d5);
      color: #22543d;
    }
  </style>
</head>
<body>
  <!-- Navbar (mismo diseño unificado) -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">
        <i class="fas fa-gamepad me-2"></i>TusJuegos.com
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">
              <i class="fas fa-home me-1"></i>Inicio
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/detalles">
              <i class="fas fa-tshirt me-1"></i>Merchandising
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#ofertas">
              <i class="fas fa-tags me-1"></i>Ofertas
            </a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active">
              <i class="fas fa-shopping-cart me-1"></i>Carrito
              <span class="badge bg-warning text-dark ms-1" id="navCartCount">3</span>
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
        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
        <li class="breadcrumb-item active">Mi Carrito</li>
      </ol>
    </nav>
  </div>

  <!-- Header del carrito -->
  <div class="container">
    <div class="cart-header">
      <div class="row align-items-center">
        <div class="col-md-8">
          <h1 class="cart-title">
            <i class="fas fa-shopping-cart me-3"></i>Mi Carrito de Compras
          </h1>
          <p class="cart-subtitle mb-0">
            <span id="itemCount">3 productos</span> listos para el checkout
          </p>
        </div>
        <div class="col-md-4 text-md-end">
          <button class="btn btn-outline-danger" id="clearCartBtn">
            <i class="fas fa-trash me-2"></i>Vaciar Carrito
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Progreso del checkout -->
  <div class="container">
    <div class="checkout-progress">
      <div class="progress-steps">
        <div class="progress-line">
          <div class="progress-line-fill"></div>
        </div>
        <div class="progress-step">
          <div class="step-circle active">1</div>
          <div class="step-label">Carrito</div>
        </div>
        <div class="progress-step">
          <div class="step-circle">2</div>
          <div class="step-label">Información</div>
        </div>
        <div class="progress-step">
          <div class="step-circle">3</div>
          <div class="step-label">Pago</div>
        </div>
        <div class="progress-step">
          <div class="step-circle">4</div>
          <div class="step-label">Confirmación</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Contenido principal -->
  <div class="container">
    <div class="row">
      <!-- Items del carrito -->
      <div class="col-lg-8">
        <div class="cart-items-container" id="cartItemsContainer">
          <!-- Item 1: Juego Digital -->
          <div class="cart-item" data-id="1" data-price="59.99" data-original-price="74.99">
            <button class="remove-btn" onclick="removeItem(1)">
              <i class="fas fa-times"></i>
            </button>
            <div class="row align-items-center">
              <div class="col-md-2">
                <div class="product-image">
                  <i class="fas fa-sword"></i>
                </div>
              </div>
              <div class="col-md-5">
                <div class="product-details">
                  <h5>Warrior's Quest - Edición Deluxe</h5>
                  <div class="product-meta">
                    <i class="fas fa-gamepad me-1"></i>Juego Digital • 
                    <i class="fas fa-download me-1"></i>Descarga Instantánea
                  </div>
                  <div class="product-features">
                    <span class="feature-badge">
                      <i class="fas fa-crown me-1"></i>Edición Deluxe
                    </span>
                    <span class="feature-badge">
                      <i class="fas fa-gift me-1"></i>DLC Incluido
                    </span>
                  </div>
                  <div class="stock-warning stock-low">
                    <i class="fas fa-exclamation-triangle me-1"></i>Solo 5 copias disponibles
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="quantity-controls">
                  <button class="qty-btn" onclick="updateQuantity(1, -1)">-</button>
                  <input type="number" class="qty-input" value="1" min="1" max="10" 
                         onchange="setQuantity(1, this.value)">
                  <button class="qty-btn" onclick="updateQuantity(1, 1)">+</button>
                </div>
              </div>
              <div class="col-md-3">
                <div class="price-section">
                  <div class="original-price">$74.99</div>
                  <div class="current-price">$59.99</div>
                  <div class="discount-amount">
                    <i class="fas fa-tag me-1"></i>Ahorras $15.00
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Item 2: Camiseta -->
          <div class="cart-item" data-id="2" data-price="24.99" data-original-price="34.99">
            <button class="remove-btn" onclick="removeItem(2)">
              <i class="fas fa-times"></i>
            </button>
            <div class="row align-items-center">
              <div class="col-md-2">
                <div class="product-image" style="background: var(--secondary-gradient);">
                  <i class="fas fa-tshirt"></i>
                </div>
              </div>
              <div class="col-md-5">
                <div class="product-details">
                  <h5>Camiseta Gaming "Warrior's Quest"</h5>
                  <div class="product-meta">
                    <i class="fas fa-tshirt me-1"></i>Merchandising • 
                    <i class="fas fa-palette me-1"></i>Negro Gaming • 
                    <i class="fas fa-ruler me-1"></i>Talle M
                  </div>
                  <div class="product-features">
                    <span class="feature-badge">
                      <i class="fas fa-certificate me-1"></i>100% Algodón
                    </span>
                    <span class="feature-badge">
                      <i class="fas fa-shield-alt me-1"></i>