<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Portfolio</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://registry.npmmirror.com/vue/3.3.11/files/dist/vue.global.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-900 text-white">
  <div id="app">
    <nav class="flex justify-between items-center p-4 bg-gray-800">
      <div class="text-blue-500 text-xl font-bold">My Portfolio</div>
      <div class="space-x-4">
        <a class="text-white" href="#">Home</a>
        <a class="text-white" href="#">Profil</a>
        <a class="text-white" href="#">Gallery</a>
      </div>
      <button class="bg-blue-500 text-white px-4 py-2 rounded">Contact</button>
    </nav>

    <div class="relative h-screen">
      <img 
        src="https://steamuserimages-a.akamaihd.net/ugc/1883081308668304053/BE8C081D9986533CB36DE9EC83BEB3F4133A99D1/?imw=637&imh=358&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true" 
        alt="Background image of an anime scene with characters holding umbrellas"
        class="absolute inset-0 w-full h-full object-cover opacity-50" 
        width="1920" height="1080"
      />

      <div class="absolute inset-0 flex flex-col justify-center items-start p-10 space-y-4">
        <h1 class="text-4xl font-bold">Hello, Everyone!</h1>
        <h2 class="text-6xl font-bold">Muhammad <span class="text-blue-500">Zelvan</span></h2>
        <h3 class="text-2xl font-semibold">Anime Viewer</h3>
        <p class="text-lg max-w-lg">
          I am Muhammad Zelvan Islamic Faaza, 45 years old from Jawa Tengah. My hobbies include learning trading, gaming, basketball, and design. My favorite activities are watching anime and playing basketball.
        </p>
        <a href="{{ route('about') }}" class="text-1xl font-bold mb-4">Baca Selengkapnya</a>
        <div class="flex space-x-4">
          <a class="text-2xl" href="#"><i class="fab fa-tiktok"></i></a>
          <a class="text-2xl" href="#"><i class="fab fa-instagram"></i></a>
          <a class="text-2xl" href="#"><i class="fab fa-twitter"></i></a>
          <a class="text-2xl" href="#"><i class="fab fa-github"></i></a>
        </div>
        <button class="bg-blue-500 text-white px-6 py-2 rounded">Hear Me</button>
      </div>
    </div>
  </div>

  <script>
    const { createApp } = Vue;
    createApp({}).mount('#app');
  </script>
</body>
</html>
