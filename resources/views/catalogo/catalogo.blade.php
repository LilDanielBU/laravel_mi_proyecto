<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Feets - Calzado de Calidad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
   <link rel="stylesheet" href="{{ asset('css/estiloCatalogo.css') }}">
<script src="{{ asset('js/scriptsCatalogo.js') }}" defer></script>
</head>
<body>
    <div id="notification" class="notification">
        <span id="notification-message"></span>
    </div>

    <header class="sticky-top shadow-sm">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="RUTA/A/TU/LOGO_GOLDEN.jpge" alt="Golden Feets" class="img-fluid" width="150">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbarContent" aria-controls="mainNavbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="mainNavbarContent">
                    <div class="d-flex align-items-center flex-column flex-lg-row mt-3 mt-lg-0">
                        <div class="input-group me-lg-3 mb-2 mb-lg-0" style="max-width: 250px;">
                            <input type="text" class="form-control form-control-sm" placeholder="Buscar..." aria-label="Buscar" id="search-box">
                            <button class="btn btn-outline-secondary btn-sm" type="button" onclick="searchProducts()">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                         <button class="btn btn-outline-dark me-3" onclick="toggleDarkMode()">
                        <i class="bi bi-moon-fill"></i>
                        </button>
                        <button class="btn btn-outline-primary btn-sm me-lg-2 mb-2 mb-lg-0" onclick="window.location.href='{{ url('/login') }}';">
                        <i class="bi bi-person me-1"></i>Iniciar Sesión
                        </button>
                        <button class="btn btn-primary btn-sm position-relative" data-bs-toggle="offcanvas" data-bs-target="#cartSidebar">
                            <i class="bi bi-cart me-1"></i>Carrito
                            <span id="cart-count" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        <div class="row">

            <aside class="col-lg-3 col-md-4">
                <div class="filter-container p-3 rounded shadow-sm mb-4">
                    <div class="filter-section category-list">
                       <h5 class="mb-3">Categorías</h5>
                       <div class="list-group list-group-flush">
                           <a href="#" class="list-group-item list-group-item-action" data-category="all">Todos</a>
                           <a href="#" class="list-group-item list-group-item-action" data-category="Hombre">Hombre</a>
                           <a href="#" class="list-group-item list-group-item-action" data-category="Mujer">Mujer</a>
                           <a href="#" class="list-group-item list-group-item-action" data-category="Niños">Niños</a>
                           <a href="#" class="list-group-item list-group-item-action" data-category="Deportivos">Deportivos</a>
                           <a href="#" class="list-group-item list-group-item-action" data-category="Casuales">Casuales</a>
                       </div>
                   </div>
                   <div class="filter-section">
                       <h5 class="mb-3">Filtros</h5>
                       <div class="mb-3">
                           <label for="price-range" class="form-label">Precio: <span id="price-range-value">$0 - $500</span></label>
                           <input type="range" class="form-range" id="price-range" min="0" max="500" step="10" value="500" aria-label="Rango de precio" oninput="updatePriceRange(this.value)">
                       </div>
                       <div class="mb-3">
                           <label class="form-label">Tallas</label>
                           <div id="size-selector" class="d-flex flex-wrap gap-1">
                               </div>
                       </div>
                       <div class="mb-3">
                           <label class="form-label">Marca</label>
                           <div class="form-check">
                               <input class="form-check-input" type="checkbox" value="Nike" id="brand-nike">
                               <label class="form-check-label" for="brand-nike">Nike</label>
                           </div>
                           <div class="form-check">
                               <input class="form-check-input" type="checkbox" value="Adidas" id="brand-adidas">
                               <label class="form-check-label" for="brand-adidas">Adidas</label>
                           </div>
                           <div class="form-check">
                               <input class="form-check-input" type="checkbox" value="Puma" id="brand-puma">
                               <label class="form-check-label" for="brand-puma">Puma</label>
                           </div>
                       </div>
                       <button class="btn btn-primary w-100 btn-sm" onclick="applyFilters()">Aplicar Filtros</button>
                   </div>
               </div>
           </aside>

            <div class="col-lg-9 col-md-8">

                <section id="featured-products" class="mb-5 featured-section">
                    <h2 class="mb-4 display-6">Destacados</h2> <div id="productCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-indicators"></div>
                        <div class="carousel-inner">
                           </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                    </div>
                </section>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4" id="product-container">
                    </div>

                <div id="no-results" class="text-center my-5 d-none">
                     <i class="bi bi-emoji-frown display-1 text-muted"></i>
                     <h3 class="mt-3">¡Oops! No encontramos productos</h3>
                     <p class="text-muted">Intenta ajustar tus filtros o búsqueda.</p>
                </div>

            </div> </div> </main> <div class="offcanvas offcanvas-end" tabindex="-1" id="cartSidebar" aria-labelledby="cartSidebarLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="cartSidebarLabel">Carrito de Compras</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column">
            <div id="cart-empty-message" class="text-center pt-5 flex-grow-1">
                <i class="bi bi-cart-x display-1 text-muted"></i>
                <p class="mt-3 fs-5">Tu carrito está vacío</p>
                <p class="text-muted">¡Añade algunos productos!</p>
            </div>
            <div id="cart-items-container" class="flex-grow-1">
                </div>
            <div id="cart-footer" class="mt-auto pt-3 border-top">
                 </div>
        </div>
    </div>

    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Detalles del Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal-product-content">
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <a href="https://wa.me/573002997648?text=Hola%2C%20quiero%20más%20información%20sobre%20los%20zapatos%20de%20Golden%20Feets"
        target="_blank"
        class="btn btn-success position-fixed d-flex align-items-center gap-2 shadow p-2 animate-in"
        style="bottom: 20px; right: 20px; z-index: 1030; border-radius: 50px;"
        title="Chatea con nosotros en WhatsApp">
        <i class="bi bi-whatsapp fs-4"></i>
        <span class="d-none d-md-inline">Chatea con nosotros</span>
    </a>

    <footer class="bg-dark text-light mt-5 py-4">
        <div class="container text-center">
            <p class="mb-1">&copy; 2024 Golden Feets. Todos los derechos reservados.</p>
            <p class="mb-0"><a href="#" class="text-light">Política de Privacidad</a> | <a href="#" class="text-light">Términos de Servicio</a></p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>