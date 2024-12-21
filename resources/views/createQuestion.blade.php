<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Додади Прашање</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-cyan-400 to-blue-500 min-h-screen">
    <!-- Full-Screen Container -->
    <div class="flex h-screen">
        <!-- Left Column: Image -->
        <div class="w-1/2 bg-cover bg-center" style="background-image: url('{{ asset('images/questions.jpg') }}');">
            <!-- Replace with your image path -->
        </div>

        <!-- Right Column: Form -->
        <div class="w-1/2 p-16 bg-gradient-to-br from-cyan-400 to-blue-500 text-white flex flex-col justify-center">
            <h2 class="text-4xl font-bold mb-4">Додади прашање</h2>
            <p class="mb-6">Додади прашање за корисник</p>

            <!-- Form -->
            <form action="#" method="POST" class="space-y-6">
                @csrf
                <input 
                    type="text" 
                    name="question" 
                    placeholder="Прашање" 
                    class="w-full px-4 py-3 rounded-lg bg-white/20 text-white placeholder-white/70 border border-white/20 focus:outline-none focus:border-white"
                >
                <div class="flex space-x-4">
                    <button 
                        type="submit" 
                        class="px-6 py-3 bg-white text-blue-500 font-semibold rounded-lg shadow hover:bg-gray-100 transition-colors"
                    >
                        Зачувај
                    </button>
                    <a 
                        href="{{route('dashboard')}}" 
                        class="px-6 py-3 bg-blue-700 text-white font-semibold rounded-lg shadow hover:bg-blue-800 transition-colors"
                    >
                        Назад
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
