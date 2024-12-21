<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Прашања за Кариерен Пат</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-r from-cyan-400 to-blue-500 flex flex-col items-center px-4">
    <p class="text-[50px] text-center text-white mt-20 mb-4">
        Прашања за Кареиерен Пат
   </p>
   <p class="text-[25px] text-center text-white mb-4">
      Одговорете на овие прашања за да откриете вашето идеално поле на студии
  </p>
    <div class="w-full max-w-5xl bg-gray-200 rounded-full h-2.5 mb-7 mt-3">
        <div class="bg-[#4400FF] h-2.5 rounded-full" style="width: {{ ($step / $totalSteps) * 100 }}%;"></div>
    </div>

    <div class="w-full max-w-4xl rounded-[27px] bg-white/10 border-[0.2px] border-white px-20 pt-5 pb-10 mb-10">
        <h3 class="text-[32px] font-semibold text-center text-white mb-10">{{ $question->question }}</h3>

        <form action="{{ route('quiz.store', ['step' => $step]) }}"  method="POST" id="quiz-form">
            @csrf
            <div class="space-y-4">
                @foreach($question->answers as $answer)
                    <label class="flex items-center space-x-3">
                        <input 
                            type="radio" 
                            name="answer" 
                            value="{{ $answer->id }}" 
                            {{ isset($answers[$step]) && (int)$answers[$step] === $answer->id ? 'checked' : '' }}
                            class="h-5 w-5 text-[32px] text-purple-600 focus:ring-purple-500 border-gray-300"
                        >
                        <span class="text-white text-[20px]">{{ $answer->answer }}</span>
                    </label>
                @endforeach
            </div>
        </form>
    </div>

    <div class="flex justify-between w-full max-w-4xl">
        @if($step > 1)
            <a href="{{ route('quiz.step', ['step' => $step - 1]) }}" 
               class="inline-flex items-center px-4 py-2 mb-6 bg-white text-blue-500 rounded-lg font-semibold border border-black transition-all hover:shadow-[0_4px_20px_rgb(0,0,0,0.25)] hover:bg-blue-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                </svg>
               Претходно
            </a>
        @else
            
            <span></span>
        @endif

       
        <button type="submit" 
                form="quiz-form"
                class="inline-flex items-center px-4 py-2 mb-6 bg-white text-blue-500 rounded-lg font-semibold border border-black transition-all hover:shadow-[0_4px_20px_rgb(0,0,0,0.25)] hover:bg-blue-50">
            {{ $step === $totalSteps ? 'Заврши ' : 'Следно ' }}
           
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>

        
    </div>

</body>
</html>
