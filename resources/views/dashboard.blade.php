<x-app-layout>
    <div class="flex w-full h-full">
        <div class="basis-1/3 bg-white border-b border-gray-300 w-max">
            <ul class="menu text-sm sm:text-base space-y-2">
                <li><a href="{{route("question.create")}}">Create quiz</a></li>
            </ul>
        </div>
        <div class="basis-2/3">
            <h3>Questions:</h3>
            <ul>
                @foreach ($questions as $quest)
                    <li><a href="{{route("question.addAnswers",["question"=>$quest])}}">{{$quest->question}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>
