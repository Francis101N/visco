<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | VISCOSUPPORT - Leading Maritime Solutions &amp; Shipping Services | Barge: IMO 8768919 MMSI:375343000</title>
    <link rel="icon" href="./images/visco icon.png" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@500;600;700;800&display=swap"
        rel="stylesheet">


    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        viscoBlue: '#121332',
                        viscoYellow: '#fdbb00',
                    },

                    fontFamily: {
                        inter: ['Inter', 'sans-serif'],
                        montserrat: ['Montserrat', 'sans-serif'],
                    },

                    keyframes: {
                        slideInLeft: {
                            '0%': {
                                transform: 'translateX(-80px)',
                                opacity: '0'
                            },
                            '100%': {
                                transform: 'translateX(0)',
                                opacity: '1'
                            }
                        },

                        zoomSlow: {
                            '0%': {
                                transform: 'scale(1)'
                            },
                            '100%': {
                                transform: 'scale(1.1)'
                            }
                        },

                        fadeIn: {
                            '0%': {
                                opacity: '0'
                            },
                            '100%': {
                                opacity: '1'
                            }
                        }
                    },

                    animation: {
                        slideInLeft: 'slideInLeft 0.9s ease-out forwards',
                        zoomSlow: 'zoomSlow 12s ease-in-out forwards',
                        fadeIn: 'fadeIn 1s ease-in forwards'
                    }
                }
            }
        }
    </script>
</head>
<style>
    body {
        background-color: #121332;
    }
</style>

<body>

    <?php include('inc/header.php'); ?>

    <!-- Hero Carousel -->
    <section class="relative w-full h-[90vh] overflow-hidden">

        <!-- Slide 1 -->
        <div class="slide absolute inset-0 bg-cover bg-center opacity-100 transition-opacity duration-1000 animate-zoomSlow"
            style="background-image: url('./images/1856634872984222.jpeg');">
            <div class="absolute inset-0 bg-black/60"></div>
            <div class="relative z-10 h-full flex items-center">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="slide-text backdrop-blur-md bg-white/10 p-8 rounded-2xl max-w-xxl text-white opacity-0 shadow-lg">
                        <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                            Integrated Engineering, Procurement & Construction (EPC) Services.
                        </h1>
                        <p class="mt-4 text-gray-200">
                            Our Business Responsibility is the Environment.
                        </p>
                        <a href="#"
                            class="inline-block mt-6 px-6 py-3 bg-[#fdbb00] text-[#121332] font-semibold rounded-lg hover:scale-105 transition">
                            Explore Services
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide absolute inset-0 bg-cover bg-center opacity-0 transition-opacity duration-1000 animate-zoomSlow"
            style="background-image: url('./images/1857995073420080.jpeg');">
            <div class="absolute inset-0 bg-black/60"></div>
            <div class="relative z-10 h-full flex items-center">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="slide-text backdrop-blur-md bg-white/10 p-8 rounded-2xl max-w-xl text-white opacity-0 shadow-lg">
                        <h1 class="text-4xl md:text-5xl font-bold">
                            Strength in Diversity.
                        </h1>
                        <p class="mt-4 text-gray-200">
                            Our Deepwater experience puts us ahead of our peers.
                        </p>
                        <a href="#"
                            class="inline-block mt-6 px-6 py-3 bg-[#fdbb00] text-[#121332] font-semibold rounded-lg hover:scale-105 transition">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide absolute inset-0 bg-cover bg-center opacity-0 transition-opacity duration-1000 animate-zoomSlow"
            style="background-image: url('./images/WhatsApp Image 2026-03-31 at 10.13.01 AM.jpeg');">
            <div class="absolute inset-0 bg-black/60"></div>
            <div class="relative z-10 h-full flex items-center">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="slide-text backdrop-blur-md bg-white/10 p-8 rounded-2xl max-w-xl text-white opacity-0 shadow-lg">
                        <h1 class="text-4xl md:text-5xl font-bold">
                            Proven Competence.
                        </h1>
                        <p class="mt-4 text-gray-200">
                            Our competence has been tested over time, delivering consistent performance, reliability, and excellence across our operations.
                        </p>
                        <a href="#"
                            class="inline-block mt-6 px-6 py-3 bg-[#fdbb00] text-[#121332] font-semibold rounded-lg hover:scale-105 transition">
                            Discover More
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Arrows -->
        <button id="prev" class="absolute left-5 top-1/2 -translate-y-1/2 text-white text-3xl z-20">
            ❮
        </button>
        <button id="next" class="absolute right-5 top-1/2 -translate-y-1/2 text-white text-3xl z-20">
            ❯
        </button>

        <!-- Progress Bars -->
        <div class="absolute bottom-0 left-0 w-full flex space-x-1 z-20">
            <div class="bar h-1 bg-[#fdbb00] w-0 transition-all duration-[5000ms]"></div>
            <div class="bar h-1 bg-[#fdbb00] w-0 transition-all duration-[5000ms]"></div>
            <div class="bar h-1 bg-[#fdbb00] w-0 transition-all duration-[5000ms]"></div>
        </div>

    </section>

    <!-- About Us / Services Section -->
    <section class="relative bg-viscoBlue text-white py-20">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Title -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold tracking-tight">
                    OUR SERVICES
                </h2>
                <span class="block mt-2 w-24 h-1 bg-viscoYellow mx-auto rounded"></span>
            </div>

            <!-- Content -->
            <div class="flex flex-col lg:flex-row items-center gap-12">

                <!-- Left Column: Text & Features -->
                <div class="lg:w-1/2 space-y-8">

                    <!-- Years of Experience -->
                    <div class="flex items-center gap-4">
                        <span class="text-6xl font-bold text-viscoYellow">25</span>
                        <h3 class="text-xl md:text-2xl font-semibold">Years of Professional Experience</h3>
                    </div>

                    <p class="text-gray-300 text-lg">
                        The Difference We Deliver
                    </p>

                    <!-- Feature Cards -->
                    <div class="space-y-6">

                        <div class="flex gap-4 items-start bg-white/10 p-6 rounded-2xl shadow-lg hover:bg-white/20 transition">
                            <div class="text-viscoYellow text-3xl">
                                <i class="fas fa-cogs"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-xl mb-1">Design Engineering Services</h4>
                                <p class="text-gray-300">
                                    Smart, efficient, and innovative. Our engineering solutions are tailored for offshore and onshore projects, ensuring safety, compliance, and peak performance.
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4 items-start bg-white/10 p-6 rounded-2xl shadow-lg hover:bg-white/20 transition">
                            <div class="text-viscoYellow text-3xl">
                                <i class="fas fa-tools"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-xl mb-1">Offshore Facility Maintenance</h4>
                                <p class="text-gray-300">
                                    From inspections to repairs, we keep your offshore facilities running smoothly with proactive maintenance that minimizes downtime and maximizes efficiency.
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4 items-start bg-white/10 p-6 rounded-2xl shadow-lg hover:bg-white/20 transition">
                            <div class="text-viscoYellow text-3xl">
                                <i class="fas fa-ship"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-xl mb-1">Project Material Procurement</h4>
                                <p class="text-gray-300">
                                    Reliable sourcing, timely delivery. Our procurement solutions ensure you get high-quality materials and equipment while optimizing costs.
                                </p>
                            </div>
                        </div>

                    </div>

                    <!-- Call-to-action -->
                    <a href="#"
                        class="inline-block mt-6 px-8 py-3 bg-viscoYellow text-viscoBlue font-semibold rounded-lg hover:scale-105 transition transform">
                        Read More
                    </a>

                </div>

                <!-- Right Column: Image Carousel with Yellow Border -->
                <div class="lg:w-1/2 w-full">
                    <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                        <div class="carousel flex transition-transform duration-500">

                            <!-- Slide 1 -->
                            <div class="min-w-full flex justify-center">
                                <img src="https://viscosupport.com/upload/about/carousel-1824231649363039.jpg"
                                    alt="About Us Image"
                                    class="w-full max-w-md h-auto object-cover rounded-2xl border-4 border-viscoYellow shadow-xl">
                            </div>

                            <!-- Slide 2 -->
                            <div class="min-w-full flex justify-center">
                                <img src="https://viscosupport.com/upload/about/carousel-1824231649382614.jpg"
                                    alt="About Us Image"
                                    class="w-full max-w-md h-auto object-cover rounded-2xl border-4 border-viscoYellow shadow-xl">
                            </div>

                            <!-- Slide 3 -->
                            <div class="min-w-full flex justify-center">
                                <img src="https://viscosupport.com/upload/about/carousel-1824231649396307.jpg"
                                    alt="About Us Image"
                                    class="w-full max-w-md h-auto object-cover rounded-2xl border-4 border-viscoYellow shadow-xl">
                            </div>

                        </div>

                        <!-- Carousel Controls -->
                        <button class="absolute top-1/2 -translate-y-1/2 left-4 text-white text-2xl bg-viscoBlue/60 p-2 rounded-full hover:bg-viscoYellow/90 transition z-10 prev">
                            ❮
                        </button>
                        <button class="absolute top-1/2 -translate-y-1/2 right-4 text-white text-2xl bg-viscoBlue/60 p-2 rounded-full hover:bg-viscoYellow/90 transition z-10 next">
                            ❯
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section-two bg-viscoBlue text-white py-20">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Title -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold tracking-tight">
                    Our <span class="text-viscoYellow">Services</span>
                </h2>
                <span class="block mt-2 w-24 h-1 bg-viscoYellow mx-auto rounded"></span>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">

                <!-- Service Card 1 -->
                <div class="service-card bg-white/10 backdrop-blur-md rounded-2xl shadow-xl overflow-hidden hover:scale-105 transition transform">
                    <div class="relative">
                        <img src="https://viscosupport.com/upload/services/1830840298494532.jpg"
                            alt="Onshore/Offshore Facilities Maintenance"
                            class="w-full h-64 object-cover rounded-t-2xl border-2 border-viscoYellow shadow-lg">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 hover:text-viscoYellow transition">
                            <a href="https://viscosupport.com/service/onshoreoffshore-facilities-maintenance">
                                Onshore/Offshore Facilities Maintenance
                            </a>
                        </h3>
                        <p class="text-gray-300 mb-4">
                            We keep your operations running smoothly on land or at sea.
                        </p>
                        <a href="https://viscosupport.com/service/onshoreoffshore-facilities-maintenance"
                            class="block text-center text-viscoBlue bg-viscoYellow font-semibold px-5 py-2 rounded-lg hover:scale-105 transition transform">
                            Read More
                        </a>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="service-card bg-white/10 backdrop-blur-md rounded-2xl shadow-xl overflow-hidden hover:scale-105 transition transform">
                    <div class="relative">
                        <img src="https://viscosupport.com/upload/services/1830841632375638.jpg"
                            alt="Onshore/Offshore Construction and Installation Services"
                            class="w-full h-64 object-cover rounded-t-2xl border-2 border-viscoYellow shadow-lg">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 hover:text-viscoYellow transition">
                            <a href="https://viscosupport.com/service/onshoreoffshore-construction-and-installation-services">
                                Onshore/Offshore Construction and Installation Services
                            </a>
                        </h3>
                        <p class="text-gray-300 mb-4">
                            We build it right! on land, offshore, or anywhere your project goes.
                        </p>
                        <a href="https://viscosupport.com/service/onshoreoffshore-construction-and-installation-services"
                            class="block text-center text-viscoBlue bg-viscoYellow font-semibold px-5 py-2 rounded-lg hover:scale-105 transition transform">
                            Read More
                        </a>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="service-card bg-white/10 backdrop-blur-md rounded-2xl shadow-xl overflow-hidden hover:scale-105 transition transform">
                    <div class="relative">
                        <img src="https://viscosupport.com/upload/services/1830844207595831.jpg"
                            alt="Pre-Commissioning and Commissioning"
                            class="w-full h-64 object-cover rounded-t-2xl border-2 border-viscoYellow shadow-lg">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 hover:text-viscoYellow transition">
                            <a href="https://viscosupport.com/service/pre-commissioning-and-commissioning">
                                Pre-Commissioning and Commissioning
                            </a>
                        </h3>
                        <p class="text-gray-300 mb-6">
                            We test, check, and fine-tune! so everything works from day one.
                        </p>
                        <a href="https://viscosupport.com/service/pre-commissioning-and-commissioning"
                            class="block text-center text-viscoBlue bg-viscoYellow font-semibold px-6 py-2 rounded-lg hover:scale-105 transition transform mx-auto">
                            Read More
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="relative bg-cover bg-center py-20"
        style="background-image: url('https://viscosupport.com/frontend/assets/images/background/1.jpg');">
        <!-- Dark overlay -->
        <div class="absolute inset-0 bg-black/60"></div>

        <!-- Content -->
        <div class="relative z-10 max-w-4xl mx-auto px-6 text-center text-white">

            <!-- Title -->
            <span class="uppercase tracking-widest text-viscoYellow font-semibold">Let’s Collaborate</span>

            <!-- Main Heading -->
            <h2 class="mt-4 text-3xl md:text-4xl font-bold leading-tight">
                Delivering <span class="text-viscoYellow">Top-Quality</span> Results That Exceed Your Expectations.
            </h2>

            <!-- Phone Number -->
            <div class="mt-6 text-xl md:text-2xl font-medium">
                <a href="tel:(01) 453 7012" class="hover:text-viscoYellow transition">(01) 453 7012</a>
            </div>

            <!-- CTA Button -->
            <a href="https://viscosupport.com/contact-us"
                class="mt-8 inline-block bg-viscoYellow text-viscoBlue font-semibold px-8 py-4 rounded-xl text-lg hover:scale-105 transition transform shadow-lg">
                Request A Quote
            </a>

        </div>
    </section>


    <!-- Team Section -->
    <section class="team-section py-20 bg-[#0b122e] text-white">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold">
                    Expert <span class="text-viscoYellow">Team Members</span>
                </h2>
                <div class="mx-auto mt-3 w-20 h-1 bg-gradient-to-r from-yellow-300/30 via-viscoYellow to-yellow-300/30 rounded"></div>
            </div>

            <!-- Team Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

                <!-- Team Member 1 -->
                <div class="team-member bg-white/5 backdrop-blur-md rounded-2xl p-6 text-center shadow-lg hover:scale-105 transition transform">
                    <div class="mb-4">
                        <img src="./images/iyk.jpeg"
                            alt="Team Member"
                            class="w-36 h-36 object-cover rounded-full mx-auto border-2 border-viscoYellow shadow-xl">
                    </div>
                    <h3 class="text-xl font-semibold">Edwin Iyk Anyadigibe</h3>
                    <p class="text-viscoYellow font-medium mb-4">Chief Executive Officer</p>
                    <p class="text-gray-300 italic">"Leadership is about vision, dedication, and inspiring others to succeed."</p>
                </div>

                <!-- Team Member 2 -->
                <div class="team-member bg-white/5 backdrop-blur-md rounded-2xl p-6 text-center shadow-lg hover:scale-105 transition transform">
                    <div class="mb-4">
                        <img src="./images/reverend.jpeg"
                            alt="Team Member"
                            class="w-36 h-36 object-cover rounded-full mx-auto border-2 border-viscoYellow shadow-xl">
                    </div>
                    <h3 class="text-xl font-semibold">Daniel Ubeh</h3>
                    <p class="text-viscoYellow font-medium mb-4">Project Director</p>
                    <p class="text-gray-300 italic">"Efficiency and innovation are the backbone of every successful project."</p>
                </div>

                <!-- Team Member 3 -->
                <div class="team-member bg-white/5 backdrop-blur-md rounded-2xl p-6 text-center shadow-lg hover:scale-105 transition transform">
                    <div class="mb-4">
                        <img src="./images/Benjamin.png"
                            alt="Team Member"
                            class="w-36 h-36 object-cover rounded-full mx-auto border-2 border-viscoYellow shadow-xl">
                    </div>
                    <h3 class="text-xl font-semibold">Benjamin Akande</h3>
                    <p class="text-viscoYellow font-medium mb-4">Project Manager</p>
                    <p class="text-gray-300 italic">"Strong project management ensures goals are met with quality and timeliness."</p>
                </div>

                <!-- Team Member 4 -->
                <div class="team-member bg-white/5 backdrop-blur-md rounded-2xl p-6 text-center shadow-lg hover:scale-105 transition transform">
                    <div class="mb-4">
                        <img src="./images/segun.png"
                            alt="Team Member"
                            class="w-36 h-36 object-cover rounded-full mx-auto border-2 border-viscoYellow shadow-xl">
                    </div>
                    <h3 class="text-xl font-semibold">Segun Faniran</h3>
                    <p class="text-viscoYellow font-medium mb-4">Chief Operating Manager</p>
                    <p class="text-gray-300 italic">"Operations is about consistency. If your systems work without supervision, you’ve built something strong."</p>
                </div>

            </div>

        </div><br>
        <div class="flex justify-center mt-10">
            <a href="team-members"
                class="inline-block bg-viscoYellow text-viscoBlue font-semibold px-8 py-3 rounded-xl shadow-lg 
            hover:scale-105 hover:shadow-xl transition transform tracking-wide">
                VIEW TEAM MEMBERS
            </a>
        </div>
    </section>

    <!-- News Section -->
    <section class="news-section py-20 bg-[#0b122e] text-white">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Title -->
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold">
                    News & <span class="text-viscoYellow">Insights</span>
                </h2>
                <div class="mx-auto mt-3 w-20 h-1 bg-gradient-to-r from-yellow-300/30 via-viscoYellow to-yellow-300/30 rounded"></div>
            </div>

            <!-- Articles Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

                <!-- Article 1 -->
                <div class="blog-card bg-white/5 backdrop-blur-md rounded-2xl overflow-hidden shadow-lg hover:scale-105 transition transform flex flex-col h-full">
                    <div class="relative">
                        <img src="https://viscosupport.com/upload/news_images/1747549237_H6RkyXIMSj.png"
                            alt="Sea Clearing: Removing Dirties and Oil"
                            class="w-full h-64 object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-black/25"></div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex justify-between text-sm text-gray-300 mb-2">
                            <span><i class="fas fa-user-circle mr-1 text-viscoYellow"></i> Admin</span>
                            <span><i class="fas fa-calendar-alt mr-1 text-viscoYellow"></i> 18 May 2025</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2 hover:text-viscoYellow transition">
                            Sea Clearing: Removing Dirties and Oil
                        </h3>
                        <p class="text-gray-300 mb-4 flex-1">
                            Sea clearing involves the removal of pollutants such as oil spills, plastic waste, and other debris...
                        </p>
                        <a href="https://viscosupport.com/news/sea-clearing-removing-dirties-and-oil"
                            class="inline-block w-full text-center bg-viscoYellow text-viscoBlue font-semibold py-3 rounded-lg hover:scale-105 transition transform shadow mt-auto">
                            READ MORE
                        </a>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="blog-card bg-white/5 backdrop-blur-md rounded-2xl overflow-hidden shadow-lg hover:scale-105 transition transform flex flex-col h-full">
                    <div class="relative">
                        <img src="https://viscosupport.com/upload/news_images/1747547314_DYOdp1g6VQ.jpeg"
                            alt="Fabrication Excellence: Structural Modules Delivered to Offshore Client"
                            class="w-full h-64 object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-black/25"></div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex justify-between text-sm text-gray-300 mb-2">
                            <span><i class="fas fa-user-circle mr-1 text-viscoYellow"></i> Admin</span>
                            <span><i class="fas fa-calendar-alt mr-1 text-viscoYellow"></i> 16 May 2025</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2 hover:text-viscoYellow transition">
                            Fabrication Excellence: Structural Modules Delivered to Offshore Client
                        </h3>
                        <p class="text-gray-300 mb-4 flex-1">
                            Our fabrication yard team has delivered multiple steel structural modules, fabricated to spec and in...
                        </p>
                        <a href="https://viscosupport.com/news/fabrication-excellence-structural-modules-delivered-to-offshore-client"
                            class="inline-block w-full text-center bg-viscoYellow text-viscoBlue font-semibold py-3 rounded-lg hover:scale-105 transition transform shadow mt-auto">
                            READ MORE
                        </a>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="blog-card bg-white/5 backdrop-blur-md rounded-2xl overflow-hidden shadow-lg hover:scale-105 transition transform flex flex-col h-full">
                    <div class="relative">
                        <img src="https://viscosupport.com/upload/news_images/1747548099_CFbpi1fVnG.png"
                            alt="Precision at Sea: Successful Spool Installation for Offshore Flowline"
                            class="w-full h-64 object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-black/25"></div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex justify-between text-sm text-gray-300 mb-2">
                            <span><i class="fas fa-user-circle mr-1 text-viscoYellow"></i> Admin</span>
                            <span><i class="fas fa-calendar-alt mr-1 text-viscoYellow"></i> 16 May 2025</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2 hover:text-viscoYellow transition">
                            Precision at Sea: Successful Spool Installation for Offshore Flowline
                        </h3>
                        <p class="text-gray-300 mb-4 flex-1">
                            Visco Support recently completed a high-precision spool installation as part of an ongoing offshore...
                        </p>
                        <a href="https://viscosupport.com/news/precision-at-sea-successful-spool-installation-for-offshore-flowline"
                            class="inline-block w-full text-center bg-viscoYellow text-viscoBlue font-semibold py-3 rounded-lg hover:scale-105 transition transform shadow mt-auto">
                            READ MORE
                        </a>
                    </div>
                </div>

            </div>

        </div><br>
        <div class="flex justify-center mt-10">
            <a href="news"
                class="inline-block bg-viscoYellow text-viscoBlue font-semibold px-8 py-3 rounded-xl shadow-lg 
            hover:scale-105 hover:shadow-xl transition transform tracking-wide">
                VIEW MORE NEWS
            </a>
    </section>

    <!-- Clients Section -->
    <?php include('inc/clients.php'); ?>

    <?php include('inc/footer.php'); ?>

</body>
<script>
    const menuBtn = document.getElementById('menu-btn');
    const closeBtn = document.getElementById('close-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const overlay = document.getElementById('overlay');

    // Open menu
    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.remove('translate-x-full');
        overlay.classList.remove('hidden');
    });

    // Close menu
    closeBtn.addEventListener('click', () => {
        mobileMenu.classList.add('translate-x-full');
        overlay.classList.add('hidden');
    });

    // Close when clicking overlay
    overlay.addEventListener('click', () => {
        mobileMenu.classList.add('translate-x-full');
        overlay.classList.add('hidden');
    });

    const slides = document.querySelectorAll('.slide');
    const texts = document.querySelectorAll('.slide-text');
    const bars = document.querySelectorAll('.bar');

    let current = 0;
    let interval;

    function resetBars() {
        bars.forEach(bar => bar.style.width = '0%');
    }

    function animateBar(index) {
        setTimeout(() => {
            bars[index].style.width = '100%';
        }, 50);
    }

    function showSlide(index) {
        slides.forEach(slide => slide.classList.replace('opacity-100', 'opacity-0'));
        texts.forEach(text => {
            text.classList.remove('animate-slideInLeft', 'opacity-100');
            text.classList.add('opacity-0');
        });

        slides[index].classList.replace('opacity-0', 'opacity-100');

        setTimeout(() => {
            texts[index].classList.remove('opacity-0');
            texts[index].classList.add('opacity-100', 'animate-slideInLeft');
        }, 300);

        resetBars();
        animateBar(index);
    }

    function nextSlide() {
        current = (current + 1) % slides.length;
        showSlide(current);
    }

    function prevSlide() {
        current = (current - 1 + slides.length) % slides.length;
        showSlide(current);
    }

    // Arrow buttons
    document.getElementById('next').onclick = nextSlide;
    document.getElementById('prev').onclick = prevSlide;

    // Initialize
    showSlide(current);
    interval = setInterval(nextSlide, 5000);

    const carousel = document.querySelector('.carousel');
    const slidess = carousel.children;
    let index = 0;

    document.querySelector('.next').addEventListener('click', () => {
        index = (index + 1) % slidess.length;
        carousel.style.transform = `translateX(-${index * 100}%)`;
    });

    document.querySelector('.prev').addEventListener('click', () => {
        index = (index - 1 + slidess.length) % slidess.length;
        carousel.style.transform = `translateX(-${index * 100}%)`;
    });
</script>
<!-- Particle JS -->
<script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>
<script>
    tsParticles.load("particles-bg", {
        fpsLimit: 60,
        background: {
            color: "transparent"
        },
        particles: {
            number: {
                value: 60,
                density: {
                    enable: true,
                    area: 800
                }
            },
            color: {
                value: "#FFD700"
            },
            shape: {
                type: "circle"
            },
            opacity: {
                value: 0.3,
                random: true
            },
            size: {
                value: {
                    min: 2,
                    max: 6
                },
                random: true
            },
            move: {
                enable: true,
                speed: 1.5,
                direction: "none",
                outModes: "out"
            },
            links: {
                enable: true,
                distance: 120,
                color: "#FFD700",
                opacity: 0.2,
                width: 1
            }
        },
        interactivity: {
            events: {
                onHover: {
                    enable: true,
                    mode: "repulse"
                },
                onClick: {
                    enable: true,
                    mode: "push"
                }
            },
            modes: {
                repulse: {
                    distance: 120
                },
                push: {
                    quantity: 4
                }
            }
        },
        detectRetina: true
    });
</script>

</html>