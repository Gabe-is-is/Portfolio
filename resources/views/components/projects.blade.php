<section class="projects">
    <div class="englobano">
        <h2>Meus Projetos</h2>
        <div class="purple-block-2"></div>
        <p class="subtitulo">Confira alguns dos projetos que desenvolvi, demonstrando minhas habilidades e
            experiência</p>
    </div>
    <div class="projects-grid">
        @foreach ($projects as $project)
            <div class="projects-grid-first">
                <div class="projects-grid-first-border">
                    <div class="projects-grid-first-border-image_1">
                        <img src="{{ $project->images->first()?->image_link ?? '' }}" alt="{{ $project->images->first()?->alt ?? '' }}" width="658" height="192"
                        loading="lazy">
                    </div>
                    <div class="projects-grid-first-border-texts">
                        <div>
                            <h3>
                                {{ $project->name }}
                            </h3>
                        </div>
                        <div>
                            <h4>
                                {{ $project->description }}
                            </h4>
                        </div>
                    </div>
                    {{-- <div class="projects-grid-first-border-tags">
                        <div class="projects-grid-first-border-tags_1">
                            <div class="projects-grid-first-border-tags_1-tags_2">
                                <h4>React</h4>
                            </div>
                            <div class="projects-grid-first-border-tags_1-tags_2">
                                <h4>Next.js</h4>
                            </div>
                            <div class="projects-grid-first-border-tags_1-tags_2">
                                <h4>Tailwind CSS</h4>
                            </div>
                            <div class="projects-grid-first-border-tags_1-tags_2">
                                <h4>Stripe</h4>
                            </div>
                        </div>
                    </div> --}}
                    <div class="projects-grid-first-border-btns">
                        <a target="_blank" rel="noopener noreferrer" class="inline-flex1"
                            href="{{$project->link_demo}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                                </path>
                                <path d="M9 18c-4.51 2-5-2-7-2"></path>
                            </svg>Código</a>
                        <a target="_blank" rel="noopener noreferrer" class="inline-flex1"
                            href="{{$project->link_code}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 3h6v6"></path>
                                <path d="M10 14 21 3"></path>
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            </svg>Demo</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="projects-last_link">
        <button>
            <a target="_blank" rel="noopener noreferrer" href="https://github.com/Gabe-is-is"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path
                        d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                    </path>
                    <path d="M9 18c-4.51 2-5-2-7-2"></path>
                </svg>Ver mais no GitHub
            </a>
        </button>
    </div>
</section>