<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | Agrawal Eventors</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-yellow': '#FFCC00',
                        'brand-navy': '#0F172A',
                    },
                    fontFamily: { sans: ['Poppins', 'sans-serif'] },
                }
            }
        }
    </script>
    <style>
        .gallery-item:hover .overlay { opacity: 1; }
    </style>
</head>
<body class="bg-white font-sans antialiased text-slate-800">
@extends('layouts.app')

    <section class="relative h-[40vh] flex items-center bg-cover bg-center" 
             style="background-image: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.8)), url('https://images.unsplash.com/photo-1469334031218-e382a71b716b?auto=format&fit=crop&q=80');">
        <div class="container mx-auto px-6 lg:px-20 text-center">
            <span class="text-brand-yellow uppercase tracking-[0.3em] font-bold text-xs">Visual Journey</span>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mt-2">Our <span class="text-brand-yellow">Gallery</span></h1>
            <div class="w-20 h-1 bg-brand-yellow mx-auto mt-6 rounded-full"></div>
        </div>
    </section>

    <section class="py-16 lg:py-24">
        <div class="container mx-auto px-6 lg:px-20">
            
            <div class="flex flex-wrap justify-center gap-4 mb-16">
                <button class="px-6 py-2 rounded-full bg-brand-navy text-white font-medium shadow-lg">All Events</button>
                <button class="px-6 py-2 rounded-full bg-slate-100 text-slate-600 font-medium hover:bg-brand-yellow hover:text-black transition-all">Weddings</button>
                <button class="px-6 py-2 rounded-full bg-slate-100 text-slate-600 font-medium hover:bg-brand-yellow hover:text-black transition-all">Corporate</button>
                <button class="px-6 py-2 rounded-full bg-slate-100 text-slate-600 font-medium hover:bg-brand-yellow hover:text-black transition-all">Parties</button>
            </div>

            <div class="columns-1 md:columns-2 lg:columns-3 gap-6 space-y-6">
                
                <div class="relative overflow-hidden rounded-2xl group gallery-item transition-all duration-500">
                    <img src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?auto=format&fit=crop&q=80" class="w-full h-auto group-hover:scale-110 transition-transform duration-700" alt="Event">
                    <div class="overlay absolute inset-0 bg-brand-navy/60 opacity-0 flex flex-col justify-end p-8 transition-opacity duration-500">
                        <span class="text-brand-yellow font-bold text-sm tracking-widest uppercase">Wedding Decor</span>
                        <h3 class="text-white text-xl font-bold">Royal Garden Setup</h3>
                    </div>
                </div>

                <div class="relative overflow-hidden rounded-2xl group gallery-item transition-all duration-500">
                    <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?auto=format&fit=crop&q=80" class="w-full h-auto group-hover:scale-110 transition-transform duration-700" alt="Event">
                    <div class="overlay absolute inset-0 bg-brand-navy/60 opacity-0 flex flex-col justify-end p-8 transition-opacity duration-500">
                        <span class="text-brand-yellow font-bold text-sm tracking-widest uppercase">Corporate</span>
                        <h3 class="text-white text-xl font-bold">Annual Tech Summit</h3>
                    </div>
                </div>

                <div class="relative overflow-hidden rounded-2xl group gallery-item transition-all duration-500">
                    <img src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?auto=format&fit=crop&q=80" class="w-full h-auto group-hover:scale-110 transition-transform duration-700" alt="Event">
                    <div class="overlay absolute inset-0 bg-brand-navy/60 opacity-0 flex flex-col justify-end p-8 transition-opacity duration-500">
                        <span class="text-brand-yellow font-bold text-sm tracking-widest uppercase">Celebrations</span>
                        <h3 class="text-white text-xl font-bold">Elegant Birthday Bash</h3>
                    </div>
                </div>

                <div class="relative overflow-hidden rounded-2xl group gallery-item transition-all duration-500">
                    <img src="https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?auto=format&fit=crop&q=80" class="w-full h-auto group-hover:scale-110 transition-transform duration-700" alt="Event">
                    <div class="overlay absolute inset-0 bg-brand-navy/60 opacity-0 flex flex-col justify-end p-8 transition-opacity duration-500">
                        <span class="text-brand-yellow font-bold text-sm tracking-widest uppercase">Night Events</span>
                        <h3 class="text-white text-xl font-bold">Glow Night Party</h3>
                    </div>
                </div>

                <div class="relative overflow-hidden rounded-2xl group gallery-item transition-all duration-500">
                    <img src="https://images.unsplash.com/photo-1478147427282-58a87a120781?auto=format&fit=crop&q=80" class="w-full h-auto group-hover:scale-110 transition-transform duration-700" alt="Event">
                    <div class="overlay absolute inset-0 bg-brand-navy/60 opacity-0 flex flex-col justify-end p-8 transition-opacity duration-500">
                        <span class="text-brand-yellow font-bold text-sm tracking-widest uppercase">Stage Decor</span>
                        <h3 class="text-white text-xl font-bold">Classic White Stage</h3>
                    </div>
                </div>

                <div class="relative overflow-hidden rounded-2xl group gallery-item transition-all duration-500">
                    <img src="https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&q=80" class="w-full h-auto group-hover:scale-110 transition-transform duration-700" alt="Event">
                    <div class="overlay absolute inset-0 bg-brand-navy/60 opacity-0 flex flex-col justify-end p-8 transition-opacity duration-500">
                        <span class="text-brand-yellow font-bold text-sm tracking-widest uppercase">Mandap</span>
                        <h3 class="text-white text-xl font-bold">Floral Wedding Mandap</h3>
                    </div>
                </div>

            </div>

            <div class="mt-20 text-center">
                <a href="#" class="inline-block bg-brand-navy text-white px-12 py-4 rounded-full font-bold hover:bg-brand-yellow hover:text-black transition-all shadow-xl">
                    Load More Moments
                </a>
            </div>
        </div>
    </section>

    <!-- <section class="py-16 bg-brand-yellow">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-extrabold text-black mb-6">Inspired by our work?</h2>
            <p class="text-black/70 mb-8 max-w-xl mx-auto">Let’s work together to make your next event as extraordinary as these.</p>
            <a href="#" class="bg-brand-navy text-white px-10 py-3 rounded-full font-bold hover:scale-105 transition-all">Get in Touch</a>
        </div>
    </section> -->

</body>
</html>