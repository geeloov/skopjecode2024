<div>
    <p class="text-[50px] text-center text-white mt-20 mb-4">
            Прашања за Кареиерен Пат
    </p>
    <p class="text-[25px] text-center text-white mb-4">
        Одговорете на овие прашања за да откриете вашето идеално поле на студии
    </p>
        <div class="w-full max-w-5xl bg-gray-200 rounded-full h-2.5 mb-7 mt-3">
            <div class="bg-[#4400FF] h-2.5 rounded-full" style="width: {{ ($currentStep / $totalSteps) * 100 }}%;"></div>
        </div>


        <div class="w-full max-w-4xl rounded-[27px] bg-white/10 border-[0.2px] border-white px-20 pt-5 pb-10 mb-10">
            <h3 class="text-[32px] font-semibold text-center text-white mb-10">{{ $question->question }}</h3>
        
            <div class="space-y-4">
                @foreach($question->answers as $answer)
        
                        <label class="flex items-center space-x-3" >
                            <input 
                                wire:key="{{$answer->id}}"
                                type="radio" 
                                name="answer"
                                wire:click = "saveAnswer({{$answer}},{{$question}})"
                                value="{{ $answer->id }}" 
                                {{ isset($answers[$question->id]) && $answers[$question->id] == $answer->id ? 'checked' : '' }}
                                class="h-5 w-5 text-[32px] text-purple-600 focus:ring-purple-500 border-gray-300"
                            >
                            <span class="text-white text-[20px]">{{ $answer->answer }}</span>
                        </label>
                    @endforeach
                </div>
            
        </div>

        <div class="flex justify-between w-full max-w-4xl">
            @if($currentStep > 0)
                <button type="button"
                wire:click="goBack({{$currentStep}})"
                class="inline-flex items-center px-4 py-2 mb-6 bg-white text-blue-500 rounded-lg font-semibold border border-black transition-all hover:shadow-[0_4px_20px_rgb(0,0,0,0.25)] hover:bg-blue-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                    </svg>
                Претходно
                </button>
            @endif
        </div>
    

        
        {{-- Loading --}}
        <div wire:loading class="relative min-h-screen">
            <div class="fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center z-50">
                <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-b-4 border-blue-500 border-t-transparent"></div>
            </div>
        </div>
</div>
