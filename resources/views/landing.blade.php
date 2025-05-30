<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PreparaCGR - Plataforma Premium</title>
    <link rel="icon" href="/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .hero-bg {
            background: linear-gradient(120deg, #003973 0%, #0076d1 100%);
        }
        .glass {
            background: rgba(255,255,255,0.85);
            backdrop-filter: blur(8px);
        }
        .pricing-popular {
            border: 3px solid #facc15;
            box-shadow: 0 8px 32px 0 rgba(250,204,21,0.12);
            transform: scale(1.04);
        }
    </style>
</head>
<body class="hero-bg min-h-screen flex flex-col justify-between">
    <!-- HERO -->
    <header class="flex justify-between items-center px-8 py-6">
        <div class="flex items-center space-x-3">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Logo" class="w-12 h-12">
            <span class="text-2xl font-extrabold text-white tracking-wide">PreparaCGR</span>
        </div>
        <div class="space-x-4">
            <a href="{{ route('login') }}" class="px-5 py-2 rounded-lg bg-white text-[#003973] font-bold shadow-md border border-blue-200 hover:bg-blue-50 hover:border-blue-400 transition">Iniciar Sesión</a>
            <a href="{{ route('register') }}" class="px-5 py-2 rounded-lg bg-yellow-400 text-blue-900 font-bold shadow hover:bg-yellow-300 transition">Regístrate</a>
        </div>
    </header>
    <main class="flex-1 flex flex-col items-center justify-center px-4">
        <!-- HERO SECTION -->
        <section class="w-full max-w-3xl mx-auto text-center mb-16 mt-10">
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-6 leading-tight drop-shadow-lg">¡Transforma tu futuro profesional!</h1>
            <p class="text-lg sm:text-xl text-blue-100 mb-8 max-w-2xl mx-auto">Accede a la plataforma más completa para prepararte y aprobar el Concurso de Méritos de la Contraloría General de la República. Todo por <span class='font-extrabold text-yellow-300'>solo $25.000 COP al mes</span>.</p>
            <a href="{{ route('register') }}" class="px-10 py-4 rounded-2xl bg-yellow-400 text-blue-900 font-black shadow-2xl text-2xl hover:-translate-y-1 hover:bg-yellow-300 transition transform animate-bounce">¡Comienza por $25.000/mes!</a>
        </section>
        <!-- BENEFICIOS -->
        <section class="w-full max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
            <div class="glass rounded-xl shadow-lg p-8 flex flex-col items-center">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="w-14 h-14 mb-4" alt="Simulacros">
                <h3 class="font-bold text-xl text-blue-900 mb-2">Simulacros reales</h3>
                <p class="text-blue-800">Entrena con modelos de examen actualizados y mide tu progreso.</p>
            </div>
            <div class="glass rounded-xl shadow-lg p-8 flex flex-col items-center">
                <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" class="w-14 h-14 mb-4" alt="Material Exclusivo">
                <h3 class="font-bold text-xl text-blue-900 mb-2">Material exclusivo</h3>
                <p class="text-blue-800">Guías, resúmenes y recursos premium creados por expertos.</p>
            </div>
            <div class="glass rounded-xl shadow-lg p-8 flex flex-col items-center">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png" class="w-14 h-14 mb-4" alt="Aprendizaje Didáctico">
                <h3 class="font-bold text-xl text-blue-900 mb-2">Aprendizaje Didáctico</h3>
                <p class="text-blue-800">Lecciones y recursos interactivos para que aprendas a tu ritmo. Incluye soporte técnico si lo necesitas.</p>
            </div>
        </section>
        <!-- PRECIO DESTACADO -->
        <section class="w-full max-w-2xl mx-auto mb-20">
            <div class="glass pricing-popular rounded-xl shadow-2xl p-10 flex flex-col items-center relative">
                <span class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-yellow-400 text-blue-900 px-4 py-1 rounded-full font-bold text-xs uppercase shadow">¡Acceso Premium!</span>
                <span class="text-blue-900 font-bold text-2xl mb-2">Acceso total a la plataforma</span>
                <div class="text-5xl font-black text-blue-900 mb-2">$25.000 <span class="text-xl font-bold">/mes</span></div>
                <ul class="text-blue-800 mb-6 text-left space-y-2">
    <li>✔️ Simulacros ilimitados</li>
    <li>✔️ Material exclusivo y actualizado</li>
    <li>✔️ Comunidad de estudiantes</li>
    <li>✔️ Cancela cuando quieras</li>
</ul>
                <a href="{{ route('register') }}" class="px-10 py-4 rounded-xl bg-yellow-400 text-blue-900 font-black text-2xl shadow-xl hover:bg-yellow-300 transition animate-pulse">¡Quiero ser Premium!</a>

<!-- BOTÓN DE PAGO WOMPI (PRUEBAS) -->
<div class="flex flex-col items-center mt-6">
    <!-- Reemplaza esta llave pública por la tuya real en producción -->
    <script src="https://checkout.wompi.co/widget.js"
        data-render="button"
        data-public-key="pub_test_MT5stoFrd6gqS8nktztySi2uckDHrZtN"
        data-currency="COP"
        data-amount-in-cents="2500000"
        data-reference="PREMIUM-{{ uniqid() }}"
        data-redirect-url="{{ url('/wompi/confirmacion') }}">
    </script>
    <p class="text-xs text-blue-800 mt-2">Puedes hacer pruebas con tarjetas de prueba de Wompi.<br>El pago es simulado, no se descuenta dinero real.</p>
</div>
            </div>
        </section>
        <!-- TESTIMONIOS -->
        <section class="w-full max-w-4xl mx-auto mb-16">
            <h2 class="text-2xl font-bold text-white mb-6 text-center">Historias de éxito</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="glass rounded-xl shadow-lg p-6 flex items-center space-x-4">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-14 h-14 rounded-full border-4 border-yellow-300" alt="Testimonio 1">
                    <div>
                        <p class="text-blue-900 font-semibold">“¡No solo aprobé, sino que obtuve uno de los mejores puntajes! PreparaCGR fue mi mejor inversión.”</p>
                        <span class="text-yellow-700 text-sm">— Juan P., Bogotá</span>
                    </div>
                </div>
                <div class="glass rounded-xl shadow-lg p-6 flex items-center space-x-4">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" class="w-14 h-14 rounded-full border-4 border-yellow-300" alt="Testimonio 2">
                    <div>
                        <p class="text-blue-900 font-semibold">“El acompañamiento y los simulacros fueron clave. ¡Vale cada peso!”</p>
                        <span class="text-yellow-700 text-sm">— María G., Medellín</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA FINAL -->
        <div class="w-full flex justify-center mb-12">
            <a href="{{ route('register') }}" class="px-10 py-4 rounded-2xl bg-yellow-400 text-blue-900 font-black shadow-2xl text-2xl hover:-translate-y-1 hover:bg-yellow-300 transition transform animate-bounce">¡Quiero empezar ahora!</a>
        </div>
    </main>
    <!-- FOOTER -->
    <footer class="py-8 bg-blue-900 text-center text-blue-100 text-base">
        <div class="mb-2 font-bold tracking-wide">&copy; 2025 PreparaCGR. Todos los derechos reservados.</div>
        <div class="text-xs">Impulsa tu futuro profesional. Plataforma 100% colombiana.</div>
    </footer>
</body>
</html>
