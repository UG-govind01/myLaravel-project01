<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrawal Eventors | Extraordinary Events</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-yellow': '#FFCC00',
                        'brand-navy': '#0F172A',
                        'brand-teal': '#004d4d',
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-white text-slate-800 antialiased overflow-x-hidden font-sans">

    @extends('layouts.app')

    @section('content')

    
<section class="relative h-[600px] flex items-center justify-start overflow-hidden bg-brand-navy">
    <video 
        id="heroVideo"
        autoplay 
        loop 
        muted 
        playsinline 
        class="absolute inset-0 w-full h-full object-cover opacity-60"
    >
        <source src="{{ asset('video/wedding01.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-transparent"></div>
<div class="flex gap-4">
    <a href="./form" class="bg-brand-yellow text-black px-8 py-4 rounded-full font-bold shadow-xl hover:scale-105 transition inline-block text-center">
        Plan Your Event
    </a>
    <button 
        onclick="toggleSound()" 
        class="absolute bottom-8 right-8 z-30 bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/30 p-4 rounded-full text-white transition-all shadow-2xl"
    >
        <div id="soundIcon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 5L6 9H2v6h4l5 4V5z"></path><line x1="23" y1="9" x2="17" y2="15"></line><line x1="17" y1="9" x2="23" y2="15"></line></svg>
        </div>
    </button>

    <div class="container mx-auto px-6 relative z-10">
        <span class="bg-brand-yellow text-black px-4 py-1 rounded-full text-xs font-bold mb-6 inline-block uppercase">
            Agrawal Eventors
        </span>
        <h1 class="text-white text-5xl md:text-7xl font-extrabold leading-tight mb-4">
            Events That Feel <br> 
            <span class="text-brand-yellow">Extraordinary</span>
        </h1>
        <p class="text-white/90 max-w-xl text-lg mb-8 font-light">
            We design and execute immersive event experiences — blending creativity, precision, and elegance to transform every occasion.
        </p>
        <div class="flex gap-4">
            <button class="bg-brand-yellow text-black px-8 py-4 rounded-full font-bold shadow-xl hover:scale-105 transition">
                Plan Your Event
            </button>
            <a href="./gallery">  
            <button class="border border-white/40 text-white px-8 py-4 rounded-full font-bold hover:bg-white/10 transition backdrop-blur-sm">
                View Our Gallery
            </button>
            </a>
        </div>
    </div>
</section>
<div class="space-y-20">
       <h1 class="font-bold text-center text-6xl my-10"> 

@include('partials.card')
</div>
<script>
    function toggleSound() {
        const video = document.getElementById('heroVideo');
        const iconContainer = document.getElementById('soundIcon');
        
        if (video.muted) {
            video.muted = false;
            // Unmute (Speaker On) Icon
            iconContainer.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 5L6 9H2v6h4l5 4V5z"></path><path d="M19.07 4.93a10 10 0 0 1 0 14.14"></path><path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path></svg>
            `;
        } else {
            video.muted = true;
            // Mute (Speaker Off) Icon
            iconContainer.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 5L6 9H2v6h4l5 4V5z"></path><line x1="23" y1="9" x2="17" y2="15"></line><line x1="17" y1="9" x2="23" y2="15"></line></svg>
            `;
        }
    }
</script>

    <div class="bg-white py-20 px-6 md:px-20">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">
            
            <div class="flex flex-col space-y-8">
                <h4 class="text-brand-teal tracking-[0.3em] text-xs font-bold uppercase">
                    About Agrawal Eventor 
                </h4>
                
                <h1 class="text-brand-navy text-5xl md:text-7xl font-extrabold leading-[1.1]">
                    We Don't Just Decorate <br>
                    Events, <span class="text-brand-teal italic">We Create <br> Feelings</span>
                </h1>
                
                <div class="text-gray-500 text-lg leading-relaxed space-y-6 max-w-lg font-light">
                    <p>
                        Every celebration tells a story. At <strong class="text-brand-navy font-bold">AGRAWAL Eventor</strong>, we listen, imagine, and design décor that reflects your emotions — not templates.
                    </p>
                    <p>
                        From intimate home surprises to grand wedding celebrations, our team brings creativity, precision, and passion to every setup.
                    </p>
                </div>

                <div class="pt-4">
                    <button class="bg-brand-teal text-white px-12 py-4 rounded-full font-bold text-sm transition-all hover:scale-105 shadow-lg shadow-teal-900/20">
                        Know More About Us
                    </button>
                </div>
            </div>

           <div class="relative group max-w-5xl mx-auto my-20">
    
    <div class="absolute -top-8 -right-8 -bottom-8 -left-8 border-[3px] border-yellow-400 rounded-[2.5rem] -z-0 transition-transform duration-500 group-hover:scale-105"></div>
    
    <div class="relative z-10 shadow-[0_35px_60px_-15px_rgba(0,0,0,0.3)] rounded-[2rem] overflow-hidden">
        <img 
            src="{{ asset('image/home/welcomehome.jpg') }}" 
            alt="Luxury Event Decoration" 
            class="w-full h-full object-cover block transition-transform duration-1000 group-hover:scale-110"
        />
    </div>
    
</div>
            </div>

        </div>
    </div>

    <div class="bg-slate-50 py-20 border-y border-slate-100">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 px-6">
            
            <div class="bg-white rounded-2xl shadow-sm p-10 text-center border border-slate-100 hover:shadow-xl transition-shadow group">
                <h2 class="text-4xl font-extrabold text-brand-teal group-hover:scale-110 transition-transform">5+ Years</h2>
                <div class="w-10 h-1 bg-brand-yellow mx-auto my-4"></div>
                <p class="text-gray-500 font-medium tracking-wide">Event Styling Experience</p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm p-10 text-center border border-slate-100 hover:shadow-xl transition-shadow group">
                <h2 class="text-4xl font-extrabold text-brand-teal group-hover:scale-110 transition-transform">100%</h2>
                <div class="w-10 h-1 bg-brand-yellow mx-auto my-4"></div>
                <p class="text-gray-500 font-medium tracking-wide">Customized Décor</p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm p-10 text-center border border-slate-100 hover:shadow-xl transition-shadow group">
                <h2 class="text-4xl font-extrabold text-brand-teal group-hover:scale-110 transition-transform">On-Time</h2>
                <div class="w-10 h-1 bg-brand-yellow mx-auto my-4"></div>
                <p class="text-gray-500 font-medium tracking-wide">Flawless Execution</p>
            </div>

        </div>

        <!-- <div class="text-center mt-24 px-6">
            <h1 class="text-4xl md:text-6xl font-black text-brand-navy tracking-tight">
                Our Featured Work
            </h1>

            <p class="text-gray-500 mt-6 text-xl font-light max-w-2xl mx-auto">
                A glimpse of our recent event decorations crafted with creativity and care.
            </p>

            <div class="w-24 h-1.5 bg-brand-yellow mx-auto mt-8 rounded-full"></div>
        </div> -->
    </div>
 <script src="https://cdn.tailwindcss.com"></script>

<section class="bg-gray-100 py-16">
<div class="max-w-7xl mx-auto px-4">

    <!-- Title -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-900">Our Featured Work</h1>
        <p class="text-gray-600 mt-3">
            A glimpse of our recent event decorations crafted with creativity and care.
        </p>
        <div class="w-12 h-1 bg-yellow-400 mx-auto mt-4 rounded"></div>
    </div>

    <!-- 🔥 CATEGORY 1 -->
    <div class="mb-12">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-teal-800">Birthday Party Decorations</h2>
            <a href="#" class="border border-teal-800 px-5 py-2 rounded-full hover:bg-teal-800 hover:text-white">
                Contact for Services
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Images -->
            <img src="./image/home/birthday01.avif" class="h-64 w-full object-cover rounded-lg hover:scale-110 transition">
            <img src="./image/home/birthday02.avif" class="h-64 w-full object-cover rounded-lg hover:scale-110 transition">
            <img src="./image/home/birthday03.avif" class="h-64 w-full object-cover rounded-lg hover:scale-110 transition">
            <img src="./image/home/birthday04.avif" class="h-64 w-full object-cover rounded-lg hover:scale-110 transition">
        </div>
    </div>

    <!-- 🔥 CATEGORY 2 -->  
    <div class="mb-12">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-teal-800">Baby Shower Decorations</h2>
            <a href="#" class="border border-teal-800 px-5 py-2 rounded-full hover:bg-teal-800 hover:text-white">
                Contact for Services
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <img src="./image/home/baby01.webp" class="h-64 w-full object-cover rounded-lg hover:scale-110 transition">
            <img src="./image/home/baby02.webp" class="h-64 w-full object-cover rounded-lg hover:scale-110 transition">
            <img src="./image/home/baby03.webp" class="h-64 w-full object-cover rounded-lg hover:scale-110 transition">
            <img src="./image/home/baby04.webp" class="h-64 w-full object-cover rounded-lg hover:scale-110 transition">
        </div>
    </div>

    <!-- 🔥 CATEGORY 3 -->
    <div class="mb-12">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-teal-800">Ring Ceremony Decorations</h2>
            <a href="#" class="border border-teal-800 px-5 py-2 rounded-full hover:bg-teal-800 hover:text-white">
                Contact for Services
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <img src="./image/home/ringC01.jpg" class="h-64 w-full object-cover rounded-lg hover:scale-110 transition">
            <img src="./image/home/ringC02.avif" class="h-64 w-full object-cover rounded-lg hover:scale-110 transition">
            <img src="./image/home/ringC03.avif" class="h-64 w-full object-cover rounded-lg hover:scale-110 transition">
            <img src="./image/home/ringC04.avif" class="h-64 w-full object-cover rounded-lg hover:scale-110 transition">
        </div>
    </div>

    <!-- 🔥 CATEGORY 4 -->
    <div class="mb-12">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-teal-800">Anniversary Decorations</h2>
            <a href="#" class="border border-teal-800 px-5 py-2 rounded-full hover:bg-teal-800 hover:text-white">
                Contact for Services
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <img src="./image/home/wedding01.webp" class="h-64 w-full object-cover rounded-lg hover:scale-110 transition">
            <img src="./image/home/wedding02.avif" class="h-64 w-full object-cover rounded-lg hover:scale-110 transition">
            <img src="./image/home/wedding03.avif" class="h-64 w-full object-cover rounded-lg hover:scale-110 transition">
            <img src="./image/home/wedding04.jpg" class="h-64 w-full object-cover rounded-lg hover:scale-110 transition">
        </div>
    </div>

</div>
</section>
@include('partials.wlc')    
<div class="space-y-10">
    <h1 class="text-center text-4xl font-bold">Tell Us About Your Event</h1>
@include('partials.contact')
</div>
<div class="w-full py-10 bg-white text-center border-t border-gray-100">
        
    @endsection

</body>
</html>