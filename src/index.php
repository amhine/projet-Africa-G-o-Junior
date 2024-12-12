

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="input.css">
    <link rel="stylesheet" href="output.css">
</head>
<body>
  <div class="bg-amber-900 bg-contain  w-full   flex flex-wrap items-center justify-between mt-0 py-2 ">

    <div class="pl-4 flex items-center ">
     
        <img src="../img/icon-africa-.png"> 
        <span class="text-white font-bold text-lg">Africa Géo-Junior</span>
     
      
    </div>

    <div class="block lg:hidden pr-4">
      <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        </svg>
      </button>
    </div>

    <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 lg:bg-transparent text-black p-4 lg:p-0 z-20 bg-gray-100" id="nav-content">
      <ul class="list-reset lg:flex justify-end flex-1 items-center">
        <li class="mr-3">
          <a class="inline-block py-2 px-4 text-white font-bold no-underline" href="#">Home</a>
        </li>
        <li class="mr-3">
          <a class="inline-block text-white no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">Pays</a>
        </li>
        <li class="mr-3">
          <a class="inline-block text-white no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">Villes</a>
        </li>
      </ul>
    </div>
  </div>





  <!-- <div class=" flex flex-col justify-evenly m-4 p-5 ">
        

      <div class="flex  justify-evenly items-start absolute w-full p-6">
          <div class="bg-cover  lg:w-[600px] sm:w-[320px] h-[400px] lg:p-6 p-3 rounded-lg bg-opacity-95 sm:flex-wrap " style="background-image: url('../img/bg.jpg');">
            <form>

                <h1 class="flex justify-center font-bold text-amber-900 text-4xl">Pays</h1>
                <h3 class="text-white">Nom :</h3>
                <input type="text" id="name" name="name" class="w-full p-2 mb-4 rounded-md bg-gray-200">

                <h3 class="text-white">Population:</h3>
                <input type="text" id="Population" name="Population" class="w-full p-2 mb-4 rounded-md bg-gray-200">

                <h3 class="text-white">Langue :</h3>
                <input type="text" id="Langue" name="Langue" class="w-full p-2 mb-4 rounded-md bg-gray-200">

                <h3 class="text-white">Continent:</h3>
                <input type="text" id="Continent" name="Continent" class="w-full p-2 mb-4 rounded-md bg-gray-200">

                <div class="flex justify-end mt-6">
                  <button type="submit" id="submit" class="text-white bg-blue-600 w-36 rounded-2xl py-2 hover:bg-blue-800 cursor-pointer">Submit</button>
                  <button type="button" id="hideForm" class="text-white bg-red-600 w-36 rounded-2xl py-2 hover:bg-red-800 cursor-pointer">Exit</button>
                </div>
             </form>   
          </div>
          <div class=" bg-cover lg:w-[600px] sm:w-[320px] h-[400px] lg:p-6 p-3 rounded-lg bg-opacity-95 flex flex-col justify-center" style="background-image: url('../img/bg.jpg');">
            <form>
                  <h1 class="flex justify-center font-bold text-amber-900 text-4xl">Villes </h1>
                  <h3 class="text-white">Nom :</h3>
                  <input type="text" id="name" name="name" class="w-full p-2 mb-4 rounded-md bg-gray-200">

                  <h3 class="text-white">Description:</h3>
                  <input type="text" id="Description" name="Description" class="w-full p-2 mb-4 rounded-md bg-gray-200">

                  <h3 class="text-white">Type :</h3>
                  <input type="text" id="Type" name="Type" class="w-full p-2 mb-4 rounded-md bg-gray-200">

                  

                  <div class="flex justify-end mt-6">
                    <button type="submit" id="submit" class="text-white bg-blue-600 w-36 rounded-2xl py-2 hover:bg-blue-800 cursor-pointer">Submit</button>
                    <button type="button" id="hideForm" class="text-white bg-red-600 w-36 rounded-2xl py-2 hover:bg-red-800 cursor-pointer">Exit</button>
                  </div>
             </form>      
          </div>
      </div>

 
    
  </div> -->
              <div class=" flex  ">
              <form class=" bg-cover p-4  rounded-2xl w-[700px]" style="margin: 20px;background-image: url('../img/backg.jpg');">
                    <h1 class="flex justify-center font-bold text-amber-900 text-4xl">Pays</h1>
                    <h3 class="text-white">Nom :</h3>
                    <input type="text" id="name" name="name" class="w-full p-2 mb-4 rounded-md bg-gray-200">

                    <h3 class="text-white">Population:</h3>
                    <input type="text" id="Population" name="Population" class="w-full p-2 mb-4 rounded-md bg-gray-200">

                    <h3 class="text-white">Langue :</h3>
                    <input type="text" id="Langue" name="Langue" class="w-full p-2 mb-4 rounded-md bg-gray-200">

                    <h3 class="text-white">Continent:</h3>
                    <input type="text" id="Continent" name="Continent" class="w-full p-2 mb-4 rounded-md bg-gray-200">

                    <div class="flex justify-end mt-6">
                      <button type="submit" id="submit" class="text-white bg-amber-900 w-36 rounded-2xl py-2 hover:bg-amber-900 cursor-pointer">Submit</button>
                      
                    </div>
                </form>
                  <form  class=" bg-cover p-4 rounded-2xl w-[700px]  " style="margin: 20px;background-image: url('../img/bg.jpg');">
                    <h1 class="flex justify-center font-bold text-amber-900 text-4xl">Villes </h1>
                    <h3 class="text-white">Nom :</h3>
                    <input type="text" id="name" name="name" class="w-full p-2 mb-4 rounded-md bg-gray-200">

                    <h3 class="text-white">Description:</h3>
                    <input type="text" id="Description" name="Description" class="w-full p-2 mb-4 rounded-md bg-gray-200">

                    <h3 class="text-white">Type :</h3>
                    <input type="text" id="Type" name="Type" class="w-full p-2 mb-4 rounded-md bg-gray-200">

                    

                    <div class="flex justify-end mt-6">
                      <button type="submit" id="submit" class="text-white bg-amber-900 w-36 rounded-2xl py-2 hover:bg-amber-900 cursor-pointer">Submit</button>
                      
                    </div>
                  </form>    
               </div>
  

<div class="bg-amber-900 p-6">
  <div class="w-full flex flex-col md:flex-row py-6 items-center">
    <div class="flex-1 mb-6">
      <div class="flex items-center">
        <img src="../img/icon-africa-.png" alt="Logo Africa Géo-Junior" class="mr-2"> 
        <span class="text-white font-bold text-lg">Africa Géo-Junior</span>
      </div>
    </div>

    
    <div class="flex-1">
      <p class="uppercase text-white md:mb-6 text-lg font-bold">Links</p>
      <ul class="list-none mb-6">
        <li class="mt-2">
          <a href="#" class="no-underline hover:underline text-white hover:text-orange-500">FAQ</a>
        </li>
        <li class="mt-2">
          <a href="#" class="no-underline hover:underline text-white hover:text-orange-500">Help</a>
        </li>
        <li class="mt-2">
          <a href="#" class="no-underline hover:underline text-white hover:text-orange-500">Support</a>
        </li>
      </ul>
    </div>

    
    <div class="flex-1">
      <p class="uppercase text-white md:mb-6 text-lg font-bold">Legal</p>
      <ul class="list-none mb-6">
        <li class="mt-2">
          <a href="#" class="no-underline hover:underline text-white hover:text-orange-500">Terms</a>
        </li>
        <li class="mt-2">
          <a href="#" class="no-underline hover:underline text-white hover:text-orange-500">Privacy</a>
        </li>
        <li class="mt-2">
          <a href="#" class="no-underline hover:underline text-white hover:text-orange-500">Cookies</a>
        </li>
      </ul>
    </div>

   
    <div class="flex-1">
      <p class="uppercase text-white md:mb-6 text-lg font-bold">Social</p>
      <ul class="list-none mb-6">
        <li class="mt-2">
          <a href="#" class="no-underline hover:underline text-white hover:text-orange-500">Facebook</a>
        </li>
        <li class="mt-2">
          <a href="#" class="no-underline hover:underline text-white hover:text-orange-500">LinkedIn</a>
        </li>
        <li class="mt-2">
          <a href="#" class="no-underline hover:underline text-white hover:text-orange-500">Twitter</a>
        </li>
      </ul>
    </div>

    
    <div class="flex-1">
      <p class="uppercase text-white md:mb-6 text-lg font-bold">Company</p>
      <ul class="list-none mb-6">
        <li class="mt-2">
          <a href="#" class="no-underline hover:underline text-white hover:text-orange-500">Official Blog</a>
        </li>
        <li class="mt-2">
          <a href="#" class="no-underline hover:underline text-white hover:text-orange-500">About Us</a>
        </li>
        <li class="mt-2">
          <a href="#" class="no-underline hover:underline text-white hover:text-orange-500">Contact</a>
        </li>
      </ul>
    </div>
  </div>

  
  <div class="pt-4 mt-10 text-center text-black  ">
    © 2020 Africa Géo-Junior. All rights reserved.
  </div>
  <div class="pt-2 mt-2 text-center text-black">
    Distributed by
    <a href="https://themewagon.com/" class="hover:text-orange-500">Themewagon</a>
  </div>
</div>

</body>
</html>