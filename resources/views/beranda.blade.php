<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda Peer-Cutie</title>
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
        
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .cute-bounce { animation: bounceCute 3s infinite; }
        .wiggle { animation: wiggle 2s ease-in-out infinite; }
        .float { animation: float 3s ease-in-out infinite; }
        .sparkle { animation: sparkle 2s ease-in-out infinite; }
        .rainbow { animation: rainbow 4s linear infinite; }
        .slide-in { animation: slideInUp 0.6s ease-out; }
        
        .pastel-gradient {
            background: linear-gradient(135deg, 
                #FFB6C1 0%,   /* Light Pink */
                #E6E6FA 25%,  /* Lavender */
                #B0E0E6 50%,  /* Powder Blue */
                #F0E68C 75%,  /* Khaki */
                #DDA0DD 100%  /* Plum */
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
            background: linear-gradient(135deg, #FFEFD5, #DDA0DD);
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
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 40px rgba(255, 182, 193, 0.4);
        }
        
        .emoji-float {
            position: absolute;
            font-size: 2rem;
            opacity: 0.7;
            animation: float 4s ease-in-out infinite;
        }
        
        .feed-card {
            border-radius: 20px;
            overflow: hidden;
            position: relative;
        }
        
        .feed-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #FFB6C1, #DDA0DD, #B0E0E6);
        }
        
        .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, #FFB6C1, #DDA0DD);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
            font-weight: bold;
        }
        
        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
        }
        
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

    <!-- Header Section -->
    <div class="py-8 text-center relative z-10">
        <div class="container mx-auto px-6">
            <h1 class="font-bold text-4xl md:text-5xl text-purple-800 leading-tight cute-bounce flex items-center justify-center mb-4">
                <span class="wiggle mr-3">🌸</span>
                Beranda Peer-Cutie!
                <span class="sparkle ml-3">✨</span>
            </h1>
            <p class="text-lg text-purple-600 mb-8">Feed tugas teman-teman yang super cute! 🦋</p>
            
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto mb-8">
                <div class="card-gradient-1 p-6 rounded-2xl cute-shadow hover-lift">
                    <div class="text-3xl mb-2 wiggle">📚</div>
                    <p class="text-purple-800 font-semibold">Total Tugas</p>
                    <p class="text-2xl font-bold text-purple-700">{{ count($assignments) }}</p>
                </div>
                <div class="card-gradient-2 p-6 rounded-2xl cute-shadow hover-lift">
                    <div class="text-3xl mb-2 sparkle">👥</div>
                    <p class="text-purple-800 font-semibold">Komunitas Aktif</p>
                    <p class="text-2xl font-bold text-purple-700">{{ count(array_unique(array_column($assignments->toArray(), 'user_id'))) }}</p>
                </div>
                <div class="card-gradient-3 p-6 rounded-2xl cute-shadow hover-lift">
                    <div class="text-3xl mb-2 float">🏆</div>
                    <p class="text-purple-800 font-semibold">Review Hari Ini</p>
                    <p class="text-2xl font-bold text-purple-700">{{ count($assignments->where('created_at', '>=', today())) }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Feed Section -->
    <div class="py-12">
        <div class="max-w-4xl mx-auto px-6">
            <div class="space-y-6">
                @forelse ($assignments as $index => $assignment)
                    <div class="feed-card bg-white cute-shadow hover-lift slide-in" style="animation-delay: {{ $index * 0.1 }}s;">
                        <!-- Card Header -->
                        <div class="p-6 border-b border-purple-100">
                            <div class="flex items-center space-x-4">
                                <div class="user-avatar">
                                    {{ substr($assignment->user->name ?? 'U', 0, 1) }}
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-semibold text-purple-800 text-lg">
                                        {{ $assignment->user->name ?? 'Unknown User' }}
                                        <span class="text-sm text-purple-500 ml-2 sparkle">✨</span>
                                    </h3>
                                    <p class="text-sm text-purple-600">
                                        {{ $assignment->created_at ? $assignment->created_at->diffForHumans() : 'Baru saja' }}
                                        <span class="ml-2">🕐</span>
                                    </p>
                                </div>
                                <div class="text-2xl wiggle">🎓</div>
                            </div>
                        </div>
                        
                        <!-- Card Content -->
                        <div class="p-6">
                            <div class="mb-4">
                                <h2 class="text-xl font-bold text-purple-800 mb-2 flex items-center">
                                    <span class="mr-2 text-2xl">📝</span>
                                    {{ $assignment->title }}
                                </h2>
                                @if($assignment->description)
                                    <p class="text-purple-700 leading-relaxed">{{ $assignment->description }}</p>
                                @endif
                            </div>
                            
                            <!-- Assignment Details -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                @if($assignment->subject)
                                    <div class="flex items-center space-x-2 text-purple-600">
                                        <span class="text-lg">📖</span>
                                        <span class="font-medium">Mata Pelajaran:</span>
                                        <span>{{ $assignment->subject }}</span>
                                    </div>
                                @endif
                                @if($assignment->due_date)
                                    <div class="flex items-center space-x-2 text-purple-600">
                                        <span class="text-lg">⏰</span>
                                        <span class="font-medium">Deadline:</span>
                                        <span>{{ \Carbon\Carbon::parse($assignment->due_date)->format('d M Y') }}</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                        
                        <!-- Card Footer -->
                        <div class="px-6 py-4 bg-gradient-to-r from-purple-50 to-pink-50 border-t border-purple-100">
                            <div class="flex items-center justify-between">
                                <div class="flex space-x-4">
                                    <button class="flex items-center space-x-2 text-purple-600 hover:text-purple-800 transition-colors">
                                        <span class="text-lg sparkle">💖</span>
                                        <span class="font-medium">Suka</span>
                                    </button>
                                    <button class="flex items-center space-x-2 text-purple-600 hover:text-purple-800 transition-colors">
                                        <span class="text-lg wiggle">💬</span>
                                        <span class="font-medium">Review</span>
                                    </button>
                                    <button class="flex items-center space-x-2 text-purple-600 hover:text-purple-800 transition-colors">
                                        <span class="text-lg float">🔗</span>
                                        <span class="font-medium">Bagikan</span>
                                    </button>
                                </div>
                                <div class="text-sm text-purple-500">
                                    <span class="rainbow">🌟</span>
                                    Tugas #{{ $loop->iteration }}
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="empty-state card-gradient-4 rounded-3xl cute-shadow">
                        <div class="text-8xl mb-6 cute-bounce">🦋</div>
                        <h3 class="text-2xl font-bold text-purple-800 mb-4">
                            Belum Ada Tugas Nih! 
                            <span class="sparkle">✨</span>
                        </h3>
                        <p class="text-purple-600 mb-8 text-lg leading-relaxed">
                            Wah, masih sepi nih feed-nya! 🌸<br>
                            Yuk jadi yang pertama upload tugas dan mulai petualangan belajar bareng teman-teman! 💕
                        </p>
                        <button class="px-8 py-4 card-gradient-1 text-purple-800 font-semibold rounded-full hover-lift cute-shadow text-lg" onclick="showCuteAlert('Yuk upload tugas pertama kamu! 🌟 Klik menu Upload untuk mulai berbagi dengan teman-teman! 💖')">
                            Upload Tugas Pertama! 🚀
                        </button>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Floating Action Button -->
    <div class="fixed bottom-6 right-6 z-20">
        <button class="w-16 h-16 card-gradient-1 rounded-full cute-shadow hover-lift flex items-center justify-center text-3xl" onclick="surpriseMe()" title="Surprise Me!">
            <span class="rainbow">🎉</span>
        </button>
    </div>

    <script>
        let clickCount = 0;
        const surpriseEmojis = ['🎊', '🎈', '🎁', '🍰', '🦄', '🌟', '💝', '🎪'];
        
        function surpriseMe() {
            const randomEmoji = surpriseEmojis[Math.floor(Math.random() * surpriseEmojis.length)];
            showCuteAlert('SURPRISE! ' + randomEmoji + ' Semoga hari kamu selalu ceria dan penuh semangat belajar! 💕');
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
        
        // Add interactive effects when page loads
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
            
            // Add staggered animation to feed cards
            const feedCards = document.querySelectorAll('.feed-card');
            feedCards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
            });
        });
    </script>
</body>
</html>