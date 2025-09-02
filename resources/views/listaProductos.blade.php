<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catálogo de Juegos - TusJuegos.com</title>
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

    /* Header de la página */
    .page-header {
      background: white;
      border-radius: 20px;
      padding: 40px;
      margin: 30px 0;
      box-shadow: 0 8px 30px rgba(0,0,0,0.1);
      position: relative;
      overflow: hidden;
    }

    .page-header::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: var(--primary-gradient);
    }

    .page-title {
      font-size: 2.8rem;
      font-weight: 900;
      background: var(--primary-gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      margin-bottom: 15px;
    }

    /* Filtros sidebar */
    .filters-sidebar {
      background: white;
      border-radius: 20px;
      padding: 25px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
      position: sticky;
      top: 100px;
      height: fit-content;
    }

    .filter-section {
      margin-bottom: 30px;
      padding-bottom: 25px;
      border-bottom: 1px solid #f1f5f9;
    }

    .filter-section:last-child {
      border-bottom: none;
      margin-bottom: 0;
    }

    .filter-title {
      font-size: 1.1rem;
      font-weight: 700;
      color: #2d3748;
      margin-bottom: 15px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .filter-option {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 8px 0;
      cursor: pointer;
      transition: all 0.2s ease;
    }

    .filter-option:hover {
      padding-left: 10px;
      color: #667eea;
    }

    .filter-option input[type="checkbox"] {
      width: 18px;
      height: 18px;
      accent-color: #667eea;
    }

    .filter-count {
      background: #f1f5f9;
      color: #64748b;
      padding: 2px 8px;
      border-radius: 10px;
      font-size: 0.8rem;
      font-weight: 600;
      margin-left: auto;
    }

    /* Precio range slider */
    .price-range {
      margin: 20px 0;
    }

    .price-inputs {
      display: flex;
      gap: 10px;
      align-items: center;
      margin-top: 15px;
    }

    .price-input {
      flex: 1;
      border: 2px solid #e2e8f0;
      border-radius: 10px;
      padding: 8px 12px;
      text-align: center;
      font-weight: 600;
    }

    .price-input:focus {
      border-color: #667eea;
      outline: none;
    }

    /* Rating filter */
    .rating-filter {
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 8px 0;
      cursor: pointer;
      transition: all 0.2s ease;
    }

    .rating-filter:hover {
      color: #ffc107;
      padding-left: 10px;
    }

    .stars {
      color: #ffc107;
    }

    /* Toolbar de productos */
    .products-toolbar {
      background: white;
      border-radius: 20px;
      padding: 25px;
      margin-bottom: 30px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .results-info {
      font-weight: 600;
      color: #4a5568;
    }

    .view-toggle {
      display: flex;
      gap: 5px;
      background: #f8f9fa;
      border-radius: 10px;
      padding: 5px;
    }

    .view-btn {
      background: transparent;
      border: none;
      padding: 10px 15px;
      border-radius: 8px;
      transition: all 0.3s ease;
      color: #6c757d;
    }

    .view-btn.active {
      background: var(--primary-gradient);
      color: white;
      box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
    }

    .sort-select {
      border: 2px solid #e2e8f0;
      border-radius: 10px;
      padding: 10px 15px;
      font-weight: 600;
      background: white;
    }

    .sort-select:focus {
      border-color: #667eea;
      outline: none;
      box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
    }

    /* Grid de productos */
    .products-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 25px;
      margin-bottom: 40px;
    }

    .products-grid.list-view {
      grid-template-columns: 1fr;
    }

    .product-card {
      background: white;
      border-radius: 20px;
      overflow: hidden;
      transition: all 0.4s ease;
      border: none;
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
      position: relative;
      cursor: pointer;
    }

    .product-card:hover {
      transform: translateY(-8px) scale(1.02);
      box-shadow: 0 15px 40px rgba(0,0,0,0.2);
    }

    .product-image {
      height: 220px;
      background: var(--primary-gradient);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 4rem;
      color: white;
      position: relative;
      overflow: hidden;
    }

    .product-image::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.1) 50%, transparent 70%);
      transform: translateX(-100%);
      transition: transform 0.6s ease;
    }

    .product-card:hover .product-image::before {
      transform: translateX(100%);
    }

    .product-badges {
      position: absolute;
      top: 15px;
      left: 15px;
      display: flex;
      flex-direction: column;
      gap: 8px;
      z-index: 3;
    }

    .badge-discount {
      background: var(--secondary-gradient);
      color: white;
      padding: 6px 12px;
      border-radius: 20px;
      font-weight: 700;
      font-size: 0.8rem;
    }

    .badge-new {
      background: var(--success-gradient);
      color: white;
      padding: 6px 12px;
      border-radius: 20px;
      font-weight: 700;
      font-size: 0.8rem;
    }

    .badge-bestseller {
      background: var(--warning-gradient);
      color: white;
      padding: 6px 12px;
      border-radius: 20px;
      font-weight: 700;
      font-size: 0.8rem;
    }

    .wishlist-btn {
      position: absolute;
      top: 15px;
      right: 15px;
      background: rgba(255,255,255,0.9);
      border: none;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #6c757d;
      transition: all 0.3s ease;
      z-index: 3;
    }

    .wishlist-btn:hover,
    .wishlist-btn.active {
      background: #dc3545;
      color: white;
      transform: scale(1.1);
    }

    .product-info {
      padding: 25px;
    }

    .product-title {
      font-size: 1.3rem;
      font-weight: 700;
      color: #2d3748;
      margin-bottom: 10px;
      line-height: 1.3;
    }

    .product-category {
      color: #667eea;
      font-size: 0.9rem;
      font-weight: 600;
      margin-bottom: 12px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .product-rating {
      display: flex;
      align-items: center;
      gap: 8px;
      margin-bottom: 15px;
    }

    .product-rating .stars {
      color: #ffc107;
      font-size: 0.9rem;
    }

    .rating-count {
      color: #718096;
      font-size: 0.8rem;
    }

    .product-price {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 20px;
    }

    .current-price {
      font-size: 1.5rem;
      font-weight: 900;
      color: #2d3748;
    }

    .original-price {
      font-size: 1rem;
      color: #a0aec0;
      text-decoration: line-through;
    }

    .discount-percent {
      background: var(--secondary-gradient);
      color: white;
      padding: 4px 10px;
      border-radius: 15px;
      font-size: 0.8rem;
      font-weight: 700;
    }

    .product-actions {
      display: flex;
      gap: 10px;
    }

    .btn-add-cart {
      background: var(--accent-gradient);
      border: none;
      color: white;
      font-weight: 700;
      padding: 12px 20px;
      border-radius: 25px;
      flex: 1;
      transition: all 0.3s ease;
    }

    .btn-add-cart:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(78, 205, 196, 0.4);
      color: white;
    }

    .btn-quick-view {
      background: white;
      border: 2px solid #e2e8f0;
      color: #667eea;
      padding: 12px 15px;
      border-radius: 25px;
      transition: all 0.3s ease;
    }

    .btn-quick-view:hover {
      border-color: #667eea;
      background: #667eea;
      color: white;
    }

    /* Vista lista */
    .list-view .product-card {
      border-radius: 15px;
      margin-bottom: 20px;
    }

    .list-view .product-card .row {
      align-items: center;
    }

    .list-view .product-image {
      height: 150px;
      border-radius: 15px 0 0 15px;
    }

    .list-view .product-info {
      padding: 20px;
    }

    .list-view .product-title {
      font-size: 1.5rem;
    }

    .list-view .product-description {
      color: #718096;
      margin: 10px 0;
      line-height: 1.5;
    }

    /* Filtros móviles */
    .mobile-filters-btn {
      background: var(--primary-gradient);
      border: none;
      color: white;
      font-weight: 700;
      padding: 12px 25px;
      border-radius: 25px;
      margin-bottom: 20px;
      width: 100%;
    }

    .filters-offcanvas .offcanvas-header {
      background: var(--primary-gradient);
      color: white;
    }

    .filters-offcanvas .btn-close {
      filter: invert(1);
    }

    /* Paginación personalizada */
    .custom-pagination {
      background: white;
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      margin: 40px 0;
    }

    .page-link {
      border: none;
      color: #667eea;
      font-weight: 600;
      margin: 0 2px;
      border-radius: 10px;
      transition: all 0.3s ease;
    }

    .page-link:hover {
      background: var(--primary-gradient);
      color: white;
      transform: translateY(-2px);
    }

    .page-item.active .page-link {
      background: var(--accent-gradient);
      border-color: transparent;
      box-shadow: 0 4px 15px rgba(78, 205, 196, 0.3);
    }

    /* Loading states */
    .loading-overlay {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(255,255,255,0.9);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 9999;
      backdrop-filter: blur(5px);
    }

    .loading-spinner {
      width: 60px;
      height: 60px;
      border: 4px solid #f3f3f3;
      border-top: 4px solid #667eea;
      border-radius: 50%;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      to { transform: rotate(360deg); }
    }

    /* Quick view modal */
    .quick-view-modal .modal-content {
      border: none;
      border-radius: 20px;
      overflow: hidden;
    }

    .quick-view-modal .modal-header {
      background: var(--primary-gradient);
      color: white;
      border: none;
    }

    .quick-view-modal .btn-close {
      filter: invert(1);
    }

    /* Filtros activos */
    .active-filters {
      background: white;
      border-radius: 15px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .filter-tag {
      background: var(--accent-gradient);
      color: white;
      padding: 6px 15px;
      border-radius: 20px;
      font-size: 0.85rem;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      margin: 5px;
      transition: all 0.3s ease;
    }

    .filter-tag:hover {
      transform: scale(1.05);
      cursor: pointer;
    }

    .filter-tag .remove-filter {
      background: rgba(255,255,255,0.3);
      border: none;
      color: white;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.7rem;
    }

    /* Search bar mejorada */
    .search-section {
      background: white;
      border-radius: 20px;
      padding: 25px;
      margin-bottom: 30px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .search-input-group {
      position: relative;
    }

    .search-input-advanced {
      border: 2px solid #e2e8f0;
      border-radius: 50px;
      padding: 15px 25px 15px 55px;
      font-size: 1.1rem;
      width: 100%;
      transition: all 0.3s ease;
    }

    .search-input-advanced:focus {
      border-color: #667eea;
      outline: none;
      box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
    }

    .search-icon {
      position: absolute;
      left: 20px;
      top: 50%;
      transform: translateY(-50%);
      color: #a0aec0;
      font-size: 1.2rem;
    }

    .search-btn {
      position: absolute;
      right: 5px;
      top: 50%;
      transform: translateY(-50%);
      background: var(--primary-gradient);
      border: none;
      color: white;
      width: 45px;
      height: 45px;
      border-radius: 50%;
      transition: all 0.3s ease;
    }

    .search-btn:hover {
      transform: translateY(-50%) scale(1.1);
      box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
    }

    /* Empty state */
    .empty-state {
      background: white;
      border-radius: 20px;
      padding: 60px 30px;
      text-align: center;
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
      margin: 40px 0;
    }

    .empty-state-icon {
      font-size: 6rem;
      color: #cbd5e0;
      margin-bottom: 30px;
    }

    /* Animaciones */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-in-up {
      animation: fadeInUp 0.6s ease-out;
    }

    .stagger-animation {
      animation-delay: calc(var(--index) * 0.1s);
    }

    /* Responsive */
    @media (max-width: 768px) {
      .page-title {
        font-size: 2.2rem;
      }
      
      .products-toolbar {
        padding: 20px 15px;
      }
      
      .products-toolbar .row > div {
        margin-bottom: 15px;
      }
      
      .view-toggle {
        justify-content: center;
      }
      
      .filters-sidebar {
        position: static;
        margin-bottom: 20px;
      }
    }

    /* Efectos hover especiales */
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
      z-index: 1;
    }

    .product-card:hover::before {
      opacity: 0.05;
    }

    .product-card > * {
      position: relative;
      z-index: 2;
    }

    /* Indicadores de stock */
    .stock-indicator {
      position: absolute;
      bottom: 15px;
      left: 15px;
      padding: 6px 12px;
      border-radius: 15px;
      font-size: 0.8rem;
      font-weight: 600;
      z-index: 3;
    }

    .stock-high {
      background: rgba(34, 197, 94, 0.9);
      color: white;
    }

    .stock-medium {
      background: rgba(251, 191, 36, 0.9);
      color: white;
    }

    .stock-low {
      background: rgba(239, 68, 68, 0.9);
      color: white;
    }

    .stock-out {
      background: rgba(107, 114, 128, 0.9);
      color: white;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
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
            <a class="nav-link active" href="/productos">
              <i class="fas fa-gamepad me-1"></i>Juegos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/detalles">
              <i class="fas fa-tshirt me-1"></i>Merchandising
            </a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/carrito">
              <i class="fas fa-shopping-cart me-1"></i>Carrito
              <span class="badge bg-warning text-dark ms-1" id="cartCount">3</span>
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
        <li class="breadcrumb-item active">Catálogo de Juegos</li>
      </ol>
    </nav>
  </div>

  <!-- Header de la página -->
  <div class="container">
    <div class="page-header">
      <div class="row align-items-center">
        <div class="col-md-8">
          <h1 class="page-title">
            <i class="fas fa-gamepad me-3"></i>Catálogo de Juegos
          </h1>
          <p class="text-muted mb-0 fs-5">
            Descubre más de <strong>10,000</strong> títulos increíbles
          </p>
        </div>
        <div class="col-md-4 text-md-end">
          <div class="d-flex gap-2 justify-content-md-end">
            <span class="badge bg-success fs-6 px-3 py-2">
              <i class="fas fa-fire me-1"></i>Ofertas Flash
            </span>
            <span class="badge bg-primary fs-6 px-3 py-2">
              <i class="fas fa-gift me-1"></i>Envío Gratis
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Barra de búsqueda avanzada -->
  <div class="container">
    <div class="search-section">
      <div class="search-input-group">
        <i class="search-icon fas fa-search"></i>
        <input type="text" class="search-input-advanced" placeholder="Buscar juegos, géneros, desarrolladores..." id="searchInput">
        <button class="search-btn" id="searchBtn">
          <i class="fas fa-search"></i>
        </button>
      </div>
      <div class="row mt-3">
        <div class="col-md-12">
          <div class="d-flex flex-wrap gap-2">
            <span class="text-muted me-2">Búsquedas populares:</span>
            <span class="badge bg-light text-dark border search-suggestion" style="cursor: pointer;">FIFA 2024</span>
            <span class="badge bg-light text-dark border search-suggestion" style="cursor: pointer;">Call of Duty</span>
            <span class="badge bg-light text-dark border search-suggestion" style="cursor: pointer;">Minecraft</span>
            <span class="badge bg-light text-dark border search-suggestion" style="cursor: pointer;">RPG</span>
            <span class="badge bg-light text-dark border search-suggestion" style="cursor: pointer;">Battle Royale</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <!-- Sidebar de filtros -->
      <div class="col-lg-3">
        <!-- Botón para móviles -->
        <button class="mobile-filters-btn d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#filtersOffcanvas">
          <i class="fas fa-filter me-2"></i>Filtros y Categorías
        </button>

        <!-- Filtros desktop -->
        <div class="filters-sidebar d-none d-lg-block">
          <!-- Categorías -->
          <div class="filter-section">
            <h6 class="filter-title">
              <i class="fas fa-th-large text-primary"></i>
              Categorías
            </h6>
            <div class="filter-option">
              <input type="checkbox" id="cat-action" value="action">
              <label for="cat-action">Acción & Aventura</label>
              <span class="filter-count">245</span>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="cat-rpg" value="rpg">
              <label for="cat-rpg">RPG</label>
              <span class="filter-count">189</span>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="cat-sports" value="sports">
              <label for="cat-sports">Deportes</label>
              <span class="filter-count">156</span>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="cat-strategy" value="strategy">
              <label for="cat-strategy">Estrategia</label>
              <span class="filter-count">134</span>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="cat-racing" value="racing">
              <label for="cat-racing">Carreras</label>
              <span class="filter-count">98</span>
            </div>
          </div>

          <!-- Rango de precios -->
          <div class="filter-section">
            <h6 class="filter-title">
              <i class="fas fa-dollar-sign text-success"></i>
              Rango de Precio
            </h6>
            <div class="price-range">
              <input type="range" class="form-range" min="0" max="200" value="100" id="priceRange">
              <div class="price-inputs">
                <input type="number" class="price-input" placeholder="Min" id="minPrice" value="0" min="0" max="200">
                <span class="text-muted">-</span>
                <input type="number" class="price-input" placeholder="Max" id="maxPrice" value="200" min="0" max="200">
              </div>
              <div class="text-center mt-2">
                <small class="text-muted">Precio: $<span id="currentMinPrice">0</span> - $<span id="currentMaxPrice">200</span></small>
              </div>
            </div>
          </div>

          <!-- Plataformas -->
          <div class="filter-section">
            <h6 class="filter-title">
              <i class="fas fa-desktop text-info"></i>
              Plataformas
            </h6>
            <div class="filter-option">
              <input type="checkbox" id="plat-pc" value="pc">
              <label for="plat-pc">PC / Windows</label>
              <span class="filter-count">412</span>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="plat-ps5" value="ps5">
              <label for="plat-ps5">PlayStation 5</label>
              <span class="filter-count">298</span>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="plat-xbox" value="xbox">
              <label for="plat-xbox">Xbox Series X/S</label>
              <span class="filter-count">276</span>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="plat-switch" value="switch">
              <label for="plat-switch">Nintendo Switch</label>
              <span class="filter-count">203</span>
            </div>
          </div>

          <!-- Calificación -->
          <div class="filter-section">
            <h6 class="filter-title">
              <i class="fas fa-star text-warning"></i>
              Calificación
            </h6>
            <div class="rating-filter">
              <input type="checkbox" id="rating-5" value="5">
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <span class="filter-count">89</span>
            </div>
            <div class="rating-filter">
              <input type="checkbox" id="rating-4" value="4">
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <span>y más</span>
              <span class="filter-count">234</span>
            </div>
            <div class="rating-filter">
              <input type="checkbox" id="rating-3" value="3">
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <span>y más</span>
              <span class="filter-count">412</span>
            </div>
          </div>

          <!-- Desarrolladores -->
          <div class="filter-section">
            <h6 class="filter-title">
              <i class="fas fa-code text-secondary"></i>
              Desarrolladores
            </h6>
            <div class="filter-option">
              <input type="checkbox" id="dev-epic" value="epic">
              <label for="dev-epic">Epic Games</label>
              <span class="filter-count">45</span>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="dev-activision" value="activision">
              <label for="dev-activision">Activision</label>
              <span class="filter-count">38</span>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="dev-ubisoft" value="ubisoft">
              <label for="dev-ubisoft">Ubisoft</label>
              <span class="filter-count">52</span>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="dev-ea" value="ea">
              <label for="dev-ea">Electronic Arts</label>
              <span class="filter-count">41</span>
            </div>
          </div>

          <!-- Botón limpiar filtros -->
          <div class="d-grid">
            <button class="btn btn-outline-secondary" id="clearFiltersBtn">
              <i class="fas fa-eraser me-2"></i>Limpiar Filtros
            </button>
          </div>
        </div>
      </div>

      <!-- Contenido principal -->
      <div class="col-lg-9">
        <!-- Filtros activos -->
        <div class="active-filters" id="activeFilters" style="display: none;">
          <h6 class="fw-bold mb-3">
            <i class="fas fa-filter me-2"></i>Filtros Activos:
          </h6>
          <div id="activeFiltersList">
            <!-- Los filtros activos se generarán dinámicamente aquí -->
          </div>
        </div>

        <!-- Toolbar de productos -->
        <div class="products-toolbar">
          <div class="row align-items-center">
            <div class="col-md-4">
              <div class="results-info">
                <i class="fas fa-list me-2"></i>
                Mostrando <span id="resultCount">24</span> de <span id="totalCount">1,247</span> juegos
              </div>
            </div>
            <div class="col-md-4 text-center">
              <div class="view-toggle">
                <button class="view-btn active" data-view="grid">
                  <i class="fas fa-th"></i>
                </button>
                <button class="view-btn" data-view="list">
                  <i class="fas fa-list"></i>
                </button>
              </div>
            </div>
            <div class="col-md-4">
              <select class="sort-select w-100" id="sortSelect">
                <option value="popular">Más Populares</option>
                <option value="price-low">Precio: Menor a Mayor</option>
                <option value="price-high">Precio: Mayor a Menor</option>
                <option value="rating">Mejor Calificados</option>
                <option value="newest">Más Recientes</option>
                <option value="name">Nombre A-Z</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Grid de productos -->
        <div class="products-grid" id="productsGrid">
          <!-- Producto 1 -->
          <div class="product-card fade-in-up" style="--index: 0;" data-category="action" data-price="59.99" data-rating="4.8">
            <div class="product-image">
              <i class="fas fa-sword"></i>
              <div class="product-badges">
                <span class="badge-discount">-20%</span>
                <span class="badge-bestseller">Bestseller</span>
              </div>
              <button class="wishlist-btn" onclick="toggleWishlist(this)">
                <i class="far fa-heart"></i>
              </button>
              <div class="stock-indicator stock-high">
                <i class="fas fa-check me-1"></i>En Stock
              </div>
            </div>
            <div class="product-info">
              <div class="product-category">Acción & Aventura</div>
              <h5 class="product-title">Warrior's Quest - Edición Deluxe</h5>
              <div class="product-rating">
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <span class="rating-count">(4.8) 1,234 reseñas</span>
              </div>
              <div class="product-price">
                <span class="current-price">$59.99</span>
                <span class="original-price">$74.99</span>
                <span class="discount-percent">-20%</span>
              </div>
              <div class="product-actions">
                <button class="btn-add-cart" onclick="addToCart(1)">
                  <i class="fas fa-cart-plus me-2"></i>Agregar
                </button>
                <button class="btn-quick-view" onclick="quickView(1)">
                  <i class="fas fa-eye"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Producto 2 -->
          <div class="product-card fade-in-up" style="--index: 1;" data-category="sci-fi" data-price="49.99" data-rating="4.6">
            <div class="product-image" style="background: var(--accent-gradient);">
              <i class="fas fa-rocket"></i>
              <div class="product-badges">
                <span class="badge-new">Nuevo</span>
              </div>
              <button class="wishlist-btn" onclick="toggleWishlist(this)">
                <i class="far fa-heart"></i>
              </button>
              <div class="stock-indicator stock-medium">
                <i class="fas fa-clock me-1"></i>Pocas Unidades
              </div>
            </div>
            <div class="product-info">
              <div class="product-category">Ciencia Ficción</div>
              <h5 class="product-title">Space Explorer: Galaxy Edition</h5>
              <div class="product-rating">
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div>
                <span class="rating-count">(4.6) 856 reseñas</span>
              </div>
              <div class="product-price">
                <span class="current-price">$49.99</span>
              </div>
              <div class="product-actions">
                <button class="btn-add-cart" onclick="addToCart(2)">
                  <i class="fas fa-cart-plus me-2"></i>Agregar
                </button>
                <button class="btn-quick-view" onclick="quickView(2)">
                  <i class="fas fa-eye"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Producto 3 -->
          <div class="product-card fade-in-up" style="--index: 2;" data-category="rpg" data-price="69.99" data-rating="4.9">
            <div class="product-image" style="background: var(--secondary-gradient);">
              <i class="fas fa-magic"></i>
              <div class="product-badges">
                <span class="badge-discount">-15%</span>
              </div>
              <button class="wishlist-btn" onclick="toggleWishlist(this)">
                <i class="far fa-heart"></i>
              </button>
              <div class="stock-indicator stock-high">
                <i class="fas fa-check me-1"></i>Disponible
              </div>
            </div>
            <div class="product-info">
              <div class="product-category">RPG Fantasía</div>
              <h5 class="product-title">Mystic Legends: The Awakening</h5>
              <div class="product-rating">
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <span class="rating-count">(4.9) 2,145 reseñas</span>
              </div>
              <div class="product-price">
                <span class="current-price">$69.99</span>
                <span class="original-price">$82.99</span>
                <span class="discount-percent">-15%</span>
              </div>
              <div class="product-actions">
                <button class="btn-add-cart" onclick="addToCart(3)">
                  <i class="fas fa-cart-plus me-2"></i>Agregar
                </button>
                <button class="btn-quick-view" onclick="quickView(3)">
                  <i class="fas fa-eye"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Producto 4 -->
          <div class="product-card fade-in-up" style="--index: 3;" data-category="sports" data-price="59.99" data-rating="4.4">
            <div class="product-image" style="background: var(--success-gradient);">
              <i class="fas fa-futbol"></i>
              <button class="wishlist-btn" onclick="toggleWishlist(this)">
                <i class="far fa-heart"></i>
              </button>
              <div class="stock-indicator stock-high">
                <i class="fas fa-check me-1"></i>En Stock
              </div>
            </div>
            <div class="product-info">
              <div class="product-category">Deportes</div>
              <h5 class="product-title">Champion League 2025</h5>
              <div class="product-rating">
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
                <span class="rating-count">(4.4) 987 reseñas</span>
              </div>
              <div class="product-price">
                <span class="current-price">$59.99</span>
              </div>
              <div class="product-actions">
                <button class="btn-add-cart" onclick="addToCart(4)">
                  <i class="fas fa-cart-plus me-2"></i>Agregar
                </button>
                <button class="btn-quick-view" onclick="quickView(4)">
                  <i class="fas fa-eye"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Producto 5 -->
          <div class="product-card fade-in-up" style="--index: 4;" data-category="racing" data-price="44.99" data-rating="4.3">
            <div class="product-image" style="background: var(--warning-gradient);">
              <i class="fas fa-car"></i>
              <div class="product-badges">
                <span class="badge-discount">-25%</span>
              </div>
              <button class="wishlist-btn" onclick="toggleWishlist(this)">
                <i class="far fa-heart"></i>
              </button>
              <div class="stock-indicator stock-low">
                <i class="fas fa-exclamation-triangle me-1"></i>Últimas 3
              </div>
            </div>
            <div class="product-info">
              <div class="product-category">Carreras</div>
              <h5 class="product-title">Speed Racing Ultimate</h5>
              <div class="product-rating">
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
                <span class="rating-count">(4.3) 654 reseñas</span>
              </div>
              <div class="product-price">
                <span class="current-price">$44.99</span>
                <span class="original-price">$59.99</span>
                <span class="discount-percent">-25%</span>
              </div>
              <div class="product-actions">
                <button class="btn-add-cart" onclick="addToCart(5)">
                  <i class="fas fa-cart-plus me-2"></i>Agregar
                </button>
                <button class="btn-quick-view" onclick="quickView(5)">
                  <i class="fas fa-eye"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Producto 6 -->
          <div class="product-card fade-in-up" style="--index: 5;" data-category="strategy" data-price="39.99" data-rating="4.7">
            <div class="product-image" style="background: linear-gradient(135deg, #8e44ad, #3498db);">
              <i class="fas fa-chess"></i>
              <button class="wishlist-btn" onclick="toggleWishlist(this)">
                <i class="far fa-heart"></i>
              </button>
              <div class="stock-indicator stock-high">
                <i class="fas fa-check me-1"></i>Disponible
              </div>
            </div>
            <div class="product-info">
              <div class="product-category">Estrategia</div>
              <h5 class="product-title">Empire Builder: Civilizations</h5>
              <div class="product-rating">
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <span class="rating-count">(4.7) 1,456 reseñas</span>
              </div>
              <div class="product-price">
                <span class="current-price">$39.99</span>
              </div>
              <div class="product-actions">
                <button class="btn-add-cart" onclick="addToCart(6)">
                  <i class="fas fa-cart-plus me-2"></i>Agregar
                </button>
                <button class="btn-quick-view" onclick="quickView(6)">
                  <i class="fas fa-eye"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Producto 7 -->
          <div class="product-card fade-in-up" style="--index: 6;" data-category="action" data-price="54.99" data-rating="4.5">
            <div class="product-image" style="background: linear-gradient(135deg, #e74c3c, #c0392b);">
              <i class="fas fa-gun"></i>
              <div class="product-badges">
                <span class="badge-new">Preventa</span>
              </div>
              <button class="wishlist-btn" onclick="toggleWishlist(this)">
                <i class="far fa-heart"></i>
              </button>
              <div class="stock-indicator stock-medium">
                <i class="fas fa-calendar me-1"></i>15 Mar 2025
              </div>
            </div>
            <div class="product-info">
              <div class="product-category">Acción FPS</div>
              <h5 class="product-title">Battle Zone: Modern Warfare</h5>
              <div class="product-rating">
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div>
                <span class="rating-count">(4.5) 743 pre-orders</span>
              </div>
              <div class="product-price">
                <span class="current-price">$54.99</span>
              </div>
              <div class="product-actions">
                <button class="btn-add-cart" onclick="addToCart(7)">
                  <i class="fas fa-calendar-check me-2"></i>Pre-ordenar
                </button>
                <button class="btn-quick-view" onclick="quickView(7)">
                  <i class="fas fa-eye"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Producto 8 -->
          <div class="product-card fade-in-up" style="--index: 7;" data-category="rpg" data-price="34.99" data-rating="4.2">
            <div class="product-image" style="background: linear-gradient(135deg, #9b59b6, #8e44ad);">
              <i class="fas fa-dragon"></i>
              <div class="product-badges">
                <span class="badge-discount">-30%</span>
              </div>
              <button class="wishlist-btn" onclick="toggleWishlist(this)">
                <i class="far fa-heart"></i>
              </button>
              <div class="stock-indicator stock-high">
                <i class="fas fa-download me-1"></i>Digital
              </div>
            </div>
            <div class="product-info">
              <div class="product-category">RPG Indie</div>
              <h5 class="product-title">Dragon's Realm Chronicles</h5>
              <div class="product-rating">
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
                <span class="rating-count">(4.2) 567 reseñas</span>
              </div>
              <div class="product-price">
                <span class="current-price">$34.99</span>
                <span class="original-price">$49.99</span>
                <span class="discount-percent">-30%</span>
              </div>
              <div class="product-actions">
                <button class="btn-add-cart" onclick="addToCart(8)">
                  <i class="fas fa-cart-plus me-2"></i>Agregar
                </button>
                <button class="btn-quick-view" onclick="quickView(8)">
                  <i class="fas fa-eye"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Producto 9 -->
          <div class="product-card fade-in-up" style="--index: 8;" data-category="sports" data-price="0" data-rating="4.1">
            <div class="product-image" style="background: linear-gradient(135deg, #27ae60, #2ecc71);">
              <i class="fas fa-basketball-ball"></i>
              <div class="product-badges">
                <span class="badge-new">¡GRATIS!</span>
              </div>
              <button class="wishlist-btn" onclick="toggleWishlist(this)">
                <i class="far fa-heart"></i>
              </button>
              <div class="stock-indicator stock-high">
                <i class="fas fa-gift me-1"></i>Free to Play
              </div>
            </div>
            <div class="product-info">
              <div class="product-category">Deportes F2P</div>
              <h5 class="product-title">Basketball Arena Online</h5>
              <div class="product-rating">
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
                <span class="rating-count">(4.1) 3,421 reseñas</span>
              </div>
              <div class="product-price">
                <span class="current-price text-success">GRATIS</span>
              </div>
              <div class="product-actions">
                <button class="btn-add-cart" onclick="addToCart(9)" style="background: var(--success-gradient);">
                  <i class="fas fa-download me-2"></i>Descargar
                </button>
                <button class="btn-quick-view" onclick="quickView(9)">
                  <i class="fas fa-eye"></i>
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Paginación -->
        <div class="custom-pagination">
          <nav aria-label="Paginación de productos">
            <ul class="pagination justify-content-center mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Anterior">
                  <i class="fas fa-chevron-left"></i>
                </a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="#">12</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Siguiente">
                  <i class="fas fa-chevron-right"></i>
                </a>
              </li>
            </ul>
          </nav>
          <div class="text-center mt-3">
            <small class="text-muted">
              Página 1 de 12 • Mostrando 9 de 1,247 productos
            </small>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Filtros móviles (Offcanvas) -->
  <div class="offcanvas offcanvas-start filters-offcanvas" tabindex="-1" id="filtersOffcanvas">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title fw-bold">
        <i class="fas fa-filter me-2"></i>Filtros y Categorías
      </h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <!-- Aquí se duplica el contenido de los filtros para móviles -->
      <div class="filter-section">
        <h6 class="filter-title">
          <i class="fas fa-th-large text-primary"></i>
          Categorías
        </h6>
        <div class="filter-option">
          <input type="checkbox" id="mobile-cat-action" value="action">
          <label for="mobile-cat-action">Acción & Aventura</label>
          <span class="filter-count">245</span>
        </div>
        <div class="filter-option">
          <input type="checkbox" id="mobile-cat-rpg" value="rpg">
          <label for="mobile-cat-rpg">RPG</label>
          <span class="filter-count">189</span>
        </div>
        <div class="filter-option">
          <input type="checkbox" id="mobile-cat-sports" value="sports">
          <label for="mobile-cat-sports">Deportes</label>
          <span class="filter-count">156</span>
        </div>
      </div>

      <div class="filter-section">
        <h6 class="filter-title">
          <i class="fas fa-dollar-sign text-success"></i>
          Rango de Precio
        </h6>
        <div class="price-range">
          <input type="range" class="form-range" min="0" max="200" value="100" id="mobilePriceRange">
          <div class="price-inputs">
            <input type="number" class="price-input" placeholder="Min" id="mobileMinPrice" value="0">
            <span class="text-muted">-</span>
            <input type="number" class="price-input" placeholder="Max" id="mobileMaxPrice" value="200">
          </div>
        </div>
      </div>

      <div class="d-grid mt-4">
        <button class="btn btn-primary" data-bs-dismiss="offcanvas">
          <i class="fas fa-check me-2"></i>Aplicar Filtros
        </button>
      </div>
    </div>
  </div>

  <!-- Quick View Modal -->
  <div class="modal fade quick-view-modal" id="quickViewModal