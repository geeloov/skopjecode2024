<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-cyan-400 to-blue-500 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg flex max-w-4xl w-full overflow-hidden">
        <!-- Left Section -->
        <div class="w-1/2 p-8 flex flex-col justify-center">
            <img src="{{asset('images/logo.webp')}}" alt="Logo" class="w-32 mb-6">
            <h2 class="text-3xl font-bold text-blue-600 mb-4">Добредојде</h2>
            <p class="text-gray-600 mb-6">Логирај се и дознај кое е идеалното место за твоето надградување</p>

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <input id="email" type="email" name="email" placeholder="Е-пошта" value="{{ old('email') }}" required autofocus
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <input id="password" type="password" name="password" placeholder="Лозинка" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="mb-4">
                    <button type="submit"
                        class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-200">
                        Логирај се
                    </button>
                </div>
            </form>

            <!-- Register Link -->
            <a href="{{route('register')}}" class="text-center text-gray-600">
                {{ __('Регистрирај се') }}
            </a>
        </div>

        <!-- Right Section (Image) -->
        <div class="w-1/2 hidden md:block">
            <img src="{{asset('images/graduation.jpg')}}" alt="Graduation" class="w-full h-full object-cover">
        </div>
    </div>

    <!-- Footer Links -->
    <footer class="absolute bottom-0 left-0 w-full text-center text-white text-sm py-4 ">
        <a href="#" class="hover:underline mx-2">За Нас</a> |
        <a href="#" class="hover:underline mx-2">Контакт</a> |
        <a href="#" class="hover:underline mx-2">Политика на приватност</a> |
        <a href="#" class="hover:underline mx-2">Услови на услуга</a>
    </footer>
</body>
</html>
