<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News | VISCOSUPPORT - Leading Maritime Solutions &amp; Shipping Services | Barge: IMO 8768919 MMSI:375343000</title>
    <link rel="icon" href="./images/visco icon.png" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

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

    <section class="relative h-[55vh] flex items-center justify-center text-center overflow-hidden">

        <!-- Background -->
        <div class="absolute inset-0">
            <img src="./images/img3.jpg" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#121332]/90"></div>
        </div>

        <!-- Glow Effects -->
        <div class="absolute top-0 left-0 w-72 h-72 bg-viscoYellow/20 blur-3xl rounded-full"></div>
        <div class="absolute bottom-0 right-0 w-72 h-72 bg-viscoYellow/10 blur-3xl rounded-full"></div>

        <!-- Content -->
        <div class="relative z-10 max-w-3xl px-6">

            <!-- Breadcrumb -->
            <div class="mb-4 text-gray-300 text-sm">
                <a href="./" class="hover:text-viscoYellow transition">Home</a>
                <span class="mx-2">/</span>
                <span class="text-viscoYellow">News & Insights</span>
            </div>

            <!-- Heading -->
            <h1 class="text-4xl md:text-6xl font-bold leading-tight text-white">
                Explore <span class="text-viscoYellow">Our Insights</span>
            </h1>

            <!-- Description -->
            <p class="mt-5 text-gray-300 text-lg">
                Stay up-to-date with the latest industry news, expert analysis, and updates from Visco Support Services. Discover insights that drive innovation and informed decision-making.
            </p>

        </div>

    </section>

    <section class="news-section py-20 bg-[#0b122e] text-white">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Articles Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

                <div class="blog-card bg-white/5 backdrop-blur-md rounded-2xl overflow-hidden shadow-lg hover:scale-105 transition transform flex flex-col h-full">
                    <div class="relative">
                        <img src="images/happy-easter2.jpeg"
                            alt="Sea Clearing: Removing Dirties and Oil"
                            class="w-full h-64 object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-black/25"></div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex justify-between text-sm text-gray-300 mb-2">
                            <span><i class="fas fa-user-circle mr-1 text-viscoYellow"></i> Admin</span>
                            <span><i class="fas fa-calendar-alt mr-1 text-viscoYellow"></i> 05 Apr 2026</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2 hover:text-viscoYellow transition">
                            Happy Easter Celebration : Viscosupport
                        </h3>
                        <p class="text-gray-300 mb-4 flex-1">
                            Visco Support extends warm Easter greetings, celebrating a season of renewal, hope, and new beginnings. We appreciate the continued trust of our clients and partners as we remain committed to delivering excellence in all our services.
                        </p>
                        <a href="#"
                            class="inline-block w-full text-center bg-viscoYellow text-viscoBlue font-semibold py-3 rounded-lg hover:scale-105 transition transform shadow mt-auto">
                            READ MORE
                        </a>
                    </div>
                </div>

                <div class="blog-card bg-white/5 backdrop-blur-md rounded-2xl overflow-hidden shadow-lg hover:scale-105 transition transform flex flex-col h-full">
                    <div class="relative">
                        <img src="images/visco-anniversary.jpeg"
                            alt="Sea Clearing: Removing Dirties and Oil"
                            class="w-full h-64 object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-black/25"></div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex justify-between text-sm text-gray-300 mb-2">
                            <span><i class="fas fa-user-circle mr-1 text-viscoYellow"></i> Admin</span>
                            <span><i class="fas fa-calendar-alt mr-1 text-viscoYellow"></i> 25 Mar 2026</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2 hover:text-viscoYellow transition">
                            Celebrating 25 Years of Excellence : Viscosupport
                        </h3>
                        <p class="text-gray-300 mb-4 flex-1">
                            Visco Support proudly marks its 25th anniversary, celebrating a legacy of innovation, reliability, and outstanding service delivery. We thank our clients, partners, and team members for being part of this remarkable journey.
                        </p>
                        <a href="#"
                            class="inline-block w-full text-center bg-viscoYellow text-viscoBlue font-semibold py-3 rounded-lg hover:scale-105 transition transform shadow mt-auto">
                            READ MORE
                        </a>
                    </div>
                </div>

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

        </div>
    </section>

    <!-- Clients Section -->
    <?php include('inc/clients.php'); ?>

    <?php include('inc/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

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

    document.addEventListener("DOMContentLoaded", function() {

        Fancybox.bind("[data-fancybox]", {
            on: {
                reveal: () => {
                    const video = document.getElementById("myVideo");
                    if (video) {
                        video.currentTime = 0;
                        video.play().catch(() => {});
                    }
                },
                closing: () => {
                    const video = document.getElementById("myVideo");
                    if (video) {
                        video.pause();
                    }
                }
            }
        });

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