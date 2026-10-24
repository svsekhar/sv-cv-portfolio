<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alex Morgan - Cyber Security & Software Expert | Premium CV Portfolio</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
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
        }
        .dark .glass-card {
            background: rgba(17, 24, 39, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(55, 65, 81, 0.5);
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 dark:bg-slate-950 dark:text-slate-100 transition-colors duration-300 font-sans antialiased selection:bg-brand-500 selection:text-white">

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
                    AM
                </div>
                <div>
                    <span class="font-bold text-lg tracking-tight block">Alex Morgan</span>
                    <span class="text-xs text-brand-600 dark:text-indigo-400 font-semibold tracking-wide uppercase">CyberSec & Dev</span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden md:flex items-center space-x-8 font-medium text-sm">
                <a href="#about" class="hover:text-brand-600 dark:hover:text-indigo-400 transition-colors">About</a>
                <a href="#skills" class="hover:text-brand-600 dark:hover:text-indigo-400 transition-colors">Skills</a>
                <a href="#experience" class="hover:text-brand-600 dark:hover:text-indigo-400 transition-colors">Experience</a>
                <a href="#portfolio" class="hover:text-brand-600 dark:hover:text-indigo-400 transition-colors">Portfolio</a>
                <a href="#contact" class="hover:text-brand-600 dark:hover:text-indigo-400 transition-colors">Contact</a>
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
            <a href="#portfolio" class="block py-2 hover:text-brand-600 dark:hover:text-indigo-400">Portfolio</a>
            <a href="#contact" class="block py-2 hover:text-brand-600 dark:hover:text-indigo-400">Contact</a>
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
                    Hi, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-indigo-400">Alex Morgan</span>
                </h1>

                <h2 class="text-2xl sm:text-3xl font-semibold text-slate-600 dark:text-slate-300 h-12 flex items-center justify-center lg:justify-start">
                    I'm a <span id="typing-text" class="text-brand-600 dark:text-indigo-400 ml-2 font-bold"></span><span class="typing-cursor ml-0.5 h-7"></span>
                </h2>

                <p class="text-slate-600 dark:text-slate-400 text-base sm:text-lg max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                    Senior Cybersecurity Specialist & Full-Stack Architect with over 8 years of experience securing cloud infrastructures, building robust enterprise applications, and leading technical teams.
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
                    <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="hover:text-brand-600 dark:hover:text-indigo-400 transition-colors"><i class="fa-brands fa-github"></i></a>
                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="hover:text-brand-600 dark:hover:text-indigo-400 transition-colors"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="hover:text-brand-600 dark:hover:text-indigo-400 transition-colors"><i class="fa-brands fa-twitter"></i></a>
                    <a href="mailto:alex.morgan@example.com" class="hover:text-brand-600 dark:hover:text-indigo-400 transition-colors"><i class="fa-solid fa-envelope"></i></a>
                </div>
            </div>

            <!-- Hero Avatar / Visual Card -->
            <div class="lg:col-span-5 flex justify-center">
                <div class="relative w-72 h-72 sm:w-96 sm:h-96">
                    <div class="absolute inset-0 rounded-3xl bg-gradient-to-tr from-brand-600 to-indigo-400 transform rotate-6 scale-95 opacity-50 blur-lg"></div>
                    <div class="relative w-full h-full rounded-3xl glass-card overflow-hidden shadow-2xl flex flex-col items-center justify-center p-6 border border-slate-200/60 dark:border-slate-800/60">
                        <div class="w-32 h-32 rounded-2xl bg-slate-200 dark:bg-slate-800 overflow-hidden shadow-inner mb-4 flex items-center justify-center">
                            <img src="https://placehold.co/300x300/4f46e5/ffffff?text=AM" alt="Alex Morgan Avatar" class="w-full h-full object-cover">
                        </div>
                        <h3 class="font-bold text-xl">Alex Morgan</h3>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">San Francisco, CA</p>
                        
                        <div class="mt-6 w-full grid grid-cols-2 gap-3 text-center">
                            <div class="p-3 rounded-xl bg-slate-100 dark:bg-slate-900/50">
                                <span class="block font-extrabold text-brand-600 dark:text-indigo-400 text-lg">8+</span>
                                <span class="text-xs text-slate-500">Years Exp.</span>
                            </div>
                            <div class="p-3 rounded-xl bg-slate-100 dark:bg-slate-900/50">
                                <span class="block font-extrabold text-brand-600 dark:text-indigo-400 text-lg">50+</span>
                                <span class="text-xs text-slate-500">Projects</span>
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
                <p class="text-slate-600 dark:text-slate-400">Bridging the gap between secure cloud infrastructure and high-performance software engineering.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="glass-card p-8 rounded-2xl space-y-4 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 rounded-xl bg-brand-50 dark:bg-brand-950/50 text-brand-600 dark:text-indigo-400 flex items-center justify-center text-xl font-bold">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h4 class="text-xl font-bold">Cybersecurity Expert</h4>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                        Specialized in threat intelligence, pentesting, zero-trust network architectures, and compliance frameworks (ISO27001, SOC2).
                    </p>
                </div>

                <div class="glass-card p-8 rounded-2xl space-y-4 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 rounded-xl bg-brand-50 dark:bg-brand-950/50 text-brand-600 dark:text-indigo-400 flex items-center justify-center text-xl font-bold">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <h4 class="text-xl font-bold">Full-Stack Architect</h4>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                        Expertise in modern JS/TS frameworks (React, Node.js, Next.js), Python backend services, and scalable microservices architecture.
                    </p>
                </div>

                <div class="glass-card p-8 rounded-2xl space-y-4 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 rounded-xl bg-brand-50 dark:bg-brand-950/50 text-brand-600 dark:text-indigo-400 flex items-center justify-center text-xl font-bold">
                        <i class="fa-solid fa-cloud"></i>
                    </div>
                    <h4 class="text-xl font-bold">Cloud & DevOps</h4>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                        AWS & Azure certified cloud professional proficient in Docker, Kubernetes, Terraform, and automated CI/CD security pipelines.
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
                <!-- Category 1: Cybersecurity & Cloud -->
                <div class="glass-card p-8 rounded-2xl space-y-6 shadow-sm">
                    <h4 class="text-lg font-bold flex items-center space-x-3">
                        <i class="fa-solid fa-shield-cat text-brand-600 dark:text-indigo-400"></i>
                        <span>Cybersecurity & Cloud Security</span>
                    </h4>
                    
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1">
                                <span>Penetration Testing & Vulnerability Assessment</span>
                                <span class="text-brand-600 dark:text-indigo-400">95%</span>
                            </div>
                            <div class="w-full bg-slate-200 dark:bg-slate-800 h-2.5 rounded-full overflow-hidden">
                                <div class="bg-brand-600 dark:bg-indigo-500 h-2.5 rounded-full" style="width: 95%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1">
                                <span>AWS / Azure Security & IAM</span>
                                <span class="text-brand-600 dark:text-indigo-400">90%</span>
                            </div>
                            <div class="w-full bg-slate-200 dark:bg-slate-800 h-2.5 rounded-full overflow-hidden">
                                <div class="bg-brand-600 dark:bg-indigo-500 h-2.5 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1">
                                <span>SIEM (Splunk, ELK) & Incident Response</span>
                                <span class="text-brand-600 dark:text-indigo-400">85%</span>
                            </div>
                            <div class="w-full bg-slate-200 dark:bg-slate-800 h-2.5 rounded-full overflow-hidden">
                                <div class="bg-brand-600 dark:bg-indigo-500 h-2.5 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1">
                                <span>Network Security & Zero Trust Architecture</span>
                                <span class="text-brand-600 dark:text-indigo-400">92%</span>
                            </div>
                            <div class="w-full bg-slate-200 dark:bg-slate-800 h-2.5 rounded-full overflow-hidden">
                                <div class="bg-brand-600 dark:bg-indigo-500 h-2.5 rounded-full" style="width: 92%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category 2: Software Development -->
                <div class="glass-card p-8 rounded-2xl space-y-6 shadow-sm">
                    <h4 class="text-lg font-bold flex items-center space-x-3">
                        <i class="fa-solid fa-laptop-code text-brand-600 dark:text-indigo-400"></i>
                        <span>Software Engineering & Dev</span>
                    </h4>
                    
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1">
                                <span>JavaScript / TypeScript / React</span>
                                <span class="text-brand-600 dark:text-indigo-400">92%</span>
                            </div>
                            <div class="w-full bg-slate-200 dark:bg-slate-800 h-2.5 rounded-full overflow-hidden">
                                <div class="bg-brand-600 dark:bg-indigo-500 h-2.5 rounded-full" style="width: 92%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1">
                                <span>Python & FastAPI / Django</span>
                                <span class="text-brand-600 dark:text-indigo-400">88%</span>
                            </div>
                            <div class="w-full bg-slate-200 dark:bg-slate-800 h-2.5 rounded-full overflow-hidden">
                                <div class="bg-brand-600 dark:bg-indigo-500 h-2.5 rounded-full" style="width: 88%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1">
                                <span>Docker, Kubernetes & Terraform</span>
                                <span class="text-brand-600 dark:text-indigo-400">85%</span>
                            </div>
                            <div class="w-full bg-slate-200 dark:bg-slate-800 h-2.5 rounded-full overflow-hidden">
                                <div class="bg-brand-600 dark:bg-indigo-500 h-2.5 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1">
                                <span>SQL / NoSQL Database Design</span>
                                <span class="text-brand-600 dark:text-indigo-400">90%</span>
                            </div>
                            <div class="w-full bg-slate-200 dark:bg-slate-800 h-2.5 rounded-full overflow-hidden">
                                <div class="bg-brand-600 dark:bg-indigo-500 h-2.5 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
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
                <p class="text-slate-600 dark:text-slate-400">My professional journey in cybersecurity and software engineering.</p>
            </div>

            <div class="relative border-l-2 border-brand-200 dark:border-brand-900 ml-4 md:ml-32 space-y-12">
                <!-- Job 1 -->
                <div class="relative pl-8 md:pl-10 group">
                    <div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-brand-600 dark:bg-indigo-500 ring-4 ring-white dark:ring-slate-950"></div>
                    <div class="absolute -left-36 top-1 hidden md:block text-right w-28 text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-wider">
                        2021 — Present
                    </div>
                    <div class="glass-card p-6 rounded-2xl shadow-sm space-y-3">
                        <span class="inline-block md:hidden text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-wider mb-1">2021 — Present</span>
                        <h4 class="text-xl font-bold">Lead Cybersecurity Architect</h4>
                        <h5 class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wide">Apex Defense Systems • San Francisco, CA</h5>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                            Spearheading enterprise security posture across multi-cloud environments. Reduced critical vulnerabilities by 45%, managed incident response teams, and deployed automated DevSecOps pipelines.
                        </p>
                    </div>
                </div>

                <!-- Job 2 -->
                <div class="relative pl-8 md:pl-10 group">
                    <div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-brand-600 dark:bg-indigo-500 ring-4 ring-white dark:ring-slate-950"></div>
                    <div class="absolute -left-36 top-1 hidden md:block text-right w-28 text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-wider">
                        2018 — 2021
                    </div>
                    <div class="glass-card p-6 rounded-2xl shadow-sm space-y-3">
                        <span class="inline-block md:hidden text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-wider mb-1">2018 — 2021</span>
                        <h4 class="text-xl font-bold">Senior Full-Stack Developer</h4>
                        <h5 class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wide">NexTech Innovations • Austin, TX</h5>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                            Architected and delivered high-throughput SaaS platforms using React, Node.js, and PostgreSQL. Implemented rigorous application security audits and OAuth2 SSO integrations.
                        </p>
                    </div>
                </div>

                <!-- Job 3 -->
                <div class="relative pl-8 md:pl-10 group">
                    <div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-brand-600 dark:bg-indigo-500 ring-4 ring-white dark:ring-slate-950"></div>
                    <div class="absolute -left-36 top-1 hidden md:block text-right w-28 text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-wider">
                        2016 — 2018
                    </div>
                    <div class="glass-card p-6 rounded-2xl shadow-sm space-y-3">
                        <span class="inline-block md:hidden text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-wider mb-1">2016 — 2018</span>
                        <h4 class="text-xl font-bold">Security Analyst & Pentester</h4>
                        <h5 class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wide">CyberGuard Solutions • New York, NY</h5>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                            Conducted black-box and white-box penetration tests for financial and healthcare clients. Authored detailed threat modeling reports and remediation guidelines.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio / Projects Section -->
    <section id="portfolio" class="py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <h2 class="text-xs font-bold text-brand-600 dark:text-indigo-400 uppercase tracking-widest">Portfolio</h2>
                <h3 class="text-3xl font-extrabold">Featured Projects</h3>
                <p class="text-slate-600 dark:text-slate-400">Explore some of my standout security tools, web apps, and cloud architectures.</p>
            </div>

            <!-- Filter Buttons -->
            <div class="flex flex-wrap items-center justify-center gap-3 mb-12">
                <button class="filter-btn px-5 py-2 rounded-xl text-sm font-semibold bg-brand-600 text-white shadow-md transition-all" data-filter="all">All Projects</button>
                <button class="filter-btn px-5 py-2 rounded-xl text-sm font-semibold bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-700 transition-all" data-filter="security">Cybersecurity</button>
                <button class="filter-btn px-5 py-2 rounded-xl text-sm font-semibold bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-700 transition-all" data-filter="fullstack">Full-Stack</button>
                <button class="filter-btn px-5 py-2 rounded-xl text-sm font-semibold bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-slate-300 dark:hover:bg-slate-700 transition-all" data-filter="cloud">Cloud & DevOps</button>
            </div>

            <!-- Projects Grid -->
            <div id="projects-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="project-card glass-card rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col" data-category="security">
                    <div class="h-48 overflow-hidden relative bg-slate-200 dark:bg-slate-800">
                        <img src="https://placehold.co/600x400/4f46e5/ffffff?text=ThreatIntelli+SIEM" alt="ThreatIntelli SIEM" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 right-4 px-3 py-1 rounded-lg bg-black/60 backdrop-blur-md text-white text-xs font-semibold">Security</span>
                    </div>
                    <div class="p-6 flex flex-col flex-grow space-y-3">
                        <h4 class="text-xl font-bold">ThreatIntelli SIEM</h4>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed flex-grow">
                            An open-source real-time security log analyzer and anomaly detection dashboard built with Python and React.
                        </p>
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold text-slate-600 dark:text-slate-300">Python</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold text-slate-600 dark:text-slate-300">React</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold text-slate-600 dark:text-slate-300">ElasticSearch</span>
                        </div>
                        <div class="pt-4 flex items-center justify-between border-t border-slate-200 dark:border-slate-800 text-sm font-semibold">
                            <a href="#" class="text-brand-600 dark:text-indigo-400 hover:underline flex items-center space-x-1.5"><span>Source Code</span><i class="fa-brands fa-github"></i></a>
                            <a href="#" class="text-brand-600 dark:text-indigo-400 hover:underline flex items-center space-x-1.5"><span>Live Demo</span><i class="fa-solid fa-arrow-up-right-from-square text-xs"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="project-card glass-card rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col" data-category="fullstack">
                    <div class="h-48 overflow-hidden relative bg-slate-200 dark:bg-slate-800">
                        <img src="https://placehold.co/600x400/3b82f6/ffffff?text=SecureCloud+Portal" alt="SecureCloud Portal" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 right-4 px-3 py-1 rounded-lg bg-black/60 backdrop-blur-md text-white text-xs font-semibold">Full-Stack</span>
                    </div>
                    <div class="p-6 flex flex-col flex-grow space-y-3">
                        <h4 class="text-xl font-bold">SecureCloud Enterprise SaaS</h4>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed flex-grow">
                            High-performance enterprise workspace featuring end-to-end encryption, RBAC, and real-time collaboration tools.
                        </p>
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold text-slate-600 dark:text-slate-300">Next.js</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold text-slate-600 dark:text-slate-300">TypeScript</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold text-slate-600 dark:text-slate-300">PostgreSQL</span>
                        </div>
                        <div class="pt-4 flex items-center justify-between border-t border-slate-200 dark:border-slate-800 text-sm font-semibold">
                            <a href="#" class="text-brand-600 dark:text-indigo-400 hover:underline flex items-center space-x-1.5"><span>Source Code</span><i class="fa-brands fa-github"></i></a>
                            <a href="#" class="text-brand-600 dark:text-indigo-400 hover:underline flex items-center space-x-1.5"><span>Live Demo</span><i class="fa-solid fa-arrow-up-right-from-square text-xs"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="project-card glass-card rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col" data-category="cloud">
                    <div class="h-48 overflow-hidden relative bg-slate-200 dark:bg-slate-800">
                        <img src="https://placehold.co/600x400/6366f1/ffffff?text=ZeroTrust+K8s+Mesh" alt="ZeroTrust K8s Mesh" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 right-4 px-3 py-1 rounded-lg bg-black/60 backdrop-blur-md text-white text-xs font-semibold">Cloud</span>
                    </div>
                    <div class="p-6 flex flex-col flex-grow space-y-3">
                        <h4 class="text-xl font-bold">ZeroTrust K8s Mesh</h4>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed flex-grow">
                            Automated Terraform modules and Istio service mesh configurations enforcing strict mutual TLS and policy compliance.
                        </p>
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold text-slate-600 dark:text-slate-300">Kubernetes</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold text-slate-600 dark:text-slate-300">Terraform</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold text-slate-600 dark:text-slate-300">AWS</span>
                        </div>
                        <div class="pt-4 flex items-center justify-between border-t border-slate-200 dark:border-slate-800 text-sm font-semibold">
                            <a href="#" class="text-brand-600 dark:text-indigo-400 hover:underline flex items-center space-x-1.5"><span>Source Code</span><i class="fa-brands fa-github"></i></a>
                            <a href="#" class="text-brand-600 dark:text-indigo-400 hover:underline flex items-center space-x-1.5"><span>Live Demo</span><i class="fa-solid fa-arrow-up-right-from-square text-xs"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="project-card glass-card rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col" data-category="security">
                    <div class="h-48 overflow-hidden relative bg-slate-200 dark:bg-slate-800">
                        <img src="https://placehold.co/600x400/8b5cf6/ffffff?text=VulnScan+CLI" alt="VulnScan CLI" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 right-4 px-3 py-1 rounded-lg bg-black/60 backdrop-blur-md text-white text-xs font-semibold">Security</span>
                    </div>
                    <div class="p-6 flex flex-col flex-grow space-y-3">
                        <h4 class="text-xl font-bold">VulnScan CI/CD CLI</h4>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed flex-grow">
                            Lightweight CLI utility integrated into GitHub Actions to scan container images and dependencies for known CVEs.
                        </p>
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold text-slate-600 dark:text-slate-300">Go</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold text-slate-600 dark:text-slate-300">Docker</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold text-slate-600 dark:text-slate-300">CI/CD</span>
                        </div>
                        <div class="pt-4 flex items-center justify-between border-t border-slate-200 dark:border-slate-800 text-sm font-semibold">
                            <a href="#" class="text-brand-600 dark:text-indigo-400 hover:underline flex items-center space-x-1.5"><span>Source Code</span><i class="fa-brands fa-github"></i></a>
                            <a href="#" class="text-brand-600 dark:text-indigo-400 hover:underline flex items-center space-x-1.5"><span>Live Demo</span><i class="fa-solid fa-arrow-up-right-from-square text-xs"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="project-card glass-card rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col" data-category="fullstack">
                    <div class="h-48 overflow-hidden relative bg-slate-200 dark:bg-slate-800">
                        <img src="https://placehold.co/600x400/ec4899/ffffff?text=CryptoChat" alt="CryptoChat" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 right-4 px-3 py-1 rounded-lg bg-black/60 backdrop-blur-md text-white text-xs font-semibold">Full-Stack</span>
                    </div>
                    <div class="p-6 flex flex-col flex-grow space-y-3">
                        <h4 class="text-xl font-bold">Encrypted P2P Messenger</h4>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed flex-grow">
                            WebRTC-based decentralized messaging application utilizing Signal protocol for complete end-to-end encryption.
                        </p>
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold text-slate-600 dark:text-slate-300">WebRTC</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold text-slate-600 dark:text-slate-300">Node.js</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold text-slate-600 dark:text-slate-300">CryptoJS</span>
                        </div>
                        <div class="pt-4 flex items-center justify-between border-t border-slate-200 dark:border-slate-800 text-sm font-semibold">
                            <a href="#" class="text-brand-600 dark:text-indigo-400 hover:underline flex items-center space-x-1.5"><span>Source Code</span><i class="fa-brands fa-github"></i></a>
                            <a href="#" class="text-brand-600 dark:text-indigo-400 hover:underline flex items-center space-x-1.5"><span>Live Demo</span><i class="fa-solid fa-arrow-up-right-from-square text-xs"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="project-card glass-card rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col" data-category="cloud">
                    <div class="h-48 overflow-hidden relative bg-slate-200 dark:bg-slate-800">
                        <img src="https://placehold.co/600x400/10b981/ffffff?text=CloudCost+Optimizer" alt="CloudCost Optimizer" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 right-4 px-3 py-1 rounded-lg bg-black/60 backdrop-blur-md text-white text-xs font-semibold">Cloud</span>
                    </div>
                    <div class="p-6 flex flex-col flex-grow space-y-3">
                        <h4 class="text-xl font-bold">CloudCost AI Optimizer</h4>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed flex-grow">
                            Automated daemon analyzing AWS resource usage and idle instances to recommend optimal resizing and cost reduction.
                        </p>
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold text-slate-600 dark:text-slate-300">Python</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold text-slate-600 dark:text-slate-300">AWS Boto3</span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-semibold text-slate-600 dark:text-slate-300">Docker</span>
                        </div>
                        <div class="pt-4 flex items-center justify-between border-t border-slate-200 dark:border-slate-800 text-sm font-semibold">
                            <a href="#" class="text-brand-600 dark:text-indigo-400 hover:underline flex items-center space-x-1.5"><span>Source Code</span><i class="fa-brands fa-github"></i></a>
                            <a href="#" class="text-brand-600 dark:text-indigo-400 hover:underline flex items-center space-x-1.5"><span>Live Demo</span><i class="fa-solid fa-arrow-up-right-from-square text-xs"></i></a>
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
                <h3 class="text-3xl font-extrabold">Let's Work Together</h3>
                <p class="text-slate-600 dark:text-slate-400">Have a project in mind or want to discuss security consultation? Drop me a message.</p>
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
                                    <a href="mailto:alex.morgan@example.com" class="font-bold hover:text-brand-600 transition-colors">alex.morgan@example.com</a>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4">
                                <div class="w-10 h-10 rounded-xl bg-brand-50 dark:bg-brand-950/50 text-brand-600 dark:text-indigo-400 flex items-center justify-center font-bold">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div>
                                    <span class="block text-xs text-slate-500 font-semibold">Phone</span>
                                    <span class="font-bold">+1 (555) 382-9102</span>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4">
                                <div class="w-10 h-10 rounded-xl bg-brand-50 dark:bg-brand-950/50 text-brand-600 dark:text-indigo-400 flex items-center justify-center font-bold">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <span class="block text-xs text-slate-500 font-semibold">Location</span>
                                    <span class="font-bold">San Francisco, CA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7">
                    <form id="contact-form" class="glass-card p-8 rounded-2xl space-y-6 shadow-sm" novalidate>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="name" class="text-xs font-bold uppercase tracking-wider text-slate-600 dark:text-slate-400">Your Name</label>
                                <input type="text" id="name" name="name" required class="w-full px-4 py-3 rounded-xl bg-slate-100 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 focus:outline-none focus:ring-2 focus:ring-brand-500 text-sm transition-all" placeholder="John Doe">
                                <p id="name-error" class="text-xs text-rose-500 hidden">Please enter your name.</p>
                            </div>
                            <div class="space-y-2">
                                <label for="email" class="text-xs font-bold uppercase tracking-wider text-slate-600 dark:text-slate-400">Your Email</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-3 rounded-xl bg-slate-100 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 focus:outline-none focus:ring-2 focus:ring-brand-500 text-sm transition-all" placeholder="john@example.com">
                                <p id="email-error" class="text-xs text-rose-500 hidden">Please enter a valid email.</p>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label for="subject" class="text-xs font-bold uppercase tracking-wider text-slate-600 dark:text-slate-400">Subject</label>
                            <input type="text" id="subject" name="subject" required class="w-full px-4 py-3 rounded-xl bg-slate-100 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 focus:outline-none focus:ring-2 focus:ring-brand-500 text-sm transition-all" placeholder="Security Consultation / Job Offer">
                            <p id="subject-error" class="text-xs text-rose-500 hidden">Please enter a subject.</p>
                        </div>

                        <div class="space-y-2">
                            <label for="message" class="text-xs font-bold uppercase tracking-wider text-slate-600 dark:text-slate-400">Message</label>
                            <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 rounded-xl bg-slate-100 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 focus:outline-none focus:ring-2 focus:ring-brand-500 text-sm transition-all" placeholder="Hello Alex, we would like to discuss..."></textarea>
                            <p id="message-error" class="text-xs text-rose-500 hidden">Please enter your message.</p>
                        </div>

                        <button type="submit" class="w-full py-4 rounded-xl bg-brand-600 text-white font-bold hover:bg-brand-700 shadow-lg shadow-brand-500/25 transition-all flex items-center justify-center space-x-2">
                            <span>Send Message</span>
                            <i class="fa-solid fa-paper-plane text-xs"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 bg-slate-100 dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800 text-center text-sm text-slate-500">
        <div class="max-w-7xl mx-auto px-6 space-y-4">
            <p>&copy; <span id="current-year"></span> Alex Morgan. All rights reserved. Built with precision & Tailwind CSS.</p>
            <div class="flex justify-center space-x-6 text-lg">
                <a href="https://github.com" target="_blank" class="hover:text-brand-600 transition-colors"><i class="fa-brands fa-github"></i></a>
                <a href="https://linkedin.com" target="_blank" class="hover:text-brand-600 transition-colors"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://twitter.com" target="_blank" class="hover:text-brand-600 transition-colors"><i class="fa-brands fa-twitter"></i></a>
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
        });

        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu on clicking links
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        // Typing Effect for Hero
        const roles = [
            "Cybersecurity Professional",
            "Full-Stack Architect",
            "Cloud & DevOps Engineer",
            "Penetration Tester"
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
        });

        // Portfolio Category Filter
        const filterButtons = document.querySelectorAll('.filter-btn');
        const projectCards = document.querySelectorAll('.project-card');

        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                // Update active state of buttons
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

        // Contact Form Validation & Toast Notification
        const contactForm = document.getElementById('contact-form');
        const toast = document.getElementById('toast');
        const toastMessage = document.getElementById('toast-message');

        function showToast(message, isSuccess = true) {
            toastMessage.textContent = message;
            toast.className = `fixed bottom-6 right-6 z-50 transform translate-y-0 opacity-100 transition-all duration-300 ${isSuccess ? 'bg-emerald-600' : 'bg-rose-600'} text-white px-6 py-3 rounded-xl shadow-2xl flex items-center space-x-3`;
            setTimeout(() => {
                toast.className = 'fixed bottom-6 right-6 z-50 transform translate-y-32 opacity-0 transition-all duration-300 bg-emerald-600 text-white px-6 py-3 rounded-xl shadow-2xl flex items-center space-x-3';
            }, 4000);
        }

        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const subject = document.getElementById('subject');
            const message = document.getElementById('message');

            let isValid = true;

            // Simple validation check
            if (!name.value.trim()) {
                document.getElementById('name-error').classList.remove('hidden');
                isValid = false;
            } else {
                document.getElementById('name-error').classList.add('hidden');
            }

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email.value.trim() || !emailRegex.test(email.value)) {
                document.getElementById('email-error').classList.remove('hidden');
                isValid = false;
            } else {
                document.getElementById('email-error').classList.add('hidden');
            }

            if (!subject.value.trim()) {
                document.getElementById('subject-error').classList.remove('hidden');
                isValid = false;
            } else {
                document.getElementById('subject-error').classList.add('hidden');
            }

            if (!message.value.trim()) {
                document.getElementById('message-error').classList.remove('hidden');
                isValid = false;
            } else {
                document.getElementById('message-error').classList.add('hidden');
            }

            if (isValid) {
                showToast("Thank you! Your message has been sent successfully.");
                contactForm.reset();
            } else {
                showToast("Please fill in all required fields correctly.", false);
            }
        });

        // Trigger Resume Download Simulation
        function triggerResumeDownload(e) {
            e.preventDefault();
            showToast("Downloading Alex_Morgan_CV_2026.pdf...");
            // Simulate download action
            setTimeout(() => {
                const dummyContent = "Alex Morgan - Senior Cybersecurity Specialist & Full-Stack Architect CV Content";
                const blob = new Blob([dummyContent], { type: 'text/plain' });
                const url = window.URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = 'Alex_Morgan_CV_2026.txt';
                document.body.appendChild(a);
                a.click();
                window.URL.revokeObjectURL(url);
                a.remove();
            }, 1000);
        }
    </script>
</body>
</html>