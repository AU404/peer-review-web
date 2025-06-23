<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Peer-Cutie</title>
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
        
        @keyframes pulseGlow {
            0%, 100% { box-shadow: 0 0 20px rgba(255, 182, 193, 0.5); }
            50% { box-shadow: 0 0 30px rgba(221, 160, 221, 0.7); }
        }
        
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        .cute-bounce { animation: bounceCute 3s infinite; }
        .wiggle { animation: wiggle 2s ease-in-out infinite; }
        .float { animation: float 3s ease-in-out infinite; }
        .sparkle { animation: sparkle 2s ease-in-out infinite; }
        .fade-in-up { animation: fadeInUp 0.8s ease-out; }
        .slide-in-left { animation: slideInLeft 0.6s ease-out; }
        .pulse-glow { animation: pulseGlow 3s ease-in-out infinite; }
        
        .pastel-gradient {
            background: linear-gradient(135deg, 
                #FFB6C1 0%,   /* Light Pink */
                #E6E6FA 25%,  /* Lavender */
                #B0E0E6 50%,  /* Powder Blue */
                #F0E68C 75%,  /* Khaki */
                #DDA0DD 100%  /* Plum */
            );
        }
        
        .card-gradient {
            background: linear-gradient(135deg, 
                rgba(255, 255, 255, 0.9) 0%,
                rgba(255, 182, 193, 0.3) 50%,
                rgba(221, 160, 221, 0.3) 100%
            );
        }
        
        .input-gradient {
            background: linear-gradient(135deg, #F0FFFF, #FFE4E1);
        }
        
        .button-gradient {
            background: linear-gradient(135deg, #FFB6C1, #DDA0DD);
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
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 15px 40px rgba(255, 182, 193, 0.4);
        }
        
        .emoji-float {
            position: absolute;
            font-size: 2rem;
            opacity: 0.7;
            animation: float 4s ease-in-out infinite;
        }
        
        .input-focus {
            transition: all 0.3s ease;
        }
        
        .input-focus:focus {
            transform: scale(1.02);
            box-shadow: 0 0 20px rgba(255, 182, 193, 0.5);
            border-color: #FFB6C1;
        }
        
        .password-strength {
            height: 4px;
            border-radius: 2px;
            transition: all 0.3s ease;
        }
        
        .strength-weak { background: linear-gradient(90deg, #ff6b6b, #ffa8a8); }
        .strength-medium { background: linear-gradient(90deg, #ffd93d, #6bcf7f); }
        .strength-strong { background: linear-gradient(90deg, #6bcf7f, #4ecdc4); }
        
        .field-container {
            animation-delay: 0s;
        }
        
        .field-container:nth-child(2) { animation-delay: 0.1s; }
        .field-container:nth-child(3) { animation-delay: 0.2s; }
        .field-container:nth-child(4) { animation-delay: 0.3s; }
        .field-container:nth-child(5) { animation-delay: 0.4s; }
        
        @media (max-width: 768px) {
            .emoji-float { display: none; }
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
    
    <!-- Back to Home Button -->
    <div class="absolute top-6 left-6 z-20">
        <a href="/" class="flex items-center space-x-2 text-purple-800 hover:text-purple-600 transition-colors">
            <span class="text-2xl wiggle">🏠</span>
            <span class="font-semibold">Kembali ke Beranda</span>
        </a>
    </div>

    <!-- Main Register Container -->
    <div class="min-h-screen flex items-center justify-center p-4 py-12">
        <div class="w-full max-w-md">
            <!-- Header -->
            <div class="text-center mb-8 fade-in-up">
                <div class="text-6xl mb-4 cute-bounce">🌟</div>
                <h1 class="text-3xl md:text-4xl font-bold text-purple-800 mb-2">
                    Join Peer-Cutie! 
                    <span class="sparkle">✨</span>
                </h1>
                <p class="text-purple-700">Daftar sekarang dan mulai petualangan belajar yang seru! 💕</p>
            </div>

        <!-- Error alert (global) -->
        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                <ul class="list-disc pl-5 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- FORM -->
        <div class="p-8 rounded-3xl glass shadow-lg">
            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <!-- Name -->
                <div class="field-container slide-in-left">
                    <label for="name" class="block text-purple-800 font-semibold mb-2">Nama Lengkap</label>
                    <input id="name" name="name" type="text" required autofocus value="{{ old('name') }}"
                        class="w-full px-4 py-3 input-gradient border-2 border-pink-200 rounded-2xl input-focus focus:outline-none focus:border-pink-300 text-purple-800 placeholder-purple-400"
                        placeholder="Masukkan nama kamu 💖">
                    @if ($errors->has('name'))
                        <div class="text-red-500 text-sm mt-1">{{ $errors->first('name') }}</div>
                    @endif
                </div>

                <!-- Email -->
                <div class="field-container slide-in-left">
                    <label for="email" class="block text-purple-800 font-semibold mb-2"> <span class="text-xl mr-2">📧</span> Email</label>
                    <input id="email" name="email" type="email" required value="{{ old('email') }}"
                        class="w-full px-4 py-3 input-gradient border-2 border-pink-200 rounded-2xl input-focus focus:outline-none focus:border-pink-300 text-purple-800 placeholder-purple-400"
                        placeholder="Email aktif kamu 📧">
                    @if ($errors->has('email'))
                        <div class="text-red-500 text-sm mt-1">{{ $errors->first('email') }}</div>
                    @endif
                </div>

                <!-- Password -->
                <div class="field-container slide-in-left">
                    <label for="password" class="block text-purple-800 font-semibold mb-2"> <span class="text-xl mr-2">🔒</span> Password</label>
                    <div class="relative">
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                required
                                class="w-full px-4 py-3 input-gradient border-2 border-pink-200 rounded-2xl input-focus focus:outline-none focus:border-pink-300 text-purple-800 placeholder-purple-400 pr-12"
                                placeholder="Password yang kuat dan aman! 💪"
                            >
                            <button 
                                type="button" 
                                onclick="togglePassword('password')" 
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-2xl hover:scale-110 transition-transform"
                            >
                                <span id="eyeIcon1">👁️</span>
                            </button>
                        </div>
                        <div class="mt-2">
                            <div class="flex items-center justify-between mb-1">
                                <span class="text-sm text-purple-600">Kekuatan Password:</span>
                                <span id="strengthText" class="text-sm font-semibold text-purple-600">-</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div id="strengthBar" class="password-strength w-0 rounded-full"></div>
                            </div>
                        </div>
                    @if ($errors->has('password'))
                        <div class="text-red-500 text-sm mt-1">{{ $errors->first('password') }}</div>
                    @endif
                </div>

                <!-- Confirm Password -->
                <div class="field-container slide-in-left">
                        <label for="password_confirmation" class="flex items-center text-purple-800 font-semibold mb-2">
                            <span class="text-xl mr-2">🔐</span>
                            Konfirmasi Password
                        </label>
                        <div class="relative">
                            <input 
                                type="password" 
                                id="password_confirmation" 
                                name="password_confirmation" 
                                required
                                class="w-full px-4 py-3 input-gradient border-2 border-pink-200 rounded-2xl input-focus focus:outline-none focus:border-pink-300 text-purple-800 placeholder-purple-400 pr-12"
                                placeholder="Ulangi password kamu! 🔄"
                            >
                            <button 
                                type="button" 
                                onclick="togglePassword('password_confirmation')" 
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-2xl hover:scale-110 transition-transform"
                            >
                                <span id="eyeIcon2">👁️</span>
                            </button>
                        </div>
                        <div id="passwordMatchIndicator" class="mt-2 text-sm hidden">
                            <span id="matchText"></span>
                        </div>
                    @if ($errors->has('password_confirmation'))
                        <div class="text-red-500 text-sm mt-1">{{ $errors->first('password_confirmation') }}</div>
                    @endif
                </div>

                <!-- Terms Agreement -->
                    <div class="field-container slide-in-left">
                        <label class="flex items-start">
                            <input type="checkbox" id="terms" name="terms" required class="mt-1 mr-3 w-5 h-5 text-pink-600 border-pink-300 rounded focus:ring-pink-500">
                            <span class="text-purple-800 text-sm">
                                Saya setuju dengan 
                                <a href="#" onclick="showTerms()" class="text-purple-600 underline hover:text-purple-800">
                                    Terms & Conditions
                                </a> 
                                dan 
                                <a href="#" onclick="showPrivacy()" class="text-purple-600 underline hover:text-purple-800">
                                    Privacy Policy
                                </a> 
                                Peer-Cutie 📋✨
                            </span>
                        </label>
                        <div id="termsError" class="hidden mt-2 text-red-500 text-sm"></div>
                    </div>

                <!-- Submit -->
                <button 
                        type="submit" 
                        class="w-full py-4 button-gradient text-white font-bold text-lg rounded-2xl hover-lift cute-shadow pulse-glow field-container slide-in-left"
                    >
                        <span class="flex items-center justify-center">
                            <span class="text-xl mr-2 wiggle">🎉</span>
                            Daftar Sekarang!
                        </span>
                </button>


            <!-- Login Link -->
                 <div class="text-center field-container slide-in-left">
                <p class="text-purple-700">
                Sudah punya akun? 
                    <a href="/login" class="text-purple-800 font-bold hover:text-purple-600 transition-colors">
                        Login di sini! 🔐✨
                    </a>
                </div>
            </form>
        </div>
    </div>
    <!-- Cute Loading Overlay -->
    <div id="loadingOverlay" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="card-gradient p-8 rounded-3xl cute-shadow text-center">
            <div class="text-6xl mb-4 cute-bounce">🌟</div>
            <p class="text-purple-800 font-semibold text-lg">Sedang mendaftarkan akun... 💕</p>
        </div>
    </div>

    <script>
        let passwordVisibility = {
            password: false,
            password_confirmation: false
        };

        function togglePassword(fieldId) {
            const passwordInput = document.getElementById(fieldId);
            const eyeIcon = document.getElementById(fieldId === 'password' ? 'eyeIcon1' : 'eyeIcon2');
            
            if (passwordVisibility[fieldId]) {
                passwordInput.type = 'password';
                eyeIcon.textContent = '👁️';
                passwordVisibility[fieldId] = false;
            } else {
                passwordInput.type = 'text';
                eyeIcon.textContent = '🙈';
                passwordVisibility[fieldId] = true;
            }
        }

        function checkPasswordStrength(password) {
            let strength = 0;
            let feedback = [];

            if (password.length >= 8) strength += 1;
            else feedback.push('minimal 8 karakter');

            if (/[a-z]/.test(password)) strength += 1;
            else feedback.push('huruf kecil');

            if (/[A-Z]/.test(password)) strength += 1;
            else feedback.push('huruf besar');

            if (/[0-9]/.test(password)) strength += 1;
            else feedback.push('angka');

            if (/[^A-Za-z0-9]/.test(password)) strength += 1;
            else feedback.push('karakter khusus');

            return { strength, feedback };
        }

        function updatePasswordStrength(password) {
            const { strength } = checkPasswordStrength(password);
            const strengthBar = document.getElementById('strengthBar');
            const strengthText = document.getElementById('strengthText');

            const percentage = (strength / 5) * 100;
            strengthBar.style.width = percentage + '%';

            if (strength <= 2) {
                strengthBar.className = 'password-strength strength-weak';
                strengthText.textContent = 'Lemah 😟';
                strengthText.className = 'text-sm font-semibold text-red-500';
            } else if (strength <= 3) {
                strengthBar.className = 'password-strength strength-medium';
                strengthText.textContent = 'Sedang 😊';
                strengthText.className = 'text-sm font-semibold text-yellow-500';
            } else {
                strengthBar.className = 'password-strength strength-strong';
                strengthText.textContent = 'Kuat! 🎉';
                strengthText.className = 'text-sm font-semibold text-green-500';
            }
        }

        function checkPasswordMatch() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('password_confirmation').value;
            const indicator = document.getElementById('passwordMatchIndicator');
            const matchText = document.getElementById('matchText');

            if (confirmPassword.length > 0) {
                indicator.classList.remove('hidden');
                
                if (password === confirmPassword) {
                    matchText.textContent = '✅ Password cocok!';
                    matchText.className = 'text-green-600 font-semibold';
                } else {
                    matchText.textContent = '❌ Password tidak cocok';
                    matchText.className = 'text-red-500 font-semibold';
                }
            } else {
                indicator.classList.add('hidden');
            }
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

        function showTerms() {
            showCuteAlert('📋 Terms & Conditions akan segera tersedia! Untuk sementara, berjanji ya untuk menggunakan platform ini dengan baik dan saling menghormati! 🤝💕');
        }

        function showPrivacy() {
            showCuteAlert('🔒 Privacy Policy akan segera tersedia! Yang pasti, data kamu aman di Peer-Cutie dan tidak akan disalahgunakan! 🛡️✨');
        }

        function showLoading() {
            document.getElementById('loadingOverlay').classList.remove('hidden');
        }

        function hideLoading() {
            document.getElementById('loadingOverlay').classList.add('hidden');
        }

        // Event Listeners
        document.getElementById('password').addEventListener('input', function() {
            updatePasswordStrength(this.value);
            if (this.value) clearError('password');
            checkPasswordMatch();
        });

        document.getElementById('password_confirmation').addEventListener('input', function() {
            checkPasswordMatch();
            if (this.value) clearError('confirmPassword');
        });

        document.getElementById('name').addEventListener('input', function() {
            if (this.value) clearError('name');
        });

        document.getElementById('email').addEventListener('input', function() {
            if (this.value) clearError('email');
        });

        // Form submission
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Clear all errors
            ['name', 'email', 'password', 'confirmPassword', 'terms'].forEach(clearError);
            
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('password_confirmation').value;
            const termsAccepted = document.getElementById('terms').checked;
            
            let hasError = false;
            
            // Validate name
            if (!name) {
                showError('name', 'Nama wajib diisi ya! 👤');
                hasError = true;
            } else if (name.length < 2) {
                showError('name', 'Nama minimal 2 karakter dong! 😅');
                hasError = true;
            }
            
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
            } else {
                const { strength, feedback } = checkPasswordStrength(password);
                if (strength < 3) {
                    showError('password', `Password kurang kuat! Tambahkan: ${feedback.join(', ')} 💪`);
                    hasError = true;
                }
            }
            
            // Validate password confirmation
            if (!confirmPassword) {
                showError('confirmPassword', 'Konfirmasi password wajib diisi! 🔐');
                hasError = true;
            } else if (password !== confirmPassword) {
                showError('confirmPassword', 'Password tidak cocok! 😟');
                hasError = true;
            }
            
            // Validate terms
            if (!termsAccepted) {
                showError('terms', 'Kamu harus menyetujui syarat dan ketentuan! 📋');
                hasError = true;
            }
            
            if (hasError) {
                return;
            }
            
            // Show loading
            showLoading();
            
            // Simulate registration process
            setTimeout(() => {
                hideLoading();
                showCuteAlert('🎉 Pendaftaran berhasil! Selamat datang di keluarga besar Peer-Cutie! Silakan login untuk memulai petualangan belajar kamu! 💕');
                
                // Redirect to login after 3 seconds
                setTimeout(() => {
                    window.location.href = '/login';
                }, 3000);
            }, 2000);
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
    </script>
</body>
</html>
