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
    <div class="min-h-screen bg-gradient-to-r from-cyan-400 to-blue-500">
        <!-- Sidebar -->
        <div class="fixed left-0 top-0 h-full w-64 bg-white">
            <!-- Logo -->
            <div class="p-4 border-b border-white/20 ">
                <img src="{{ asset('images/logo.png') }}" alt="NextQuestion" class="h-[70px]">
            </div>
            
            <!-- Navigation -->
            <nav class="p-4 space-y-2">
                <a href="{{ url('/admin-main')}}" class="flex items-center space-x-3 px-4 py-2 rounded-lg bg-blue-900/20 text-black">
                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z"/>
                    </svg>
                    <span>Прашалник</span>
                </a>
                
                <a href="{{ url('/admin-faculties') }}" class="flex items-center space-x-3 px-4 py-2 rounded-lg text-black hover:bg-blue-900/20">
                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/>
                    </svg>
                    <span>Факултети</span>
                </a>
                
                
                <a href="{{ url('/admin-statistics') }}" class="flex items-center space-x-3 px-4 py-2 rounded-lg text-black hover:bg-blue-900/20">
                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                    </svg>
                    <span>Статистика</span>
                </a>
            </nav>
            <form action="{{ route('logout') }}" method="POST" class="absolute bottom-5">
                    @csrf
                    <button type="submit" class="w-full flex items-center space-x-3 px-4 py-2 rounded-lg text-black hover:bg-red-100 transition-colors ">
                        <svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/>
                        </svg>
                        <span>Одјави се</span>
                    </button>
                </form>
        </div>
    
        <!-- Main Content -->
        <div class="ml-64 p-8">
            <h1 class="text-4xl font-bold text-white mb-8">Прашалник</h1>
            
            <!-- Questions List -->
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6">
               <div class="space-y-4">
@if($questions->isEmpty())
    <div class="flex items-center justify-center p-4 bg-white/10 rounded-lg">
        <span class="text-white">Нема прашања.</span>
    </div>
@else
    @foreach($questions as $question)
    <div class="flex items-center justify-between p-4 bg-white/10 rounded-lg">
        <a href="{{route('question.addAnswers',$question->id) }}" class="text-white">{{ $question->question }}</a>
        <div class="flex space-x-2">
           <form action="{{ route('questions.destroy', $question->id) }}" method="POST" class="flex items-center">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-white hover:text-red-400 flex items-center">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                </svg>
            </button>
        </form>
              <form action="#" method="POST" class="flex items-center">
            <button class="text-white hover:text-blue-400 flex items-center">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                </svg>
            </button>
        </form>
        </div>
    </div>
    @endforeach
@endif


</div>
</div>
                <!-- Pagination -->
        <div class="flex flex-row justify-between pt-10">
                    <div>
                    {{$questions->links("vendor.pagination.my-custom-navigation")}}
                    </div>
                    <a href="{{route('question.create')}}" class="bg-white text-blue-500 px-4 py-2 rounded-lg hover:bg-blue-50 transition-colors">
                        Додади прашање
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    
</body>
</html>