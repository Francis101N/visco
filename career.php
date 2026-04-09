<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career | VISCOSUPPORT - Leading Maritime Solutions &amp; Shipping Services | Barge: IMO 8768919 MMSI:375343000</title>
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
                <span class="text-viscoYellow">Careers</span>
            </div>

            <!-- Heading -->
            <h1 class="text-4xl md:text-6xl font-bold leading-tight text-white">
                Join <span class="text-viscoYellow">Our Team</span>
            </h1>

            <!-- Description -->
            <p class="mt-5 text-gray-300 text-lg">
                Are you passionate about engineering, offshore solutions, or project management? Explore exciting career opportunities at Visco Support Services and grow your career with a team dedicated to innovation and excellence.
            </p>

        </div>

    </section>

    <section class="career-content py-20">
        <div class="container mx-auto px-4 lg:flex lg:gap-12">
            <!-- Job Listings (Left) -->
            <div class="lg:w-2/3 w-full order-2 lg:order-1">
                <div class="mb-8">
                    <h2 class="text-3xl md:text-4xl font-bold text-viscoBlue mb-3">Current Openings</h2>
                    <h3 class="text-white">We're always looking for talented individuals to join our dynamic team and help shape the future of engineering.</h3>
                </div>

                <!-- No Openings Card -->
                <div class="bg-gray-800 text-gray-200 rounded-xl p-8 flex flex-col items-center justify-center border-l-4 border-viscoYellow shadow-lg animate-fadeIn">
                    <i class="fas fa-info-circle text-viscoYellow text-3xl mb-4"></i>
                    <h4 class="text-xl md:text-2xl font-semibold mb-2 text-center">No Openings Available at the Moment</h4>
                    <p class="text-center text-gray-300 max-w-md">We’re currently reviewing our team requirements. Please check back later for new career opportunities and join our talented engineering team.</p>
                </div>
            </div><br><br>

            <!-- Sidebar (Right) -->
            <div class="lg:w-1/3 w-full order-1 lg:order-2 mb-10 lg:mb-0">
                <div class="sticky top-0 space-y-6">
                    <!-- Why Work With Us -->
                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <h3 class="text-xl font-semibold text-viscoBlue mb-3">Why Work With Us</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start"><i class="fas fa-check text-viscoYellow mr-2 mt-1"></i> Competitive Compensation</li>
                            <li class="flex items-start"><i class="fas fa-check text-viscoYellow mr-2 mt-1"></i> Comprehensive Health Benefits</li>
                            <li class="flex items-start"><i class="fas fa-check text-viscoYellow mr-2 mt-1"></i> Professional Development Programs</li>
                            <li class="flex items-start"><i class="fas fa-check text-viscoYellow mr-2 mt-1"></i> Innovative Work Environment</li>
                            <li class="flex items-start"><i class="fas fa-check text-viscoYellow mr-2 mt-1"></i> Global Project Opportunities</li>
                            <li class="flex items-start"><i class="fas fa-check text-viscoYellow mr-2 mt-1"></i> Cutting-Edge Technology Access</li>
                        </ul>
                    </div>

                    <!-- Contact Widget -->
                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <h3 class="text-xl font-semibold text-viscoBlue mb-3">How to Apply</h3>
                        <p class="text-gray-600 mb-3">Ready to join our team? Send your CV and application to:</p>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start"><i class="fas fa-paper-plane text-viscoYellow mr-2 mt-1"></i> Email: <strong>hr@viscosupport.com</strong></li>
                            <li class="flex items-start"><i class="fas fa-phone text-viscoYellow mr-2 mt-1"></i> HR Department: (01) 453 7012</li>
                        </ul>

                        <!-- Application Tips -->
                        <div class="mt-4">
                            <h4 class="text-viscoBlue font-semibold mb-2">Application Tips:</h4>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-start"><i class="fas fa-check text-viscoYellow mr-2 mt-1"></i> Include the job title in the email subject</li>
                                <li class="flex items-start"><i class="fas fa-check text-viscoYellow mr-2 mt-1"></i> Attach a detailed CV/Resume</li>
                                <li class="flex items-start"><i class="fas fa-check text-viscoYellow mr-2 mt-1"></i> Include a brief cover letter</li>
                                <li class="flex items-start"><i class="fas fa-check text-viscoYellow mr-2 mt-1"></i> Provide contact references</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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