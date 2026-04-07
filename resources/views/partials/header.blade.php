<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body>

    <header class="fixed top-0 left-0 w-full z-[1000] px-4 py-4">
        <div class="max-w-7xl mx-auto">
            <nav class="bg-white/80 backdrop-blur-lg border border-white/20 shadow-xl rounded-[40px] px-8 py-3 flex items-center justify-between">
                
                <div class="flex items-center">
                    <a href="#" class="relative group">
                        <div class="absolute -inset-1 bg-[#facc15] rounded-full blur-sm opacity-20 group-hover:opacity-40 transition"></div>
                        <img class="h-14 w-14 object-contain relative" src="./image/AGRAWAL.png" alt="Logo">
                    </a>
                </div>

                <div class="hidden lg:flex items-center space-x-10">
                    <a href="{{ route('home') }}" class="text-gray-800 hover:text-[#064e3b] font-medium text-[15px] transition-all relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-[#facc15] hover:after:w-full after:transition-all">Home</a>
                    <a href="about" class="text-gray-800 hover:text-[#064e3b] font-medium text-[15px] transition-all relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-[#facc15] hover:after:w-full after:transition-all">About</a>
                    <a href="gallery" class="text-gray-800 hover:text-[#064e3b] font-medium text-[15px] transition-all relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-[#facc15] hover:after:w-full after:transition-all">Gallery</a>
                    <a href="./form" class="text-gray-800 hover:text-[#064e3b] font-medium text-[15px] transition-all relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-[#facc15] hover:after:w-full after:transition-all">Contact</a>
                </div>

                <div class="hidden md:block">
                    <a href="./form" class="bg-[#0b3d3d] text-white px-8 py-3 rounded-full font-semibold text-sm shadow-lg hover:shadow-[#0b3d3d]/30 hover:scale-105 transition-all duration-300">
                        Book Event
                    </a>
                </div>

                <div class="lg:hidden">
                    <button class="p-2 text-gray-800 hover:bg-gray-100 rounded-full transition">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </nav>
        </div>
    </header>
    </body>
</html>