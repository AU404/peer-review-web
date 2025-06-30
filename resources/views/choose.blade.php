<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pilih Destinasi - Peer-Review Tugas Cute</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Poppins', sans-serif; }
        @keyframes bounceCute { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-15px); } }
        @keyframes wiggle { 0%, 7% { transform: rotateZ(0); } 15% { transform: rotateZ(-15deg); } 20% { transform: rotateZ(10deg); } 25% { transform: rotateZ(-10deg); } 30% { transform: rotateZ(6deg); } 35% { transform: rotateZ(-4deg); } 40%, 100% { transform: rotateZ(0); } }
        @keyframes float { 0% { transform: translateY(0px); } 50% { transform: translateY(-20px); } 100% { transform: translateY(0px); } }
        @keyframes sparkle { 0%, 100% { opacity: 1; transform: scale(1); } 50% { opacity: 0.5; transform: scale(1.2); } }
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes pulseGlow { 0%, 100% { box-shadow: 0 0 20px rgba(255, 182, 193, 0.5); } 50% { box-shadow: 0 0 30px rgba(221, 160, 221, 0.7); } }
        .cute-bounce { animation: bounceCute 3s infinite; }
        .wiggle { animation: wiggle 2s ease-in-out infinite; }
        .float { animation: float 3s ease-in-out infinite; }
        .sparkle { animation: sparkle 2s ease-in-out infinite; }
        .fade-in-up { animation: fadeInUp 0.8s ease-out; }
        .pulse-glow { animation: pulseGlow 3s ease-in-out infinite; }
        .pastel-gradient {
            background: linear-gradient(135deg, #FFB6C1 0%, #E6E6FA 25%, #B0E0E6 50%, #F0E68C 75%, #DDA0DD 100%);
        }
        .card-gradient {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 182, 193, 0.3) 50%, rgba(221, 160, 221, 0.3) 100%);
        }
        .button-gradient-1 { background: linear-gradient(135deg, #FFB6C1, #DDA0DD); }
        .button-gradient-2 { background: linear-gradient(135deg, #E6E6FA, #B0E0E6); }
        .glass-effect {
            backdrop-filter: blur(15px);
            background: rgba(255, 255, 255, 0.25);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .cute-shadow { box-shadow: 0 8px 32px rgba(221, 160, 221, 0.3); }
        .hover-lift { transition: all 0.3s ease; }
        .hover-lift:hover { transform: translateY(-5px) scale(1.02); box-shadow: 0 15px 40px rgba(255, 182, 193, 0.4); }
        .emoji-float { position: absolute; font-size: 2rem; opacity: 0.7; animation: float 4s ease-in-out infinite; }
        .choice-card { transition: all 0.3s ease; cursor: pointer; }
        .choice-card:hover { transform: translateY(-10px) scale(1.05); box-shadow: 0 20px 50px rgba(255, 182, 193, 0.5); }
        @media (max-width: 768px) {
            .emoji-float { display: none; }
        }
    </style>
</head>
<body class="antialiased pastel-gradient min-h-screen relative overflow-x-hidden">
    <div class="emoji-float" style="top: 10%; left: 5%;">🌸</div>
    <div class="emoji-float" style="top: 20%; right: 10%; animation-delay: -1s;">✨</div>
    <div class="emoji-float" style="top: 60%; left: 8%; animation-delay: -2s;">🦋</div>
    <div class="emoji-float" style="top: 80%; right: 15%; animation-delay: -3s;">💫</div>
    <div class="emoji-float" style="top: 40%; left: 85%; animation-delay: -1.5s;">🌺</div>
    <div class="emoji-float" style="top: 70%; left: 70%; animation-delay: -2.5s;">💝</div>

    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-4xl">
            <!-- Header -->
            <div class="text-center mb-8 fade-in-up">
                <div class="text-6xl mb-4 cute-bounce">🌟</div>
                <h1 class="text-3xl md:text-4xl font-bold text-purple-800 mb-2">
                    Pilih Destinasi Cutie! <span class="sparkle">✨</span>
                </h1>
                <p class="text-purple-700 text-lg leading-relaxed">
                    Selamat datang kembali, <span class="text-pink-600 font-bold">{{ Auth::user()->name }}</span>! 
                    <span class="wiggle">🦋</span> Mau kemana hari ini?
                </p>
            </div>

            <!-- Welcome Card -->
            <div class="card-gradient p-6 rounded-3xl cute-shadow mb-8 text-center fade-in-up glass-effect">
                <div class="text-4xl mb-3 float">🎭</div>
                <p class="text-purple-800 font-semibold text-lg">
                    Pilih destinasi favoritmu dan mulai petualangan belajar yang seru! 
                    <span class="sparkle">💖</span>
                </p>
            </div>

            <!-- Choice Cards -->
            <div class="grid md:grid-cols-2 gap-8 fade-in-up">
                <!-- Dashboard Card -->
                <div class="choice-card card-gradient p-8 rounded-3xl cute-shadow glass-effect" onclick="goToDashboard()">
                    <div class="text-center">
                        <div class="text-8xl mb-6 wiggle">📊</div>
                        <h3 class="text-2xl md:text-3xl font-bold text-purple-800 mb-4">
                            Dashboard Cutie <span class="sparkle">✨</span>
                        </h3>
                        <p class="text-purple-700 text-lg mb-6 leading-relaxed">
                            Kelola tugas dan review dengan mudah! Tempat seru untuk mengatur semua aktivitas belajarmu! 
                            <span class="float">🎯</span>
                        </p>
                        <button class="w-full py-3 button-gradient-1 text-white font-bold text-lg rounded-2xl hover-lift cute-shadow">
                            <span class="flex items-center justify-center">
                                <span class="text-xl mr-2">🚀</span>
                                Ke Dashboard!
                            </span>
                        </button>
                    </div>
                </div>

                <!-- Beranda Card -->
                <div class="choice-card card-gradient p-8 rounded-3xl cute-shadow glass-effect" onclick="goToBeranda()">
                    <div class="text-center">
                        <div class="text-8xl mb-6 float">🏠</div>
                        <h3 class="text-2xl md:text-3xl font-bold text-purple-800 mb-4">
                            Beranda Manis <span class="wiggle">🌈</span>
                        </h3>
                        <p class="text-purple-700 text-lg mb-6 leading-relaxed">
                            Kembali ke halaman utama yang penuh warna! Jelajahi fitur-fitur menarik lainnya! 
                            <span class="cute-bounce">🎪</span>
                        </p>
                        <button class="w-full py-3 button-gradient-2 text-white font-bold text-lg rounded-2xl hover-lift cute-shadow">
                            <span class="flex items-center justify-center">
                                <span class="text-xl mr-2">🌟</span>
                                Ke Beranda!
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Fun Message -->
            <div class="text-center mt-8 fade-in-up">
                <div class="card-gradient p-6 rounded-3xl cute-shadow glass-effect">
                    <p class="text-purple-800 font-semibold text-lg">
                        <span class="wiggle">🎉</span>
                        Semangat belajar hari ini! 
                        <span class="sparkle">💕</span>
                    </p>
                    <p class="text-purple-700 text-sm mt-2">
                        Klik kartu di atas untuk memulai petualangan! 
                        <span class="float">🚀</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Cute Loading Overlay -->
    <div id="loadingOverlay" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="card-gradient p-8 rounded-3xl cute-shadow text-center">
            <div class="text-6xl mb-4 cute-bounce">🚀</div>
            <p class="text-purple-800 font-semibold text-lg">Sedang berangkat... 💕</p>
            <p class="text-purple-600 text-sm mt-2">Tunggu sebentar ya! ✨</p>
        </div>
    </div>

    <script>
        function showLoading() {
            document.getElementById('loadingOverlay').classList.remove('hidden');
        }

        function hideLoading() {
            document.getElementById('loadingOverlay').classList.add('hidden');
        }

        function showCuteAlert(message, type = 'info') {
            const emoji = type === 'success' ? '🎉' : type === 'error' ? '😅' : '💝';
            const alertDiv = document.createElement('div');
            alertDiv.className = 'fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 card-gradient p-8 rounded-3xl cute-shadow z-50 max-w-md text-center';
            alertDiv.innerHTML = `
                <div class="text-6xl mb-4 wiggle">${emoji}</div>
                <p class="text-purple-800 font-semibold text-lg mb-6">${message}</p>
                <button onclick="this.parentElement.remove()" class="px-6 py-3 button-gradient-1 text-white font-semibold rounded-full hover-lift">
                    Okee! 😊
                </button>
            `;
            
            document.body.appendChild(alertDiv);
            
            setTimeout(() => {
                if (alertDiv.parentElement) {
                    alertDiv.remove();
                }
            }, 4000);
        }

        function goToDashboard() {
            showCuteAlert('Yeay! 🎉 Menuju Dashboard Cutie! Siap-siap untuk produktivitas yang fun! 💖', 'success');
            showLoading();
            setTimeout(() => {
                window.location.href = "{{ route('dashboard') }}";
            }, 1500);
        }
        
        function goToBeranda() {
            showCuteAlert('Woohooo! 🌟 Kembali ke Beranda Manis! Mari jelajahi lebih banyak keseruan! 🦋', 'success');
            showLoading();
            setTimeout(() => {
                window.location.href = "{{ route('beranda') }}";
            }, 1500);
        }

        // Add hover effects
        document.addEventListener('DOMContentLoaded', () => {
            hideLoading();
            
            const cards = document.querySelectorAll('.choice-card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', () => {
                    card.style.filter = 'brightness(1.1) saturate(1.2)';
                });
                
                card.addEventListener('mouseleave', () => {
                    card.style.filter = 'none';
                });
            });
        });
    </script>
</body>
</html>