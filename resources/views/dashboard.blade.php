<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Peer-Review Tugas Cute</title>
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
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 15px 40px rgba(255, 182, 193, 0.4);
        }
        
        .emoji-float {
            position: absolute;
            font-size: 2rem;
            opacity: 0.7;
            animation: float 4s ease-in-out infinite;
            pointer-events: none;
        }
        
        .cute-input {
            background: rgba(255, 255, 255, 0.9);
            border: 2px solid #FFB6C1;
            border-radius: 20px;
            padding: 12px 20px;
            transition: all 0.3s ease;
        }
        
        .cute-input:focus {
            border-color: #DDA0DD;
            box-shadow: 0 0 20px rgba(221, 160, 221, 0.3);
            outline: none;
        }
        
        .cute-button {
            background: linear-gradient(135deg, #FFB6C1, #DDA0DD);
            border: none;
            border-radius: 25px;
            padding: 12px 30px;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .cute-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(255, 182, 193, 0.4);
        }
        
        .cute-button-secondary {
            background: linear-gradient(135deg, #B0E0E6, #E6E6FA);
            color: #6B46C1;
        }
        
        .cute-button-success {
            background: linear-gradient(135deg, #98FB98, #90EE90);
            color: #2D5A2D;
        }
        
        .cute-button-danger {
            background: linear-gradient(135deg, #FFB6C1, #FFA0B4);
            color: #8B0000;
        }
        
        .notification-card {
            background: linear-gradient(135deg, #FFF8DC, #F0E68C);
            border-left: 5px solid #FFD700;
            animation: pulse 2s ease-in-out infinite;
        }
        
        .assignment-card {
            background: linear-gradient(135deg, #F0FFFF, #E6E6FA);
            border: 2px solid #DDA0DD;
            border-radius: 20px;
            position: relative;
            overflow: hidden;
        }
        
        .assignment-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transform: rotate(45deg);
            transition: all 0.5s;
            opacity: 0;
        }
        
        .assignment-card:hover::before {
            animation: sparkle 1s ease-in-out;
            opacity: 1;
        }
        
        .review-card {
            background: linear-gradient(135deg, #FFEFD5, #FFE4E1);
            border-radius: 15px;
            border-left: 4px solid #FF69B4;
        }
        
        .status-badge {
            display: inline-block;
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .status-pending {
            background: linear-gradient(135deg, #FFE4B5, #F0E68C);
            color: #8B4513;
        }
        
        .status-reviewed {
            background: linear-gradient(135deg, #98FB98, #90EE90);
            color: #006400;
        }
        
        .status-in-progress {
            background: linear-gradient(135deg, #87CEEB, #B0E0E6);
            color: #000080;
        }
        
        @media (max-width: 768px) {
            .emoji-float { display: none; }
        }
    </style>
</head>
<body class="antialiased pastel-gradient min-h-screen relative overflow-x-hidden">
    <!-- Floating Emojis -->
    <div class="emoji-float" style="top: 10%; left: 5%;">📚</div>
    <div class="emoji-float" style="top: 20%; right: 10%; animation-delay: -1s;">✨</div>
    <div class="emoji-float" style="top: 60%; left: 8%; animation-delay: -2s;">🎯</div>
    <div class="emoji-float" style="top: 80%; right: 15%; animation-delay: -3s;">🏆</div>
    <div class="emoji-float" style="top: 40%; left: 85%; animation-delay: -1.5s;">💖</div>

    <!-- Header/Navbar -->
    <header class="navbar-gradient p-4 text-white shadow-lg relative z-10">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl md:text-3xl font-bold text-white cute-bounce flex items-center">
            <span class="wiggle mr-2">🎀</span>
            Dashboard Cutie
            <span class="sparkle ml-2">✨</span>
        </h1>

        <!-- Profile Dropdown -->
        <div class="relative inline-block text-left">
            <!-- Tombol Profile -->
            <button id="profileButton" class="px-4 py-2 bg-white bg-opacity-20 dark:bg-opacity-30 rounded-full hover:bg-opacity-40 dark:hover:bg-opacity-50 transition duration-150">
                <span class="rainbow">👤</span> Profile
            </button>

            <!-- Dropdown Logout -->
            <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-36 bg-white dark:bg-gray-800 rounded-md shadow-lg z-50">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block w-full text-left px-4 py-2 text-red-600 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-md">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>
    <!-- Main Content -->
    <div class="py-8 md:py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Welcome Message -->
            <div class="card-gradient-1 p-6 rounded-3xl cute-shadow mb-8 text-center">
                <div class="text-6xl mb-4 cute-bounce">🎉</div>
                <h2 class="text-2xl md:text-3xl font-bold text-purple-800 mb-2">
                    Selamat Datang di Dashboard Cutie!
                </h2>
                <p class="text-purple-600 text-lg">
                    Yuk upload tugas dan review bareng teman-teman! 💕
                </p>
            </div>

            <!-- Notifications Section -->
            <div id="notificationSection" class="mb-8">
                <!-- Notifikasi akan ditampilkan di sini jika ada -->
                <div class="notification-card p-6 rounded-3xl cute-shadow mb-6" style="display: none;" id="notificationCard">
                    <div class="flex items-center mb-4">
                        <span class="text-4xl mr-3 wiggle">🔔</span>
                        <h3 class="font-bold text-xl text-amber-800">Notifikasi Cutie</h3>
                    </div>
                    <div id="notificationList">
                        <!-- Notifikasi akan diisi dengan JavaScript untuk simulasi -->
                    </div>
                </div>
            </div>

            <!-- Success Message -->
            <div id="successMessage" class="card-gradient-success p-4 rounded-2xl cute-shadow mb-6 text-center" style="display: none;">
                <div class="flex items-center justify-center">
                    <span class="text-3xl mr-2 sparkle">🎊</span>
                    <span class="font-semibold text-green-800">Yeay! Tugas berhasil di-upload! 💖</span>
                </div>
            </div>

            <!-- Upload Form Section -->
            <div class="card-gradient-2 p-6 md:p-8 rounded-3xl cute-shadow mb-8">
                <div class="flex items-center mb-6">
                    <span class="text-4xl mr-3 float">📝</span>
                    <h2 class="text-2xl md:text-3xl font-bold text-purple-800">Upload Tugas Cutie</h2>
                </div>
                
                <form id="uploadForm" onsubmit="handleUpload(event)" class="space-y-6">
                    <!-- Title Input -->
                    <div class="space-y-2">
                        <label class="flex items-center text-lg font-semibold text-purple-800">
                            <span class="text-2xl mr-2">✏️</span>
                            Judul Tugas
                        </label>
                        <input 
                            type="text" 
                            name="title" 
                            class="cute-input w-full text-purple-800 placeholder-purple-400" 
                            placeholder="Tulis judul tugas yang keren..." 
                            required
                        >
                        <p class="text-red-500 text-sm mt-1 hidden" id="titleError">Judul tugas wajib diisi ya, bestie! 🥺</p>
                    </div>

                    <!-- Description Input -->
                    <div class="space-y-2">
                        <label class="flex items-center text-lg font-semibold text-purple-800">
                            <span class="text-2xl mr-2">📖</span>
                            Deskripsi
                        </label>
                        <textarea 
                            name="description" 
                            rows="4"
                            class="cute-input w-full text-purple-800 placeholder-purple-400 resize-none" 
                            placeholder="Ceritakan tentang tugas kamu di sini... ✨"
                        ></textarea>
                    </div>

                    <!-- File Upload -->
                    <div class="space-y-2">
                        <label class="flex items-center text-lg font-semibold text-purple-800">
                            <span class="text-2xl mr-2">📎</span>
                            File Tugas (PDF/DOC, max 2MB)
                        </label>
                        <div class="relative">
                            <input 
                                type="file" 
                                name="file" 
                                accept=".pdf,.doc,.docx"
                                class="cute-input w-full text-purple-800 file:mr-4 file:py-2 file:px-6 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-pink-100 file:text-purple-700 hover:file:bg-pink-200 file:cursor-pointer"
                                onchange="handleFileSelect(event)"
                            >
                            <div class="absolute right-4 top-1/2 transform -translate-y-1/2 text-2xl sparkle">
                                📁
                            </div>
                        </div>
                        <p class="text-red-500 text-sm mt-1 hidden" id="fileError">File tidak valid atau terlalu besar! 😅</p>
                        <div class="text-sm text-purple-600 bg-purple-100 p-3 rounded-xl mt-2">
                            <span class="font-semibold">💡 Tips:</span> Pastikan file kamu dalam format PDF atau DOC ya! Dan jangan lupa ukurannya maksimal 2MB ✨
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-center pt-4">
                        <button 
                            type="submit" 
                            class="cute-button text-lg px-8 py-4 flex items-center space-x-2 hover-lift"
                        >
                            <span class="text-2xl">🚀</span>
                            <span>Upload Sekarang!</span>
                            <span class="text-2xl sparkle">✨</span>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Loading Animation (Hidden by default) -->
            <div id="loadingAnimation" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" style="display: none;">
                <div class="card-gradient-1 p-8 rounded-3xl cute-shadow text-center">
                    <div class="text-6xl mb-4 pulse">⏳</div>
                    <p class="text-2xl font-bold text-purple-800 mb-2">Sedang mengupload...</p>
                    <p class="text-purple-600">Sabar ya bestie! 💖</p>
                    <div class="flex justify-center space-x-2 mt-4">
                        <div class="w-3 h-3 bg-pink-400 rounded-full animate-bounce"></div>
                        <div class="w-3 h-3 bg-purple-400 rounded-full animate-bounce" style="animation-delay: 0.1s;"></div>
                        <div class="w-3 h-3 bg-blue-400 rounded-full animate-bounce" style="animation-delay: 0.2s;"></div>
                    </div>
                </div>
            </div>

            <script>
                // File Upload Handler
                function handleFileSelect(event) {
                    const file = event.target.files[0];
                    const maxSize = 2 * 1024 * 1024; // 2MB
                    const allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
                    
                    if (file) {
                        if (file.size > maxSize) {
                            document.getElementById('fileError').textContent = 'File terlalu besar! Maksimal 2MB ya bestie! 😅';
                            document.getElementById('fileError').classList.remove('hidden');
                            event.target.value = '';
                        } else if (!allowedTypes.includes(file.type)) {
                            document.getElementById('fileError').textContent = 'Format file tidak didukung! Gunakan PDF atau DOC ya! 📄';
                            document.getElementById('fileError').classList.remove('hidden');
                            event.target.value = '';
                        } else {
                            document.getElementById('fileError').classList.add('hidden');
                            showCuteAlert('File berhasil dipilih! ' + file.name + ' siap di-upload! 🎉', 'success');
                        }
                    }
                }

                // Form Submit Handler
                function handleUpload(event) {
                    event.preventDefault();
                    
                    const title = event.target.title.value.trim();
                    if (!title) {
                        document.getElementById('titleError').classList.remove('hidden');
                        return;
                    } else {
                        document.getElementById('titleError').classList.add('hidden');
                    }

                    // Show loading animation
                    document.getElementById('loadingAnimation').style.display = 'flex';
                    
                    // Simulate upload process
                    setTimeout(() => {
                        document.getElementById('loadingAnimation').style.display = 'none';
                        document.getElementById('successMessage').style.display = 'block';
                        
                        // Reset form
                        event.target.reset();
                        
                        // Add new assignment to list (simulate)
                        addNewAssignment(title, event.target.description.value);
                        
                        // Hide success message after 3 seconds
                        setTimeout(() => {
                            document.getElementById('successMessage').style.display = 'none';
                        }, 3000);
                        
                        showCuteAlert('Yeay! Tugas berhasil di-upload! Sekarang kamu bisa lihat di daftar tugas di bawah! 🎊', 'success');
                    }, 2000);
                }

                // Cute Alert Function
                function showCuteAlert(message, type = 'info') {
                    const alertDiv = document.createElement('div');
                    const emoji = type === 'success' ? '🎉' : type === 'error' ? '😅' : '💡';
                    const gradientClass = type === 'success' ? 'card-gradient-1' : type === 'error' ? 'card-gradient-4' : 'card-gradient-2';
                    
                    alertDiv.className = `fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 ${gradientClass} p-6 rounded-3xl cute-shadow z-50 max-w-md text-center`;
                    alertDiv.innerHTML = `
                        <div class="text-4xl mb-3 wiggle">${emoji}</div>
                        <p class="text-purple-800 font-semibold text-lg mb-4">${message}</p>
                        <button onclick="this.parentElement.remove()" class="cute-button-secondary px-6 py-2 text-sm">
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
            </script>
            <!-- Assignment List Section -->
            <div class="card-gradient-3 p-6 md:p-8 rounded-3xl cute-shadow">
                <div class="flex items-center mb-6">
                    <span class="text-4xl mr-3 rainbow">📋</span>
                    <h2 class="text-2xl md:text-3xl font-bold text-purple-800">Daftar Tugas Cutie</h2>
                </div>
                
                <div id="assignmentList" class="space-y-6">
                    <!-- Sample Assignment Card -->
                    <div class="assignment-card p-6 hover-lift">
                        <div class="flex flex-col md:flex-row md:items-start md:justify-between mb-4">
                            <div class="flex-1">
                                <div class="flex items-center mb-2">
                                    <span class="text-2xl mr-2 sparkle">📚</span>
                                    <h3 class="text-xl font-bold text-purple-800">Contoh Tugas Matematika</h3>
                                </div>
                                <p class="text-purple-600 mb-3">Ini adalah contoh deskripsi tugas yang menarik dan informatif.</p>
                                <div class="flex flex-wrap items-center gap-3 mb-3">
                                    <span class="status-badge status-pending">
                                        ⏳ Menunggu Review
                                    </span>
                                    <a href="#" class="text-blue-500 hover:text-blue-700 underline flex items-center">
                                        <span class="text-lg mr-1">📄</span>
                                        Lihat File
                                    </a>
                                </div>
                                <p class="text-sm text-purple-500">
                                    <span class="font-semibold">Reviewer:</span> Belum ditentukan
                                </p>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-wrap gap-3 mb-4">
                            <button onclick="assignRandomReviewer(1)" class="cute-button-secondary text-sm px-4 py-2 flex items-center space-x-1">
                                <span>🎲</span>
                                <span>Assign Reviewer Acak</span>
                            </button>
                        </div>

                        <!-- Review Form -->
                        <div class="bg-white bg-opacity-50 p-4 rounded-xl mb-4">
                            <div class="flex items-center mb-3">
                                <span class="text-2xl mr-2 wiggle">✍️</span>
                                <h4 class="font-bold text-lg text-purple-800">Tambah Review Cutie</h4>
                            </div>
                            <form onsubmit="submitReview(event, 1)" class="space-y-3">
                                <textarea 
                                    name="comment" 
                                    rows="3"
                                    class="cute-input w-full text-sm" 
                                    placeholder="Tulis komentar review yang membangun ya bestie... 💭"
                                    required
                                ></textarea>
                                <div class="flex flex-col sm:flex-row gap-3">
                                    <input 
                                        type="number" 
                                        name="score" 
                                        class="cute-input flex-1 text-sm" 
                                        placeholder="Skor (0-100)" 
                                        min="0" 
                                        max="100"
                                    >
                                    <button type="submit" class="cute-button text-sm px-6 py-2 flex items-center space-x-1">
                                        <span>📝</span>
                                        <span>Submit Review</span>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Review List -->
                        <div class="space-y-3" id="reviewList-1">
                            <div class="review-card p-4">
                                <div class="flex items-start space-x-3">
                                    <div class="text-2xl">👤</div>
                                    <div class="flex-1">
                                        <p class="font-semibold text-purple-800 mb-1">Reviewer Cutie</p>
                                        <p class="text-purple-600 text-sm mb-2">Tugas ini sudah bagus! Keep up the good work! 👏</p>
                                        <div class="flex items-center space-x-2">
                                            <span class="status-badge" style="background: linear-gradient(135deg, #FFD700, #FFA500); color: #8B4513;">
                                                ⭐ Skor: 85/100
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Empty State -->
                    <div id="emptyState" class="text-center py-12" style="display: none;">
                        <div class="text-6xl mb-4 float">📝</div>
                        <h3 class="text-2xl font-bold text-purple-800 mb-2">Belum ada tugas nih!</h3>
                        <p class="text-purple-600">Yuk upload tugas pertama kamu di atas! 🚀</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Action Button -->
    <div class="fixed bottom-6 right-6 z-20">
        <button onclick="scrollToTop()" class="w-16 h-16 card-gradient-1 rounded-full cute-shadow hover-lift flex items-center justify-center text-3xl" title="Ke atas yuk!">
            <span class="rainbow">🚀</span>
        </button>
    </div>

    <!-- Celebration Modal -->
    <div id="celebrationModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" style="display: none;">
        <div class="card-gradient-1 p-8 rounded-3xl cute-shadow text-center max-w-md mx-4">
            <div class="text-6xl mb-4 pulse">🎊</div>
            <h3 class="text-2xl font-bold text-purple-800 mb-3">Selamat!</h3>
            <p class="text-purple-600 mb-6" id="celebrationMessage"></p>
            <button onclick="closeCelebration()" class="cute-button px-6 py-3">
                Yeay! 🥳
            </button>
        </div>
    </div>

    <script>
        let assignmentCounter = 1;
        const reviewers = ['Sari Cutie 🌸', 'Budi Smart 🤓', 'Nina Creative 🎨', 'Andi Helpful 💪', 'Maya Brilliant ✨'];
        
        // Add new assignment to the list
        function addNewAssignment(title, description) {
            assignmentCounter++;
            const assignmentList = document.getElementById('assignmentList');
            const emptyState = document.getElementById('emptyState');
            
            if (emptyState.style.display !== 'none') {
                emptyState.style.display = 'none';
            }
            
            const newAssignment = document.createElement('div');
            newAssignment.className = 'assignment-card p-6 hover-lift';
            newAssignment.innerHTML = `
                <div class="flex flex-col md:flex-row md:items-start md:justify-between mb-4">
                    <div class="flex-1">
                        <div class="flex items-center mb-2">
                            <span class="text-2xl mr-2 sparkle">📚</span>
                            <h3 class="text-xl font-bold text-purple-800">${title}</h3>
                        </div>
                        <p class="text-purple-600 mb-3">${description || 'Tidak ada deskripsi'}</p>
                        <div class="flex flex-wrap items-center gap-3 mb-3">
                            <span class="status-badge status-pending">
                                ⏳ Menunggu Review
                            </span>
                            <span class="text-blue-500 flex items-center">
                                <span class="text-lg mr-1">📄</span>
                                File tersedia
                            </span>
                        </div>
                        <p class="text-sm text-purple-500">
                            <span class="font-semibold">Reviewer:</span> Belum ditentukan
                        </p>
                    </div>
                </div>

                <div class="flex flex-wrap gap-3 mb-4">
                    <button onclick="assignRandomReviewer(${assignmentCounter})" class="cute-button-secondary text-sm px-4 py-2 flex items-center space-x-1">
                        <span>🎲</span>
                        <span>Assign Reviewer Acak</span>
                    </button>
                </div>

                <div class="bg-white bg-opacity-50 p-4 rounded-xl mb-4">
                    <div class="flex items-center mb-3">
                        <span class="text-2xl mr-2 wiggle">✍️</span>
                        <h4 class="font-bold text-lg text-purple-800">Tambah Review Cutie</h4>
                    </div>
                    <form onsubmit="submitReview(event, ${assignmentCounter})" class="space-y-3">
                        <textarea 
                            name="comment" 
                            rows="3"
                            class="cute-input w-full text-sm" 
                            placeholder="Tulis komentar review yang membangun ya bestie... 💭"
                            required
                        ></textarea>
                        <div class="flex flex-col sm:flex-row gap-3">
                            <input 
                                type="number" 
                                name="score" 
                                class="cute-input flex-1 text-sm" 
                                placeholder="Skor (0-100)" 
                                min="0" 
                                max="100"
                            >
                            <button type="submit" class="cute-button text-sm px-6 py-2 flex items-center space-x-1">
                                <span>📝</span>
                                <span>Submit Review</span>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="space-y-3" id="reviewList-${assignmentCounter}">
                    <p class="text-purple-600 text-sm italic">Belum ada review. Yuk jadi yang pertama! 🌟</p>
                </div>
            `;
            
            assignmentList.insertBefore(newAssignment, assignmentList.firstChild);
            
            // Scroll to new assignment
            newAssignment.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }

        // Assign random reviewer
        function assignRandomReviewer(assignmentId) {
            const randomReviewer = reviewers[Math.floor(Math.random() * reviewers.length)];
            const assignmentCard = document.querySelector(`#reviewList-${assignmentId}`).closest('.assignment-card');
            const reviewerInfo = assignmentCard.querySelector('.text-purple-500');
            
            reviewerInfo.innerHTML = `<span class="font-semibold">Reviewer:</span> ${randomReviewer}`;
            
            showCelebration(`Yeay! ${randomReviewer} sudah di-assign sebagai reviewer! 🎉`);
            
            // Update status
            const statusBadge = assignmentCard.querySelector('.status-badge');
            statusBadge.className = 'status-badge status-in-progress';
            statusBadge.innerHTML = '👨‍💻 Sedang Direview';
        }

        // Submit review
        function submitReview(event, assignmentId) {
            event.preventDefault();
            
            const form = event.target;
            const comment = form.comment.value.trim();
            const score = form.score.value;
            
            if (!comment) {
                showCuteAlert('Komentar tidak boleh kosong ya bestie! 😅', 'error');
                return;
            }
            
            const reviewList = document.getElementById(`reviewList-${assignmentId}`);
            
            // Remove "no reviews" message if exists
            const noReviewMsg = reviewList.querySelector('p.italic');
            if (noReviewMsg) {
                noReviewMsg.remove();
            }
            
            const newReview = document.createElement('div');
            newReview.className = 'review-card p-4';
            newReview.innerHTML = `
                <div class="flex items-start space-x-3">
                    <div class="text-2xl">👤</div>
                    <div class="flex-1">
                        <p class="font-semibold text-purple-800 mb-1">Kamu (Reviewer)</p>
                        <p class="text-purple-600 text-sm mb-2">${comment}</p>
                        ${score ? `
                        <div class="flex items-center space-x-2">
                            <span class="status-badge" style="background: linear-gradient(135deg, #FFD700, #FFA500); color: #8B4513;">
                                ⭐ Skor: ${score}/100
                            </span>
                        </div>
                        ` : ''}
                    </div>
                </div>
            `;
            
            reviewList.appendChild(newReview);
            
            // Update assignment status
            const assignmentCard = reviewList.closest('.assignment-card');
            const statusBadge = assignmentCard.querySelector('.status-badge');
            statusBadge.className = 'status-badge status-reviewed';
            statusBadge.innerHTML = '✅ Sudah Direview';
            
            // Reset form
            form.reset();
            
            showCelebration('Review berhasil ditambahkan! Terima kasih sudah membantu teman! 💖');
        }

        // Show celebration modal
        function showCelebration(message) {
            document.getElementById('celebrationMessage').textContent = message;
            document.getElementById('celebrationModal').style.display = 'flex';
            
            // Add confetti effect
            createConfetti();
        }

        // Close celebration modal
        function closeCelebration() {
            document.getElementById('celebrationModal').style.display = 'none';
        }

        // Scroll to top
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // Create confetti effect
        function createConfetti() {
            const confettiEmojis = ['🎉', '🎊', '✨', '⭐', '💖', '🌟', '🎈', '🦄'];
            
            for (let i = 0; i < 30; i++) {
                setTimeout(() => {
                    const confetti = document.createElement('div');
                    confetti.textContent = confettiEmojis[Math.floor(Math.random() * confettiEmojis.length)];
                    confetti.className = 'fixed text-2xl pointer-events-none z-30';
                    confetti.style.left = Math.random() * window.innerWidth + 'px';
                    confetti.style.top = '-50px';
                    confetti.style.animation = 'float 4s ease-out forwards';
                    
                    document.body.appendChild(confetti);
                    
                    setTimeout(() => confetti.remove(), 4000);
                }, i * 100);
            }
        }

        // Simulate notifications (for demo purposes)
        function loadNotifications() {
            // This would normally come from your Laravel backend
            // For demo, we'll simulate some notifications
            const notifications = [
                {
                    title: 'Tugas Matematika Direview! 🎉',
                    body: 'Yeay! Ada review baru untuk tugas matematika kamu!',
                    assignment_id: 1
                }
            ];

            if (notifications.length > 0) {
                const notificationCard = document.getElementById('notificationCard');
                const notificationList = document.getElementById('notificationList');
                
                notificationCard.style.display = 'block';
                
                notifications.forEach(notif => {
                    const notifDiv = document.createElement('div');
                    notifDiv.className = 'p-3 bg-white bg-opacity-50 rounded-xl mt-3';
                    notifDiv.innerHTML = `
                        <p class="font-semibold text-amber-800 mb-1">${notif.title}</p>
                        <p class="text-amber-700 text-sm mb-2">${notif.body}</p>
                        <div class="flex flex-wrap gap-2">
                            <button onclick="viewAssignment(${notif.assignment_id})" class="cute-button-secondary text-xs px-3 py-1">
                                👀 Lihat Tugas
                            </button>
                            <button onclick="markAsRead(this)" class="cute-button-success text-xs px-3 py-1">
                                ✅ Tandai Dibaca
                            </button>
                        </div>
                    `;
                    notificationList.appendChild(notifDiv);
                });
            }
        }

        // Mark notification as read
        function markAsRead(button) {
            const notifDiv = button.closest('.p-3');
            notifDiv.style.opacity = '0.5';
            button.textContent = '✅ Sudah Dibaca';
            button.disabled = true;
            
            showCuteAlert('Notifikasi ditandai sudah dibaca! 👍', 'success');
        }

        // View assignment (scroll to assignment)
        function viewAssignment(assignmentId) {
            const assignment = document.querySelector(`#reviewList-${assignmentId}`);
            if (assignment) {
                assignment.scrollIntoView({ behavior: 'smooth', block: 'center' });
                assignment.closest('.assignment-card').style.border = '3px solid #FF69B4';
                
                setTimeout(() => {
                    assignment.closest('.assignment-card').style.border = '2px solid #DDA0DD';
                }, 2000);
            }
        }

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            loadNotifications();
            
            // Add some interactive hover effects
            const cards = document.querySelectorAll('.hover-lift');
            cards.forEach(card => {
                card.addEventListener('mouseenter', () => {
                    card.style.filter = 'brightness(1.05) saturate(1.1)';
                });
                
                card.addEventListener('mouseleave', () => {
                    card.style.filter = 'none';
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            const profileBtn = document.getElementById('profileButton');
            const dropdown = document.getElementById('dropdownMenu');

            profileBtn.addEventListener('click', function () {
                dropdown.classList.toggle('hidden');
            });

            // Kalau ingin dropdown hilang saat klik di luar
            document.addEventListener('click', function (e) {
                if (!profileBtn.contains(e.target) && !dropdown.contains(e.target)) {
                    dropdown.classList.add('hidden');
                }
            });
        });
    </script>
</body>
</html>