
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>

</head>
<body>

    <div class="min-h-screen bg-gradient-to-r from-cyan-400 to-blue-500 flex flex-col items-center justify-center px-4">
        <!-- Main Content -->
        <div class="text-center max-w-4xl mx-auto">
     @php 
    $user = Auth::user();
@endphp

<h1 class="text-4xl md:text-5xl font-bold text-white mb-4 italic">
    Добредојде {{$user->name}}
</h1>
     
            <p class="text-white text-lg mb-12">
                Откријте го патот кој најмногу ти одговара!
            </p>
    
            <!-- Cards Container -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <!-- Card 1 -->
            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 flex flex-col items-center transform transition-all duration-300 hover:scale-105 hover:bg-white/30 hover:shadow-xl cursor-pointer">
                <div class="w-16 h-16 mb-4 transform transition-transform duration-300 hover:rotate-6">
                    <svg class="w-full h-full text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z"/>
                    </svg>
                </div>
                <h3 class="text-white text-xl font-semibold mb-2 transition-all duration-300 hover:text-cyan-100">Креирај прашалник</h3>
                <p class="text-white/80 text-sm">
                    Креирајте прашалник кој им помага на студентите
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 flex flex-col items-center transform transition-all duration-300 hover:scale-105 hover:bg-white/30 hover:shadow-xl cursor-pointer">
                <div class="w-16 h-16 mb-4 transform transition-transform duration-300 hover:rotate-6">
                    <svg class="w-full h-full text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2zm-3-4h8v2H8z"/>
                    </svg>
                </div>
                <h3 class="text-white text-xl font-semibold mb-2 transition-all duration-300 hover:text-cyan-100">Поврзете ги со кариерите</h3>
                <p class="text-white/80 text-sm">
                    Поврзете прашања со кариери
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 flex flex-col items-center transform transition-all duration-300 hover:scale-105 hover:bg-white/30 hover:shadow-xl cursor-pointer">
                <div class="w-16 h-16 mb-4 transform transition-transform duration-300 hover:rotate-6">
                    <svg class="w-full h-full text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/>
                    </svg>
                </div>
                <h3 class="text-white text-xl font-semibold mb-2 transition-all duration-300 hover:text-cyan-100">Поврзи ги универзитетите</h3>
                <p class="text-white/80 text-sm">
                    Конекција помеѓу универзитети и области
                </p>
            </div>
        </div>


    
            <!-- CTA Button -->
            <a href="{{ url('/admin-main') }}" class="bg-white text-blue-500 px-[45px] py-3 rounded-[10px] border border-black font-semibold hover:bg-blue-50 transition-colors">
                Започнете сега
            </a>
            
        </div>
    
        <!-- Footer -->
        <footer class="absolute bottom-0 left-0 w-full text-center text-white text-sm py-4 ">
            <a href="#" class="hover:underline mx-2">За Нас</a> |
            <a href="#" class="hover:underline mx-2">Контакт</a> |
            <a href="#" class="hover:underline mx-2">Политика на приватност</a> |
            <a href="#" class="hover:underline mx-2">Услови на услуга</a>
        </footer>
    </div>
    
</body>
</html>


