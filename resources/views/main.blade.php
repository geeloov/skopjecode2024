
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
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4 italic">
                Започнете ја вашата авантура до совршено поле на студии
            </h1>
            
            <p class="text-white text-lg mb-12">
                Откријте го патот кој најмногу ви одговара!
            </p>
    
            <!-- Cards Container -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <!-- Card 1 -->
            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 flex flex-col items-center transform transition-all duration-300 hover:scale-105 hover:bg-white/30 hover:shadow-xl cursor-pointer">
                <div class="w-16 h-16 mb-4 transform transition-transform duration-300 hover:rotate-6">
                    <svg class="w-full h-full text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm0 7c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4zm6 5H6v-.99c.2-.72 3.3-2.01 6-2.01s5.8 1.29 6 2v1z"/>
                    </svg>
                </div>
                <h3 class="text-white text-xl font-semibold mb-2 transition-all duration-300 hover:text-cyan-100">Персонализирани прашања</h3>
                <p class="text-white/80 text-sm">
                    Идентификувајте ги вашите интереси и преференции
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 flex flex-col items-center transform transition-all duration-300 hover:scale-105 hover:bg-white/30 hover:shadow-xl cursor-pointer">
                <div class="w-16 h-16 mb-4 transform transition-transform duration-300 hover:rotate-6">
                    <svg class="w-full h-full text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                    </svg>
                </div>
                <h3 class="text-white text-xl font-semibold mb-2 transition-all duration-300 hover:text-cyan-100">Персонализирани прашања</h3>
                <p class="text-white/80 text-sm">
                    Идентификувајте ги вашите интереси и преференции
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 flex flex-col items-center transform transition-all duration-300 hover:scale-105 hover:bg-white/30 hover:shadow-xl cursor-pointer">
                <div class="w-16 h-16 mb-4 transform transition-transform duration-300 hover:rotate-6">
                    <svg class="w-full h-full text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/>
                    </svg>
                </div>
                <h3 class="text-white text-xl font-semibold mb-2 transition-all duration-300 hover:text-cyan-100">Персонализирани прашања</h3>
                <p class="text-white/80 text-sm">
                    Идентификувајте ги вашите интереси и преференции
                </p>
            </div>
        </div>


    
            <!-- CTA Button -->
            <a href="{{route('quiz.show')}}" class="bg-white text-blue-500 px-[45px] py-3 rounded-[10px] border border-black font-semibold hover:bg-blue-50 transition-colors">
                Започнете сега
            </a>
        </div>
    
        <!-- Footer -->
        <footer class="absolute bottom-0 left-0 w-full text-center text-white text-sm py-4 ">
            <a href="{{route('about')}}" class="hover:underline mx-2">За Нас</a> |
            <a href="{{route('contact')}}" class="hover:underline mx-2">Контакт</a> |
            <a href="{{route('policy')}}" class="hover:underline mx-2">Политика на приватност</a> |
            <a href="#" class="hover:underline mx-2">Услови на услуга</a>
        </footer>
    </div>
    
</body>
</html>


