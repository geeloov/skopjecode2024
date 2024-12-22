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

    {{-- resources/views/results.blade.php --}}
<div class="min-h-screen bg-gradient-to-r from-cyan-400 to-blue-500 flex flex-col items-center p-4 overflow-hidden">
    <!-- Header -->
    <div class="text-center max-w-4xl mx-auto mb-4">
        <h1 class="text-3xl md:text-4xl font-bold text-white mb-1">Твојот кариерен пат</h1>
        <p class="text-white text-lg">Резултати од прашалникот</p>
    </div>


    <!-- Results Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl w-full mb-[20px]">
        @if(!is_null($result->relatedMajor1))
        <!-- Natural Sciences Card -->
        <div class="bg-white/20 backdrop-blur-sm rounded-xl p-5 hover:scale-105 transition-transform duration-300">
            <div class="text-white text-center mb-5">
                <h2 class="text-2xl font-bold mb-3">{{$result->relatedMajor1->name}}</h2>
                <div class="text-4xl font-bold mb-3">{{$result->major1_prob}}%</div>
                <p class="text-sm">{{$result->relatedMajor1->description}}</p>
            </div>
            
            <div class="space-y-2.5">
                <h3 class="text-white font-semibold">Факултети:</h3>
                <div class="space-y-1.5">
                    @foreach($result->relatedMajor1->universities as $uni)
                    <div class="bg-white/20 rounded-full px-4 py-1.5 text-white text-sm">{{$uni->name}}</div>
                    @endforeach
                </div>
            </div>

            <div class="mt-3 space-y-2.5">
                <h3 class="text-white font-semibold">Кариери:</h3>
                <div class="space-y-1.5">
                    @foreach($result->relatedMajor1->careers as $career)
                    <div class="bg-white/20 rounded-full px-4 py-1.5 text-white text-sm">{{$career->name}}</div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        @if(!is_null($result->relatedMajor2))
        <!-- Social Sciences Card -->
        <div class="bg-white/20 backdrop-blur-sm rounded-xl p-5 hover:scale-105 transition-transform duration-300">
            <div class="text-white text-center mb-5">
                <h2 class="text-2xl font-bold mb-3">{{$result->relatedMajor2->name}}</h2>
                <div class="text-4xl font-bold mb-3">{{$result->major2_prob}}%</div>
                <p class="text-sm">{{$result->relatedMajor2->description}}</p>
            </div>
            
            <div class="space-y-2.5">
                <h3 class="text-white font-semibold">Факултети:</h3>
                <div class="space-y-1.5">
                    @foreach($result->relatedMajor2->universities as $uni)
                    <div class="bg-white/20 rounded-full px-4 py-1.5 text-white text-sm">{{$uni->name}}</div>
                    @endforeach
                </div>
            </div>

            <div class="mt-3 space-y-2.5">
                <h3 class="text-white font-semibold">Кариери:</h3>
                <div class="space-y-1.5">
                    @foreach($result->relatedMajor2->careers as $career)
                    <div class="bg-white/20 rounded-full px-4 py-1.5 text-white text-sm">{{$career->name}}</div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        <!-- Medical Sciences Card -->
        @if(!is_null($result->relatedMajor3))
        <div class="bg-white/20 backdrop-blur-sm rounded-xl p-5 hover:scale-105 transition-transform duration-300">
            <div class="text-white text-center mb-5">
                <h2 class="text-2xl font-bold mb-3">{{$result->relatedMajor3->name}}</h2>
                <div class="text-4xl font-bold mb-3">{{$result->major3_prob}}%</div>
                <p class="text-sm">{{$result->relatedMajor3->description}}</p>
            </div>
            
            <div class="space-y-2.5">
                <h3 class="text-white font-semibold">Факултети:</h3>
                <div class="space-y-1.5">
                    @foreach($result->relatedMajor3->universities as $uni)
                    <div class="bg-white/20 rounded-full px-4 py-1.5 text-white text-sm">{{$uni->name}}</div>
                    @endforeach
                </div>
            </div>

            <div class="mt-3 space-y-2.5">
                <h3 class="text-white font-semibold">Кариери:</h3>
                <div class="space-y-1.5">
                    @foreach($result->relatedMajor3->careers as $career)
                    <div class="bg-white/20 rounded-full px-4 py-1.5 text-white text-sm">{{$career->name}}</div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
       

    </div>
        <!-- Navigation Button -->
        {{-- <a href="" class="bg-white text-blue-500 px-[45px] py-3 rounded-[10px] font-semibold border border-black transition-all duration-300 hover:shadow-[0_4px_20px_rgb(0,0,0,0.25)] hover:bg-blue-50 ">
            Почетна
        </a> --}}
            <form action="{{ route('logout') }}" method="POST" class="bottom-3">
                    @csrf
                    <button type="submit" class="flex flex-row space-x-3 bg-white text-blue-500 px-[50px] py-3 rounded-[10px] font-semibold border border-black transition-all duration-300 hover:shadow-[0_4px_20px_rgb(0,0,0,0.25)] hover:bg-blue-50 ">
                        <svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/>
                        </svg>
                        <span>Одјави се</span>
                    </button>
                </form>
    
</body>
</html>

