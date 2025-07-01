<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peer-Review Tugas Cute</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body { font-family: 'Poppins', sans-serif; }
        
        @keyframes bounceCute { 
            0%, 100% { transform: translateY(0); } 
            50% { transform: translateY(-15px); } 
        }
        
        @keyframes wiggle {
            0%, 7% { transform: rotateZ(0); }
            15% { transform: rotateZ(-15deg); }
            20% { transform: rotateZ(10deg); }
            25% { transform: rotateZ(-10deg); }
            30% { transform: rotateZ(6deg); }
            35% { transform: rotateZ(-4deg); }
            40%, 100% { transform: rotateZ(0); }
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        
        @keyframes sparkle {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.5; transform: scale(1.2); }
        }
        
        @keyframes rainbow {
            0% { filter: hue-rotate(0deg); }
            25% { filter: hue-rotate(90deg); }
            50% { filter: hue-rotate(180deg); }
            75% { filter: hue-rotate(270deg); }
            100% { filter: hue-rotate(360deg); }
        }
        
        .cute-bounce { animation: bounceCute 3s infinite; }
        .wiggle { animation: wiggle 2s ease-in-out infinite; }
        .float { animation: float 3s ease-in-out infinite; }
        .sparkle { animation: sparkle 2s ease-in-out infinite; }
        .rainbow { animation: rainbow 4s linear infinite; }
        
        .pastel-gradient {
            background: linear-gradient(135deg, 
                #FFB6C1 0%,   /* Light Pink */
                #E6E6FA 25%,  /* Lavender */
                #B0E0E6 50%,  /* Powder Blue */
                #F0E68C 75%,  /* Khaki */
                #DDA0DD 100%  /* Plum */
            );
        }
        
        .navbar-gradient {
            background: linear-gradient(90deg, 
                #FFB6C1 0%,   /* Light Pink */
                #DDA0DD 50%,  /* Plum */
                #B0E0E6 100%  /* Powder Blue */
            );
        }
        
        .card-gradient-1 {
            background: linear-gradient(135deg, #FFE4E1, #F0E68C);
        }
        
        .card-gradient-2 {
            background: linear-gradient(135deg, #E6E6FA, #B0E0E6);
        }
        
        .card-gradient-3 {
            background: linear-gradient(135deg, #F0FFFF, #FFB6C1);
        }
        
        .glass-effect {
            backdrop-filter: blur(15px);
            background: rgba(255, 255, 255, 0.25);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .cute-shadow {
            box-shadow: 0 8px 32px rgba(221, 160, 221, 0.3);
        }
        
        .hover-lift {
            transition: all 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 15px 40px rgba(255, 182, 193, 0.4);
        }
        
        .emoji-float {
            position: absolute;
            font-size: 2rem;
            opacity: 0.7;
            animation: float 4s ease-in-out infinite;
        }
        
        .nav-link {
            position: relative;
            overflow: hidden;
        }
        
        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }
        
        .nav-link:hover::before {
            left: 100%;
        }
        
        @media (max-width: 768px) {
            .emoji-float { display: none; }
            .mobile-menu {
                transform: translateY(-100%);
                transition: transform 0.3s ease;
            }
            .mobile-menu.active {
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="antialiased pastel-gradient min-h-screen relative overflow-x-hidden">
    <!-- Floating Emojis -->
    <div class="emoji-float" style="top: 10%; left: 5%;">🌸</div>
    <div class="emoji-float" style="top: 20%; right: 10%; animation-delay: -1s;">✨</div>
    <div class="emoji-float" style="top: 60%; left: 8%; animation-delay: -2s;">🦋</div>
    <div class="emoji-float" style="top: 80%; right: 15%; animation-delay: -3s;">💫</div>
    <div class="emoji-float" style="top: 40%; left: 85%; animation-delay: -1.5s;">🌺</div>

    <!-- Navbar -->
    <nav class="navbar-gradient p-4 text-white shadow-lg relative z-10">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl md:text-3xl font-bold text-white cute-bounce flex items-center">
                <span class="wiggle mr-2">🎀</span>
                Peer-Cutie
                <span class="sparkle ml-2">✨</span>
            </a>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-6 items-center">
                <a href="/" class="nav-link px-3 py-2 rounded-full hover:bg-white hover:bg-opacity-20 transition">🏠 Beranda</a>
                <a href="/about" class="nav-link px-3 py-2 rounded-full hover:bg-white hover:bg-opacity-20 transition">📖 About</a>
                <a href="/contact" class="nav-link px-3 py-2 rounded-full hover:bg-white hover:bg-opacity-20 transition">📞 contact</a>
                <a href="/login" class="nav-link px-4 py-2 bg-white bg-opacity-20 rounded-full hover:bg-opacity-30 transition">🔐 Login</a>
                <a href="/register" class="nav-link px-4 py-2 bg-white bg-opacity-20 rounded-full hover:bg-opacity-30 transition">📝 Register</a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button class="md:hidden text-white text-2xl" onclick="toggleMobileMenu()">
                <span id="menuIcon">🍔</span>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="mobile-menu md:hidden mt-4 bg-white bg-opacity-20 rounded-lg p-4">
            <div class="flex flex-col space-y-3">
                <a href="/" class="nav-link px-3 py-2 rounded-full hover:bg-white hover:bg-opacity-20 transition">🏠 Beranda</a>
                <a href="/about" class="nav-link px-3 py-2 rounded-full hover:bg-white hover:bg-opacity-20 transition">📖 About</a>
                <a href="/contact" class="nav-link px-3 py-2 rounded-full hover:bg-white hover:bg-opacity-20 transition">📞 contact</a>
                <a href="/login" class="nav-link px-3 py-2 rounded-full hover:bg-white hover:bg-opacity-20 transition">🔐 Login</a>
                <a href="/register" class="nav-link px-3 py-2 rounded-full hover:bg-white hover:bg-opacity-20 transition">📝 Register</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container mx-auto mt-8 md:mt-16 p-6 flex flex-col md:flex-row items-center relative z-10">
        <div class="md:w-1/2 text-center md:text-left mb-8 md:mb-0">
            <h1 class="text-4xl md:text-6xl font-bold text-purple-800 cute-bounce mb-6">
                Halo, Teman Belajar! 
                <span class="rainbow text-pink-600">🥰</span>
            </h1>
            <p class="text-lg md:text-xl text-purple-700 mb-8 leading-relaxed">
                Ayo upload tugas dan review bareng di platform cute ini! 
                Yuk, mulai petualangan seru kita dengan teman-teman! 
                <span class="sparkle">✨</span>
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                <button class="px-8 py-4 card-gradient-1 text-purple-800 font-semibold rounded-full hover-lift cute-shadow text-lg" onclick="startAdventure()">
                    Mulai Sekarang! 💕
                </button>
                <button class="px-8 py-4 card-gradient-2 text-purple-800 font-semibold rounded-full hover-lift cute-shadow text-lg" onclick="learnMore()">
                    Pelajari Lebih Lanjut 🌟
                </button>
            </div>
        </div>
        
        <div class="md:w-1/2 flex justify-center">
            <div class="relative">
                <div class="w-80 h-80 card-gradient-3 rounded-3xl cute-shadow hover-lift cursor-pointer flex items-center justify-center" onclick="cuteInteraction()">
                    <div class="text-center">
                        <div class="text-8xl mb-4 wiggle">🎓</div>
                        <p class="text-2xl font-bold text-purple-800">Cute Study</p>
                        <p class="text-purple-600">Klik aku! 😸</p>
                    </div>
                </div>
                <!-- Floating elements around the card -->
                <div class="absolute -top-4 -left-4 text-4xl sparkle">⭐</div>
                <div class="absolute -top-4 -right-4 text-4xl float">🌙</div>
                <div class="absolute -bottom-4 -left-4 text-4xl wiggle">💖</div>
                <div class="absolute -bottom-4 -right-4 text-4xl cute-bounce">🌈</div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="container mx-auto mt-16 p-6 relative z-10">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-purple-800 mb-12 cute-bounce">
            Kenapa Harus Peer-Cutie? 🤔💭
        </h2>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="card-gradient-1 p-8 rounded-3xl cute-shadow hover-lift text-center">
                <div class="text-6xl mb-4 wiggle">📚</div>
                <h3 class="text-2xl font-bold text-purple-800 mb-4">Review Mudah</h3>
                <p class="text-purple-700">Upload tugas, dapat feedback dari teman-teman dengan mudah dan menyenangkan!</p>
            </div>
            
            <div class="card-gradient-2 p-8 rounded-3xl cute-shadow hover-lift text-center">
                <div class="text-6xl mb-4 sparkle">👥</div>
                <h3 class="text-2xl font-bold text-purple-800 mb-4">Komunitas Seru</h3>
                <p class="text-purple-700">Bergabung dengan komunitas belajar yang supportif dan penuh semangat!</p>
            </div>
            
            <div class="card-gradient-3 p-8 rounded-3xl cute-shadow hover-lift text-center">
                <div class="text-6xl mb-4 float">🏆</div>
                <h3 class="text-2xl font-bold text-purple-800 mb-4">Prestasi Tinggi</h3>
                <p class="text-purple-700">Raih prestasi terbaik dengan bantuan peer review yang konstruktif!</p>
            </div>
        </div>
    </div>

    <!-- Interactive Elements -->
    <div class="fixed bottom-6 right-6 z-20">
        <button class="w-16 h-16 card-gradient-1 rounded-full cute-shadow hover-lift flex items-center justify-center text-3xl" onclick="surpriseMe()" title="Surprise Me!">
            <span class="rainbow">🎉</span>
        </button>
    </div>

    <script>
        let clickCount = 0;
        const surpriseEmojis = ['🎊', '🎈', '🎁', '🍰', '🦄', '🌟', '💝', '🎪'];
        
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            const icon = document.getElementById('menuIcon');
            
            menu.classList.toggle('active');
            icon.textContent = menu.classList.contains('active') ? '❌' : '🍔';
        }
        
        function cuteInteraction() {
            clickCount++;
            const messages = [
                'Yay! Kamu klik aku! 😸 Ayo mulai belajar bareng!',
                'Hihi~ Kamu lucu banget! 🥰 Mau review tugas yuk?',
                'Uwaa~ Jangan geli-geli dong! 😂 Yuk upload tugas!',
                'Kyaa~ Kamu playful banget! 💕 Mari belajar sama-sama!',
                'Hehe~ Sudah ' + clickCount + ' kali klik! 🎉 Semangat belajar ya!'
            ];
            
            const randomMessage = messages[Math.min(clickCount - 1, messages.length - 1)];
            showCuteAlert(randomMessage);
            
            // Add some visual effects
            createFloatingHearts();
        }
        
        function startAdventure() {
            showCuteAlert('Woohooo! 🎉 Selamat datang di petualangan belajar yang seru! Mari mulai dengan login atau register ya! 💖');
        }
        
        function learnMore() {
            showCuteAlert('Peer-Cutie adalah platform review tugas yang super cute dan fun! 🌈 Kamu bisa upload tugas, dapat feedback, dan bantu teman-teman juga! ✨');
        }
        
        function surpriseMe() {
            const randomEmoji = surpriseEmojis[Math.floor(Math.random() * surpriseEmojis.length)];
            showCuteAlert('SURPRISE! ' + randomEmoji + ' Semoga hari kamu selalu ceria dan penuh semangat belajar! 💕');
            createConfetti();
        }
        
        function showCuteAlert(message) {
            // Create custom cute alert
            const alertDiv = document.createElement('div');
            alertDiv.className = 'fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 card-gradient-1 p-8 rounded-3xl cute-shadow z-50 max-w-md text-center';
            alertDiv.innerHTML = `
                <div class="text-6xl mb-4 wiggle">💝</div>
                <p class="text-purple-800 font-semibold text-lg mb-6">${message}</p>
                <button onclick="this.parentElement.remove()" class="px-6 py-3 card-gradient-2 text-purple-800 font-semibold rounded-full hover-lift">
                    Okee! 😊
                </button>
            `;
            
            document.body.appendChild(alertDiv);
            
            // Auto remove after 5 seconds
            setTimeout(() => {
                if (alertDiv.parentElement) {
                    alertDiv.remove();
                }
            }, 5000);
        }
        
        function createFloatingHearts() {
            for (let i = 0; i < 5; i++) {
                setTimeout(() => {
                    const heart = document.createElement('div');
                    heart.textContent = '💖';
                    heart.className = 'fixed text-4xl pointer-events-none z-30';
                    heart.style.left = Math.random() * window.innerWidth + 'px';
                    heart.style.top = window.innerHeight + 'px';
                    heart.style.animation = 'float 3s ease-out forwards';
                    
                    document.body.appendChild(heart);
                    
                    setTimeout(() => heart.remove(), 3000);
                }, i * 200);
            }
        }
        
        function createConfetti() {
            for (let i = 0; i < 20; i++) {
                setTimeout(() => {
                    const confetti = document.createElement('div');
                    confetti.textContent = surpriseEmojis[Math.floor(Math.random() * surpriseEmojis.length)];
                    confetti.className = 'fixed text-2xl pointer-events-none z-30';
                    confetti.style.left = Math.random() * window.innerWidth + 'px';
                    confetti.style.top = '-50px';
                    confetti.style.animation = 'float 4s ease-out forwards';
                    
                    document.body.appendChild(confetti);
                    
                    setTimeout(() => confetti.remove(), 4000);
                }, i * 100);
            }
        }
        
        // Add some interactive hover effects
        document.addEventListener('DOMContentLoaded', () => {
            // Add sparkle effect on hover for buttons
            const buttons = document.querySelectorAll('button, .hover-lift');
            buttons.forEach(button => {
                button.addEventListener('mouseenter', () => {
                    button.style.filter = 'brightness(1.1) saturate(1.2)';
                });
                
                button.addEventListener('mouseleave', () => {
                    button.style.filter = 'none';
                });
            });
            
            // Close mobile menu when clicking outside
            document.addEventListener('click', (e) => {
                const menu = document.getElementById('mobileMenu');
                const menuButton = e.target.closest('button');
                
                if (menu.classList.contains('active') && !menu.contains(e.target) && !menuButton) {
                    toggleMobileMenu();
                }
            });
        });
    </script>
</body>
</html>