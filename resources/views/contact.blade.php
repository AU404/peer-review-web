<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontak - Peer-Review Tugas Cute</title>
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
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .cute-bounce { animation: bounceCute 3s infinite; }
        .wiggle { animation: wiggle 2s ease-in-out infinite; }
        .float { animation: float 3s ease-in-out infinite; }
        .sparkle { animation: sparkle 2s ease-in-out infinite; }
        .rainbow { animation: rainbow 4s linear infinite; }
        .pulse { animation: pulse 2s ease-in-out infinite; }
        
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
        
        .card-gradient-4 {
            background: linear-gradient(135deg, #FFF0F5, #E0E6FF);
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
        
        .form-input {
            background: rgba(255, 255, 255, 0.8);
            border: 2px solid rgba(221, 160, 221, 0.3);
            transition: all 0.3s ease;
        }
        
        .form-input:focus {
            border-color: #DDA0DD;
            box-shadow: 0 0 0 3px rgba(221, 160, 221, 0.2);
            background: rgba(255, 255, 255, 0.95);
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
    <div class="emoji-float" style="top: 10%; left: 5%;">📞</div>
    <div class="emoji-float" style="top: 20%; right: 10%; animation-delay: -1s;">💌</div>
    <div class="emoji-float" style="top: 60%; left: 8%; animation-delay: -2s;">🌟</div>
    <div class="emoji-float" style="top: 80%; right: 15%; animation-delay: -3s;">💕</div>
    <div class="emoji-float" style="top: 40%; left: 85%; animation-delay: -1.5s;">✨</div>

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
                <a href="/kontak" class="nav-link px-3 py-2 rounded-full bg-white bg-opacity-20 hover:bg-opacity-30 transition">📞 Kontak</a>
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
                <a href="/kontak" class="nav-link px-3 py-2 rounded-full bg-white bg-opacity-20 hover:bg-opacity-30 transition">📞 Kontak</a>
                <a href="/login" class="nav-link px-3 py-2 rounded-full hover:bg-white hover:bg-opacity-20 transition">🔐 Login</a>
                <a href="/register" class="nav-link px-3 py-2 rounded-full hover:bg-white hover:bg-opacity-20 transition">📝 Register</a>
            </div>
        </div>
    </nav>

    <!-- Contact Hero Section -->
    <div class="container mx-auto mt-8 md:mt-16 p-6 relative z-10">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-6xl font-bold text-purple-800 cute-bounce mb-6">
                Hubungi Kami! 
                <span class="rainbow">📞💕</span>
            </h1>
            <p class="text-lg md:text-xl text-purple-700 mb-8 leading-relaxed max-w-3xl mx-auto">
                Ada pertanyaan atau saran? Jangan ragu untuk menghubungi tim Peer-Cutie! 
                Kami siap membantu dengan sepenuh hati! 
                <span class="sparkle">✨</span>
            </p>
        </div>
    </div>

    <!-- Contact Form & Info Section -->
    <div class="container mx-auto mt-8 p-6 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="card-gradient-1 p-8 md:p-12 rounded-3xl cute-shadow">
                <div class="text-center mb-8">
                    <div class="text-6xl mb-4 wiggle">💌</div>
                    <h2 class="text-3xl font-bold text-purple-800 mb-2">Kirim Pesan Cute</h2>
                    <p class="text-purple-700">Ceritakan apa yang ada di pikiran kamu!</p>
                </div>
                
                <form onsubmit="submitForm(event)" class="space-y-6">
                    <div>
                        <label class="block text-purple-800 font-semibold mb-2">
                            <span class="wiggle mr-2">👤</span>Nama Lengkap
                        </label>
                        <input type="text" name="name" required 
                               class="form-input w-full px-4 py-3 rounded-2xl outline-none" 
                               placeholder="Masukkan nama kamu...">
                    </div>
                    
                    <div>
                        <label class="block text-purple-800 font-semibold mb-2">
                            <span class="sparkle mr-2">📧</span>Email
                        </label>
                        <input type="email" name="email" required 
                               class="form-input w-full px-4 py-3 rounded-2xl outline-none" 
                               placeholder="email@example.com">
                    </div>
                    
                    <div>
                        <label class="block text-purple-800 font-semibold mb-2">
                            <span class="float mr-2">📝</span>Subjek
                        </label>
                        <select name="subject" required class="form-input w-full px-4 py-3 rounded-2xl outline-none">
                            <option value="">Pilih kategori...</option>
                            <option value="question">❓ Pertanyaan Umum</option>
                            <option value="feedback">💭 Feedback & Saran</option>
                            <option value="technical">🔧 Masalah Teknis</option>
                            <option value="partnership">🤝 Kerjasama</option>
                            <option value="other">🌟 Lainnya</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-purple-800 font-semibold mb-2">
                            <span class="rainbow mr-2">💬</span>Pesan
                        </label>
                        <textarea name="message" required rows="5" 
                                  class="form-input w-full px-4 py-3 rounded-2xl outline-none resize-none" 
                                  placeholder="Tulis pesan kamu di sini... Jangan malu-malu ya! 😊"></textarea>
                    </div>
                    
                    <button type="submit" 
                            class="w-full px-8 py-4 card-gradient-2 text-purple-800 font-bold rounded-2xl hover-lift cute-shadow text-lg">
                        Kirim Pesan Cute! 💕
                    </button>
                </form>
            </div>
            
            <!-- Contact Info -->
            <div class="space-y-8">
                <!-- Contact Cards -->
                <div class="card-gradient-2 p-8 rounded-3xl cute-shadow hover-lift">
                    <div class="text-center">
                        <div class="text-6xl mb-4 pulse">📱</div>
                        <h3 class="text-2xl font-bold text-purple-800 mb-4">WhatsApp</h3>
                        <p class="text-purple-700 text-lg mb-4">Chat langsung dengan tim support kami!</p>
                        <a href="https://wa.me/628123456789" 
                           class="inline-block px-6 py-3 card-gradient-3 text-purple-800 font-semibold rounded-full hover-lift transition">
                            Chat Sekarang! 💬
                        </a>
                    </div>
                </div>
                
                <div class="card-gradient-3 p-8 rounded-3xl cute-shadow hover-lift">
                    <div class="text-center">
                        <div class="text-6xl mb-4 sparkle">📧</div>
                        <h3 class="text-2xl font-bold text-purple-800 mb-4">Email</h3>
                        <p class="text-purple-700 text-lg mb-4">Kirim email untuk pertanyaan detail</p>
                        <a href="mailto:hello@peer-cutie.com" 
                           class="inline-block px-6 py-3 card-gradient-1 text-purple-800 font-semibold rounded-full hover-lift transition">
                            hello@peer-cutie.com
                        </a>
                    </div>
                </div>
                
                <div class="card-gradient-4 p-8 rounded-3xl cute-shadow hover-lift">
                    <div class="text-center">
                        <div class="text-6xl mb-4 float">🏢</div>
                        <h3 class="text-2xl font-bold text-purple-800 mb-4">Kantor</h3>
                        <p class="text-purple-700 text-lg mb-4">Datang main ke kantor kami!</p>
                        <p class="text-purple-800 font-semibold">
                            Jl. Pendidikan No. 123<br>
                            Jakarta Selatan, 12345<br>
                            Indonesia 🇮🇩
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="container mx-auto mt-16 p-6 relative z-10">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-purple-800 mb-4 cute-bounce">
                Pertanyaan Sering Ditanya 
                <span class="wiggle">🤔</span>
            </h2>
            <p class="text-lg text-purple-700">Mungkin jawabannya sudah ada di sini! 😊</p>
        </div>
        
        <div class="max-w-4xl mx-auto space-y-6">
            <div class="card-gradient-1 p-6 rounded-2xl cute-shadow hover-lift cursor-pointer" onclick="toggleFAQ(this)">
                <div class="flex justify-between items-center">
                    <h3 class="text-xl font-bold text-purple-800">🎓 Bagaimana cara menggunakan Peer-Cutie?</h3>
                    <span class="text-2xl text-purple-800 transition-transform">➕</span>
                </div>
                <div class="faq-content hidden mt-4 text-purple-700">
                    <p>Mudah banget! Kamu tinggal daftar, upload tugas, dan teman-teman akan memberikan review. Kamu juga bisa bantu review tugas teman lain. Seru kan? 😄</p>
                </div>
            </div>
            
            <div class="card-gradient-2 p-6 rounded-2xl cute-shadow hover-lift cursor-pointer" onclick="toggleFAQ(this)">
                <div class="flex justify-between items-center">
                    <h3 class="text-xl font-bold text-purple-800">💰 Apakah Peer-Cutie gratis?</h3>
                    <span class="text-2xl text-purple-800 transition-transform">➕</span>
                </div>
                <div class="faq-content hidden mt-4 text-purple-700">
                    <p>Tentu saja! Peer-Cutie gratis untuk semua fitur dasar. Kami percaya bahwa pendidikan harus dapat diakses oleh semua orang! 💕</p>
                </div>
            </div>
            
            <div class="card-gradient-3 p-6 rounded-2xl cute-shadow hover-lift cursor-pointer" onclick="toggleFAQ(this)">
                <div class="flex justify-between items-center">
                    <h3 class="text-xl font-bold text-purple-800">🔒 Apakah data saya aman?</h3>
                    <span class="text-2xl text-purple-800 transition-transform">➕</span>
                </div>
                <div class="faq-content hidden mt-4 text-purple-700">
                    <p>Absolutly! Kami menggunakan enkripsi tingkat tinggi dan tidak pernah membagikan data pribadi kamu. Privacy kamu = prioritas kami! 🛡️</p>
                </div>
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
        const surpriseEmojis = ['📞', '💌', '✨', '💕', '🌟', '💝', '🎊', '🎈'];
        
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            const icon = document.getElementById('menuIcon');
            
            menu.classList.toggle('active');
            icon.textContent = menu.classList.contains('active') ? '❌' : '🍔';
        }
        
        function toggleFAQ(element) {
            const content = element.querySelector('.faq-content');
            const icon = element.querySelector('span');
            
            content.classList.toggle('hidden');
            icon.textContent = content.classList.contains('hidden') ? '➕' : '➖';
            icon.style.transform = content.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(45deg)';
        }
        
        function submitForm(event) {
            event.preventDefault();
            
            const formData = new FormData(event.target);
            const name = formData.get('name');
            
            showCuteAlert(`Terima kasih ${name}! 💕 Pesan kamu sudah kami terima dan akan segera dibalas. Tunggu kabar dari kami ya! 🌟`);
            
            // Reset form
            event.target.reset();
            createFloatingHearts();
        }
        
        function surpriseMe() {
            clickCount++;
            const messages = [
                'Hai there! 😊 Butuh bantuan? Jangan ragu hubungi kami!',
                'Tim Peer-Cutie siap membantu 24/7! 💪✨',
                'Sudah ' + clickCount + ' kali klik! Kamu lucu banget! 🥰',
                'Yuk hubungi kami sekarang! We\'re here for you! 💕',
                'SURPRISE! 🎉 Kamu adalah visitor ke-' + Math.floor(Math.random() * 1000) + ' hari ini!'
            ];
            
            const randomMessage = messages[Math.min(clickCount - 1, messages.length - 1)];
            showCuteAlert(randomMessage);
            createConfetti();
        }
        
        function showCuteAlert(message) {
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
            for (let i = 0; i < 15; i++) {
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
        
        // Add interactive effects
        document.addEventListener('DOMContentLoaded', () => {
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
            
            // Form input animations
            const inputs = document.querySelectorAll('.form-input');
            inputs.forEach(input => {
                input.addEventListener('focus', () => {
                    input.style.transform = 'scale(1.02)';
                });
                
                input.addEventListener('blur', () => {
                    input.style.transform = 'scale(1)';
                });
            });
        });
    </script>
</body>
</html>