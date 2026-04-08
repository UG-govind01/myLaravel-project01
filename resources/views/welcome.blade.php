<!DOCTYPE html>
<html>
<head>
    <title>Eventor</title>
</head>
<body>


@extends('layouts.app')
    
@section('content')


 <div class="wedding">
    <img src="{{ asset('image/imageTwo.avif') }}" alt="wedding" style="width:100%; height:400px;">
 </div>
 <h1 class="font-bold text-center text-6xl my-10"> 

    Choose Your Celebration Setup 
 
 </h1> 
   <h1 class="text-center text-2xl my-4"> From golden moments to grand wedding celebrations</h1>

   <h1 class="font-bold text-center text-3xl my-8">
    
 </h1>
           
 <div class="bg-gray-50 py-10 px-6 min-h-screen">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 max-w-7xl mx-auto">

        <div class="group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100">
            <div class="relative overflow-hidden">
                <img src="{{ asset('image/BirOne.jpg') }}" class="w-full h-44 object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
            </div>
            <div class="p-4 text-center">
                <h2 class="font-bold text-gray-800 group-hover:text-cyan-600 transition-colors">Birthday Setup</h2>
                <div class="mt-2 w-8 h-1 bg-cyan-500 mx-auto rounded-full scale-0 group-hover:scale-100 transition-transform duration-500"></div>
            </div>
        </div>

        <div class="group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100">
            <div class="relative overflow-hidden">
                <img src="{{ asset('image/Kids-setup.webp') }}" class="w-full h-44 object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
            </div>
            <div class="p-4 text-center">
                <h2 class="font-bold text-gray-800 group-hover:text-cyan-600 transition-colors">kids setup</h2>
                <div class="mt-2 w-8 h-1 bg-cyan-500 mx-auto rounded-full scale-0 group-hover:scale-100 transition-transform duration-500"></div>
            </div>
        </div>

        <div class="group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100">
            <div class="relative overflow-hidden">
                <img src="{{ asset('image/BirOne.jpg') }}" class="w-full h-44 object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
            </div>
            <div class="p-4 text-center">
                <h2 class="font-bold text-gray-800 group-hover:text-cyan-600 transition-colors">Baby Welcome</h2>
                <div class="mt-2 w-8 h-1 bg-cyan-500 mx-auto rounded-full scale-0 group-hover:scale-100 transition-transform duration-500"></div>
            </div>
        </div>

        <div class="group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100">
            <div class="relative overflow-hidden">
                <img src="{{ asset('image/BirOne.jpg') }}" class="w-full h-44 object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
            </div>
            <div class="p-4 text-center">
                <h2 class="font-bold text-gray-800 group-hover:text-cyan-600 transition-colors">Ring Ceremony</h2>
                <div class="mt-2 w-8 h-1 bg-cyan-500 mx-auto rounded-full scale-0 group-hover:scale-100 transition-transform duration-500"></div>
            </div>
        </div>

        <div class="group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100">
            <div class="relative overflow-hidden">
                <img src="{{ asset('image/BirOne.jpg') }}" class="w-full h-44 object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
            </div>
            <div class="p-4 text-center">
                <h2 class="font-bold text-gray-800 group-hover:text-cyan-600 transition-colors">Anniversary Setup</h2>
                <div class="mt-2 w-8 h-1 bg-cyan-500 mx-auto rounded-full scale-0 group-hover:scale-100 transition-transform duration-500"></div>
            </div>
        </div>

        <div class="group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100">
            <div class="relative overflow-hidden">
                <img src="{{ asset('image/BirTwo.jpg') }}" class="w-full h-44 object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
            </div>
            <div class="p-4 text-center">
                <h2 class="font-bold text-gray-800 group-hover:text-cyan-600 transition-colors">wedding Decoration  </h2>
                <div class="mt-2 w-8 h-1 bg-cyan-500 mx-auto rounded-full scale-0 group-hover:scale-100 transition-transform duration-500"></div>
            </div>
        </div>

        <div class="group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100">
            <div class="relative overflow-hidden">
                <img src="{{ asset('image/BirTwo.jpg') }}" class="w-full h-44 object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
            </div>
            <div class="p-4 text-center">
                <h2 class="font-bold text-gray-800 group-hover:text-cyan-600 transition-colors">Haldi ceromony</h2>
                <div class="mt-2 w-8 h-1 bg-cyan-500 mx-auto rounded-full scale-0 group-hover:scale-100 transition-transform duration-500"></div>
            </div>
        </div>

        <div class="group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100">
            <div class="relative overflow-hidden">
                <img src="{{ asset('image/BirTwo.jpg') }}" class="w-full h-44 object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
            </div>
            <div class="p-4 text-center">
                <h2 class="font-bold text-gray-800 group-hover:text-cyan-600 transition-colors">mehdi ceromony</h2>
                <div class="mt-2 w-8 h-1 bg-cyan-500 mx-auto rounded-full scale-0 group-hover:scale-100 transition-transform duration-500"></div>
            </div>
        </div>

          <div class="group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100">
            <div class="relative overflow-hidden">
                <img src="{{ asset('image/BirTwo.jpg') }}" class="w-full h-44 object-cover transition-transform duration-700 group-hover:scale-110">
            </div>
            <div class="p-4 text-center">
                <h2 class="font-bold text-gray-800 group-hover:text-cyan-600 transition-colors">Reception setup</h2>
                <div class="mt-2 w-8 h-1 bg-cyan-500 mx-auto rounded-full scale-0 group-hover:scale-100 transition-transform duration-500"></div>
            </div>
         </div>

         <div class="group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100">
            <div class="relative overflow-hidden">
                <img src="{{ asset('image/BirTwo.jpg') }}" class="w-full h-44 object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
            </div>
            <div class="p-4 text-center">
                <h2 class="font-bold text-gray-800 group-hover:text-cyan-600 transition-colors">Sangit night</h2>
                <div class="mt-2 w-8 h-1 bg-cyan-500 mx-auto rounded-full scale-0 group-hover:scale-100 transition-transform duration-500"></div>
            </div>
          </div>

          </div>
 </div>


<div class="bg-white py-16 px-6 md:px-20 font-sans">
    
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">
    
    <div class="flex flex-col space-y-6">

      <h4 class="text-[#004d4d] tracking-[0.2em] text-sm font-medium uppercase">
        About Agrawal Eventor 
      </h4>
      
      <h1 class="text-[#1a1a1a] text-5xl md:text-6xl font-bold leading-[1.1]">
        We Don't Just Decorate <br>
        Events, <span class="text-[#004d4d]">We Create <br> Feelings</span>
      </h1>
      
      <div class="text-gray-500 text-lg leading-relaxed space-y-4 max-w-lg">
        <p>
          Every celebration tells a story. At <strong>AGRAWAL Eventor</strong>, we listen, imagine, and design décor that reflects your emotions — not templates.
        </p>
        <p>
          From intimate home surprises to grand wedding celebrations, our team brings creativity, precision, and passion to every setup.
        </p>
      </div>

      <div class="pt-4">
        <button class="bg-[#004d4d] text-white px-10 py-4 rounded-full font-semibold text-sm transition-transform hover:scale-105">
          Know More About Us
        </button>
      </div>
    </div>

    <div class="relative pt-4 pr-4">
      <div class="absolute top-8 right-0 bottom-0 left-8 border-[1px] border-yellow-400 -z-0"></div>
      
      <div class="relative z-10 shadow-2xl">
        <img 
          src="./image/home image.webp" 
          alt="Luxury Event Decoration" 
          class="w-full h-auto block"
        />
      </div>
    </div>

  </div>
</div>

    @endsection

</body>
</html>

