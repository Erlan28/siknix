<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signix Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex justify-center items-center p-4">
        <div class="bg-white shadow-lg rounded-lg flex overflow-hidden max-w-4xl w-full">
            <!-- Left Side -->
            <div class="w-1/2 bg-blue-50 ">
                    <img src="{{ asset('images/gambar_login.png') }}" alt="Building" class="w-full rounded-lg shadow-md">
            </div>

            <!-- Right Side -->
            <div class="w-1/2 p-10">
                <div class="w-40 mb-[-50px]">
                <img src="{{ asset('images/logo_signix.png') }}" alt="">
            </div>
                <h2 class="text-lg font-semibold text-gray-800 mb-6">Masuk Sebagai Mahasiswa</h2>
                
                <form action="{{ route('user.login') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="nim" class="block mb-2 text-gray-600">NIM</label>
                        <div class="flex items-center border border-gray-300 rounded-md">
                            <span class="text-gray-500 pl-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <input id="nim" name="nim" type="text" placeholder="Masukkan Nim" class="w-full px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-gray-600">Password</label>
                        <div class="flex items-center border border-gray-300 rounded-md">
                            <span class="text-gray-500 pl-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <input id="password" name="password" type="password" placeholder="Masukkan Kata sandi" class="w-full px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 rounded-md">
                        </div>
                    </div>

                    <div class="flex justify-end mb-6">
                        <a href="#" class="text-sm text-blue-600">Lupa kata sandi?</a>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md font-semibold hover:bg-blue-700 transition">Masuk</button>
                </form>

                <p class="text-xs text-gray-500 mt-4 text-center">
                    Dengan menggunakan layanan kami, Anda berarti setuju atas <a href="#" class="text-blue-600">Syarat & Ketentuan</a> dan <a href="#" class="text-blue-600">Kebijakan Privasi</a> Signix
                </p>
            </div>
        </div>
    </div>
</body>
</html>
