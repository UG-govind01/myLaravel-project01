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
                <img src="{{ asset('image/BirOne.jpg') }}" class="w-full h-44 object-cover transition-transform duration-700 group-hover:scale-110">
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
                <h2 class="font-bold text-gray-800 group-hover:text-cyan-600 transition-colors">Birthday Setup</h2>
                <div class="mt-2 w-8 h-1 bg-cyan-500 mx-auto rounded-full scale-0 group-hover:scale-100 transition-transform duration-500"></div>
            </div>
        </div>

        <div class="group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100">
            <div class="relative overflow-hidden">
                <img src="{{ asset('image/BirTwo.jpg') }}" class="w-full h-44 object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
            </div>
            <div class="p-4 text-center">
                <h2 class="font-bold text-gray-800 group-hover:text-cyan-600 transition-colors">Birthday Setup</h2>
                <div class="mt-2 w-8 h-1 bg-cyan-500 mx-auto rounded-full scale-0 group-hover:scale-100 transition-transform duration-500"></div>
            </div>
        </div>

        <div class="group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100">
            <div class="relative overflow-hidden">
                <img src="{{ asset('image/BirTwo.jpg') }}" class="w-full h-44 object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
            </div>
            <div class="p-4 text-center">
                <h2 class="font-bold text-gray-800 group-hover:text-cyan-600 transition-colors">Baby Welcome</h2>
                <div class="mt-2 w-8 h-1 bg-cyan-500 mx-auto rounded-full scale-0 group-hover:scale-100 transition-transform duration-500"></div>
            </div>
        </div>

          <div class="group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100">
            <div class="relative overflow-hidden">
                <img src="{{ asset('image/BirTwo.jpg') }}" class="w-full h-44 object-cover transition-transform duration-700 group-hover:scale-110">
            </div>
            <div class="p-4 text-center">
                <h2 class="font-bold text-gray-800 group-hover:text-cyan-600 transition-colors">Ring Ceremony</h2>
                <div class="mt-2 w-8 h-1 bg-cyan-500 mx-auto rounded-full scale-0 group-hover:scale-100 transition-transform duration-500"></div>
            </div>
         </div>

         <div class="group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100">
            <div class="relative overflow-hidden">
                <img src="{{ asset('image/BirTwo.jpg') }}" class="w-full h-44 object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
            </div>
            <div class="p-4 text-center">
                <h2 class="font-bold text-gray-800 group-hover:text-cyan-600 transition-colors">Anniversary Setup</h2>
                <div class="mt-2 w-8 h-1 bg-cyan-500 mx-auto rounded-full scale-0 group-hover:scale-100 transition-transform duration-500"></div>
            </div>
          </div>

          </div>
 </div>
    @endsection

</body>
</html>

