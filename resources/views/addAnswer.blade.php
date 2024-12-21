<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Прашање</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen bg-gradient-to-br from-cyan-400 to-blue-500 flex items-center justify-center text-white">

  
    <div class="w-full max-w-5xl bg-white/10 backdrop-blur-sm rounded-xl p-8">
      
        <h1 class="text-center text-4xl font-bold mb-8">Прашање</h1>

    
        <div class="grid grid-cols-2 gap-8">
           
            <div>
                <h2 class="text-xl font-semibold mb-4">{{ $question->question }}</h2>

            
                <form action="{{ route('question.storeAnswer', $question) }}" method="POST" class="space-y-4">
                    @csrf
                    <label for="answer" class="block text-lg">Одговор:</label>
                    <input 
                        type="text" 
                        id="answer" 
                        name="answer" 
                        placeholder="Внеси одговор" 
                        class="w-full px-4 py-2 rounded-lg bg-white/20 text-white placeholder-white/70 border border-white/20 focus:outline-none focus:ring focus:ring-white"
                    >

                    @foreach ($majors as $major)
                        <div class="flex justify-between items-center">
                            <label for="{{ $major->id }}">{{ $major->name }}</label>
                            <input 
                                type="number" 
                                id="{{ $major->id }}" 
                                name="{{ $major->id }}" 
                                min="0" max="10" 
                                placeholder=""
                                class="w-16 px-2 py-1 rounded-lg bg-white/20 text-white placeholder-white/70 border border-white/20 focus:outline-none focus:ring focus:ring-white"
                            >
                        </div>
                    @endforeach

                   
                    <button 
                        type="submit" 
                        class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow hover:bg-blue-700 transition"
                    >
                        Зачувај одговор
                    </button>
                </form>
              

                
            </div>

            <!-- Right Column -->
            <div>
                <!-- Existing Answers -->
                <h3 class="text-lg font-semibold mb-4">Одговори:</h3>
                @if ($answers->isNotEmpty())
                    <ul class="list-decimal list-inside space-y-2">
                        @foreach ($answers as $answer)
                            <li>{{ $answer->answer }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>Нема внесени одговори.</p>
                @endif

                
  
</div>

            </div>
             <a 
                        href="{{route('dashboard')}}" 
                        class="absolute bottom-8 right-8 px-6 py-3 bg-blue-700 text-white font-semibold rounded-lg shadow hover:bg-blue-800 transition-colors"
                    >
                        Назад
                    </a>
     
        </div>
        
    </div>

</body>
</html>
