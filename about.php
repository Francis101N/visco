<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us | VISCOSUPPORT - Leading Maritime Solutions &amp; Shipping Services | Barge: IMO 8768919 MMSI:375343000</title>
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

        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="./images/img3.jpg" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#121332]/85"></div>
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
                <span class="text-viscoYellow">About Us</span>
            </div>

            <!-- Heading -->
            <h1 class="text-4xl md:text-6xl font-bold leading-tight text-white">
                About <span class="text-viscoYellow">Visco Support</span>
            </h1>

            <!-- Description -->
            <p class="mt-5 text-gray-300 text-lg">
                Delivering engineering excellence, offshore solutions, and innovative energy services with over two decades of industry experience.
            </p>

        </div>

    </section>

    <section class="py-20 bg-[#0b122e] text-white">

        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Title -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl md:text-5xl font-bold">
                    Welcome to <span class="text-viscoYellow">Visco</span>
                </h2>

                <div class="w-20 h-1 bg-viscoYellow mx-auto mt-4 mb-6"></div>

                <p class="text-gray-300 leading-relaxed">
                    VISCO Support Services Limited is a Nigerian Engineering, Procurement, Construction, Installation,
                    and Commissioning company delivering high-impact solutions across onshore and offshore energy projects.
                    <br><br>
                    With over <span class="text-viscoYellow font-semibold">25 years of industry experience</span>,
                    we have successfully executed major projects for both international and national oil companies
                    consistently delivering with precision, safety, and efficiency.
                </p>
            </div>

            <!-- Mission & Vision -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                <!-- Mission -->
                <div class="bg-white/5 backdrop-blur-md rounded-2xl overflow-hidden shadow-xl hover:scale-[1.02] transition">

                    <img src="https://viscosupport.com/upload/welcome/1824569628053316.jpg"
                        class="w-full h-100 object-cover border-b-4 border-viscoYellow">

                    <div class="p-8">
                        <h3 class="text-2xl font-semibold mb-4">Our Mission</h3>

                        <ul class="space-y-3 text-gray-300">
                            <li class="flex items-start gap-3">
                                <span class="text-viscoYellow">✔</span>
                                Deliver innovative, energy-focused engineering solutions
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-viscoYellow">✔</span>
                                Reduce environmental impact and emissions
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-viscoYellow">✔</span>
                                Maintain sustainability across all project execution
                            </li>
                        </ul>
                    </div>

                </div>

                <!-- Vision -->
                <div class="bg-white/5 backdrop-blur-md rounded-2xl overflow-hidden shadow-xl hover:scale-[1.02] transition">

                    <img src="https://viscosupport.com/upload/welcome/1824569721328198.jpg"
                        class="w-full h-100 object-cover border-b-4 border-viscoYellow">

                    <div class="p-8">
                        <h3 class="text-2xl font-semibold mb-4">Our Vision</h3>

                        <p class="text-gray-300 leading-relaxed">
                            To become Africa’s leading provider of innovative energy and engineering solutions,
                            setting new standards in quality, sustainability, and project excellence across the continent.
                        </p>
                    </div>

                </div>

            </div>

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
                    <a href="services"
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

    <section class="relative w-full h-[80vh] flex items-center justify-center text-center overflow-hidden">

        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="https://viscosupport.com/upload/video/1824570612815423.jpg"
                class="w-full h-full object-cover brightness-90 contrast-110">

            <!-- Soft Overlay (keeps image visible) -->
            <div class="absolute inset-0 bg-black/30"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-3xl px-6">

            <!-- Title -->
            <h2 class="text-3xl md:text-5xl font-bold text-white leading-tight">
                Delivering Excellence in <br>
                <span class="text-viscoYellow">Marine & Offshore Solutions</span>
            </h2>

            <!-- Subtitle -->
            <p class="mt-5 text-gray-200 text-lg">
                Watch how we combine innovation, expertise, and precision to deliver world-class results across every project.
            </p>

            <!-- Classic Play Button -->
            <div class="mt-10 flex justify-center">
                <a data-fancybox data-src="#video-modal"
                    class="flex items-center justify-center w-20 h-20 rounded-full bg-viscoYellow text-viscoBlue text-2xl shadow-xl hover:scale-110 transition duration-300 ring-4 ring-viscoYellow/30 cursor-pointer">
                    <i class="fas fa-play"></i>
                </a>
            </div>

            <div id="video-modal" style="display: none; max-width: 900px;">
                <video id="myVideo" controls muted playsinline class="w-full rounded-lg">
                    <source src="./images/visco-vidd.mp4" type="video/mp4">
                </video>
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