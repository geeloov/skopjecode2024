<x-app-layout>
    <div class="flex w-full h-full">
        <div class="basis-1/3 bg-white border-b border-gray-300 w-max">
            <ul class="menu text-sm sm:text-base space-y-2">
                <li><a href="{{route("question.create")}}">Create quiz</a></li>
            </ul>
        </div>
        <div class="basis-2/3">
            <form method="POST" action="{{route("question.addAnswers",[$question])}}">
                @csrf
                <div class="space-y-12 ">
                  <div class="border-b border-gray-900/10 pb-12 flex-col flex">
        
                   <h3>{{$question->$question}}</h3>
                    
                   <label for="answer">Answer:</label>
                   <input type="text" name="answer" placeholder="Answer" required>

                   <div class="flex flex-col space-y-5">
                   @foreach($majors as $major)
                        <label for="{{$major->id}}">{{$major->name}}</label>
                        <input type="number" min=0 max=3 required name="{{$major->id}}" id="{{$major->id}}">
                   @endforeach
                   </div>
                  </div>
                </div>
              
                <div class="mt-6 flex items-center justify-between gap-x-6">
                  <button type="button" class="text-sm/6 font-semibold">Cancel</button>
                  <button type="submit" class="rounded-md bg-sky-700 px-3 py-2 text-sm font-semibold text-white shadow-sm">Save</button>
                </div>
              </form>

              <ul>
                @foreach ($answers as $answer)
                    <li><a href="{{route("question.showAnswer",["answer" => $answer])}}">{{$answer->answer}}</a></li>
                @endforeach
                 </ul>
        </div>
    </div>
    
</x-app-layout>
