<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>За нас</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-cyan-400 to-blue-500 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-4xl mx-auto p-6">
        <!-- Back Button -->
        <a href="{{url()->previous()}}" class="inline-flex items-center px-4 py-2 mb-6 bg-white text-blue-500 rounded-lg font-semibold border border-black transition-all hover:shadow-[0_4px_20px_rgb(0,0,0,0.25)] hover:bg-blue-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
            </svg>
            Назад
        </a>
       

        <!-- About Us Card -->
        <div class="bg-white/10 backdrop-blur-md p-8 rounded-xl shadow-lg text-white">
            <h1 class="text-3xl font-bold mb-6">За нас</h1>

            <div class="space-y-6">
                <!-- Section: Mission -->
                <div>
                    <h2 class="text-xl font-semibold mb-2">Нашата мисија</h2>
                    <p class="text-white/90 leading-relaxed">
Ние сме посветени на помагање на студентите да откријат своите идеални кариерни патеки преку персонализирани проценки и насоки. Нашата платформа ја комбинира напредната анализа со сеопфатни кариерни информации за да обезбеди прилагодени препораки за вашата иднина.                     </p>
                </div>

                <!-- Section: What We Do -->
                <div>
                    <h2 class="text-xl font-semibold mb-2">Што Правиме</h2>
                    <p class="text-white/90 leading-relaxed">
Преку нашиот иновативен систем за анкети, ги анализираме вашите интереси, лични особини и кариерни аспирации за да предложиме образовни и професионални патеки кои се усогласуваат со вашиот уникатен профил. Нашите препораки се базирани на обемно истражување и реални податоци за кариера.                    </p>
                </div>

                <!-- Section: Vision -->
                <div>
                    <h2 class="text-xl font-semibold mb-2">Нашата Визија</h2>
                    <p class="text-white/90 leading-relaxed">
Ние ја замислуваме иднината каде што секој студент може да носи информирани одлуки за својата кариерна патека, опремен со персонализирани совети и насоки. Ние се стремиме да ја поврземе разликата помеѓу образованието и успешната кариера.                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
