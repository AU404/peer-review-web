<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lupa Password - Peer-Review Tugas Cute</title>
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
        .input-gradient { background: linear-gradient(135deg, #F0FFFF, #FFE4E1); }
        .button-gradient { background: linear-gradient(135deg, #FFB6C1, #DDA0DD); }
        .glass-effect {
            backdrop-filter: blur(15px);
            background: rgba(255, 255, 255, 0.25);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .cute-shadow { box-shadow: 0 8px 32px rgba(221, 160, 221, 0.3); }
        .hover-lift { transition: all 0.3s ease; }
        .hover-lift:hover { transform: translateY(-5px) scale(1.02); box-shadow: 0 15px 40px rgba(255, 182, 193, 0.4); }
        .emoji-float { position: absolute; font-size: 2rem; opacity: 0.7; animation: float 4s ease-in-out infinite; }
        .input-focus { transition: all 0.3s ease; }
        .input-focus:focus { transform: scale(1.02); box-shadow: 0 0 20px rgba(255, 182, 193, 0.5); border-color: #FFB6C1; }
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

    <div class="absolute top-6 left-6 z-20">
        <a href="{{ route('login') }}" class="flex items-center space-x-2 text-purple-800 hover:text-purple-600 transition-colors">
            <span class="text-2xl wiggle">👈</span>
            <span class="font-semibold">Kembali ke Login</span>
        </a>
    </div>

    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-md">
            <div class="text-center mb-8 fade-in-up">
                <div class="text-6xl mb-4 cute-bounce">🤔</div>
                <h1 class="text-3xl md:text-4xl font-bold text-purple-800 mb-2">Lupa Password? <span class="sparkle">💭</span></h1>
                <p class="text-purple-700 text-sm leading-relaxed">
                    Jangan khawatir! 🤗 Kasih tau email kamu dan kami akan kirimkan link reset password yang super cute! 💌✨
                </p>
            </div>

            <!-- Session Status -->
            @if (session('status'))
                <div class="mb-6 p-4 card-gradient border-2 border-green-300 text-green-700 rounded-2xl cute-shadow fade-in-up">
                    <div class="flex items-center">
                        <span class="text-2xl mr-3">✅</span>
                        <p class="font-medium">{{ session('status') }}</p>
                    </div>
                </div>
            @endif

            <!-- Show Errors -->
            @if ($errors->any())
                <div class="mb-6 p-4 bg-red-100 border-2 border-red-300 text-red-700 rounded-2xl cute-shadow fade-in-up">
                    <div class="flex items-center mb-2">
                        <span class="text-2xl mr-3">😅</span>
                        <p class="font-semibold">Oops! Ada yang kurang nih:</p>
                    </div>
                    <ul class="list-disc pl-8 text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card-gradient p-8 rounded-3xl cute-shadow fade-in-up glass-effect">
                <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
                    @csrf

                    <!-- Email Field -->
                    <div>
                        <label for="email" class="flex items-center text-purple-800 font-semibold mb-2">
                            <span class="text-xl mr-2">📧</span>
                            Email Address
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}"
                            required 
                            autofocus
                            class="w-full px-4 py-3 input-gradient border-2 border-pink-200 rounded-2xl input-focus focus:outline-none focus:border-pink-300 text-purple-800 placeholder-purple-400"
                            placeholder="Masukkan email kamu yang cute 💌"
                        >
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="w-full py-4 button-gradient text-white font-bold text-lg rounded-2xl hover-lift cute-shadow pulse-glow"
                    >
                        <span class="flex items-center justify-center">
                            <span class="text-xl mr-2 wiggle">📮</span>
                            Kirim Link Reset Password!
                        </span>
                    </button>
                </form>
            </div>

            <!-- Back to Login -->
            <div class="text-center mt-6 fade-in-up">
                <p class="text-purple-700">
                    Sudah ingat password? 
                    <a href="{{ route('login') }}" class="text-purple-800 font-bold hover:text-purple-600 transition-colors">
                        Login sekarang! 🔐✨
                    </a>
                </p>
            </div>

            <!-- Help Text -->
            <div class="text-center mt-4 fade-in-up">
                <div class="card-gradient p-4 rounded-2xl cute-shadow">
                    <div class="flex items-center justify-center mb-2">
                        <span class="text-2xl mr-2">💡</span>
                        <p class="text-purple-800 font-semibold">Tips Cute!</p>
                    </div>
                    <p class="text-purple-700 text-sm">
                        Cek folder spam/junk email kamu juga ya! Kadang email dari kami suka main petak umpet disana 😊
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Cute Loading Overlay -->
    <div id="loadingOverlay" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="card-gradient p-8 rounded-3xl cute-shadow text-center">
            <div class="text-6xl mb-4 cute-bounce">📬</div>
            <p class="text-purple-800 font-semibold text-lg">Sedang mengirim email... 💕</p>
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
                <button onclick="this.parentElement.remove()" class="px-6 py-3 button-gradient text-white font-semibold rounded-full hover-lift">
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

        // Form submission handler
        document.querySelector('form').addEventListener('submit', function(e) {
            const email = document.getElementById('email').value;
            
            if (!email) {
                e.preventDefault();
                showCuteAlert('Email wajib diisi ya! 📧', 'error');
                return;
            }
            
            // Show loading when form is submitted
            showLoading();
        });

        // Add cute animations on focus
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.style.transform = 'scale(1.02)';
            });
            
            input.addEventListener('blur', () => {
                input.parentElement.style.transform = 'scale(1)';
            });
        });

        // Initialize page
        document.addEventListener('DOMContentLoaded', () => {
            // Auto-hide loading if page loads
            hideLoading();
            
            // Check if there's a status message and show cute animation
            const statusDiv = document.querySelector('[class*="border-green"]');
            if (statusDiv) {
                statusDiv.style.animation = 'fadeInUp 0.8s ease-out';
            }
        });
    </script>
</body>
</html>