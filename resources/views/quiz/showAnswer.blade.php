<x-app-layout>
    <div class="text-center">
        <div class="h-screen content-center">
            <h3 class="text-">{{$answer->answer}}</h3>

            <ul>
                @foreach($answer->majors as $major)
                    <li>{{$major->name}}: {{$major->pivot->weight}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    
</x-app-layout>
