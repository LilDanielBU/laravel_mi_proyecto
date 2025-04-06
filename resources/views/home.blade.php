<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Feets - Tu tienda de zapatos premium</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .hero-text {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .category-card:hover {
            transform: translateY(-10px);
            transition: all 0.3s ease;
        }
        .offer-card:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        .nav-link {
            position: relative;
        }
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #6b46c1;
            transition: width 0.3s ease;
        }
        .nav-link:hover:after {
            width: 100%;
        }
        .hero-slide {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            background-size: cover;
            background-position: center;
        }
        .hero-slide.active {
            opacity: 1;
        }
        .hero-container {
            position: relative;
            height: 600px;
            overflow: hidden;
        }
        .hero-content {
            position: relative;
            z-index: 2;
        }
        .slide-control.active {
            background-color: white;
            opacity: 1 !important;
        }
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        /* Modo oscuro */
        .dark .bg-gray-50 {
            background-color: #111827;
        }
        .dark .bg-white {
            background-color: #1f2937;
        }
        .dark .text-gray-800, .dark .text-gray-900 {
            color: #f3f4f6;
        }
        .dark .text-gray-600 {
            color: #d1d5db;
        }
        .dark .bg-purple-50 {
            background-color: #3730a3;
        }
        .dark .bg-gradient-to-r.from-purple-50.to-gray-50 {
            background-image: linear-gradient(to right, #3730a3, #111827);
        }
        .dark .testimonial-card, .dark .category-card, .dark .offer-card {
            background-color: #1f2937;
            border: 1px solid #374151;
        }
        .dark .shadow-lg, .dark .shadow-md {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.2), 0 2px 4px -1px rgba(0, 0, 0, 0.12);
        }
        .dark .bg-purple-100 {
            background-color: #4c1d95;
        }
        .dark .text-purple-600 {
            color: #a78bfa;
        }
        .dark .text-purple-800 {
            color: #c4b5fd;
        }
        .dark .bg-gray-900 {
            background-color: #030712;
        }
        .dark .text-gray-400 {
            color: #9ca3af;
        }
        .dark .border-gray-800 {
            border-color: #374151;
        }
        .dark-mode-toggle {
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans antialiased dark:bg-gray-900 transition-colors duration-300">
    <!-- Navegación mejorada -->
    <nav class="bg-white shadow-lg sticky top-0 z-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold text-purple-900 flex items-center dark:text-purple-300">
                        <i class="fas fa-shoe-prints text-purple-600 mr-2 dark:text-purple-400"></i>
                        Golden Feets
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <button id="darkModeToggle" class="dark-mode-toggle text-gray-600 hover:text-purple-900 dark:text-gray-300 dark:hover:text-purple-300">
                        <i class="fas fa-moon dark:hidden"></i>
                        <i class="fas fa-sun hidden dark:block"></i>
                    </button>
                    <a href="{{ route('login') }}" class="nav-link text-gray-600 hover:text-purple-900 font-medium dark:text-gray-300 dark:hover:text-purple-300">
                        <i class="fas fa-user mr-1"></i> Inicia Sesión
                    </a>
                    <a href="{{ route('catalogo') }}" class="nav-link text-gray-600 hover:text-purple-900 font-medium dark:text-gray-300 dark:hover:text-purple-300">
                        <i class="fas fa-shopping-bag mr-1"></i> Catálogo
                    </a>
                    <a href="error.html" class="nav-link text-gray-600 hover:text-purple-900 font-medium dark:text-gray-300 dark:hover:text-purple-300">
                        <i class="fas fa-tag mr-1"></i> Ofertas
                    </a>
                    <a href="#" class="text-gray-600 hover:text-purple-900 ml-4 dark:text-gray-300 dark:hover:text-purple-300">
                        <i class="fas fa-shopping-cart text-xl"></i>
                    </a>
                </div>
                <div class="md:hidden">
                    <button class="text-gray-600 focus:outline-none dark:text-gray-300">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section con carrusel de imágenes -->
    <div class="hero-container relative bg-gray-900">
        <!-- Slides del carrusel -->
        <div class="hero-slide active" style="background-image: url('https://images.unsplash.com/photo-1600269452121-4f2416e55c28?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')"></div>
        <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')"></div>
        <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')"></div>
        <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1560769629-975ec94e6a86?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')"></div>
        
        <!-- Overlay para mejor legibilidad -->
        <div class="absolute inset-0 bg-gradient-to-r from-purple-900/70 to-gray-900/70"></div>
        
        <!-- Contenido del hero -->
        <div class="absolute inset-0 flex items-center justify-center px-4 hero-content">
            <div class="text-center max-w-2xl">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 hero-text">Encuentra tu estilo perfecto</h1>
                <p class="text-xl md:text-2xl text-white mb-8">Descubre las últimas tendencias en calzado con la mejor calidad y confort</p>
                <a href="{{ url('/catalogo') }}" class="bg-white text-purple-900 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition duration-300 inline-flex items-center dark:bg-purple-600 dark:text-white dark:hover:bg-purple-700">
                    Ver Colección <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
        
        <!-- Controles del carrusel -->
        <div class="absolute bottom-8 left-0 right-0 flex justify-center space-x-2 z-10">
            <button class="slide-control active w-3 h-3 rounded-full bg-white opacity-50 focus:outline-none" data-slide="0"></button>
            <button class="slide-control w-3 h-3 rounded-full bg-white opacity-50 focus:outline-none" data-slide="1"></button>
            <button class="slide-control w-3 h-3 rounded-full bg-white opacity-50 focus:outline-none" data-slide="2"></button>
            <button class="slide-control w-3 h-3 rounded-full bg-white opacity-50 focus:outline-none" data-slide="3"></button>
        </div>
    </div>

    <!-- Categorías mejoradas -->
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 dark:text-white">Nuestras Categorías</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto dark:text-gray-300">Explora nuestra amplia selección de calzado para cada ocasión</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden category-card transition duration-300 dark:bg-gray-800 dark:border dark:border-gray-700">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                         alt="Calzado casual" 
                         class="w-full h-full object-cover hover:scale-105 transition duration-500">
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-2xl font-bold mb-3 text-gray-800 dark:text-white">Casual</h3>
                    <p class="text-gray-600 mb-4 dark:text-gray-300">Comodidad y estilo para tu día a día</p>
                    <a href="{{ url('/catalogo') }}" class="text-purple-600 hover:text-purple-800 font-medium inline-flex items-center dark:text-purple-400 dark:hover:text-purple-300">
                        Ver productos <i class="fas fa-chevron-right ml-1"></i>
                    </a>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-lg overflow-hidden category-card transition duration-300 dark:bg-gray-800 dark:border dark:border-gray-700">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                         alt="Calzado deportivo" 
                         class="w-full h-full object-cover hover:scale-105 transition duration-500">
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-2xl font-bold mb-3 text-gray-800 dark:text-white">Deportivo</h3>
                    <p class="text-gray-600 mb-4 dark:text-gray-300">Máximo rendimiento para tus actividades</p>
                    <a href="{{ url('/catalogo') }}" class="text-purple-600 hover:text-purple-800 font-medium inline-flex items-center dark:text-purple-400 dark:hover:text-purple-300">
                        Ver productos <i class="fas fa-chevron-right ml-1"></i>
                    </a>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-lg overflow-hidden category-card transition duration-300 dark:bg-gray-800 dark:border dark:border-gray-700">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1560769629-975ec94e6a86?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                         alt="Calzado formal" 
                         class="w-full h-full object-cover hover:scale-105 transition duration-500">
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-2xl font-bold mb-3 text-gray-800 dark:text-white">Formal</h3>
                    <p class="text-gray-600 mb-4 dark:text-gray-300">Elegancia para ocasiones especiales</p>
                    <a href="{{ url('/catalogo') }}" class="text-purple-600 hover:text-purple-800 font-medium inline-flex items-center dark:text-purple-400 dark:hover:text-purple-300">
                        Ver productos <i class="fas fa-chevron-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Ofertas especiales mejoradas -->
    <div class="bg-gradient-to-r from-purple-50 to-gray-50 py-20 dark:from-indigo-900 dark:to-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 dark:text-white">Ofertas Especiales</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto dark:text-gray-300">Aprovecha nuestras promociones exclusivas</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-white rounded-xl shadow-md p-8 offer-card transition duration-300 flex flex-col md:flex-row items-center dark:bg-gray-800 dark:border dark:border-gray-700">
                    <div class="bg-purple-100 rounded-lg p-4 mb-6 md:mb-0 md:mr-6 flex-shrink-0 dark:bg-purple-900">
                        <i class="fas fa-percentage text-4xl text-purple-600 dark:text-purple-400"></i>
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white">Descuento del 30%</h3>
                            <span class="bg-red-500 text-white px-3 py-1 rounded-full text-sm font-medium">Oferta</span>
                        </div>
                        <p class="text-gray-600 mb-4 dark:text-gray-300">En toda la colección de verano. Válido hasta agotar existencias.</p>
                        <a href="error505.html" class="text-purple-600 hover:text-purple-800 font-medium inline-flex items-center dark:text-purple-400 dark:hover:text-purple-300">
                            Ver oferta <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-md p-8 offer-card transition duration-300 flex flex-col md:flex-row items-center dark:bg-gray-800 dark:border dark:border-gray-700">
                    <div class="bg-purple-100 rounded-lg p-4 mb-6 md:mb-0 md:mr-6 flex-shrink-0 dark:bg-purple-900">
                        <i class="fas fa-gift text-4xl text-purple-600 dark:text-purple-400"></i>
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white">2x1 en deportivos</h3>
                            <span class="bg-red-500 text-white px-3 py-1 rounded-full text-sm font-medium">Limitado</span>
                        </div>
                        <p class="text-gray-600 mb-4 dark:text-gray-300">En calzado deportivo seleccionado. Solo por tiempo limitado.</p>
                        <a href="error505.html" class="text-purple-600 hover:text-purple-800 font-medium inline-flex items-center dark:text-purple-400 dark:hover:text-purple-300">
                            Ver oferta <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonios -->
    <div class="max-w-7xl mx-auto py-20 px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 dark:text-white">Lo que dicen nuestros clientes</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto dark:text-gray-300">Experiencias reales de quienes confían en nosotros</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-md testimonial-card transition duration-300 dark:bg-gray-800 dark:border dark:border-gray-700">
                <div class="flex items-center mb-4">
                    <div class="text-yellow-400 mr-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-6 dark:text-gray-300">"Los zapatos más cómodos que he usado. La calidad superó mis expectativas y el envío fue muy rápido."</p>
                <div class="flex items-center">
                    <div class="bg-purple-100 rounded-full w-12 h-12 flex items-center justify-center mr-4 dark:bg-purple-900">
                        <i class="fas fa-user text-purple-600 dark:text-purple-400"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 dark:text-white">María González</h4>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Cliente desde 2022</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-md testimonial-card transition duration-300 dark:bg-gray-800 dark:border dark:border-gray-700">
                <div class="flex items-center mb-4">
                    <div class="text-yellow-400 mr-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-6 dark:text-gray-300">"Excelente servicio al cliente. Me ayudaron a encontrar exactamente lo que necesitaba para mi evento especial."</p>
                <div class="flex items-center">
                    <div class="bg-purple-100 rounded-full w-12 h-12 flex items-center justify-center mr-4 dark:bg-purple-900">
                        <i class="fas fa-user text-purple-600 dark:text-purple-400"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 dark:text-white">Carlos Mendoza</h4>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Cliente desde 2023</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-md testimonial-card transition duration-300 dark:bg-gray-800 dark:border dark:border-gray-700">
                <div class="flex items-center mb-4">
                    <div class="text-yellow-400 mr-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-6 dark:text-gray-300">"La variedad de estilos es increíble. Siempre encuentro algo que se adapta a mi gusto y presupuesto."</p>
                <div class="flex items-center">
                    <div class="bg-purple-100 rounded-full w-12 h-12 flex items-center justify-center mr-4 dark:bg-purple-900">
                        <i class="fas fa-user text-purple-600 dark:text-purple-400"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 dark:text-white">Ana Rodríguez</h4>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Cliente desde 2021</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->
    <div class="bg-purple-900 text-white py-16 dark:bg-purple-800">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Suscríbete a nuestro newsletter</h2>
            <p class="text-xl text-purple-200 mb-8 dark:text-purple-100">Recibe las últimas novedades, ofertas exclusivas y consejos de estilo directamente en tu correo.</p>
            <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                <input type="email" placeholder="Tu correo electrónico" class="flex-grow px-4 py-3 rounded-lg focus:outline-none text-gray-900">
                <button type="submit" class="bg-white text-purple-900 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300 dark:bg-purple-600 dark:text-white dark:hover:bg-purple-700">
                    Suscribirse
                </button>
            </form>
        </div>
    </div>

    <!-- Footer mejorado -->
    <footer class="bg-gray-900 text-white pt-16 pb-8 dark:bg-gray-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                <div>
                    <h4 class="text-xl font-bold mb-6 flex items-center">
                        <i class="fas fa-shoe-prints text-purple-400 mr-2"></i>
                        Golden Feets
                    </h4>
                    <p class="text-gray-400 mb-4">Tu destino premium para calzado de calidad y estilo.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white text-xl">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white text-xl">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white text-xl">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-6">Comprar</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white">Hombres</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Mujeres</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Niños</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Novedades</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Ofertas</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-6">Ayuda</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white">Contacto</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Envíos y devoluciones</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Preguntas frecuentes</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Guía de tallas</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Estado del pedido</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-6">Contacto</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-purple-400 mt-1 mr-3"></i>
                            <span class="text-gray-400">Calle Moda 123, Madrid, España</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt text-purple-400 mr-3"></i>
                            <span class="text-gray-400">+34 123 456 789</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope text-purple-400 mr-3"></i>
                            <span class="text-gray-400">info@goldenfeets.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>© 2024 Golden Feets. Todos los derechos reservados.</p>
                <div class="flex justify-center space-x-6 mt-4">
                    <a href="#" class="hover:text-white">Política de privacidad</a>
                    <a href="#" class="hover:text-white">Términos y condiciones</a>
                    <a href="#" class="hover:text-white">Aviso legal</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Carrusel de imágenes automático
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.hero-slide');
            const controls = document.querySelectorAll('.slide-control');
            let currentSlide = 0;
            let slideInterval;
            
            function goToSlide(n) {
                slides[currentSlide].classList.remove('active');
                controls[currentSlide].classList.remove('active');
                
                currentSlide = (n + slides.length) % slides.length;
                
                slides[currentSlide].classList.add('active');
                controls[currentSlide].classList.add('active');
            }
            
            function nextSlide() {
                goToSlide(currentSlide + 1);
            }
            
            function startSlideShow() {
                slideInterval = setInterval(nextSlide, 5000);
            }
            
            function pauseSlideShow() {
                clearInterval(slideInterval);
            }
            
            controls.forEach((control, index) => {
                control.addEventListener('click', () => {
                    pauseSlideShow();
                    goToSlide(index);
                    startSlideShow();
                });
            });
            
            startSlideShow();
            
            const heroContainer = document.querySelector('.hero-container');
            heroContainer.addEventListener('mouseenter', pauseSlideShow);
            heroContainer.addEventListener('mouseleave', startSlideShow);

            // Modo oscuro
            const darkModeToggle = document.getElementById('darkModeToggle');
            const htmlElement = document.documentElement;
            
            // Verificar preferencia del usuario
            const userPrefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
            const localStorageTheme = localStorage.getItem('theme');
            
            // Aplicar tema inicial
            if (localStorageTheme === 'dark' || (!localStorageTheme && userPrefersDark)) {
                htmlElement.classList.add('dark');
            }
            
            // Toggle del modo oscuro
            darkModeToggle.addEventListener('click', () => {
                htmlElement.classList.toggle('dark');
                const isDark = htmlElement.classList.contains('dark');
                localStorage.setItem('theme', isDark ? 'dark' : 'light');
            });
        });
    </script>
</body>
</html>