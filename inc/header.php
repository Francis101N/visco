<nav class="bg-[#2a1c48] text-white font-inter sticky top-0 z-50 shadow-md p-3">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex justify-between items-center h-14">

            <!-- Logo -->
            <div class="flex items-center">
                <img src="./images/visco-new-logo-Trim-ezgif.com-crop.gif"
                    class="h-10 w-auto object-contain" />
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 items-center font-medium">
                <a href="home" class="hover:text-viscoYellow transition">Home</a>
                <a href="about" class="hover:text-viscoYellow transition">About Us</a>
                <a href="services" class="hover:text-viscoYellow transition">Services</a>
                <a href="projects" class="hover:text-viscoYellow transition">Projects</a>
                <a href="news" class="hover:text-viscoYellow transition">News</a>
                <a href="career" class="hover:text-viscoYellow transition">Career</a>
                <a href="contact" class="hover:text-viscoYellow transition">Contact</a>
            </div>

            <!-- Yellow Toggle Button -->
            <div class="md:hidden">
                <button id="menu-btn" class="text-viscoYellow text-3xl focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

        </div>
    </div>
</nav>

<!-- Overlay -->
<div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>

<!-- Slide-in Menu -->
<div id="mobile-menu"
    class="fixed top-0 right-0 h-full w-64 bg-[#121332] text-white transform translate-x-full transition-transform duration-300 z-50 shadow-lg">

    <!-- Close Button -->
    <div class="flex justify-end p-4">
        <button id="close-btn" class="text-viscoYellow text-3xl">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <!-- Menu Links -->
    <div class="flex flex-col space-y-4 px-6 mt-4 text-lg">
        <a href="home" class="hover:text-viscoYellow transition">Home</a>
        <a href="about" class="hover:text-viscoYellow transition">About Us</a>
        <a href="services" class="hover:text-viscoYellow transition">Services</a>
        <a href="#projects" class="hover:text-viscoYellow transition">Projects</a>
        <a href="news" class="hover:text-viscoYellow transition">News</a>
        <a href="career" class="hover:text-viscoYellow transition">Career</a>
        <a href="contact" class="hover:text-viscoYellow transition">Contact</a>
    </div>
</div>