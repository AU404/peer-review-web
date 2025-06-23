<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Peer-Review Tugas Cute</title>
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
        .cute-checkbox {
            appearance: none;
            width: 20px;
            height: 20px;
            border: 2px solid #FFB6C1;
            border-radius: 6px;
            background: linear-gradient(135deg, #F0FFFF, #FFE4E1);
            position: relative;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .cute-checkbox:checked {
            background: linear-gradient(135deg, #FFB6C1, #DDA0DD);
            border-color: #DDA0DD;
        }
        .cute-checkbox:checked::after {
            content: '💖';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 12px;
        }
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

    <div class="absolute top-6 left-6 z-20">
        <a href="/" class="flex items-center space-x-2 text-purple-800 hover:text-purple-600 transition-colors">
            <span class="text-2xl wiggle">🏠</span>
            <span class="font-semibold">Kembali ke Beranda</span>
        </a>
    </div>

    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-md">
            <div class="text-center mb-8 fade-in-up">
                <div class="text-6xl mb-4 cute-bounce">🔐</div>
                <h1 class="text-3xl md:text-4xl font-bold text-purple-800 mb-2">Welcome Back! <span class="sparkle">✨</span></h1>
                <p class="text-purple-700">Masuk ke akun Peer-Cutie kamu yuk! 💕</p>
            </div>

            <!-- Show Errors -->
            @if ($errors->any())
                <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-2xl">
                    <ul class="list-disc pl-5 text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('status'))
                <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-2xl">
                    {{ session('status') }}
                </div>
            @endif

            <div class="card-gradient p-8 rounded-3xl cute-shadow fade-in-up glass-effect">
                <form method="POST" action="{{ route('login') }}" class="space-y-6">
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
                            required 
                            autofocus
                            class="w-full px-4 py-3 input-gradient border-2 border-pink-200 rounded-2xl input-focus focus:outline-none focus:border-pink-300 text-purple-800 placeholder-purple-400"
                            placeholder="Masukkan email kamu yang cute 💌"
                        >
                        <div id="emailError" class="hidden mt-2 text-red-500 text-sm"></div>
                    </div>

                    <!-- Password Field -->
                    <div>
                        <label for="password" class="flex items-center text-purple-800 font-semibold mb-2">
                            <span class="text-xl mr-2">🔒</span>
                            Password
                        </label>
                        <div class="relative">
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                required
                                class="w-full px-4 py-3 input-gradient border-2 border-pink-200 rounded-2xl input-focus focus:outline-none focus:border-pink-300 text-purple-800 placeholder-purple-400 pr-12"
                                placeholder="Password super secret kamu 🤫"
                            >
                            <button 
                                type="button" 
                                onclick="togglePassword()" 
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-2xl hover:scale-110 transition-transform"
                            >
                                <span id="eyeIcon">👁️</span>
                            </button>
                        </div>
                        <div id="passwordError" class="hidden mt-2 text-red-500 text-sm"></div>
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center">
                        <input type="checkbox" id="remember_me" name="remember" class="cute-checkbox">
                        <label for="remember_me" class="ml-3 text-purple-800 font-medium cursor-pointer">
                            Ingat aku ya! 🥰
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="w-full py-4 button-gradient text-white font-bold text-lg rounded-2xl hover-lift cute-shadow pulse-glow"
                    >
                        <span class="flex items-center justify-center">
                            <span class="text-xl mr-2 wiggle">🚀</span>
                            Masuk Sekarang!
                        </span>
                    </button>

                    <!-- Forgot Password -->
                    <div class="text-center">
                        <a href="{{ route('password.request') }}" class="text-purple-600 hover:text-purple-800 transition-colors underline">
                            Lupa password? 🤔
                        </a>
                    </div>
                </form>
            </div>

            <!-- Register Link -->
            <div class="text-center mt-6 fade-in-up">
                <p class="text-purple-700">
                    Belum punya akun? 
                    <a href="{{ route('register') }}" class="text-purple-800 font-bold hover:text-purple-600 transition-colors">
                        Daftar sekarang! 📝✨
                    </a>
                </p>
            </div>
        </div>
    </div>

    <!-- Cute Loading Overlay -->
    <div id="loadingOverlay" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="card-gradient p-8 rounded-3xl cute-shadow text-center">
            <div class="text-6xl mb-4 cute-bounce">🔄</div>
            <p class="text-purple-800 font-semibold text-lg">Sedang masuk... 💕</p>
        </div>
    </div>

    <script>
        let isPasswordVisible = false;

        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            
            if (isPasswordVisible) {
                passwordInput.type = 'password';
                eyeIcon.textContent = '👁️';
                isPasswordVisible = false;
            } else {
                passwordInput.type = 'text';
                eyeIcon.textContent = '🙈';
                isPasswordVisible = true;
            }
        }

        function forgotPassword() {
            showCuteAlert('Jangan khawatir! 🤗 Fitur reset password akan segera hadir. Sementara itu, coba ingat-ingat lagi password kamu ya! 💭✨');
        }

        function showCuteAlert(message) {
            const alertDiv = document.createElement('div');
            alertDiv.className = 'fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 card-gradient p-8 rounded-3xl cute-shadow z-50 max-w-md text-center';
            alertDiv.innerHTML = `
                <div class="text-6xl mb-4 wiggle">💝</div>
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

        function showLoading() {
            document.getElementById('loadingOverlay').classList.remove('hidden');
        }

        function hideLoading() {
            document.getElementById('loadingOverlay').classList.add('hidden');
        }

        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        function showError(fieldId, message) {
            const errorDiv = document.getElementById(fieldId + 'Error');
            errorDiv.textContent = message;
            errorDiv.classList.remove('hidden');
            
            const field = document.getElementById(fieldId);
            field.classList.add('border-red-400');
            field.classList.remove('border-pink-200');
        }

        function clearError(fieldId) {
            const errorDiv = document.getElementById(fieldId + 'Error');
            errorDiv.classList.add('hidden');
            
            const field = document.getElementById(fieldId);
            field.classList.remove('border-red-400');
            field.classList.add('border-pink-200');
        }

        // Form submission handler
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Clear previous errors
            clearError('email');
            clearError('password');
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            let hasError = false;
            
            // Validate email
            if (!email) {
                showError('email', 'Email wajib diisi ya! 📧');
                hasError = true;
            } else if (!validateEmail(email)) {
                showError('email', 'Format email tidak valid nih! 😅');
                hasError = true;
            }
            
            // Validate password
            if (!password) {
                showError('password', 'Password jangan kosong dong! 🔒');
                hasError = true;
            } else if (password.length < 6) {
                showError('password', 'Password minimal 6 karakter ya! 💪');
                hasError = true;
            }
            
            if (hasError) {
                return;
            }
            
            // Show loading
            showLoading();
            
            // Simulate login process (replace with actual login logic)
            setTimeout(() => {
                hideLoading();
                
                // Demo: Show success message
                showCuteAlert('Login berhasil! 🎉 Selamat datang kembali di Peer-Cutie! Redirecting ke dashboard... 💕');
                
                // Redirect after 2 seconds
                setTimeout(() => {
                    // Replace with actual redirect
                    window.location.href = '/dashboard';
                }, 2000);
            }, 1500);
        });

        // Add input event listeners for real-time validation
        document.getElementById('email').addEventListener('input', function() {
            if (this.value) {
                clearError('email');
            }
        });

        document.getElementById('password').addEventListener('input', function() {
            if (this.value) {
                clearError('password');
            }
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
            // Check for session status (if passed from backend)
            const urlParams = new URLSearchParams(window.location.search);
            const status = urlParams.get('status');
            
            if (status) {
                const sessionAlert = document.getElementById('sessionAlert');
                const sessionMessage = document.getElementById('sessionMessage');
                
                sessionMessage.textContent = status;
                sessionAlert.classList.remove('hidden');
                
                // Auto hide after 5 seconds
                setTimeout(() => {
                    sessionAlert.classList.add('hidden');
                }, 5000);
            }
        });
    </script>
</body>
</html>