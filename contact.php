<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us | VISCOSUPPORT - Leading Maritime Solutions &amp; Shipping Services | Barge: IMO 8768919 MMSI:375343000</title>
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
                <span class="text-viscoYellow">Contact</span>
            </div>

            <!-- Heading -->
            <h1 class="text-4xl md:text-6xl font-bold leading-tight text-white">
                Get In <span class="text-viscoYellow">Touch</span>
            </h1>

            <!-- Description -->
            <p class="mt-5 text-gray-300 text-lg">
                Have a project in mind or need expert consultation? Our team is ready to provide reliable engineering and offshore solutions tailored to your needs.
            </p>

            <!-- CTA (Premium Touch) -->
            <div class="mt-8 flex justify-center gap-4 flex-wrap">

                <a href="tel:(01)4537012"
                    class="px-6 py-3 bg-viscoYellow text-viscoBlue font-semibold rounded-lg shadow-lg hover:scale-105 transition">
                    Call Us
                </a>

                <a href="mailto:contact@viscosupport.com"
                    class="px-6 py-3 border border-viscoYellow text-viscoYellow rounded-lg hover:bg-viscoYellow hover:text-viscoBlue transition">
                    Email Us
                </a>

            </div>

        </div>

    </section>

    <section class="py-20 bg-[#0b122e] text-white">

        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Title -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold">
                    Contact <span class="text-viscoYellow">Us</span>
                </h2>
                <div class="w-24 h-1 bg-viscoYellow mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid lg:grid-cols-3 gap-12">

                <!-- LEFT CONTACT INFO -->
                <div class="space-y-8">

                    <p class="text-gray-300 leading-relaxed">
                        Visco Support Services Limited is a Nigerian EPCIC company delivering
                        world-class engineering and offshore solutions across the energy sector.
                    </p>

                    <!-- Contact Cards -->
                    <div class="space-y-5">

                        <div class="flex items-start gap-4 bg-white/5 backdrop-blur-md p-5 rounded-xl">
                            <i class="fas fa-map-marker-alt text-viscoYellow text-xl mt-1"></i>
                            <p class="text-gray-300">
                                Tango Terminal NPA Kiri-Kiri Lighter Terminal 1, KLT Brawal Apapa
                            </p>
                        </div>

                        <div class="flex items-start gap-4 bg-white/5 backdrop-blur-md p-5 rounded-xl">
                            <i class="fas fa-phone-alt text-viscoYellow text-xl mt-1"></i>
                            <div>
                                <p class="font-semibold">Call Us</p>
                                <a href="tel:(01)4537012" class="text-gray-300 hover:text-viscoYellow transition">
                                    (01) 453 7012
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 bg-white/5 backdrop-blur-md p-5 rounded-xl">
                            <i class="fas fa-envelope text-viscoYellow text-xl mt-1"></i>
                            <div>
                                <p class="font-semibold">Email</p>
                                <a href="mailto:contact@viscosupport.com" class="text-gray-300 hover:text-viscoYellow transition">
                                    contact@viscosupport.com
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 bg-white/5 backdrop-blur-md p-5 rounded-xl">
                            <i class="fas fa-clock text-viscoYellow text-xl mt-1"></i>
                            <div>
                                <p class="font-semibold">Working Hours</p>
                                <p class="text-gray-300">Mon - Fri: 08:00AM - 5:00PM</p>
                            </div>
                        </div>

                    </div>

                    <!-- Socials -->
                    <div class="flex gap-4 pt-4">
                        <a href="#" class="w-10 h-10 flex items-center justify-center bg-white/10 rounded-full hover:bg-viscoYellow hover:text-viscoBlue transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center bg-white/10 rounded-full hover:bg-viscoYellow hover:text-viscoBlue transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center bg-white/10 rounded-full hover:bg-viscoYellow hover:text-viscoBlue transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center bg-white/10 rounded-full hover:bg-viscoYellow hover:text-viscoBlue transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>

                </div>

                <!-- RIGHT FORM -->
                <div class="lg:col-span-2">

                    <form method="POST" action="https://viscosupport.com/contact/contact-submit"
                        class="bg-white/5 backdrop-blur-md p-8 rounded-2xl shadow-xl space-y-6">

                        <!-- Inputs -->
                        <div class="grid md:grid-cols-2 gap-6">

                            <input type="text" name="username" placeholder="Full Name"
                                class="w-full p-4 rounded-lg bg-transparent border border-white/20 focus:border-viscoYellow focus:outline-none placeholder-gray-400">

                            <input type="text" name="phone" placeholder="Phone Number"
                                class="w-full p-4 rounded-lg bg-transparent border border-white/20 focus:border-viscoYellow focus:outline-none placeholder-gray-400">

                            <input type="email" name="email" placeholder="Email Address"
                                class="w-full p-4 rounded-lg bg-transparent border border-white/20 focus:border-viscoYellow focus:outline-none placeholder-gray-400">

                            <input type="text" name="subject" placeholder="Subject"
                                class="w-full p-4 rounded-lg bg-transparent border border-white/20 focus:border-viscoYellow focus:outline-none placeholder-gray-400">

                        </div>

                        <!-- Message -->
                        <textarea name="message" rows="5" placeholder="Your Message..."
                            class="w-full p-4 rounded-lg bg-transparent border border-white/20 focus:border-viscoYellow focus:outline-none placeholder-gray-400"></textarea>

                        <!-- Button -->
                        <button type="submit"
                            class="w-full py-4 bg-viscoYellow text-viscoBlue font-semibold rounded-lg shadow-lg hover:scale-105 transition">
                            Send Message
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </section>

    <section class="py-20 bg-[#0b122e]">

        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Title -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-5xl font-bold text-white">
                    Our <span class="text-viscoYellow">Location</span>
                </h2>
                <div class="w-24 h-1 bg-viscoYellow mx-auto mt-4 rounded-full"></div>
            </div>

            <!-- Map Container -->
            <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-white/10">

                <!-- Map -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31716.24535350713!2d3.343244460391472!3d6.454237830287748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8bbcba8a7fef%3A0xa70f492d44afb0b0!2sApapa%2C%20Lagos!5e0!3m2!1sen!2sng!4v1774874207608!5m2!1sen!2sng"
                    class="w-full h-[450px] grayscale hover:grayscale-0 transition duration-500"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>

                <!-- Floating Info Card -->
                <div class="absolute bottom-6 left-6 bg-[#121332]/90 backdrop-blur-md text-white p-5 rounded-xl shadow-lg max-w-xs border border-white/10">

                    <h4 class="font-semibold text-viscoYellow mb-1">Visco Support</h4>

                    <p class="text-sm text-gray-300">
                        Tango Terminal, Apapa, Lagos, Nigeria
                    </p>

                    <a href="https://maps.google.com"
                        target="_blank"
                        class="inline-block mt-3 text-sm text-viscoYellow hover:underline">
                        Open in Google Maps →
                    </a>

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