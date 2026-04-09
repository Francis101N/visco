<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects | VISCOSUPPORT - Leading Maritime Solutions &amp; Shipping Services | Barge: IMO 8768919 MMSI:375343000</title>
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
                <span class="text-viscoYellow">Projects</span>
            </div>

            <!-- Heading -->
            <h1 class="text-4xl md:text-6xl font-bold leading-tight text-white">
                Discover <span class="text-viscoYellow">Our Projects</span>
            </h1>

            <!-- Description -->
            <p class="mt-5 text-gray-300 text-lg">
                Explore our portfolio of innovative projects showcasing Visco Support's expertise, precision, and commitment to excellence. See how we deliver solutions that drive progress and impact industries.
            </p>

            <!-- CTA -->
            <div class="mt-8 flex justify-center gap-4 flex-wrap">

                <a href="./projects"
                    class="px-6 py-3 bg-viscoYellow text-viscoBlue font-semibold rounded-lg shadow-lg hover:scale-105 transition">
                    View Projects
                </a>

                <a href="./contact"
                    class="px-6 py-3 border border-viscoYellow text-viscoYellow rounded-lg hover:bg-viscoYellow hover:text-viscoBlue transition">
                    Get in Touch
                </a>

            </div>

        </div>

    </section>

    <div class="max-w-7xl mx-auto px-4 py-20">

        <!-- Swiper Slider -->
        <div class="relative">
            <div class="swiper projects-swiper">
                <div class="swiper-wrapper">

                    <!-- Project Card 1 -->
                    <div class="swiper-slide floating-card" style="width: 50%;">
                        <div class="bg-[#2a2b47] rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-1 duration-500">
                            <figure class="overflow-hidden">
                                <img src="https://viscosupport.com/upload/projects/1821855689635395.jpg" alt="St Patrick Vessel"
                                    class="w-full h-96 object-cover hover:scale-105 transition-transform duration-500">
                            </figure>
                            <div class="p-6">
                                <h4 class="text-xl font-semibold text-white mb-2 hover:text-viscoYellow transition">
                                    <a href="https://viscosupport.com/project/st-patrick-vessel">St Patrick Vessel</a>
                                </h4>
                                <p class="text-gray-500 mb-4">St Patrick Vessel Rebuilt 2024</p>
                                <a href="https://viscosupport.com/project/st-patrick-vessel"
                                    class="inline-block bg-viscoYellow text-viscoBlue font-semibold px-5 py-2 rounded-lg hover:bg-yellow-500 transition">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Project Card 2 -->
                    <div class="swiper-slide floating-card" style="width: 50%;">
                        <div class="bg-[#2a2b47] rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-1 duration-500">
                            <figure class="overflow-hidden">
                                <img src="https://viscosupport.com/upload/projects/1821855807282463.jpg" alt="ATA"
                                    class="w-full h-96 object-cover hover:scale-105 transition-transform duration-500">
                            </figure>
                            <div class="p-6">
                                <h4 class="text-xl font-semibold text-white mb-2 hover:text-viscoYellow transition">
                                    <a href="https://viscosupport.com/project/ata">ATA</a>
                                </h4>
                                <p class="text-gray-500 mb-4">ATA Vessel Rebuilt 2024</p>
                                <a href="https://viscosupport.com/project/ata"
                                    class="inline-block bg-viscoYellow text-viscoBlue font-semibold px-5 py-2 rounded-lg hover:bg-yellow-500 transition">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Navigation Arrows -->
                <div class="swiper-button-next text-viscoBlue hover:text-viscoYellow"></div>
                <div class="swiper-button-prev text-viscoBlue hover:text-viscoYellow"></div>
            </div>
        </div>
    </div>

    <!-- Floating Animation CSS -->
    <style>
        @keyframes floatCard {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .floating-card {
            animation: floatCard 6s ease-in-out infinite;
        }
    </style>

    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        const projectsSwiper = new Swiper('.projects-swiper', {
            slidesPerView: 'auto',
            spaceBetween: 30,
            loop: true,
            centeredSlides: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                }, // 50% each card on medium+
                1024: {
                    slidesPerView: 2
                },
            },
        });
    </script>

    <section class="py-20 bg-[#0b122e] text-white">

        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold">
                    Why <span class="text-viscoYellow">Choose Us</span>
                </h2>
                <div class="w-24 h-1 bg-viscoYellow mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid lg:grid-cols-3 gap-12 items-start">

                <!-- LEFT CONTENT -->
                <div class="space-y-6">

                    <p class="text-gray-300 leading-relaxed">
                        We prioritize quality, innovation, and customer satisfaction to deliver
                        outstanding results tailored to your needs.
                    </p>

                    <p class="text-gray-400">
                        Our expertise and commitment set us apart in delivering reliable,
                        high-performance solutions across industries.
                    </p>

                    <!-- List -->
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 bg-viscoYellow rounded-full"></span>
                            Innovative and tailored solutions
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 bg-viscoYellow rounded-full"></span>
                            Commitment to excellence
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 bg-viscoYellow rounded-full"></span>
                            Expert and professional team
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 bg-viscoYellow rounded-full"></span>
                            Customer-focused approach
                        </li>
                    </ul>

                    <!-- Button -->
                    <a href="about-us.html"
                        class="inline-block mt-6 px-6 py-3 bg-viscoYellow text-viscoBlue font-semibold rounded-lg shadow-lg hover:scale-105 transition">
                        Read More
                    </a>

                </div>

                <!-- RIGHT FEATURES -->
                <div class="lg:col-span-2 grid sm:grid-cols-2 gap-6">

                    <!-- Card -->
                    <div class="group bg-white/5 backdrop-blur-md p-6 rounded-2xl shadow-xl hover:scale-105 transition">
                        <div class="text-viscoYellow text-3xl mb-4">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2 group-hover:text-viscoYellow transition">
                            Creative Ideas
                        </h4>
                        <p class="text-gray-300 text-sm">
                            We craft unique strategies to help your business grow.
                        </p>
                    </div>

                    <!-- Card -->
                    <div class="group bg-white/5 backdrop-blur-md p-6 rounded-2xl shadow-xl hover:scale-105 transition">
                        <div class="text-viscoYellow text-3xl mb-4">
                            <i class="fas fa-user-cog"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2 group-hover:text-viscoYellow transition">
                            Expert Engineers
                        </h4>
                        <p class="text-gray-300 text-sm">
                            Skilled professionals delivering reliable solutions.
                        </p>
                    </div>

                    <!-- Card -->
                    <div class="group bg-white/5 backdrop-blur-md p-6 rounded-2xl shadow-xl hover:scale-105 transition">
                        <div class="text-viscoYellow text-3xl mb-4">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2 group-hover:text-viscoYellow transition">
                            Professional Support
                        </h4>
                        <p class="text-gray-300 text-sm">
                            Dedicated support whenever you need it.
                        </p>
                    </div>

                    <!-- Card -->
                    <div class="group bg-white/5 backdrop-blur-md p-6 rounded-2xl shadow-xl hover:scale-105 transition">
                        <div class="text-viscoYellow text-3xl mb-4">
                            <i class="fas fa-tags"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2 group-hover:text-viscoYellow transition">
                            Competitive Pricing
                        </h4>
                        <p class="text-gray-300 text-sm">
                            Affordable rates without compromising quality.
                        </p>
                    </div>

                    <!-- Card -->
                    <div class="group bg-white/5 backdrop-blur-md p-6 rounded-2xl shadow-xl hover:scale-105 transition">
                        <div class="text-viscoYellow text-3xl mb-4">
                            <i class="fas fa-industry"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2 group-hover:text-viscoYellow transition">
                            Quality Products
                        </h4>
                        <p class="text-gray-300 text-sm">
                            Durable and high-performing products for your success.
                        </p>
                    </div>

                    <!-- Card -->
                    <div class="group bg-white/5 backdrop-blur-md p-6 rounded-2xl shadow-xl hover:scale-105 transition">
                        <div class="text-viscoYellow text-3xl mb-4">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2 group-hover:text-viscoYellow transition">
                            Quick Delivery
                        </h4>
                        <p class="text-gray-300 text-sm">
                            Fast and efficient delivery to meet your deadlines.
                        </p>
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