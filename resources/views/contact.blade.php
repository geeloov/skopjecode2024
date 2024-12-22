<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контактирајте не</title>
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

        <!-- Contact Card -->
        <div class="bg-white/10 backdrop-blur-md p-8 rounded-xl shadow-lg text-white">
            <h1 class="text-3xl font-bold mb-6">Контактирајте не</h1>

            <!-- Contact Information -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Left Column: Contact Info -->
                <div class="space-y-4">
                    <!-- Email -->
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span>test.test@gmail.com</span>
                    </div>

                    <!-- Phone -->
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21,3,14.284,3,6V5z"></path>
                        </svg>
                        <span>+389(72)123-456</span>
                    </div>

                    <!-- Address -->
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657,16.657L13.414,20.9a1.998,1.998,0,01,-2.827,0L6.343,16.657A8,8,0,1117.657,16.657z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15,11A3,3,0,11,9,11A3,3,0,0115,11z"></path>
                        </svg>
                        <span>Скопје, Македонија</span>
                    </div>
                </div>

                <!-- Right Column: Contact Form -->
                <form action="#" method="#" class="space-y-4">
                    <!-- Name -->
                    <label for="email">Име</label>
                    <input type="text"
                           name="name"
                           placeholder="Име"
                           class="w-full px-4 py-3 bg-white/20 text-white placeholder-white/60 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">

                    <!-- Email -->
                    <label for="email">Е-пошта</label>
                    <input type="email"
                           name="email"
                           placeholder="Е-пошта"
                           class="w-full px-4 py-3 bg-white/20 text-white placeholder-white/60 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">

                    <!-- Message -->
                    <label for="email">Порака</label>
                    <textarea name="message"
                              rows="4"
                              placeholder="Порака"
                              class="w-full px-4 py-3 bg-white/20 text-white placeholder-white/60 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"></textarea>

                    <!-- Submit Button -->
                    <button type="submit"
                            class="w-full px-6 py-3 bg-white  text-blue-500 border border-black font-semibold rounded-lg transition duration-150 hover:shadow-[0_4px_20px_rgb(0,0,0,0.25)] hover:shadow-[0_4px_20px_rgb(0,0,0,0.25)] hover:bg-blue-50">
                        Испрати Порака
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
