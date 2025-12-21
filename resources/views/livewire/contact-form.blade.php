<div>
    @if ($successMessage)
        <div class="p-6 rounded-2xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-sm animate-in fade-in zoom-in duration-300">
            <div class="flex items-center space-x-3">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                <span>{{ $successMessage }}</span>
            </div>
        </div>
    @else
        <form wire:submit="submit" class="space-y-6">
            <div>
                <label for="name" class="block text-xs font-semibold text-zinc-500 uppercase tracking-wider mb-2">Full Name</label>
                <input 
                    wire:model="name"
                    type="text" 
                    id="name"
                    placeholder="Enter your name"
                    class="w-full bg-zinc-900/50 border border-zinc-800 rounded-xl px-4 py-3 text-white placeholder-zinc-600 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500/50 transition-all"
                >
                @error('name') <span class="text-red-500 text-[10px] mt-1">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="email" class="block text-xs font-semibold text-zinc-500 uppercase tracking-wider mb-2">Email Address</label>
                <input 
                    wire:model="email"
                    type="email" 
                    id="email"
                    placeholder="example@company.com"
                    class="w-full bg-zinc-900/50 border border-zinc-800 rounded-xl px-4 py-3 text-white placeholder-zinc-600 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500/50 transition-all"
                >
                @error('email') <span class="text-red-500 text-[10px] mt-1">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="message" class="block text-xs font-semibold text-zinc-500 uppercase tracking-wider mb-2">Project Details</label>
                <textarea 
                    wire:model="message"
                    id="message" 
                    rows="4" 
                    placeholder="Tell me about your system requirements..."
                    class="w-full bg-zinc-900/50 border border-zinc-800 rounded-xl px-4 py-3 text-white placeholder-zinc-600 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500/50 transition-all resize-none"
                ></textarea>
                @error('message') <span class="text-red-500 text-[10px] mt-1">{{ $message }}</span> @enderror
            </div>

            <button 
                type="submit"
                class="w-full py-4 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-bold transition-all flex items-center justify-center space-x-2 relative group overflow-hidden"
                wire:loading.attr="disabled"
            >
                <span wire:loading.remove>Send Message</span>
                <span wire:loading>Processing...</span>
                
                <div class="absolute inset-0 bg-white/10 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-1000"></div>
            </button>
        </form>
    @endif
</div>
