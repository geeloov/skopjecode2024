<x-app-layout>
    <div class="flex w-full h-full">
        <div class="basis-1/3 bg-white border-b border-gray-300 w-max">
            <ul class="menu text-sm sm:text-base space-y-2">
                <li><a href="{{route("question.create")}}">Create quiz</a></li>
            </ul>
        </div>
        <div class="basis-2/3">
            <form method="POST" action="{{route("question.create")}}">
                @csrf
                <div class="space-y-12 ">
                  <div class="border-b border-gray-900/10 pb-12 flex-col flex">
        
                   <label for="question">Question</label>
                   <input type="text" name="question" id="question" required placeholder="Question">
                </div>
                  </div>
                </div>
              
                <div class="mt-6 flex items-center justify-between gap-x-6">
                  <button type="button" class="text-sm/6 font-semibold">Cancel</button>
                  <button type="submit" class="rounded-md bg-sky-700 px-3 py-2 text-sm font-semibold text-white shadow-sm">Save</button>
                </div>
              </form>
        </div>
    </div>
    
</x-app-layout>
