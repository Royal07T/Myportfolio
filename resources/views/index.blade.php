<x-app-layout>
    <!-- Hero Section -->
    <section 
        class="relative min-h-screen flex items-center pt-20 overflow-hidden"
        x-data="{ show: false }"
        x-init="setTimeout(() => show = true, 100)"
    >
        <div class="absolute inset-0 z-0">
            <div class="absolute top-1/4 -left-20 w-96 h-96 bg-indigo-500/10 rounded-full blur-[120px] animate-float"></div>
            <div class="absolute bottom-1/4 -right-20 w-96 h-96 bg-emerald-500/10 rounded-full blur-[120px] animate-float" style="animation-delay: 2s;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div 
                class="max-w-4xl transition-all duration-1000 transform"
                :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
            >
                <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 text-xs font-medium text-emerald-400 mb-6">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                    </span>
                    <span>Available for new opportunities</span>
                </div>
                
                <h1 class="text-5xl md:text-7xl font-bold tracking-tight mb-6 outfit leading-tight">
                    Building <span class="text-gradient">Robust Systems</span> with Precision & Speed.
                </h1>
                
                <p class="text-xl text-zinc-400 mb-10 max-w-2xl leading-relaxed">
                    I'm <span class="text-white font-medium">Timothy Jehwo Oghenero</span>, a Senior Laravel Full-Stack Developer. I architect scalable backend systems and craft high-performance web applications.
                </p>

                <div class="flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="#projects" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-white text-black font-bold hover:bg-zinc-200 transition-all text-center">
                        View My Work
                    </a>
                    <a href="#contact" class="w-full sm:w-auto px-8 py-4 rounded-xl border border-zinc-800 hover:border-zinc-700 transition-all text-center">
                        Contact Me
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section 
        id="about" 
        class="py-24 border-y border-zinc-900"
        x-data="{ visible: false }"
        x-intersect.margin.-100px="visible = true"
    >
        <div 
            class="container mx-auto px-6 transition-all duration-1000 transform"
            :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
        >
            <div class="grid md:grid-cols-2 gap-16 items-center text-gradient">
                <div>
                    <h2 class="text-3xl font-bold mb-8 outfit reveal-heading" :class="visible ? 'active' : ''">About Me</h2>
                    <div class="space-y-6 text-zinc-400 leading-relaxed text-lg">
                        <p>
                            A results-driven Laravel Full-Stack Developer with strong experience building production-grade systems including <span class="text-white">fintech platforms, POS systems, healthcare applications, and online booking platforms.</span>
                        </p>
                        <p>
                            I specialize in scalable system design, security, and role-based access control. I don't just write code; I engineer solutions that solve complex business problems.
                        </p>
                        <p>
                            I leverage <span class="text-emerald-400 italic">Cursor AI,PHPStorm</span> and other AI tools to build modern system architecture to deliver high-quality products at an accelerated pace, ensuring best practices and security are never compromised.
                        </p>
                    </div>
                </div>
                <div class="relative">
                    <div class="aspect-square rounded-3xl overflow-hidden glass p-1">
                        <div class="w-full h-full bg-zinc-900 rounded-[22px] overflow-hidden border border-zinc-800">
                             <img src="{{ asset('images/royal_office.png') }}" alt="Timothy Jehwo Oghenero" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-indigo-600/20 rounded-full blur-3xl"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="stack" class="py-24" x-data="{ visible: false }" x-intersect.margin.-100px="visible = true">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-16 text-center outfit reveal-heading" :class="visible ? 'active' : ''">The Tech Stack</h2>
            
            <div 
                x-data="{ hovered: null }" 
                class="grid grid-cols-2 md:grid-cols-3 gap-8 py-12"
            >
                @foreach([
                    [
                        'name' => 'Laravel,symfony,codeigniter',
                        'label' => 'Backend', 
                        'icon' => 'LV', 
                        'depth' => '98%',
                        'bg' => 'bg-orange-500/10',
                        'bg_hover' => 'group-hover:bg-orange-500/20',
                        'border' => 'border-orange-500/20',
                        'border_hover' => 'group-hover:border-orange-500/50',
                        'text' => 'text-orange-400',
                        'bar' => 'bg-orange-500'
                    ],
                    [
                        'name' => 'laravel,livewire, vue,alpine, blade, tailwind,react.js,etc.',
                        'label' => 'Fullstack', 
                        'icon' => 'LW', 
                        'depth' => '95%',
                        'bg' => 'bg-pink-500/10',
                        'bg_hover' => 'group-hover:bg-pink-500/20',
                        'border' => 'border-pink-500/20',
                        'border_hover' => 'group-hover:border-pink-500/50',
                        'text' => 'text-pink-400',
                        'bar' => 'bg-pink-500'
                    ],
                    [
                        'name' => 'Alpine, React, Vue, etc.', 
                        'label' => 'Frontend', 
                        'icon' => 'AJ', 
                        'depth' => '92%',
                        'bg' => 'bg-cyan-500/10',
                        'bg_hover' => 'group-hover:bg-cyan-500/20',
                        'border' => 'border-cyan-500/20',
                        'border_hover' => 'group-hover:border-cyan-500/50',
                        'text' => 'text-cyan-400',
                        'bar' => 'bg-cyan-500'
                    ],
                    [
                        'name' => 'PostgreSQL,mysql,nosql',
                        'label' => 'Database', 
                        'icon' => 'PG', 
                        'depth' => '90%',
                        'bg' => 'bg-indigo-500/10',
                        'bg_hover' => 'group-hover:bg-indigo-500/20',
                        'border' => 'border-indigo-500/20',
                        'border_hover' => 'group-hover:border-indigo-500/50',
                        'text' => 'text-indigo-400',
                        'bar' => 'bg-indigo-500'
                    ],
                    [
                        'name' => 'Kubernetes, CI/CD, Git, Github, Gitlab, etc.', 
                        'label' => 'DevOps', 
                        'icon' => 'DK', 
                        'depth' => '85%',
                        'bg' => 'bg-blue-500/10',
                        'bg_hover' => 'group-hover:bg-blue-500/20',
                        'border' => 'border-blue-500/20',
                        'border_hover' => 'group-hover:border-blue-500/50',
                        'text' => 'text-blue-400',
                        'bar' => 'bg-blue-500'
                    ],
                    [
                        'name' => 'Redis', 
                        'label' => 'Caching', 
                        'icon' => 'RD', 
                        'depth' => '88%',
                        'bg' => 'bg-red-500/10',
                        'bg_hover' => 'group-hover:bg-red-500/20',
                        'border' => 'border-red-500/20',
                        'border_hover' => 'group-hover:border-red-500/50',
                        'text' => 'text-red-400',
                        'bar' => 'bg-red-500'
                    ],
                ] as $index => $stack)
                <div 
                    @mouseenter="hovered = {{ $index }}"
                    @mouseleave="hovered = null"
                    class="relative group h-32 rounded-3xl overflow-hidden transition-all duration-500 transform"
                    :class="hovered === {{ $index }} ? 'scale-105 -translate-y-2' : ''"
                >
                    <!-- Background Gradient -->
                    <div class="absolute inset-0 {{ $stack['bg'] }} {{ $stack['bg_hover'] }} transition-colors"></div>
                    
                    <!-- Content -->
                    <div class="absolute inset-0 flex flex-col items-center justify-center p-6 border {{ $stack['border'] }} {{ $stack['border_hover'] }} rounded-3xl transition-colors">
                        <div class="text-xs font-semibold uppercase tracking-wider text-zinc-200 mb-1 group-hover:text-white transition-colors">
                            {{ $stack['label'] }}
                        </div>
                        <span class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-br from-white to-white/50 mb-1">
                            {{ $stack['icon'] }}
                        </span>
                        <span class="text-zinc-100 text-xs font-extrabold leading-tight group-hover:text-white transition-colors text-center">{{ $stack['name'] }}</span>
                        
                        <!-- Mastery Bar -->
                        <div class="w-full h-0.5 bg-zinc-900/50 rounded-full mt-3 overflow-hidden">
                            <div 
                                class="h-full {{ $stack['bar'] }} transition-all duration-1000 ease-out"
                                :style="hovered === {{ $index }} ? 'width: {{ $stack['depth'] }}' : 'width: 0%'"
                            ></div>
                        </div>
                    </div>

                    <!-- Glossy Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-white/5 to-transparent pointer-events-none"></div>
                </div>
                @endforeach
            </div>

            

        </div>
    </section>

    <!-- Projects Section -->
    <section 
        id="projects" 
        class="py-24 bg-zinc-900/20"
        x-data="{ visible: false }"
        x-intersect.margin.-100px="visible = true"
    >
        <div 
            class="container mx-auto px-6 transition-all duration-1000 transform"
            :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
        >
            <div class="flex items-end justify-between mb-16">
                <div>
                    <h2 class="text-3xl font-bold mb-4 outfit reveal-heading" :class="visible ? 'active' : ''">Featured Projects</h2>
                    <p class="text-zinc-500">A selection of my best work in systems engineering.</p>
                </div>
                <a href="https://github.com/Royal07T" class="hidden sm:flex items-center space-x-2 text-sm font-medium hover:text-indigo-400 transition-colors">
                    <span>View All GitHub</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                </a>
            </div>

            <livewire:project-gallery />
        </div>
    </section>

    <!-- How I Work Section -->
    <section id="approach" class="py-24 overflow-hidden relative">
        <div class="container mx-auto px-6">
            <div class="glass p-12 md:p-16 rounded-[40px] border border-zinc-800/50 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-indigo-500/10 rounded-full blur-[100px] -translate-y-1/2 translate-x-1/2"></div>
                
                <div class="max-w-3xl relative z-10">
                    <h2 class="text-3xl font-bold mb-8 outfit tracking-tight">How I Deliver High-Quality Systems at Speed</h2>
                    <div class="space-y-6 text-zinc-400 text-lg leading-relaxed">
                        <p>
                            In modern engineering, efficiency is as critical as correctness. I utilize <span class="text-white font-medium">AI-assisted development tools like Cursor AI</span> to augment my workflow. This allows for:
                        </p>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <span class="text-emerald-500 mr-4 font-bold">01</span>
                                <div><span class="text-white">Rapid Prototyping:</span> Moving from concept to functional system in record time.</div>
                            </li>
                            <li class="flex items-start">
                                <span class="text-indigo-500 mr-4 font-bold">02</span>
                                <div><span class="text-white">Enhanced Quality:</span> Real-time architectural feedback and automated testing coverage.</div>
                            </li>
                            <li class="flex items-start">
                                <span class="text-purple-500 mr-4 font-bold">03</span>
                                <div><span class="text-white">System Consistency:</span> Ensuring clean MVC architecture is maintained across large codebases.</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section 
        id="experience" 
        class="py-24 bg-zinc-900/20"
        x-data="{ visible: false }"
        x-intersect.margin.-100px="visible = true"
    >
        <div 
            class="container mx-auto px-6 transition-all duration-1000 transform"
            :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'"
        >
            <div class="w-full max-w-none">
                <h2 class="text-3xl font-bold mb-16 text-center outfit reveal-heading" :class="visible ? 'active' : ''">Work Experience</h2>
                
                <div class="space-y-6">
                    <!-- XALA PREMIUM -->
                    <div class="group relative glass p-8 rounded-3xl border border-zinc-800/50 hover:border-zinc-700 transition-all duration-500 hover:ring-2 hover:ring-indigo-500/5 hover:scale-[1.02] shine-hover">
                        <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 rounded-2xl bg-indigo-500/10 border border-indigo-500/20 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-500">
                                    <span class="text-indigo-400 font-bold">XP</span>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-white mb-1 group-hover:text-indigo-400 transition-colors">Full-stack Developer</h3>
                                    <p class="text-zinc-400 font-medium">XALA PREMIUM | Book Luxury Hotels</p>
                                </div>
                            </div>
                            <div class="text-sm text-zinc-500 md:text-right">
                                <div class="text-white font-medium">Nov 2025 - Present</div>
                                <div>Part-time · Remote</div>
                                <div class="text-zinc-600">Abuja, Nigeria</div>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 mt-6">
                            <span class="px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 text-xs text-zinc-400 group-hover:border-zinc-700 transition-colors">Full-Stack Development</span>
                            <span class="px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 text-xs text-zinc-400 group-hover:border-zinc-700 transition-colors">Laravel</span>
                            <span class="px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 text-xs text-zinc-400 group-hover:border-zinc-700 transition-colors">React.js</span>
                            <span class="px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 text-xs text-zinc-400 group-hover:border-zinc-700 transition-colors">Cursor AI</span>
                        </div>
                    </div>

                    <!-- DoctorOnTap -->
                    <div class="group relative glass p-8 rounded-3xl border border-zinc-800/50 hover:border-zinc-700 transition-all duration-500 hover:ring-2 hover:ring-indigo-500/5 hover:scale-[1.02] shine-hover">
                        <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 rounded-2xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-500">
                                    <span class="text-emerald-400 font-bold">DT</span>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-white mb-1 group-hover:text-emerald-400 transition-colors">Full-stack Developer</h3>
                                    <p class="text-zinc-400 font-medium">DoctorOnTap | Healthcare Solutions</p>
                                </div>
                            </div>
                            <div class="text-sm text-zinc-500 md:text-right">
                                <div class="text-white font-medium">Jul 2025 - Present</div>
                                <div>Full-time · Hybrid</div>
                                <div class="text-zinc-600">FCT, Nigeria</div>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 mt-6">
                            <span class="px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 text-xs text-zinc-400 group-hover:border-zinc-700 transition-colors">API Development</span>
                            <span class="px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 text-xs text-zinc-400 group-hover:border-zinc-700 transition-colors">Back-End</span>
                            <span class="px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 text-xs text-zinc-400 group-hover:border-zinc-700 transition-colors">Linux</span>
                        </div>
                    </div>

                    <!-- Wired Banking Africa -->
                    <div class="group relative glass p-8 rounded-3xl border border-zinc-800/50 hover:border-zinc-700 transition-all duration-500 hover:ring-2 hover:ring-indigo-500/5 hover:scale-[1.02] shine-hover">
                        <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 rounded-2xl bg-blue-500/10 border border-blue-500/20 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-500">
                                    <span class="text-blue-400 font-bold">WB</span>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-white mb-1 group-hover:text-blue-400 transition-colors">Back End Developer</h3>
                                    <p class="text-zinc-400 font-medium">Wired Banking Africa</p>
                                </div>
                            </div>
                            <div class="text-sm text-zinc-500 md:text-right">
                                <div class="text-white font-medium">May 2025 - Dec 2025</div>
                                <div>Full-time · Hybrid</div>
                                <div class="text-zinc-600">Abuja, Nigeria</div>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 mt-6">
                            <span class="px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 text-xs text-zinc-400 group-hover:border-zinc-700 transition-colors">Laravel</span>
                            <span class="px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 text-xs text-zinc-400 group-hover:border-zinc-700 transition-colors">Payment Systems</span>
                            <span class="px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 text-xs text-zinc-400 group-hover:border-zinc-700 transition-colors">Rest API</span>
                        </div>
                    </div>

                    <!-- Methic Technology Ltd -->
                    <div class="group relative glass p-8 rounded-3xl border border-zinc-800/50 hover:border-zinc-700 transition-all duration-500 hover:ring-2 hover:ring-indigo-500/5 hover:scale-[1.02] shine-hover">
                        <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 rounded-2xl bg-purple-500/10 border border-purple-500/20 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-500">
                                    <span class="text-purple-400 font-bold">MT</span>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-white mb-1 group-hover:text-purple-400 transition-colors">Laravel Backend Developer</h3>
                                    <p class="text-zinc-400 font-medium">Methic Technology Ltd</p>
                                </div>
                            </div>
                            <div class="text-sm text-zinc-500 md:text-right">
                                <div class="text-white font-medium">Feb 2025 - May 2025</div>
                                <div>Full-time · Hybrid</div>
                                <div class="text-zinc-600">FCT, Nigeria</div>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 mt-6">
                            <span class="px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 text-xs text-zinc-400 group-hover:border-zinc-700 transition-colors">Rest APIs</span>
                            <span class="px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 text-xs text-zinc-400 group-hover:border-zinc-700 transition-colors">Postman</span>
                            <span class="px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 text-xs text-zinc-400 group-hover:border-zinc-700 transition-colors">Testing</span>
                        </div>
                    </div>
                </div>

                    <!-- Rosa Mystical Academy -->
                    <div class="group relative glass p-8 rounded-3xl border border-zinc-800/50 hover:border-zinc-700 transition-all duration-500 hover:ring-2 hover:ring-indigo-500/5 hover:scale-[1.02] shine-hover">
                        <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 rounded-2xl bg-zinc-500/10 border border-zinc-500/20 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-500">
                                    <span class="text-zinc-400 font-bold">RM</span>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-white mb-1 group-hover:text-zinc-400 transition-colors">Network Administrator</h3>
                                    <p class="text-zinc-400 font-medium">Rosa Mystical Academy</p>
                                </div>
                            </div>
                            <div class="text-sm text-zinc-500 md:text-right">
                                <div class="text-white font-medium">Feb 2025</div>
                                <div>Part-time</div>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 mt-6">
                            <span class="px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 text-xs text-zinc-400">Network Engineering</span>
                            <span class="px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 text-xs text-zinc-400">Security</span>
                        </div>
                    </div>

                    <!-- Freelance Tutor -->
                    <div class="group relative glass p-8 rounded-3xl border border-zinc-800/50 hover:border-zinc-700 transition-all duration-500 hover:ring-2 hover:ring-indigo-500/5 hover:scale-[1.02] shine-hover">
                        <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 rounded-2xl bg-orange-500/10 border border-orange-500/20 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-500">
                                    <span class="text-orange-400 font-bold">FT</span>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-white mb-1 group-hover:text-orange-400 transition-colors">Tutor</h3>
                                    <p class="text-zinc-400 font-medium">Freelance Educator</p>
                                </div>
                            </div>
                            <div class="text-sm text-zinc-500 md:text-right">
                                <div class="text-white font-medium">Jun 2024 - Oct 2024</div>
                                <div>Education</div>
                            </div>
                        </div>
                        <p class="text-zinc-400 text-sm mt-4 leading-relaxed">Conducted hands-on tutorials in PHP, HTML, and CSS, improving students' practical knowledge.</p>
                        <div class="flex flex-wrap gap-2 mt-6">
                            <span class="px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 text-xs text-zinc-400">Teaching</span>
                            <span class="px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 text-xs text-zinc-400">Web Basics</span>
                        </div>
                    </div>

                    <!-- Galak Tech -->
                    <div class="group relative glass p-8 rounded-3xl border border-zinc-800/50 hover:border-zinc-700 transition-all duration-500 hover:ring-2 hover:ring-indigo-500/5 hover:scale-[1.02] shine-hover">
                        <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 rounded-2xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-500">
                                    <span class="text-cyan-400 font-bold">GT</span>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-white mb-1 group-hover:text-cyan-400 transition-colors">Network Engineer</h3>
                                    <p class="text-zinc-400 font-medium">Galak Tech</p>
                                </div>
                            </div>
                            <div class="text-sm text-zinc-500 md:text-right">
                                <div class="text-white font-medium">Jan 2019 - Mar 2024</div>
                                <div>Full-time · On-site</div>
                                <div class="text-zinc-600">Abuja, Nigeria</div>
                            </div>
                        </div>
                        <p class="text-zinc-400 text-sm mt-4 leading-relaxed">Engineered and deployed reliable network solutions. Diagnosed and resolved network issues, cutting downtime by 30%.</p>
                        <div class="flex flex-wrap gap-2 mt-6">
                            <span class="px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 text-xs text-zinc-400">Network Infrastructure</span>
                            <span class="px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 text-xs text-zinc-400">Cisco</span>
                            <span class="px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 text-xs text-zinc-400">VPN</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24">
        <div class="container mx-auto px-6">
            <div class="max-w-5xl mx-auto">
                <div class="grid md:grid-cols-2 gap-16">
                    <div>
                        <h2 class="text-3xl font-bold mb-8 outfit">Let's build something great.</h2>
                        <p class="text-zinc-500 mb-12 text-lg">
                            Whether you need a full fintech system, a healthcare platform, or a modern POS system, I am ready to help scale your project.
                        </p>
                        
                        <div class="space-y-6">
                            <a href="mailto:timmyroyalty@gmail.com" class="flex items-center space-x-4 group">
                                <div class="w-12 h-12 rounded-xl bg-zinc-900 border border-zinc-800 flex items-center justify-center group-hover:border-indigo-500/50 group-hover:scale-110 group-hover:-translate-y-1 transition-all duration-300">
                                    <svg class="w-5 h-5 text-zinc-500 group-hover:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <div>
                                    <div class="text-xs text-zinc-500 uppercase">Email</div>
                                    <div class="text-white font-medium">timmyroyalty@gmail.com</div>
                                </div>
                            </a>
                            <a href="https://wa.me/2347081114942" class="flex items-center space-x-4 group">
                                <div class="w-12 h-12 rounded-xl bg-zinc-900 border border-zinc-800 flex items-center justify-center group-hover:border-emerald-500/50 group-hover:scale-110 group-hover:-translate-y-1 transition-all duration-300">
                                    <svg class="w-6 h-6 text-zinc-500 group-hover:text-emerald-400" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.937 3.659 1.432 5.631 1.433h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                                </div>
                                <div>
                                    <div class="text-xs text-zinc-500 uppercase">WhatsApp</div>
                                    <div class="text-white font-medium">07081114942</div>
                                </div>
                            </a>
                            <a href="https://www.linkedin.com/in/timothy-jehwo-15b12930a/" target="_blank" class="flex items-center space-x-4 group">
                                <div class="w-12 h-12 rounded-xl bg-zinc-900 border border-zinc-800 flex items-center justify-center group-hover:border-blue-500/50 group-hover:scale-110 group-hover:-translate-y-1 transition-all duration-300">
                                    <svg class="w-5 h-5 text-zinc-500 group-hover:text-blue-400" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                </div>
                                <div>
                                    <div class="text-xs text-zinc-500 uppercase">LinkedIn</div>
                                    <div class="text-white font-medium">timothy-jehwo-15b12930a</div>
                                </div>
                            </a>
                            <a href="https://web.facebook.com/profile.php?id=61565551740194" target="_blank" class="flex items-center space-x-4 group">
                                <div class="w-12 h-12 rounded-xl bg-zinc-900 border border-zinc-800 flex items-center justify-center group-hover:border-blue-500/50 group-hover:scale-110 group-hover:-translate-y-1 transition-all duration-300">
                                    <svg class="w-5 h-5 text-zinc-500 group-hover:text-blue-400" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                </div>
                                <div>
                                    <div class="text-xs text-zinc-500 uppercase">Facebook</div>
                                    <div class="text-white font-medium">Timothy Jehwo</div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="glass p-8 rounded-3xl border border-zinc-800">
                        <livewire:contact-form />
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
