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
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-white text-slate-800 antialiased overflow-x-hidden">
@extends('layouts.app')
    <section class="relative h-[75vh] min-h-[550px] flex items-center text-white bg-cover bg-center" 
             style="background-image: linear-gradient(rgba(15, 23, 42, 0.7), rgba(15, 23, 42, 0.7)), url('https://images.unsplash.com/photo-1519167758481-83f550bb49b3?auto=format&fit=crop&q=80');">
        
        <div class="container mx-auto px-6 lg:px-20">
            <span class="inline-block bg-brand-yellow text-black px-4 py-1 rounded-full text-[12px] font-bold mb-6 uppercase tracking-wider">
                Agrawal Eventors
            </span>

            <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold leading-[1.1] mb-6">
                Events That Feel <br><span class="text-brand-yellow">Extraordinary</span>
            </h1>

            <p class="max-w-xl text-lg opacity-90 mb-10 leading-relaxed font-light">
                We design and execute immersive event experiences — blending creativity, 
                precision, and elegance to transform every occasion into something unforgettable.
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="./contact" class="bg-brand-yellow text-black px-10 py-3.5 rounded-full font-bold hover:bg-yellow-400 transition-all shadow-lg">
                    Plan Your Event
                </a>
                <a href="./gallery" class="bg-transparent border border-white/50 px-10 py-3.5 rounded-full font-bold hover:bg-white/10 transition-all">
                    View Our Gallery
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 lg:py-32">
        <div class="container mx-auto px-6 lg:px-20">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
                
                <div class="w-full lg:w-1/2">
                    <div class="p-4 border-2 border-brand-yellow rounded-[2.5rem] relative">
                        <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?auto=format&fit=crop&q=80" 
                             alt="Event Setup" 
                             class="rounded-[1.8rem] w-full shadow-2xl object-cover">
                    </div>
                </div>

                <div class="w-full lg:w-1/2">
                    <span class="text-brand-yellow uppercase tracking-[0.3em] font-bold text-xs">OUR STORY</span>
                    <h2 class="text-3xl md:text-5xl font-extrabold text-brand-navy mt-4 mb-8 leading-tight">
                        Where Passion Meets<br>Purposeful Design
                    </h2>
                    
                    <div class="space-y-6 text-gray-600 leading-relaxed text-lg font-light">
                        <p>
                            <strong class="text-brand-navy font-semibold">Agrawal Eventors</strong> was founded with a simple belief — 
                            <span class="text-brand-navy font-medium text-black">every event deserves to feel special, personal, and unforgettable.</span> 
                            What started as a passion for creative décor has grown into a full-scale event styling and execution brand.
                        </p>
                        
                        <p>
                            From intimate celebrations to large-scale weddings and corporate events, our journey has been defined by attention to detail, thoughtful planning, and a commitment to delivering experiences — not just decorations.
                        </p>
                    </div>

                    <div class="mt-12 pl-8 border-l-[3px] border-cyan-800 italic font-medium text-brand-navy text-xl leading-snug">
                        "We don't just decorate venues — we transform moments into memories."
                    </div>
                </div>
            </div>
        </div>
    </section>
     <h1 class="font-bold text-center text-6xl my-10"> 

@include('partials.card')
<section class="bg-gray-100 py-16">

    <div class="max-w-6xl mx-auto px-4 text-center">

        <p class="text-yellow-500 font-semibold uppercase tracking-wide">
            Our Journey in Numbers
        </p>

        <h1 class="text-4xl md:text-5xl font-bold mt-2 text-gray-900">
            Experience That <span class="text-teal-800">Builds Trust</span>
        </h1>

        <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
            Measurable milestones that reflect our dedication, consistency, and passion for events.
        </p>

        <!-- Cards -->
        <div class="grid md:grid-cols-4 gap-6 mt-12">

            <div class="bg-white rounded-2xl shadow-md p-8">
                <h2 class="text-4xl font-bold text-teal-800">8+</h2>
                <div class="w-10 h-1 bg-yellow-400 mx-auto mt-2"></div>
                <p class="text-gray-600 mt-3">Years of Experience</p>
            </div>

            <div class="bg-white rounded-2xl shadow-md p-8">
                <h2 class="text-4xl font-bold text-teal-800">500+</h2>
                <div class="w-10 h-1 bg-yellow-400 mx-auto mt-2"></div>
                <p class="text-gray-600 mt-3">Events Executed</p>
            </div>

            <div class="bg-white rounded-2xl shadow-md p-8">
                <h2 class="text-4xl font-bold text-teal-800">50+</h2>
                <div class="w-10 h-1 bg-yellow-400 mx-auto mt-2"></div>
                <p class="text-gray-600 mt-3">Venues & Cities</p>
            </div>

            <div class="bg-white rounded-2xl shadow-md p-8">
                <h2 class="text-4xl font-bold text-teal-800">100%</h2>
                <div class="w-10 h-1 bg-yellow-400 mx-auto mt-2"></div>
                <p class="text-gray-600 mt-3">Client Satisfaction Focus</p>
            </div>

        </div>

        <!-- Quote -->
        <p class="mt-12 italic text-gray-600 max-w-3xl mx-auto">
            "Behind every successful event is not just décor, but dedication, discipline, and a deep respect for moments."
        </p>

    </div>

</section>


<!-- Founder Section -->
<section class="py-16 bg-white">

    <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">

        <!-- Image -->
        <div class="border-2 border-yellow-400 p-3 rounded-2xl">
            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&q=80"
                 class="rounded-xl w-full"
                 alt="Founder">
        </div>

        <!-- Content -->
        <div>

            <p class="text-yellow-500 font-semibold uppercase">
                From The Founder
            </p>

            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">
                Building Events with <span class="text-teal-800">Heart & Integrity</span>
            </h2>

            <p class="text-gray-600 mt-4 leading-relaxed">
                At Agrawal Eventors, we believe that every event tells a story — a story of people,
                emotions, and meaningful moments. Our journey has always been driven by thoughtful design,
                honest communication, and flawless execution.
            </p>

            <p class="text-gray-600 mt-4 leading-relaxed">
                What truly sets us apart is our team — passionate professionals who treat every celebration as their own.
                Together, we strive to deliver experiences that feel personal, elegant, and unforgettable.
            </p>

            <!-- Founder Name -->
            <div class="mt-6 border-l-4 border-teal-800 pl-4">
                <h4 class="font-bold text-lg">— Founder Name</h4>
                <p class="text-gray-500 text-sm">
                    Founder & Creative Director<br>
                    Agrawal Eventors
                </p>
            </div>

        </div>

    </div>

</section>
</body>
</html>