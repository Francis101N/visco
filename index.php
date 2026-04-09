<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro Page | VISCOSUPPORT - Leading Maritime Solutions &amp; Shipping Services | Barge: IMO 8768919 MMSI:375343000</title>
    <link rel="icon" href="./images/visco icon.png" type="image/x-icon">
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #000;
            overflow: hidden;
            font-family: Arial, sans-serif;
            perspective: 1200px;
        }

        /* Logo slides from top */
        .logo {
            width: 300px;
            margin-bottom: 50px;
            opacity: 0;
            transform: translateY(-100px);
            animation: slideLogo 1.5s forwards ease-out;
        }

        @keyframes slideLogo {
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Image slides in from left */
        .slide-image {
            width: 300px;
            opacity: 0;
            transform: translateX(-150px) rotateY(90deg) rotateX(20deg);
            animation: slideImage 2s forwards 1.5s;
            filter: drop-shadow(0 10px 30px rgba(245, 166, 35, 0.6));
        }

        /* Keyframes for sliding in */
        @keyframes slideImage {
            0% {
                transform: translateX(-150px) rotateY(90deg) rotateX(20deg);
                opacity: 0;
            }

            60% {
                transform: translateX(-30px) rotateY(15deg) rotateX(10deg);
                opacity: 0.8;
            }

            100% {
                transform: translateX(0) rotateY(0deg) rotateX(0deg);
                opacity: 1;
            }
        }

        /* Floating motion applied AFTER slide-in */
        .float {
            animation: floatUpDown 3s ease-in-out infinite alternate;
        }

        @keyframes floatUpDown {
            0% {
                transform: translateX(0) translateY(0) rotateY(0deg) rotateX(0deg);
            }

            50% {
                transform: translateX(0) translateY(-10px) rotateY(0deg) rotateX(0deg);
            }

            100% {
                transform: translateX(0) translateY(0) rotateY(0deg) rotateX(0deg);
            }
        }
    </style>
</head>

<body>

    <img src="images/visco-new-logo-Trim-ezgif.com-crop.gif" alt="Logo" class="logo">

    <img src="images/engineering-intro-removebg-preview (1).png" alt="Intro Image" class="slide-image" id="floatingImage">

    <script>
        // Apply floating effect after slide-in finishes
        const img = document.getElementById('floatingImage');
        img.addEventListener('animationend', () => {
            img.style.transform = 'translateX(0) translateY(0) rotateY(0deg) rotateX(0deg)';
            img.style.opacity = '1';
            img.classList.add('float');
        });

        // Redirect after 5 seconds
        setTimeout(() => {
            window.location.href = "home.php"; // replace with your actual home page
        }, 5000);
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

</body>

</html>