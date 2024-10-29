<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Dashboard</title>
</head>
<body>
    <nav class="bg-white shadow-sm p-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center">
          <img src="{{ asset('images/logo_signix.png') }}" alt="SIGNIX Logo" class="w-[100px] mr-4" />
        </div>
      
        <!-- Menu Links -->
        <div class="flex space-x-6">
          <a href="#" class="text-black font-medium hover:text-blue-500 border-b-2 border-blue-500">Home</a>
          <a href="#" class="text-black font-medium hover:text-blue-500">Pengajuan</a>
          <a href="#" class="text-black font-medium hover:text-blue-500">Riwayat</a>
        </div>
      
        <!-- Notification and Profile Icon -->
        <div class="flex space-x-4 items-center">
          <button class="text-black">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
              <!-- Icon Bell SVG -->
              <path d="M12 24c1.104 0 2-.896 2-2h-4c0 1.104.896 2 2 2zm7-6v-5c0-3.071-1.641-5.645-4.5-6.32v-.68c0-.828-.672-1.5-1.5-1.5s-1.5.672-1.5 1.5v.68c-2.859.675-4.5 3.25-4.5 6.32v5l-1 1v1h14v-1l-1-1zm-9 0v-5c0-2.485 1.149-4.475 3-4.475s3 1.99 3 4.475v5h-6z"/>
            </svg>
          </button>
          <button class="text-black">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
              <!-- Icon Profile SVG -->
              <path d="M12 12c2.485 0 4.5-2.015 4.5-4.5S14.485 3 12 3 7.5 5.015 7.5 7.5 9.515 12 12 12zm0 2c-3.315 0-10 1.68-10 5v2h20v-2c0-3.32-6.685-5-10-5z"/>
            </svg>
          </button>
        </div>
      </nav>
      
</body>
</html>