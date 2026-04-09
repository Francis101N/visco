<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Members | VISCOSUPPORT - Leading Maritime Solutions &amp; Shipping Services | Barge: IMO 8768919 MMSI:375343000</title>
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

    <section class="relative h-[60vh] flex items-center justify-center overflow-hidden">

        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="./images/img4.jpg"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#121332]/80"></div>
        </div>

        <!-- Gradient Glow -->
        <div class="absolute -top-20 -left-20 w-72 h-72 bg-viscoYellow/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-72 h-72 bg-viscoYellow/10 rounded-full blur-3xl"></div>

        <!-- Content -->
        <div class="relative z-10 text-center max-w-3xl px-6">

            <h1 class="text-4xl md:text-6xl font-bold leading-tight">
                <spa class="text-white">Meet Our</span> <span class="text-viscoYellow">Professional Team</span>
            </h1>

            <p class="mt-5 text-gray-300 text-lg">
                A dedicated team of experts delivering excellence in engineering, offshore operations, and energy solutions across Africa.
            </p>

            <!-- Buttons -->
            <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
                <a href="#contact"
                    class="border-2 border-viscoYellow text-viscoYellow px-8 py-3 rounded-xl hover:bg-viscoYellow hover:text-viscoBlue transition transform">
                    Contact Us
                </a>
            </div>

        </div>

    </section>

    <section class="py-20 bg-[#0b122e] text-white">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="mx-auto mt-3 w-24 h-1 bg-gradient-to-r from-yellow-300/30 via-viscoYellow to-yellow-300/30 rounded"></div>
                <p class="mt-4 text-gray-300 max-w-2xl mx-auto">
                    Our team is made up of experienced professionals dedicated to delivering excellence across engineering, operations, and project execution.
                </p>
            </div>

            <!-- Team Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 max-w-5xl mx-auto">

                <!-- Member 1 -->
                <div class="team-member bg-white/5 backdrop-blur-md rounded-2xl p-6 text-center shadow-lg hover:scale-105 transition transform">
                    <img src="./images/iyk.jpeg" class="w-36 h-36 object-cover rounded-full mx-auto border-2 border-viscoYellow shadow-xl mb-4">
                    <h3 class="text-xl font-semibold">Edwin Iyk Anyadigibe</h3>
                    <p class="text-viscoYellow font-medium mb-3">Chief Executive Officer</p>
                    <p class="text-gray-300 italic text-sm">
                        "Leadership is about vision, dedication, and inspiring others to succeed."
                    </p>
                </div>

                <div class="team-member bg-white/5 backdrop-blur-md rounded-2xl p-6 text-center shadow-lg hover:scale-105 transition transform">
                    <div class="mb-4">
                        <img src="./images/chairwoman.jpeg"
                            alt="Team Member"
                            class="w-36 h-36 object-cover rounded-full mx-auto border-2 border-viscoYellow shadow-xl">
                    </div>
                    <h3 class="text-xl font-semibold">Iyk- Edwin Ifeoma</h3>
                    <p class="text-viscoYellow font-medium mb-4">Director, Enterprise & Human Capital Development</p>
                    <p class="text-gray-300 italic">"Driving excellence through talent, innovation, and operational precision."</p>
                </div>

                <!-- Member 3 -->
                <div class="team-member bg-white/5 backdrop-blur-md rounded-2xl p-6 text-center shadow-lg hover:scale-105 transition transform">
                    <img src="./images/reverend.jpeg" class="w-36 h-36 object-cover rounded-full mx-auto border-2 border-viscoYellow shadow-xl mb-4">
                    <h3 class="text-xl font-semibold">Daniel Ubeh</h3>
                    <p class="text-viscoYellow font-medium mb-3">Project Director</p>
                    <p class="text-gray-300 italic text-sm">
                        "Efficiency and innovation are the backbone of every successful project."
                    </p>
                </div>

                <!-- Member 4 -->
                <div class="team-member bg-white/5 backdrop-blur-md rounded-2xl p-6 text-center shadow-lg hover:scale-105 transition transform">
                    <img src="./images/Benjamin.png" class="w-36 h-36 object-cover rounded-full mx-auto border-2 border-viscoYellow shadow-xl mb-4">
                    <h3 class="text-xl font-semibold">Benjamin Akande</h3>
                    <p class="text-viscoYellow font-medium mb-3">Project Manager</p>
                    <p class="text-gray-300 italic text-sm">
                        "Strong project management ensures goals are met with quality and timeliness."
                    </p>
                </div>

                <!-- Member 5 -->
                <div class="team-member bg-white/5 backdrop-blur-md rounded-2xl p-6 text-center shadow-lg hover:scale-105 transition transform">
                    <img src="./images/segun.png" class="w-36 h-36 object-cover rounded-full mx-auto border-2 border-viscoYellow shadow-xl mb-4">
                    <h3 class="text-xl font-semibold">Segun Faniran</h3>
                    <p class="text-viscoYellow font-medium mb-3">Chief Operating Manager</p>
                    <p class="text-gray-300 italic text-sm">
                        "Operations is about consistency. If your systems work without supervision, you’ve built something strong."
                    </p>
                </div>

            </div>
        </div>
    </section>

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