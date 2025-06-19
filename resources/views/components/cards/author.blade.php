<article class="profile-card w-72 h-[324px] {{ $background ?? '' }}">
    <header class="flex flex-col items-center justify-center gap-3 py-8">
        <figure>
            <img
                src="{{ $photo }}"
                alt="{{ $name }}"
                class="w-32 h-32 rounded-full"
            >
            <figcaption class="sr-only">{{ $name }}</figcaption>
        </figure>
        <div class="flex flex-col items-center justify-center gap-2">
            <h1 class="text-[28px] font-bold text-fw-black tracking-tighter">{{ $name }}</h1>
            <p class="font-inter text-fw-gray-light text-sm">{{ $role }}</p>
        </div>

    </header>
    <footer class="flex flex-col items-center justify-center">
        <nav aria-label="Redes sociais">
            <ul class="flex gap-2">
                @if(!empty($socialLinks['facebook']))
                    <li>
                        <a href="{{ $socialLinks['facebook'] }}" target="_blank" rel="noopener noreferrer">
                            <x-icones.facebook class="text-fw-black hover:text-fw-yellow-600 transition-colors duration-300 cursor-pointer" />
                        </a>
                    </li>
                @endif
                @if(!empty($socialLinks['twitter']))
                    <li>
                        <a href="{{ $socialLinks['twitter'] }}" target="_blank" rel="noopener noreferrer">
                            <x-icones.twitter class="text-fw-black hover:text-fw-yellow-600 transition-colors duration-300 cursor-pointer" />
                        </a>
                    </li>
                @endif
                @if(!empty($socialLinks['instagram']))
                    <li>
                        <a href="{{ $socialLinks['instagram'] }}" target="_blank" rel="noopener noreferrer">
                            <x-icones.instagram class="text-fw-black hover:text-fw-yellow-600 transition-colors duration-300 cursor-pointer" />
                        </a>
                    </li>
                @endif
                @if(!empty($socialLinks['linkedin']))
                    <li>
                        <a href="{{ $socialLinks['linkedin'] }}" target="_blank" rel="noopener noreferrer">
                            <x-icones.linkedin class="text-fw-black hover:text-fw-yellow-600 transition-colors duration-300 cursor-pointer" />
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
    </footer>
</article>
