<div class="grid md:grid-cols-2 gap-8">
    @foreach($projects as $index => $project)
    <div 
        x-data="{ expanded: false }" 
        class="group relative glass rounded-3xl overflow-hidden cursor-pointer transition-all duration-500 hover:ring-2 hover:ring-indigo-500/50"
        @click="expanded = !expanded"
    >
        <div class="aspect-video w-full overflow-hidden">
            <img 
                src="{{ $project['image'] }}" 
                alt="{{ $project['title'] }}" 
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0"
            >
            <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-zinc-950/20 to-transparent opacity-80 group-hover:opacity-40 transition-opacity"></div>
        </div>

        <div class="absolute bottom-0 left-0 right-0 p-8 transform transition-transform duration-500" :class="expanded ? 'translate-y-[-10px]' : ''">
            <div class="flex items-center space-x-2 mb-3">
                <span class="px-2 py-0.5 rounded bg-indigo-500/20 text-indigo-400 text-[10px] font-bold uppercase tracking-wider">
                    {{ $project['category'] }}
                </span>
            </div>
            <h3 class="text-2xl font-bold mb-2 outfit">{{ $project['title'] }}</h3>
            
            <div 
                x-show="expanded" 
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                class="text-zinc-400 text-sm mb-6 max-w-md leading-relaxed"
            >
                {{ $project['description'] }}
                
                <div class="flex flex-wrap gap-2 mt-6">
                    @foreach($project['tags'] as $tag)
                    <span class="px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 text-[10px] text-zinc-300">
                        {{ $tag }}
                    </span>
                    @endforeach
                </div>
            </div>

            <div class="flex items-center space-x-1 text-sm font-medium text-white group-hover:text-indigo-400 transition-colors">
                <span x-text="expanded ? 'Show Less' : 'Explore Project'"></span>
                <svg class="w-4 h-4 transition-transform duration-300" :class="expanded ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>
        </div>
    </div>
    @endforeach
</div>
