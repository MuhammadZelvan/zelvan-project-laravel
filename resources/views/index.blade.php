<html>
 <head>
  <title>
   My Portfolio
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <script src="https://registry.npmmirror.com/vue/3.3.11/files/dist/vue.global.js">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Roboto', sans-serif;
    }
  </style>
 </head>
 <body class="bg-gray-900 text-white">
  <div id="app">
   <nav class="flex justify-between items-center p-4 bg-gray-800">
    <div class="text-blue-500 text-xl font-bold">
     My Portfolio
    </div>
    <div class="space-x-4">
     <a class="text-white" href="#">
      Home
     </a>
     <a class="text-white" href="#">
      Profil
     </a>
     <a class="text-white" href="#">
      Galerry
     </a>
    </div>
    <button class="bg-blue-500 text-white px-4 py-2 rounded">
     Contact
    </button>
   </nav>
   <div class="relative h-screen">
    <img alt="Background image of an anime scene with characters holding umbrellas" class="absolute inset-0 w-full h-full object-cover opacity-50" height="1080" src="https://steamuserimages-a.akamaihd.net/ugc/1883081308668304053/BE8C081D9986533CB36DE9EC83BEB3F4133A99D1/?imw=637&imh=358&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true" width="1920"/>
    <div class="absolute inset-0 flex flex-col justify-center items-start p-10 space-y-4">
     <h1 class="text-4xl font-bold">
      Hallo, Everyone!
     </h1>
     <h2 class="text-6xl font-bold">
      Muhammad
      <span class="text-blue-500">
       Zelvan
      </span>
     </h2>
     <h3 class="text-2xl font-semibold">
      Anime viewers
     </h3>
     <p class="text-lg max-w-lg">
      Iam Muhammad Zelvan Islamic Faaza, Iam 45 years old, I live from Jawa tengah, My hobby is My hobbies are learning trading, gaming, basketball and design. My favourite Watching anime and basket
     </p>
     <div class="flex space-x-4">
      <a class="text-2xl" href="#">
       <i class="fab fa-tiktok">
       </i>
      </a>
      <a class="text-2xl" href="#">
       <i class="fab fa-instagram">
       </i>
      </a>
      <a class="text-2xl" href="#">
       <i class="fab fa-twitter">
       </i>
      </a>
      <a class="text-2xl" href="#">
       <i class="fab fa-github">
       </i>
      </a>
     </div>
     <button class="bg-blue-500 text-white px-6 py-2 rounded">
      Here Me
     </button>
    </div>
   </div>
  </div>
  <script>
   const { createApp } = Vue;
    createApp({}).mount('#app');
  </script>
 </body>
</html>