<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saladi Bhavani Vijaya Sekhar | Full-Stack Web Developer</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Three.js CDN for 3D Background Effects -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#eef2ff',
                            100: '#e0e7ff',
                            500: '#6366f1',
                            600: '#4f46e5',
                            700: '#4338ca',
                        }
                    }
                }
            }
        }
    </script>
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* Custom scrollbar and sleek animations */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        .dark ::-webkit-scrollbar-track {
            background: #111827;
        }
        ::-webkit-scrollbar-thumb {
            background: #c7d2fe;
            border-radius: 4px;
        }
        .dark ::-webkit-scrollbar-thumb {
            background: #374151;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #818cf8;
        }
        
        .typing-cursor {
            display: inline-block;
            background-color: currentColor;
            width: 2px;
            animation: blink 1s infinite;
        }
        @keyframes blink {
            0%, 50% { opacity: 1; }
            51%, 100% { opacity: 0; }
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(229, 231, 235, 0.5);
            transform-style: preserve-3d;
            will-change: transform;
        }
        .dark .glass-card {
            background: rgba(17, 24, 39, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(55, 65, 81, 0.5);
        }

        /* 3D Canvas Background Styling */
        #canvas-3d {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
            pointer-events: none;
        }

        /* Scroll-triggered card moving / entrance animation */
        .scroll-animate {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: opacity, transform;
        }
        .scroll-animate.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <style id="mobile-responsive-fixes">
        /* Responsive polish: preserve the existing desktop design. */
        html { scroll-padding-top: 6rem; }
        body { overflow-x: hidden; }
        img { max-width: 100%; }

        @media (max-width: 767px) {
            header {
                width: 100%;
                max-width: 100vw;
            }
            header > div:first-child {
                min-height: 68px;
                height: auto;
                padding: 10px 14px;
                gap: 10px;
            }
            header > div:first-child > a {
                min-width: 0;
                flex: 1 1 auto;
                gap: 9px;
            }
            header > div:first-child > a > div:first-child {
                width: 38px;
                height: 38px;
                min-width: 38px;
                flex-shrink: 0;
                border-radius: 11px;
            }
            header > div:first-child > a > div:last-child {
                min-width: 0;
                overflow: hidden;
            }
            header > div:first-child > a span:first-child {
                font-size: 12px;
                line-height: 1.25;
                white-space: normal;
                overflow-wrap: anywhere;
            }
            header > div:first-child > a span:last-child {
                display: block;
                font-size: 8px;
                line-height: 1.35;
                letter-spacing: .06em;
                white-space: normal;
            }
            header > div:first-child > div:last-child {
                flex: 0 0 auto;
                gap: 7px;
            }
            #theme-toggle, #mobile-menu-btn {
                width: 36px;
                height: 36px;
                min-width: 36px;
                border-radius: 10px;
            }
            #mobile-menu {
                padding: 8px 18px 16px;
                max-height: calc(100dvh - 68px);
                overflow-y: auto;
            }
            #mobile-menu a {
                padding: 10px 4px;
                font-size: 14px;
            }

            #hero {
                min-height: auto;
                padding: 100px 0 42px;
                scroll-margin-top: 68px;
            }
            #hero > div.max-w-7xl {
                padding-left: 18px;
                padding-right: 18px;
                gap: 34px;
            }
            #hero > div.max-w-7xl > div:first-child {
                min-width: 0;
                gap: 18px;
            }
            #hero h1 {
                font-size: clamp(2rem, 8.2vw, 2.65rem);
                line-height: 1.14;
                letter-spacing: -.035em;
                overflow-wrap: anywhere;
            }
            #hero h2 {
                height: auto;
                min-height: 2.5rem;
                display: flex;
                flex-wrap: wrap;
                gap: 4px;
                justify-content: center;
                align-items: baseline;
                font-size: clamp(1.05rem, 4.8vw, 1.35rem);
                line-height: 1.45;
            }
            #typing-text {
                overflow-wrap: anywhere;
            }
            .typing-cursor {
                height: 1.15em !important;
            }
            #hero p {
                font-size: 14px;
                line-height: 1.8;
            }
            #hero > div.max-w-7xl > div:first-child > div:nth-last-child(2) {
                gap: 10px;
                padding-top: 4px;
            }
            #hero > div.max-w-7xl > div:first-child > div:nth-last-child(2) a {
                justify-content: center;
                min-height: 46px;
                padding: 12px 18px;
                font-size: 13px;
            }
            #hero > div.max-w-7xl > div:last-child {
                width: 100%;
            }
            #hero > div.max-w-7xl > div:last-child > div {
                width: min(100%, 310px);
                height: auto;
                aspect-ratio: 1 / 1;
            }
            #hero > div.max-w-7xl > div:last-child > div > div:last-child {
                padding: 20px;
            }
            #hero > div.max-w-7xl > div:last-child img {
                display: block;
                width: 100%;
                height: 100%;
                min-height: 0;
                object-fit: cover;
                object-position: center 35%;
            }
            #hero > div.max-w-7xl > div:last-child > div > div:last-child > div:first-child {
                width: 112px;
                height: 112px;
                min-width: 112px;
                flex: 0 0 112px;
                border-radius: 22px;
                overflow: hidden;
                margin-bottom: 14px;
            }
            #hero > div.max-w-7xl > div:last-child h3 {
                font-size: 17px;
                line-height: 1.35;
                overflow-wrap: anywhere;
            }
            #hero > div.max-w-7xl > div:last-child p {
                text-align: center;
                font-size: 11px;
            }
            #hero > div.max-w-7xl > div:last-child .mt-6 {
                margin-top: 18px;
            }
            #hero > div.max-w-7xl > div:last-child .mt-6 > div {
                min-width: 0;
                padding: 10px 7px;
            }
            #hero > div.max-w-7xl > div:last-child .mt-6 span:last-child {
                display: block;
                line-height: 1.45;
                overflow-wrap: anywhere;
            }

            section {
                scroll-margin-top: 76px;
            }
            section.py-24 {
                padding-top: 58px;
                padding-bottom: 58px;
            }
            section > div.max-w-7xl,
            section > div.max-w-5xl {
                padding-left: 18px;
                padding-right: 18px;
            }
            section h3.text-3xl {
                font-size: clamp(1.55rem, 6vw, 1.9rem);
                line-height: 1.25;
                overflow-wrap: anywhere;
            }
            section .mb-16 {
                margin-bottom: 30px;
            }
            .glass-card {
                min-width: 0;
                overflow-wrap: anywhere;
            }
            .glass-card.p-8 {
                padding: 20px;
            }
            .glass-card.p-7,
            .glass-card.p-6 {
                padding: 18px;
            }
            #skills .grid,
            #about .grid,
            #education .grid,
            #projects-grid,
            #contact .grid {
                gap: 18px;
            }
            #skills h4,
            #about h4 {
                line-height: 1.35;
                overflow-wrap: anywhere;
            }
            #skills .flex.justify-between {
                align-items: flex-start;
                gap: 8px;
            }
            #skills .flex.justify-between span:first-child {
                min-width: 0;
                overflow-wrap: anywhere;
            }
            #skills .flex.justify-between span:last-child {
                flex-shrink: 0;
            }
            #experience .relative.border-l-2 {
                margin-left: 8px;
            }
            #experience .relative.pl-8 {
                padding-left: 22px;
            }
            #experience h5 {
                line-height: 1.6;
                overflow-wrap: anywhere;
            }
            #portfolio .filter-btn {
                padding: 9px 12px;
                font-size: 12px;
                line-height: 1.35;
            }
            #projects-grid > .project-card {
                min-width: 0;
            }
            #contact .flex.items-center {
                align-items: flex-start;
            }
            #contact a,
            #contact .font-bold {
                overflow-wrap: anywhere;
                word-break: break-word;
            }
            #contact-form {
                padding: 18px;
            }
            footer .max-w-7xl {
                padding-left: 18px;
                padding-right: 18px;
            }
            #download-resume-btn {
                left: 12px;
                bottom: 12px;
                padding: 12px;
                border-radius: 14px;
                min-width: 46px;
                min-height: 46px;
                justify-content: center;
            }
            #toast {
                left: 12px;
                right: 12px;
                bottom: 12px;
                max-width: calc(100vw - 24px);
                padding: 12px 14px;
                box-sizing: border-box;
            }
        }

        @media (max-width: 380px) {
            header > div:first-child {
                padding-left: 10px;
                padding-right: 10px;
            }
            header > div:first-child > a span:first-child {
                font-size: 11px;
            }
            #hero > div.max-w-7xl {
                padding-left: 14px;
                padding-right: 14px;
            }
            #hero h1 {
                font-size: 1.95rem;
            }
            #hero > div.max-w-7xl > div:last-child > div > div:last-child {
                padding: 16px;
            }
            #hero > div.max-w-7xl > div:last-child > div > div:last-child > div:first-child {
                width: 100px;
                height: 100px;
                min-width: 100px;
                flex-basis: 100px;
            }
        }
    </style>

</head>
<body class="bg-slate-50 text-slate-800 dark:bg-slate-950 dark:text-slate-100 transition-colors duration-300 font-sans antialiased selection:bg-brand-500 selection:text-white">

    <!-- Page Preloader Screen (0 to 100%) -->
    <div id="preloader" class="fixed inset-0 z-50 flex flex-col items-center justify-center bg-slate-950 text-white transition-opacity duration-700">
        <div class="w-72 max-w-xs space-y-4 text-center">
            <div class="w-16 h-16 mx-auto rounded-2xl bg-gradient-to-tr from-brand-600 to-indigo-400 flex items-center justify-center text-white font-bold text-2xl shadow-2xl animate-pulse">
                SV
            </div>
            <h3 class="font-bold text-lg tracking-tight">Saladi Bhavani Vijaya Sekhar</h3>
            <p class="text-xs text-slate-400 uppercase tracking-widest">Loading Experience...</p>
            <!-- Progress Bar -->
            <div class="w-full bg-slate-800 h-1.5 rounded-full overflow-hidden">
                <div id="loader-bar" class="bg-gradient-to-r from-brand-500 to-indigo-400 h-full w-0 transition-all duration-100"></div>
            </div>
            <div id="loader-percentage" class="text-sm font-bold text-indigo-400">0%</div>
        </div>
    </div>

    <!-- 3D Background Canvas -->
    <canvas id="canvas-3d"></canvas>

    <!-- Notification Toast -->
    <div id="toast" class="fixed bottom-6 right-6 z-50 transform translate-y-32 opacity-0 transition-all duration-300 bg-emerald-600 text-white px-6 py-3 rounded-xl shadow-2xl flex items-center space-x-3">
        <i class="fa-solid fa-circle-check text-xl"></i>
        <div>
            <h5 class="font-bold text-sm">Success</h5>
            <p id="toast-message" class="text-xs text-emerald-100">Message sent successfully!</p>
        </div>
    </div>

    <!-- Navigation Bar -->
    <header class="fixed top-0 left-0 right-0 z-40 glass-card border-b border-slate-200 dark:border-slate-800 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="#hero" class="flex items-center space-x-3 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-brand-600 to-indigo-400 flex items-center justify-center text-white font-bold text-lg shadow-lg group-hover:scale-105 transition-transform">
                    SV
                </div>
                <div>
                    <span class="font-bold text-lg tracking-tight block">Saladi Bhavani Vijaya Sekhar</span>
                    <span class="text-xs text-brand-600 dark:text-indigo-400 font-semibold tracking-wide uppercase">Full Stack Web Developer</span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden md:flex items-center space-x-8 font-medium text-sm">
                <a href="#about" class="hover:text-brand-600 dark:hover:text-indigo-400 transition-colors">About</a>
                <a href="#skills" class="hover:text-brand-600 dark:hover:text-indigo-400 transition-colors">Skills</a>
                <a href="#experience" class="hover:text-brand-600 dark:hover:text-indigo-400 transition-colors">Experience</a>
                <a href="#education" class="hover:text-brand-600 dark:hover:text-indigo-400 transition-colors">Education</a>
                <a href="#certifications" class="hover:text-brand-600 dark:hover:text-indigo-400 transition-colors">Certifications</a>
                <a href="#languages" class="hover:text-brand-600 dark:hover:text-indigo-400 transition-colors">Languages</a>
                <a href="#portfolio" class="hover:text-brand-600 dark:hover:text-indigo-400 transition-colors">Self Projects</a>
                <a href="#contact" class="hover:text-brand-600 dark:hover:text-indigo-400 transition-colors">Contact</a>
                <a href="cv/img/svcv.pdf" target="_blank" rel="noopener noreferrer" class="hover:text-brand-600 dark:hover:text-indigo-400 transition-colors" aria-label="View Resume">Resume <i class="fa-solid fa-file-pdf ml-1"></i></a>
            </nav>

            <!-- Actions -->
            <div class="flex items-center space-x-4">
                <!-- Theme Toggle Button -->
                <button id="theme-toggle" aria-label="Toggle theme" class="w-10 h-10 rounded-xl bg-slate-200 dark:bg-slate-800 flex items-center justify-center text-slate-700 dark:text-slate-200 hover:bg-slate-300 dark:hover:bg-slate-700 transition-all focus:outline-none">
                    <i id="theme-icon" class="fa-solid fa-moon text-lg"></i>
                </button>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden w-10 h-10 rounded-xl bg-slate-200 dark:bg-slate-800 flex items-center justify-center text-slate-700 dark:text-slate-200 focus:outline-none">
                    <i class="fa-solid fa-bars text-lg"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden px-6 pb-6 pt-2 bg-white/90 dark:bg-slate-900/95 backdrop-blur-md border-b border-slate-200 dark:border-slate-800 space-y-3 font-medium">
            <a href="#about" class="block py-2 hover:text-brand-600 dark:hover:text-indigo-400">About</a>
            <a href="#skills" class="block py-2 hover:text-brand-600 dark:hover:text-indigo-400">Skills</a>
            <a href="#experience" class="block py-2 hover:text-brand-600 dark:hover:text-indigo-400">Experience</a>
            <a href="#education" class="block py-2 hover:text-brand-600 dark:hover:text-indigo-400">Education</a>
            <a href="#certifications" class="block py-2 hover:text-brand-600 dark:hover:text-indigo-400">Certifications</a>
            <a href="#languages" class="block py-2 hover:text-brand-600 dark:hover:text-indigo-400">Languages</a>
            <a href="#portfolio" class="block py-2 hover:text-brand-600 dark:hover:text-indigo-400">Self Projects</a>
            <a href="#contact" class="block py-2 hover:text-brand-600 dark:hover:text-indigo-400">Contact</a>
            <a href="cv/img/svcv.pdf" target="_blank" rel="noopener noreferrer" class="block py-2 hover:text-brand-600 dark:hover:text-indigo-400">Resume (PDF)</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="min-h-screen pt-32 pb-16 flex items-center relative overflow-hidden">
        <!-- Background decorative glows -->
        <div class="absolute top-1/4 left-10 w-72 h-72 bg-brand-500/10 dark:bg-brand-500/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-indigo-500/10 dark:bg-indigo-500/20 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 w-full grid grid-cols-1 lg:grid-cols-12 gap-12 items-center relative z-10">
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-brand-50 dark:bg-brand-950/50 border border-brand-200 dark:border-brand-800 text-brand-600 dark:text-indigo-400 text-xs font-semibold uppercase tracking-wider">
                    <span class="w-2 h-2 rounded-full bg-brand-600 dark:bg-indigo-400 animate-pulse"></span>
                    <span>Available for Opportunities</span>
                </div>
                
                <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight leading-tight">
                    Hi, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-indigo-400">Saladi Bhavani Vijaya Sekhar</span>
                </h1>

                <h2 class="text-2xl sm:text-3xl font-semibold text-slate-600 dark:text-slate-300 h-12 flex items-center justify-center lg:justify-start">
                    I'm a <span id="typing-text" class="text-brand-600 dark:text-indigo-400 ml-2 font-bold"></span><span class="typing-cursor ml-0.5 h-7"></span>
                </h2>

                <p class="text-slate-600 dark:text-slate-400 text-base sm:text-lg max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                    Full-Stack Web Developer with experience building responsive, database-driven web applications using PHP, MySQL, HTML, CSS, JavaScript, and AJAX. Focused on creating practical, user-friendly solutions with reliable backend functionality.
                </p>

                <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 pt-4">
                    <a href="#contact" class="px-8 py-3.5 rounded-xl bg-brand-600 text-white font-semibold hover:bg-brand-700 shadow-lg shadow-brand-500/25 transition-all transform hover:-translate-y-0.5 flex items-center space-x-2">
                        <span>Get in Touch</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                    <a href="#portfolio" class="px-8 py-3.5 rounded-xl bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-200 font-semibold hover:bg-slate-300 dark:hover:bg-slate-700 transition-all">
                        View Projects
                    </a>
                </div>

                <div class="pt-6 flex items-center justify-center lg:justify-start space-x-5 text-slate-500 dark:text-slate-400 text-xl">
                    <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="hover:text-brand-600 dark:hover:text-indigo-400 transition-colors" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
                    <a href="https://linkedin.com/in/svsekhar" target="_blank" rel="noopener noreferrer" class="hover:text-brand-600 dark:hover:text-indigo-400 transition-colors" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="mailto:sbvijaysekhar@gmail.com" class="hover:text-brand-600 dark:hover:text-indigo-400 transition-colors" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
                </div>
            </div>

            <!-- Hero Avatar / Visual Card -->
            <div class="lg:col-span-5 flex justify-center">
                <div class="relative w-72 h-72 sm:w-96 sm:h-96">
                    <div class="absolute inset-0 rounded-3xl bg-gradient-to-tr from-brand-600 to-indigo-400 transform rotate-6 scale-95 opacity-50 blur-lg"></div>
                    <div class="relative w-full h-full rounded-3xl glass-card overflow-hidden shadow-2xl flex flex-col items-center justify-center p-6 border border-slate-200/60 dark:border-slate-800/60">
                        <div class="w-32 h-32 rounded-2xl bg-slate-200 dark:bg-slate-800 overflow-hidden shadow-inner mb-4 flex items-center justify-center">
                            <img src="cv/img/svcv.jpeg" alt="Saladi Bhavani Vijaya Sekhar profile photo" class="w-full h-full object-cover" loading="lazy" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="w-full h-full items-center justify-center bg-gradient-to-br from-brand-600 to-indigo-400 text-white text-4xl font-extrabold" style="display:none;">SV</div>
                        </div>
                        <h3 class="font-bold text-xl text-center">Saladi Bhavani Vijaya Sekhar</h3>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Gudivada, Andhra Pradesh, India</p>
                        
                        <div class="mt-6 w-full grid grid-cols-2 gap-3 text-center">
                            <div class="p-3 rounded-xl bg-slate-100 dark:bg-slate-900/50">
                                <span class="block font-extrabold text-brand-600 dark:text-indigo-400 text-lg">17</span>
                                <span class="text-xs text-slate-500">Months Experience</span>
                            </div>
                            <div class="p-3 rounded-xl bg-slate-100 dark:bg-slate-900/50">
                                <span class="block font-extrabold text-brand-600 dark:text-indigo-400 text-lg">3+</span>
                                <span class="text-xs text-slate-500">Featured Projects</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-white/50 dark:bg-slate-900/40 border-y border-slate-200 dark:border-slate-800">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <h2 class="text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-widest">About Me</h2>
                <h3 class="text-3xl font-extrabold">Professional Profile & Background</h3>
                <p class="text-slate-600 dark:text-slate-400">Developing responsive web applications, practical backend solutions, and efficient database-driven systems.</p>
            </div>

            <!-- Career Objective -->
            <div id="career-objective" class="glass-card p-8 rounded-2xl shadow-sm mb-8">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 shrink-0 rounded-xl bg-brand-50 dark:bg-brand-950/50 text-brand-600 dark:text-indigo-400 flex items-center justify-center text-xl">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                    <div class="space-y-3">
                        <h4 class="text-xl font-bold">Career Objective</h4>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                            To Enhance My Working Capabilities, Business Efficiencies and Professional Skills, In Order To Serve My Organization With Cheer Commitment And Determination.
                        </p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="glass-card p-8 rounded-2xl space-y-4 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 rounded-xl bg-brand-50 dark:bg-brand-950/50 text-brand-600 dark:text-indigo-400 flex items-center justify-center text-xl font-bold">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <h4 class="text-xl font-bold">Full-Stack Web Developer</h4>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                        Experienced in building responsive and interactive web applications using HTML, CSS, JavaScript, PHP, and MySQL, with a focus on user-friendly interfaces and reliable functionality.
                    </p>
                </div>

                <div class="glass-card p-8 rounded-2xl space-y-4 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 rounded-xl bg-brand-50 dark:bg-brand-950/50 text-brand-600 dark:text-indigo-400 flex items-center justify-center text-xl font-bold">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <h4 class="text-xl font-bold">PHP & Backend Developer</h4>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                        Experienced in PHP backend development, Laravel, AJAX integration, server-side programming, and dynamic features for database-driven web applications.
                    </p>
                </div>

                <div class="glass-card p-8 rounded-2xl space-y-4 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 rounded-xl bg-brand-50 dark:bg-brand-950/50 text-brand-600 dark:text-indigo-400 flex items-center justify-center text-xl font-bold">
                        <i class="fa-solid fa-database"></i>
                    </div>
                    <h4 class="text-xl font-bold">Database</h4>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                        Proficient in MySQL, SQL queries, database integration, and data management to support efficient and reliable application workflows.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Matrix Section -->
    <section id="skills" class="py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <h2 class="text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-widest">Expertise</h2>
                <h3 class="text-3xl font-extrabold">Skills Matrix</h3>
                <p class="text-slate-600 dark:text-slate-400">A comprehensive overview of my technical proficiencies and tools.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- Category 1 -->
                <div class="glass-card p-8 rounded-2xl space-y-6 shadow-sm">
                    <h4 class="text-lg font-bold flex items-center space-x-3">
                        <i class="fa-solid fa-shield-cat text-brand-600 dark:text-indigo-400"></i>
                        <span>Web Development & Backend</span>
                    </h4>
                    
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1">
                                <span>PHP / Laravel Development</span>
                                <span class="text-brand-600 dark:text-indigo-400">95%</span>
                            </div>
                            <div class="w-full bg-slate-200 dark:bg-slate-800 h-2.5 rounded-full overflow-hidden">
                                <div class="bg-brand-600 dark:bg-indigo-500 h-2.5 rounded-full" style="width: 95%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1">
                                <span>HTML, CSS & Responsive UI</span>
                                <span class="text-brand-600 dark:text-indigo-400">90%</span>
                            </div>
                            <div class="w-full bg-slate-200 dark:bg-slate-800 h-2.5 rounded-full overflow-hidden">
                                <div class="bg-brand-600 dark:bg-indigo-500 h-2.5 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1">
                                <span>JavaScript & AJAX Integration</span>
                                <span class="text-brand-600 dark:text-indigo-400">85%</span>
                            </div>
                            <div class="w-full bg-slate-200 dark:bg-slate-800 h-2.5 rounded-full overflow-hidden">
                                <div class="bg-brand-600 dark:bg-indigo-500 h-2.5 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1">
                                <span>API Testing with Postman & SoapUI</span>
                                <span class="text-brand-600 dark:text-indigo-400">92%</span>
                            </div>
                            <div class="w-full bg-slate-200 dark:bg-slate-800 h-2.5 rounded-full overflow-hidden">
                                <div class="bg-brand-600 dark:bg-indigo-500 h-2.5 rounded-full" style="width: 92%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="glass-card p-8 rounded-2xl space-y-6 shadow-sm">
                    <h4 class="text-lg font-bold flex items-center space-x-3">
                        <i class="fa-solid fa-laptop-code text-brand-600 dark:text-indigo-400"></i>
                        <span>Programming & Database Technologies</span>
                    </h4>
                    
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1">
                                <span>Python</span>
                                <span class="text-brand-600 dark:text-indigo-400">80%</span>
                            </div>
                            <div class="w-full bg-slate-200 dark:bg-slate-800 h-2.5 rounded-full overflow-hidden">
                                <div class="bg-brand-600 dark:bg-indigo-500 h-2.5 rounded-full" style="width: 92%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1">
                                <span>HTML, CSS, JavaScript</span>
                                <span class="text-brand-600 dark:text-indigo-400">88%</span>
                            </div>
                            <div class="w-full bg-slate-200 dark:bg-slate-800 h-2.5 rounded-full overflow-hidden">
                                <div class="bg-brand-600 dark:bg-indigo-500 h-2.5 rounded-full" style="width: 88%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1">
                                <span>MySQL & SQL Query Optimization</span>
                                <span class="text-brand-600 dark:text-indigo-400">85%</span>
                            </div>
                            <div class="w-full bg-slate-200 dark:bg-slate-800 h-2.5 rounded-full overflow-hidden">
                                <div class="bg-brand-600 dark:bg-indigo-500 h-2.5 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                    
                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1">
                                <span>AI Tools: ChatGPT, GeminiAI, Prompt Engineering</span>
                                <span class="text-brand-600 dark:text-indigo-400">99%</span>
                            </div>
                            <div class="w-full bg-slate-200 dark:bg-slate-800 h-2.5 rounded-full overflow-hidden">
                                <div class="bg-brand-600 dark:bg-indigo-500 h-2.5 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1">
                                <span>InfinityFree Server, XAMPP Server, phpMyAdmin & MySQL Server</span>
                                <span class="text-brand-600 dark:text-indigo-400">90%</span>
                            </div>
                            <div class="w-full bg-slate-200 dark:bg-slate-800 h-2.5 rounded-full overflow-hidden">
                                <div class="bg-brand-600 dark:bg-indigo-500 h-2.5 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Technical Skills -->
            <div class="mt-10 glass-card p-8 rounded-2xl shadow-sm">
                <div class="mb-6">
                    <h4 class="text-xl font-bold">Technical Skills</h4>
                    <p class="text-slate-600 dark:text-slate-400 mt-2">Programming languages, development tools, testing tools, and productivity applications.</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                    <div class="rounded-xl bg-slate-50 dark:bg-slate-800/60 p-5">
                        <h5 class="font-bold mb-2">Programming Languages</h5>
                        <p class="text-slate-600 dark:text-slate-300">Python, C, C++</p>
                    </div>
                    <div class="rounded-xl bg-slate-50 dark:bg-slate-800/60 p-5">
                        <h5 class="font-bold mb-2">Scripting Languages</h5>
                        <p class="text-slate-600 dark:text-slate-300">PHP, JavaScript</p>
                    </div>
                    <div class="rounded-xl bg-slate-50 dark:bg-slate-800/60 p-5">
                        <h5 class="font-bold mb-2">Databases</h5>
                        <p class="text-slate-600 dark:text-slate-300">MySQL, Database Query Optimization</p>
                    </div>
                    <div class="rounded-xl bg-slate-50 dark:bg-slate-800/60 p-5">
                        <h5 class="font-bold mb-2">Frontend Technologies</h5>
                        <p class="text-slate-600 dark:text-slate-300">HTML, CSS, JavaScript (JS)</p>
                    </div>
                    <div class="rounded-xl bg-slate-50 dark:bg-slate-800/60 p-5">
                        <h5 class="font-bold mb-2">Testing Tools</h5>
                        <p class="text-slate-600 dark:text-slate-300">Postman API, SoapUI</p>
                    </div>
                    <div class="rounded-xl bg-slate-50 dark:bg-slate-800/60 p-5">
                        <h5 class="font-bold mb-2">Development Servers & Tools</h5>
                        <p class="text-slate-600 dark:text-slate-300">XAMPP, MySQL Server, phpMyAdmin</p>
                    </div>
                    <div class="rounded-xl bg-slate-50 dark:bg-slate-800/60 p-5">
                        <h5 class="font-bold mb-2">AI Tools & Skills: ChatGPT, Google Gemini, Microsoft Copilot, Prompt Engineering</h5>
                        <p class="text-slate-600 dark:text-slate-300">AI Prompt Engineer - Ability to write clear, structured prompts to generate, debug, optimize, and improve code using AI tools.</p>
                    </div>             
                    <div class="rounded-xl bg-slate-50 dark:bg-slate-800/60 p-5 sm:col-span-2 lg:col-span-1">
                        <h5 class="font-bold mb-2">Other Skills</h5>
                        <p class="text-slate-600 dark:text-slate-300">MS Office,</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Timeline Section -->
    <section id="experience" class="py-24 bg-white/50 dark:bg-slate-900/40 border-y border-slate-200 dark:border-slate-800">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <h2 class="text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-widest">Career Path</h2>
                <h3 class="text-3xl font-extrabold">Experience Timeline</h3>
                <p class="text-slate-600 dark:text-slate-400">Professional experience in software development and enterprise IT services.</p>
            </div>

            <div class="relative border-l-2 border-brand-200 dark:border-brand-900 ml-4 md:ml-32 space-y-12">
                <!-- Job 1 -->
                <div class="relative pl-8 md:pl-10 group">
                    <div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-brand-600 dark:bg-indigo-500 ring-4 ring-white dark:ring-slate-950"></div>
                    <div class="absolute -left-36 top-1 hidden md:block text-right w-28 text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-wider">
                        Feb 2022 — Sep 2022
                    </div>
                    <div class="glass-card p-6 rounded-2xl shadow-sm space-y-3">
                        <span class="inline-block md:hidden text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-wider mb-1">Feb 2022 — Sep 2022</span>
                        <h4 class="text-xl font-bold">Assistant System Engineer Trainee</h4>
                        <h5 class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wide">Tata Consultancy Services (TCS) • Chennai, India</h5>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                            Worked as an Assistant System Engineer Trainee, gaining professional experience in enterprise IT processes and software-related workflows.
                        </p>
                    </div>
                </div>

                <!-- Job 2 -->
                <div class="relative pl-8 md:pl-10 group">
                    <div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-brand-600 dark:bg-indigo-500 ring-4 ring-white dark:ring-slate-950"></div>
                    <div class="absolute -left-36 top-1 hidden md:block text-right w-28 text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-wider">
                        Jul 2019 — Jun 2020
                    </div>
                    <div class="glass-card p-6 rounded-2xl shadow-sm space-y-3">
                        <span class="inline-block md:hidden text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-wider mb-1">Jul 2019 — Jun 2020</span>
                        <h4 class="text-xl font-bold">Software Developer</h4>
                        <h5 class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wide">Kshema General Insurance Pvt. Ltd. • Hyderabad, India</h5>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                            Worked as a Software Developer on the Business Associate Support System (BASS) project.
                        </p>
                        <div class="pt-2 space-y-3 text-sm text-slate-600 dark:text-slate-300">
                            <p><span class="font-semibold text-slate-800 dark:text-slate-100">Project:</span> Business Associate Support System (BASS)</p>
                            <div>
                                <h6 class="font-semibold text-slate-800 dark:text-slate-100 mb-1">Technologies Used</h6>
                                <p>PHP, JavaScript, AJAX, jQuery, AngularJS, MySQL Queries, MySQL Server</p>
                            </div>
                            <div>
                                <h6 class="font-semibold text-slate-800 dark:text-slate-100 mb-1">Development Tools</h6>
                                <p>Editor: Notepad++</p>
                                <p>Testing Tools: Postman API, SoapUI</p>
                                <p>Framework: PHP Laravel</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Job 3 -->
                <div class="relative pl-8 md:pl-10 group">
                    <div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-brand-600 dark:bg-indigo-500 ring-4 ring-white dark:ring-slate-950"></div>
                    <div class="absolute -left-36 top-1 hidden md:block text-right w-28 text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-wider">
                        2018 — 2020
                    </div>
                    <div class="glass-card p-6 rounded-2xl shadow-sm space-y-3">
                        <span class="inline-block md:hidden text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-wider mb-1">2018 — 2020</span>
                        <h4 class="text-xl font-bold">Academic & Web Development Projects</h4>
                        <h5 class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wide">Academic and Professional Projects • India</h5>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                            Built projects involving Python and machine learning, PHP, MySQL, and web application features as part of academic and professional development.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Educational Qualifications Section -->
    <section id="education" class="py-24">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <h2 class="text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-widest">Academic Background</h2>
                <h3 class="text-3xl font-extrabold">Educational Qualifications</h3>
                <p class="text-slate-600 dark:text-slate-400">My academic qualifications and achievements.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <article class="glass-card p-7 rounded-2xl shadow-sm hover:-translate-y-1 transition-transform">
                    <div class="w-12 h-12 rounded-xl bg-brand-100 dark:bg-brand-900/40 text-brand-600 dark:text-indigo-400 flex items-center justify-center mb-5">
                        <i class="fa-solid fa-graduation-cap text-xl"></i>
                    </div>
                    <p class="text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-widest mb-2">Aug 2015 – May 2019</p>
                    <h4 class="text-lg font-bold mb-2">B.Tech – Computer Science and Engineering</h4>
                    <p class="text-sm text-slate-600 dark:text-slate-400 mb-4">Usha Rama College of Engineering &amp; Technology</p>
                    <div class="border-t border-slate-200 dark:border-slate-700 pt-4">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Percentage</span>
                        <p class="text-2xl font-extrabold text-brand-600 dark:text-indigo-400">68.73%</p>
                    </div>
                </article>

                <article class="glass-card p-7 rounded-2xl shadow-sm hover:-translate-y-1 transition-transform">
                    <div class="w-12 h-12 rounded-xl bg-brand-100 dark:bg-brand-900/40 text-brand-600 dark:text-indigo-400 flex items-center justify-center mb-5">
                        <i class="fa-solid fa-book-open text-xl"></i>
                    </div>
                    <p class="text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-widest mb-2">Jun 2013 – Apr 2015</p>
                    <h4 class="text-lg font-bold mb-2">Intermediate – MPC</h4>
                    <p class="text-sm text-slate-600 dark:text-slate-400 mb-4">Narayana Junior College</p>
                    <div class="border-t border-slate-200 dark:border-slate-700 pt-4">
                        <span class="text-sm text-slate-500 dark:text-slate-400">Percentage</span>
                        <p class="text-2xl font-extrabold text-brand-600 dark:text-indigo-400">89.2%</p>
                    </div>
                </article>

                <article class="glass-card p-7 rounded-2xl shadow-sm hover:-translate-y-1 transition-transform">
                    <div class="w-12 h-12 rounded-xl bg-brand-100 dark:bg-brand-900/40 text-brand-600 dark:text-indigo-400 flex items-center justify-center mb-5">
                        <i class="fa-solid fa-school text-xl"></i>
                    </div>
                    <p class="text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-widest mb-2">Jun 2012 – Apr 2013</p>
                    <h4 class="text-lg font-bold mb-2">SSC – 10th Class</h4>
                    <p class="text-sm text-slate-600 dark:text-slate-400 mb-4">Montessori English Medium High School</p>
                    <div class="border-t border-slate-200 dark:border-slate-700 pt-4">
                        <span class="text-sm text-slate-500 dark:text-slate-400">CGPA</span>
                        <p class="text-2xl font-extrabold text-brand-600 dark:text-indigo-400">8.5</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section id="certifications" class="py-24 bg-white/50 dark:bg-slate-900/40 border-y border-slate-200 dark:border-slate-800">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <h2 class="text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-widest">Professional Development</h2>
                <h3 class="text-3xl font-extrabold">Certifications &amp; Workshops</h3>
                <p class="text-slate-600 dark:text-slate-400">Certifications, workshops, and training programs completed.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <article class="glass-card p-6 rounded-2xl shadow-sm">
                    <p class="text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-widest mb-2">August 2017</p>
                    <h4 class="text-lg font-bold mb-2">IBM CE – Learning Business Intelligence using IBM Cognos</h4>
                </article>
                <article class="glass-card p-6 rounded-2xl shadow-sm">
                    <p class="text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-widest mb-2">August 2017</p>
                    <h4 class="text-lg font-bold mb-2">IBM CE – Foundation Course in Business Analytics using Cognos Insight</h4>
                </article>
                <article class="glass-card p-6 rounded-2xl shadow-sm">
                    <p class="text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-widest mb-2">February 2018</p>
                    <h4 class="text-lg font-bold mb-2">IBM CE – Essentials of Big Data with Hadoop using IBM InfoSphere BigInsights</h4>
                </article>
                <article class="glass-card p-6 rounded-2xl shadow-sm">
                    <p class="text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-widest mb-2">February 2017</p>
                    <h4 class="text-lg font-bold mb-2">Workshop: Responsive Web Designing using Bootstrap 3</h4>
                    <p class="text-sm text-slate-600 dark:text-slate-400">Usha Rama College of Engineering and Technology</p>
                </article>
                <article class="glass-card p-6 rounded-2xl shadow-sm">
                    <p class="text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-widest mb-2">February 2019</p>
                    <h4 class="text-lg font-bold mb-2">Employability Skills Training</h4>
                    <p class="text-sm text-slate-600 dark:text-slate-400">Conducted by Mahindra Pride Classroom in association with APSSDC.</p>
                </article>
                <article class="glass-card p-6 rounded-2xl shadow-sm">
                    <p class="text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-widest mb-2">February 2018</p>
                    <h4 class="text-lg font-bold mb-2">Workshop: Artificial Intelligence</h4>
                    <p class="text-sm text-slate-600 dark:text-slate-400">Organized by URCE-JNTUK in association with Robokart.com and Innovation Cell UMIC, IIT Bombay.</p>
                </article>
                <article class="glass-card p-6 rounded-2xl shadow-sm md:col-span-2">
                    <p class="text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-widest mb-2">January 2022 – April 2022</p>
                    <h4 class="text-lg font-bold mb-2">Udemy Python Certification</h4>
                    <p class="text-sm text-slate-600 dark:text-slate-400 mb-3">Python Programming</p>
                    <a href="https://www.udemy.com/certificate/UC-bd2e4dca-be2e-4151-818a1eac4f87998e/" target="_blank" rel="noopener noreferrer" class="text-sm font-semibold text-brand-600 dark:text-indigo-400 hover:underline">View Certificate <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i></a>
                </article>
            </div>
        </div>
    </section>

    <!-- Languages Section -->
    <section id="languages" class="py-20">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-10 space-y-3">
                <h2 class="text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-widest">Communication</h2>
                <h3 class="text-3xl font-extrabold">Languages</h3>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <article class="glass-card p-6 rounded-2xl text-center shadow-sm">
                    <i class="fa-solid fa-language text-2xl text-brand-600 dark:text-indigo-400 mb-3"></i>
                    <h4 class="font-bold text-lg">English</h4><p class="text-sm text-slate-600 dark:text-slate-400">Professional</p>
                </article>
                <article class="glass-card p-6 rounded-2xl text-center shadow-sm">
                    <i class="fa-solid fa-comments text-2xl text-brand-600 dark:text-indigo-400 mb-3"></i>
                    <h4 class="font-bold text-lg">Telugu</h4><p class="text-sm text-slate-600 dark:text-slate-400">Native</p>
                </article>
                <article class="glass-card p-6 rounded-2xl text-center shadow-sm">
                    <i class="fa-solid fa-comments text-2xl text-brand-600 dark:text-indigo-400 mb-3"></i>
                    <h4 class="font-bold text-lg">Hindi</h4><p class="text-sm text-slate-600 dark:text-slate-400">Conversational</p>
                </article>
            </div>
        </div>
    </section>

    <!-- Portfolio / Projects Section -->
    <section id="portfolio" class="py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <h2 class="text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-widest">Portfolio</h2>
                <h3 class="text-3xl font-extrabold">Featured Projects</h3>
                <p class="text-slate-600 dark:text-slate-400">Selected web development projects demonstrating frontend, backend, database, and application development skills.</p>
            </div>

            <!-- Filter Buttons -->
            <div class="flex flex-wrap items-center justify-center gap-3 mb-12">
                <button class="filter-btn px-5 py-2 rounded-xl text-sm font-semibold bg-brand-600 text-white shadow-md transition-all" data-filter="all">All Projects</button>
                <button class="filter-btn px-5 py-2 rounded-xl text-sm font-semibold bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-700 transition-all" data-filter="database">Database & Academic</button>
                <button class="filter-btn px-5 py-2 rounded-xl text-sm font-semibold bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-700 transition-all" data-filter="fullstack">Full-Stack</button>
            </div>

            <!-- Projects Grid -->
            <div id="projects-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="project-card glass-card rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col" data-category="fullstack">
                    <div class="h-48 overflow-hidden relative bg-slate-100 dark:bg-slate-800">
                        <img src="cv/img/selp.png" alt="SELP Nexus 2.0 Dashboard" class="w-full h-full object-cover object-top" loading="lazy">
                        <span class="absolute top-4 right-4 px-3 py-1 rounded-lg bg-black/60 text-white text-xs font-semibold">Web App</span>
                    </div> 
                    <div class="p-6 flex flex-col flex-grow space-y-3">
                        <h4 class="text-xl font-bold">SELP — Saladi E-Learning Platform</h4>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed flex-grow">A full-stack e-learning platform featuring a user dashboard, account and profile management, tasks, calendar, announcements, ticket-based support, notifications, and a leaderboard. Includes SELP Courses, online examinations with proctoring, certificate generation, session management, and an admin module with CRUD operations for managing platform data and content.</p>
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">PHP</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">MySQL</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">JavaScript</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">AJAX</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">Live Hosting: InfinityFree</span>
                        </div>
                        <div class="pt-4 border-t border-slate-200 dark:border-slate-800 text-sm font-semibold">
                            <a href="https://selp.site.je" target="_blank" rel="noopener noreferrer" class="text-brand-600 dark:text-indigo-400 hover:underline">Visit Website <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i></a>
                        </div>
                    </div>
                </div>

                <div class="project-card glass-card rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col" data-category="fullstack">
                    <div class="h-48 overflow-hidden relative bg-slate-100 dark:bg-slate-800">
                        <img src="cv/img/gmss.png" alt="Grace Mobile Sales and Services Homepage" class="w-full h-full object-cover object-top" loading="lazy">
                        <span class="absolute top-4 right-4 px-3 py-1 rounded-lg bg-black/60 text-white text-xs font-semibold">Web App</span>
                    </div>
                    <div class="p-6 flex flex-col flex-grow space-y-3">
                        <h4 class="text-xl font-bold">Grace Mobile Sales & Services</h4>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed flex-grow">A mobile and computer accessories website featuring product browsing, inventory and billing administration, and WhatsApp-based customer ordering. Customers can receive automated order confirmation receipts by email using PHPMailer and Gmail SMTP.</p>
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">PHP</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">MySQL</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">HTML/CSS</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">JavaScript</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">PHPMailer</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">Gmail SMTP</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">Live Hosting: InfinityFree</span>
                        </div>
                        <div class="pt-4 border-t border-slate-200 dark:border-slate-800 text-sm font-semibold">
                            <a href="https://gracemobilesaleservices.site.je/" target="_blank" rel="noopener noreferrer" class="text-brand-600 dark:text-indigo-400 hover:underline">Visit Website <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i></a>
                        </div>
                    </div>
                </div>
                                
                <div class="project-card glass-card rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col" data-category="fullstack">
                    <div class="h-48 overflow-hidden relative bg-slate-100 dark:bg-slate-800">
                        <img src="cv/img/sconnect.png" alt="SCONNECT Social Networking Homepage" class="w-full h-full object-cover object-top" loading="lazy">
                        <span class="absolute top-4 right-4 px-3 py-1 rounded-lg bg-black/60 text-white text-xs font-semibold">Web App</span>
                    </div>
                    <div class="p-6 flex flex-col flex-grow space-y-3">
                        <h4 class="text-xl font-bold">SCONNECT</h4>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed flex-grow">A social networking web application developed using PHP, MySQL, and JavaScript. Access is restricted to candidates registered with SELP (Saladi E-Learning Platform).</p>
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">PHP</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">MySQL</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">JavaScript</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">Live Hosting: InfinityFree</span>
                        </div>
                        <div class="pt-4 border-t border-slate-200 dark:border-slate-800 text-sm font-semibold">
                            <a href="https://selp.site.je/selp/sbook/login" target="_blank" rel="noopener noreferrer" class="text-brand-600 dark:text-indigo-400 hover:underline">Visit Website <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i></a>
                        </div>
                    </div>
                </div>
                                
                <div class="project-card glass-card rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col" data-category="database">
                    <div class="h-48 overflow-hidden relative bg-gradient-to-br from-emerald-600 to-teal-500 flex items-center justify-center">
                        <i class="fa-solid fa-chart-column text-white text-6xl"></i>
                        <span class="absolute top-4 right-4 px-3 py-1 rounded-lg bg-black/60 text-white text-xs font-semibold">Academic</span>
                    </div>
                    <div class="p-6 flex flex-col flex-grow space-y-3">
                        <h4 class="text-xl font-bold">Bank Customer Classification</h4>
                        <p class="text-xs font-semibold text-slate-500 dark:text-slate-400">Academic Project · June 2018 – February 2019</p>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed flex-grow">Developed a machine-learning model to classify bank customers using supervised learning techniques. Utilized Artificial Neural Networks (ANN) for predictive analysis.</p>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed"><strong>Tools:</strong> Anaconda3 2018.12</p>
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">Python</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">Machine Learning</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">Supervised Learning</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">Artificial Neural Networks (ANN)</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">Anaconda3 2018.12</span>
                        </div>
                    </div>
                </div>

                <div class="project-card glass-card rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col" data-category="database">
                    <div class="h-48 overflow-hidden relative bg-gradient-to-br from-orange-500 to-rose-500 flex items-center justify-center">
                        <i class="fa-solid fa-key text-white text-6xl"></i>
                        <span class="absolute top-4 right-4 px-3 py-1 rounded-lg bg-black/60 text-white text-xs font-semibold">PHP Project</span>
                    </div>
                    <div class="p-6 flex flex-col flex-grow space-y-3">
                        <h4 class="text-xl font-bold">Forgot Password with OTP</h4>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed flex-grow">A mini project featuring a secure authentication module built with PHP and MySQL, with OTP-based password reset functionality to help users recover access to their accounts.</p>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed"><strong>Server:</strong> XAMPP &nbsp;|&nbsp; <strong>Editor:</strong> Notepad++ &nbsp;|&nbsp; <strong>Database Tool:</strong> phpMyAdmin</p>
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">PHP</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">MySQL</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">OTP-Based Password Reset</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">XAMPP</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">Notepad++</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold">phpMyAdmin</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-white/50 dark:bg-slate-900/40 border-t border-slate-200 dark:border-slate-800">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <h2 class="text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-widest">Contact</h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <div class="lg:col-span-5 space-y-8">
                    <div class="glass-card p-8 rounded-2xl space-y-6">
                        <h4 class="text-xl font-bold">Contact Information</h4>
                        <div class="space-y-4 text-sm">
                            <div class="flex items-center space-x-4">
                                <div class="w-10 h-10 rounded-xl bg-brand-50 dark:bg-brand-950/50 text-brand-600 dark:text-indigo-400 flex items-center justify-center font-bold">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div>
                                    <span class="block text-xs text-slate-500 font-semibold">Email</span>
                                    <a href="mailto:sbvijaysekhar@gmail.com" class="font-bold hover:text-brand-600 transition-colors">sbvijaysekhar@gmail.com</a>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4">
                                <div class="w-10 h-10 rounded-xl bg-brand-50 dark:bg-brand-950/50 text-brand-600 dark:text-indigo-400 flex items-center justify-center font-bold">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div>
                                    <span class="block text-xs text-slate-500 font-semibold">Phone</span>
                                    <span class="font-bold">+91 8331915677</span>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4">
                                <div class="w-10 h-10 rounded-xl bg-brand-50 dark:bg-brand-950/50 text-brand-600 dark:text-indigo-400 flex items-center justify-center font-bold">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <span class="block text-xs text-slate-500 font-semibold">Location</span>
                                    <span class="font-bold">Gudivada, Andhra Pradesh, India</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 bg-slate-100 dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800 text-center text-sm text-slate-500">
        <div class="max-w-7xl mx-auto px-6 space-y-4">
            <p>&copy; <span id="current-year"></span> Saladi Bhavani Vijaya Sekhar. All rights reserved.</p>
            <div class="flex justify-center space-x-6 text-lg">
                <a href="https://github.com" target="_blank" class="hover:text-brand-600 transition-colors"><i class="fa-brands fa-github"></i></a>
                <a href="https://linkedin.com" target="_blank" class="hover:text-brand-600 transition-colors"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
    </footer>

    <!-- Floating Download Resume Button -->
    <a href="#hero" id="download-resume-btn" onclick="triggerResumeDownload(event)" class="fixed bottom-6 left-6 z-40 bg-gradient-to-tr from-brand-600 to-indigo-500 text-white p-4 rounded-2xl shadow-2xl hover:scale-105 transition-all flex items-center space-x-3 group">
        <i class="fa-solid fa-file-arrow-down text-lg"></i>
        <span class="font-bold text-sm hidden sm:inline">Download CV</span>
    </a>

    <!-- JavaScript Application Logic -->
    <script>
        // --- Preloader 0 to 100% Logic ---
        let loadProgress = 0;
        const loaderBar = document.getElementById('loader-bar');
        const loaderPercentage = document.getElementById('loader-percentage');
        const preloader = document.getElementById('preloader');

        const loadInterval = setInterval(() => {
            loadProgress += Math.floor(Math.random() * 15) + 8;
            if (loadProgress >= 100) {
                loadProgress = 100;
                clearInterval(loadInterval);
                setTimeout(() => {
                    preloader.style.opacity = '0';
                    preloader.style.pointerEvents = 'none';
                    setTimeout(() => {
                        preloader.style.display = 'none';
                    }, 700);
                }, 300);
            }
            loaderBar.style.width = loadProgress + '%';
            loaderPercentage.textContent = loadProgress + '%';
        }, 40);

        // Set Current Year in Footer
        document.getElementById('current-year').textContent = new Date().getFullYear();

        // Dark / Light Mode Toggle
        const themeToggleBtn = document.getElementById('theme-toggle');
        const themeIcon = document.getElementById('theme-icon');
        const htmlElement = document.documentElement;

        // Check initial theme preference
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            htmlElement.classList.add('dark');
            themeIcon.className = 'fa-solid fa-sun text-lg';
        } else {
            htmlElement.classList.remove('dark');
            themeIcon.className = 'fa-solid fa-moon text-lg';
        }

        themeToggleBtn.addEventListener('click', () => {
            if (htmlElement.classList.contains('dark')) {
                htmlElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
                themeIcon.className = 'fa-solid fa-moon text-lg';
            } else {
                htmlElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
                themeIcon.className = 'fa-solid fa-sun text-lg';
            }
            updateThreeTheme();
        });

        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        // Typing Effect for Hero
        const roles = [
            "AI Prompt Engineer",
            "Full-Stack Web Developer",
            "PHP & Backend Developer",
            "MySQL Database Developer",
            "Web Application Developer"
        ];
        let roleIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        const typingSpeed = 100;
        const deletingSpeed = 50;
        const pauseTime = 2000;
        const typingTextEl = document.getElementById('typing-text');

        function typeEffect() {
            const currentRole = roles[roleIndex];
            
            if (isDeleting) {
                typingTextEl.textContent = currentRole.substring(0, charIndex - 1);
                charIndex--;
            } else {
                typingTextEl.textContent = currentRole.substring(0, charIndex + 1);
                charIndex++;
            }

            let speed = isDeleting ? deletingSpeed : typingSpeed;

            if (!isDeleting && charIndex === currentRole.length) {
                speed = pauseTime;
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                roleIndex = (roleIndex + 1) % roles.length;
                speed = 500;
            }

            setTimeout(typeEffect, speed);
        }

        document.addEventListener("DOMContentLoaded", () => {
            setTimeout(typeEffect, 1000);

            // --- Scroll Animation Observer for Cards ---
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const cardObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const cards = document.querySelectorAll('.glass-card, .project-card');
            cards.forEach((card, index) => {
                card.classList.add('scroll-animate');
                card.style.transitionDelay = `${(index % 3) * 0.1}s`;
                cardObserver.observe(card);

                // --- 3D Hover Tilt Effect ---
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    const xc = rect.width / 2;
                    const yc = rect.height / 2;
                    const dx = (x - xc) / xc;
                    const dy = (y - yc) / yc;
                    card.style.transform = `perspective(1000px) rotateX(${dy * -6}deg) rotateY(${dx * 6}deg) translateY(-4px)`;
                });

                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0px)';
                    card.style.transition = 'transform 0.5s ease';
                });

                card.addEventListener('mouseenter', () => {
                    card.style.transition = 'none';
                });
            });
        });

        // Portfolio Category Filter
        const filterButtons = document.querySelectorAll('.filter-btn');
        const projectCards = document.querySelectorAll('.project-card');

        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                filterButtons.forEach(b => {
                    b.classList.remove('bg-brand-600', 'text-white', 'shadow-md');
                    b.classList.add('bg-slate-200', 'dark:bg-slate-800', 'text-slate-700', 'dark:text-slate-300');
                });
                btn.classList.add('bg-brand-600', 'text-white', 'shadow-md');
                btn.classList.remove('bg-slate-200', 'dark:bg-slate-800', 'text-slate-700', 'dark:text-slate-300');

                const filterValue = btn.getAttribute('data-filter');

                projectCards.forEach(card => {
                    if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        function triggerResumeDownload(e) {
            e.preventDefault();
            window.open('https://svcv.freedev.app/cv/img/svcv.pdf', '_blank');
        }

        // --- Three.js Interactive 3D Background Setup ---
        let scene, camera, renderer, particlesMesh, geometry, pointLight;
        let floatingShapes = [];
        let mouseX = 0, mouseY = 0;
        let targetX = 0, targetY = 0;

        function init3D() {
            const canvas = document.getElementById('canvas-3d');
            scene = new THREE.Scene();

            camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
            camera.position.z = 400;

            renderer = new THREE.WebGLRenderer({ canvas: canvas, alpha: true, antialias: true });
            renderer.setSize(window.innerWidth, window.innerHeight);
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

            // Lighting System
            const ambientLight = new THREE.AmbientLight(0xffffff, 0.6);
            scene.add(ambientLight);

            pointLight = new THREE.PointLight(0x6366f1, 1.8, 900);
            pointLight.position.set(0, 0, 350);
            scene.add(pointLight);

            // Particle Constellation Cloud
            const particlesCount = 750;
            const posArray = new Float32Array(particlesCount * 3);

            for(let i = 0; i < particlesCount * 3; i++) {
                posArray[i] = (Math.random() - 0.5) * 1400;
            }

            geometry = new THREE.BufferGeometry();
            geometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));

            const isDark = document.documentElement.classList.contains('dark');
            const material = new THREE.PointsMaterial({
                size: 3.5,
                color: isDark ? 0x818cf8 : 0x4f46e5,
                transparent: true,
                opacity: 0.85,
            });

            particlesMesh = new THREE.Points(geometry, material);
            scene.add(particlesMesh);

            // Add Floating Geometric Mesh Objects (Icosahedron, Torus Knot, Octahedron)
            const shapeMaterial = new THREE.MeshPhongMaterial({
                color: isDark ? 0x6366f1 : 0x4f46e5,
                wireframe: true,
                transparent: true,
                opacity: 0.28
            });

            const icoGeo = new THREE.IcosahedronGeometry(45, 1);
            const knotGeo = new THREE.TorusKnotGeometry(30, 8, 64, 16);
            const octaGeo = new THREE.OctahedronGeometry(40, 0);

            const geometries = [icoGeo, knotGeo, octaGeo];
            for(let i = 0; i < 5; i++) {
                const geo = geometries[i % geometries.length];
                const mesh = new THREE.Mesh(geo, shapeMaterial.clone());
                mesh.position.set(
                    (Math.random() - 0.5) * 900,
                    (Math.random() - 0.5) * 900,
                    (Math.random() - 0.5) * 500
                );
                mesh.rotSpeedX = (Math.random() - 0.5) * 0.012;
                mesh.rotSpeedY = (Math.random() - 0.5) * 0.012;
                scene.add(mesh);
                floatingShapes.push(mesh);
            }

            // Event Listeners
            window.addEventListener('resize', onWindowResize);
            document.addEventListener('mousemove', onMouseMove);

            animate3D();
        }

        function onMouseMove(event) {
            mouseX = (event.clientX - window.innerWidth / 2) * 0.25;
            mouseY = (event.clientY - window.innerHeight / 2) * 0.25;
        }

        function onWindowResize() {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        }

        function updateThreeTheme() {
            if (!particlesMesh) return;
            const isDark = document.documentElement.classList.contains('dark');
            particlesMesh.material.color.setHex(isDark ? 0x818cf8 : 0x4f46e5);
            pointLight.color.setHex(isDark ? 0x818cf8 : 0x4f46e5);
            floatingShapes.forEach(mesh => {
                mesh.material.color.setHex(isDark ? 0x6366f1 : 0x4f46e5);
            });
        }

        function animate3D() {
            requestAnimationFrame(animate3D);

            targetX += (mouseX - targetX) * 0.05;
            targetY += (mouseY - targetY) * 0.05;

            particlesMesh.rotation.x += 0.0008;
            particlesMesh.rotation.y += 0.0012;

            particlesMesh.position.x = targetX * 0.4;
            particlesMesh.position.y = -targetY * 0.4;

            pointLight.position.x = targetX * 1.5;
            pointLight.position.y = -targetY * 1.5;

            floatingShapes.forEach(shape => {
                shape.rotation.x += shape.rotSpeedX;
                shape.rotation.y += shape.rotSpeedY;
            });

            renderer.render(scene, camera);
        }

        window.addEventListener('load', init3D);
    </script>
</body>
</html>