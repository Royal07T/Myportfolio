<x-app-layout>
    <!-- Hero Section -->
    <section 
        class="relative min-h-screen flex items-center pt-20 overflow-hidden"
        x-data="{ show: false }"
        x-init="setTimeout(() => show = true, 100)"
    >
        <div class="absolute inset-0 z-0">
            <div class="absolute top-1/4 -left-20 w-96 h-96 bg-indigo-500/10 rounded-full blur-[120px] animate-pulse"></div>
            <div class="absolute bottom-1/4 -right-20 w-96 h-96 bg-emerald-500/10 rounded-full blur-[120px] animate-pulse" style="animation-delay: 2s;"></div>
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
                    <h2 class="text-3xl font-bold mb-8 outfit">About Me</h2>
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
                             <img src="{{ asset('build/image/royalty.png') }}" alt="Timothy Jehwo Oghenero" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-indigo-600/20 rounded-full blur-3xl"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="stack" class="py-24">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-16 text-center outfit">The Tech Stack</h2>
            
            <div 
                x-data="{ hovered: null }" 
                class="grid grid-cols-2 md:grid-cols-3 gap-8 py-12"
            >
                @foreach([
                    ['name' => 'Laravel', 'label' => 'Backend', 'icon' => 'LV', 'color' => 'orange', 'depth' => '98%'],
                    ['name' => 'Laravel', 'label' => 'Fullstack', 'icon' => 'LW', 'color' => 'pink', 'depth' => '95%'],
                    ['name' => 'Alpine, Blade, React', 'label' => 'Frontend', 'icon' => 'AJ', 'color' => 'cyan', 'depth' => '92%'],
                    ['name' => 'Postgres, MySQL, Sqlite', 'label' => 'Database', 'icon' => 'PG', 'color' => 'indigo', 'depth' => '90%'],
                    ['name' => 'Docker, PHP', 'label' => 'DevOps', 'icon' => 'DK', 'color' => 'blue', 'depth' => '85%'],
                    ['name' => 'Redis', 'label' => 'Caching', 'icon' => 'RD', 'color' => 'red', 'depth' => '88%'],
                ] as $index => $stack)
                <div 
                    @mouseenter="hovered = {{ $index }}"
                    @mouseleave="hovered = null"
                    class="relative group h-32 rounded-3xl overflow-hidden transition-all duration-500 transform"
                    :class="hovered === {{ $index }} ? 'scale-105 -translate-y-2' : ''"
                >
                    <!-- Background Gradient -->
                    <div class="absolute inset-0 bg-{{ $stack['color'] }}-500/10 group-hover:opacity-20 transition-opacity"></div>
                    
                    <!-- Content -->
                    <div class="absolute inset-0 flex flex-col items-center justify-center p-6 border border-zinc-800/50 rounded-3xl group-hover:border-zinc-700 transition-colors">
                        <div class="text-[10px] uppercase tracking-widest text-zinc-500 mb-1 group-hover:text-{{ $stack['color'] }}-400 transition-colors">
                            {{ $stack['label'] }}
                        </div>
                        <span class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-br from-{{ $stack['color'] }}-400 to-{{ $stack['color'] }}-700 mb-1">
                            {{ $stack['icon'] }}
                        </span>
                        <span class="text-zinc-400 text-[10px] font-medium group-hover:text-white transition-colors text-center">{{ $stack['name'] }}</span>
                        
                        <!-- Mastery Bar -->
                        <div class="w-full h-0.5 bg-zinc-900 rounded-full mt-3 overflow-hidden">
                            <div 
                                class="h-full bg-{{ $stack['color'] }}-500 transition-all duration-1000 ease-out"
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
                    <h2 class="text-3xl font-bold mb-4 outfit">Featured Projects</h2>
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
                                <div class="w-12 h-12 rounded-xl bg-zinc-900 border border-zinc-800 flex items-center justify-center group-hover:border-indigo-500/50 transition-all">
                                    <svg class="w-5 h-5 text-zinc-500 group-hover:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <div>
                                    <div class="text-xs text-zinc-500 uppercase">Email</div>
                                    <div class="text-white font-medium">timmyroyalty@gmail.com</div>
                                </div>
                            </a>
                            <a href="https://wa.me/2347081114942" class="flex items-center space-x-4 group">
                                <div class="w-12 h-12 rounded-xl bg-zinc-900 border border-zinc-800 flex items-center justify-center group-hover:border-emerald-500/50 transition-all">
                                    <svg class="w-5 h-5 text-zinc-500 group-hover:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                </div>
                                <div>
                                    <div class="text-xs text-zinc-500 uppercase">WhatsApp</div>
                                    <div class="text-white font-medium">07081114942</div>
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
