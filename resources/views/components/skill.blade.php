<section class="habilidades">
    <div class="englobano2">
        <h2> Minhas Habilidades</h2>
        <div class="purple-block-3"></div>
        <p class="subtitulo2">Tecnologias e ferramentas com as quais trabalho para criar soluções web de alta
            qualidade</p>
    </div>
    <div class="coluna">
        <div class="div-do-frontend">
            <h3>Frontend</h3>
            @foreach ($skills as $skill)
                @if ($skill->type === 'frontend')
                    <div class="linguagensfront">
                        <div class="linguagensfront2">
                            <div class="teste1"><span class="languagetitle">{{ $skill->name }}</span>
                                <span class="percentage">{{ $skill->percentage }}%</span>
                            </div>
                            <div class="barraroxa">
                                <div class="barraroxahtml5" style="width: {{ $skill->percentage }}%;"></div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="div-do-ferramentas">
            <h3>Ferramentas & Outros</h3>
            @foreach ($skills as $skill)
                @if ($skill->type === 'ferramentas')
                    <div class="linguagensfront">
                        <div class="linguagensfront2">
                            <div class="teste1"><span class="languagetitle">{{ $skill->name }}</span>
                                <span class="percentage">{{ $skill->percentage }}%</span>
                            </div>
                            <div class="barraroxa">
                                <div class="barraroxahtml5" style="width: {{ $skill->percentage }}%;"></div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="tecnologias">
        <h2>Outras Tecnologias</h2>
        <ul>
            @foreach ($skills as $skill)
                @if ($skill->type === 'frameworks')
                    <li class="tecno">{{$skill->name}}</li>
                @endif
            @endforeach
        </ul>
    </div>
</section>