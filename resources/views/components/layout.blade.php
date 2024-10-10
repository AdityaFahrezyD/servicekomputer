<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fath Comp</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-navbar></x-navbar>
    <div class="font-montserrat px-5 md:px-5 lg:px-15">
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <x-footer></x-footer>

    <script>
        function truncateText(maxWords) {
          const containers = document.querySelectorAll('.text-container');
      
          containers.forEach(container => {
            const words = container.innerText.split(' ');
      
            if (words.length > maxWords) {
              const truncated = words.slice(0, maxWords).join(' ') + '...';
              container.innerText = truncated;
            }
          });
        }
      
        truncateText(20);  // Batas maksimal 20 kata
    </script>
</body>
</html>