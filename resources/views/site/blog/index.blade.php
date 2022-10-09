@extends('layouts.app')

@section('content')

<section id="title"> {{--style="background-image: url('/img/elements/title.jpg')"--}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title">
                    Notícias
                </h2>
            </div>
        </div>
    </div>
</section>

<section id="blog" class="interna">
    <div class="container">
        <div class="row justify-content-center destaque-home">

            @isset($posts)

            @forelse ($posts as $post)

            <div class="row noticias w-100">
                <div class="col-10">
                    <a href="{{ route('site.blog.post-detalhe', $post->slug) }}" class="row">
                        <div class="col-12 texto">
                            <div class="d-flex flex-column justify-content-around h-100">
                              {{-- <div class="layer-1"> --}}
                                <div>
                                  <h2 class="title">{{$post->title}}</h2>
                                  <span class="date">{{dateBr($post->published_at)}}</span>
                                </div>
                                {{-- <img
                                  src="{{route('imagem.render', 'posts/h/' . $post->image)}}" class="img-fluid img-noticia"
                                  alt=""
                                /> --}}
                              {{-- </div> --}}

                                <p class="d-none d-md-block">{{$post->description}}</p>
                                <span class="link">Leia mais <i class="fas fa-chevron-right"></i></span>
                            </div>
                        </div>

                    </a>
                </div>
            </div>

            @empty

            @endforelse



            @endisset

            {{-- <div class="row noticias w-100">
                <div class="col-10">
                    <a href="{{ route('site.blog.noticia-recorde') }}" class="row">
                        <div class="col-12 texto">
                            <div class="d-flex flex-column justify-content-around h-100">
                              <div class="layer-1">
                                <div>
                                  <h2 class="title">Movimentação de grãos da Unitapajós quebra Cinco recordes operacionais</h2>
                                  <span class="date">08/04/2021</span>
                                </div>
                                <img
                                  src="/img/elements/noticias/noticia-recorde.png" class="img-fluid img-noticia"
                                  alt=""
                                />
                              </div>

                                <p class="d-none d-md-block">Cinco recordes operacionais foram quebrados simultaneamente na última quinta-feira (31), com o volume de soja em grãos movimentado nas operações da Unitapajós no corredor norte.</p>
                                <span class="link">Leia mais <i class="fas fa-chevron-right"></i></span>
                            </div>
                        </div>

                    </a>
                </div>
            </div>

            <div class="row noticias w-100">
                <div class="col-10">
                    <a href="{{ route('site.blog.noticia-miritituba') }}" class="row">
                        <div class="col-12 texto">
                            <div class="d-flex flex-column justify-content-around h-100">

                                <div class="layer-1">

                                  <div>
                                    <h2 class="title">ETC Miritituba comemora 1000 dias Sem Acidentes com Afastamento</h2>
                                    <span class="date">01/04/2021</span>
                                  </div>

                                  <img src="/img/elements/noticias/noticia-miritituba.png"
                                  class="img-fluid img-noticia" alt="">

                                </div>



                                <p class="d-none d-md-block">A Estação de Transbordo de Carga (ETC) de Miritituba em Itaituba/PA completou na última sexta-feira (26) a importante marca de mil dias Sem Acidentes com Afastamento.</p>
                                <span class="link">Leia mais <i class="fas fa-chevron-right"></i></span>
                            </div>
                        </div>

                    </a>
                </div>
            </div>

            <div class="row noticias w-100">
                <div class="col-10">
                    <a href="{{ route('site.blog.movimento-proteger') }}" class="row">
                        <div class="col-12 texto">
                            <div class="d-flex flex-column justify-content-around h-100">

                              <div class="layer-1">
                                <div>
                                  <h2 class="title">Conclusão do Projeto “Movimento Proteger” em Barcarena-PA</h2>
                                  <span class="date">27/02/2021</span>
                                </div>
                                <img src="/img/elements/noticias/movimento-proteger/img-1.jpg" class="img-fluid img-noticia" alt="">
                              </div>

                                <p class="d-none d-md-block">Em janeiro, a área de Gestão Socioambiental da Unitapajós realizou a conclusão do projeto
                                    social “Movimento Proteger”.</p>
                                <span class="link">Leia mais <i class="fas fa-chevron-right"></i></span>
                            </div>
                        </div>

                    </a>
                </div>
            </div>

            <div class="row noticias w-100">
                <div class="col-10">
                    <a href="{{ route('site.blog.noticia-exame') }}" class="row">
                        <div class="col-md-2 col-4 p-0"></div>
                        <div class="col-12 texto">

                            <div class="d-flex flex-column justify-content-around h-100">

                                <div class="layer-1">
                                  <div>
                                    <h2 class="title">Bunge vende 50% de dois terminais de grãos para Amaggi</h2>
                                    <span class="date">26/07/2016 - Exame</span>
                                  </div>
                                  <img src="/img/elements/noticias/exame-bunge.jpg" class="img-fluid img-noticia" alt="">
                                </div>



                                <p class="d-none d-md-block">A multinacional Bunge fechou acordo para vender 50% dos
                                    terminais de grãos que construiu recentemente no Pará para a Amaggi</p>
                                <span class="link">Leia mais <i class="fas fa-chevron-right"></i></span>
                            </div>
                        </div>

                    </a>
                </div>
            </div>

            <div class="row noticias w-100">
                <div class="col-10">
                    <a href="{{ route('site.blog.noticia-tecnologistica') }}" class="row">

                        <div class="col-12 texto">
                            <div class="d-flex flex-column justify-content-around h-100">

                                <div class="layer-1">
                                  <div>
                                    <h2 class="title">Bunge e Amaggi criam opção para exportação de grãos pelo Norte do país
                                    </h2>
                                    <span class="date">28/04/2014 - Tecnologistica</span>
                                  </div>
                                  <img src="/img/elements/seguranca_home.jpg" class="img-fluid"
                                alt="">
                                </div>



                                <p class="d-none d-md-block">Nova empresa de navegação fluvial e terminal portuário
                                    formam alternativa ao congestionado corredor Sudeste</p>
                                <span class="link">Leia mais <i class="fas fa-chevron-right"></i></span>
                            </div>
                        </div>

                    </a>
                </div>
            </div>

            <div class="row noticias w-100">
                <div class="col-10">
                    <a href="{{ route('site.blog.noticia-bunge1') }}" class="row">
                        <div class="col-12 texto">
                            <div class="d-flex flex-column justify-content-around h-100">
                              <div class="layer-1">
                                <div>
                                  <h2 class="title">Bunge e AMAGGI ampliam parceria para escoamento de grãos via Corredor Norte</h2>
                                  <span class="date">26/07/2016 - Bunge</span>
                                  </div>
                                <img src="/img/elements/sobre_a_unitapajos.jpg"
                                class="img-fluid" alt="">
                              </div>

                                <p class="d-none d-md-block">O compromisso, ainda sujeito à aprovação do CADE,
                                    fortalecerá a joint venture entre as duas empresas para gestão compartilhada dos
                                    terminais em Barcarena e Miritituba, no Pará</p>
                                <span class="link">Leia mais <i class="fas fa-chevron-right"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row noticias w-100">
                <div class="col-10">
                    <a href="{{ route('site.blog.noticia-bunge2') }}" class="row">

                        <div class="col-12 texto">
                            <div class="d-flex flex-column justify-content-around h-100">
                                <div class="layer-1">
                                  <div>
                                    <h2 class="title">Bunge inaugura complexo portuário no Pará e estabelece nova rota de exportação de grãos pelo norte do Brasil</h2>
                                    <span class="date">25/04/2014 - Bunge</span>
                                  </div>
                                  <img src="/img/elements/atuacao.jpg" class="img-fluid" alt="">
                                </div>


                                <p class="d-none d-md-block">Bunge inaugura complexo portuário no Pará e estabelece nova
                                    rota de exportação de grãos pelo norte do Brasil</p>
                                <span class="link">Leia mais <i class="fas fa-chevron-right"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row noticias w-100">
                <div class="col-10">
                    <a href="{{ route('site.blog.noticia-globorural') }}" class="row">
                        <div class="col-12 texto">
                            <div class="d-flex flex-column justify-content-around h-100">

                                <div class="layer-1">
                                  <div>
                                    <h2 class="title">Bunge e Amaggi se unem para fundar corredor intermodal Unitapajós</h2>
                                    <span class="date">25/04/2014 - Globo Rural</span>
                                  </div>
                                  <img src="/img/elements/noticias/globorural-bunge.jpg" class="img-fluid" alt="">
                                </div>


                                <p class="d-none d-md-block">Espaço vai facilitar a exportação pela região norte do país
                                </p>
                                <span class="link">Leia mais <i class="fas fa-chevron-right"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row noticias w-100">
                <div class="col-10">
                    <a href="{{ route('site.blog.noticia-folhasp') }}" class="row">
                        <div class="col-12 texto">
                            <div class="d-flex flex-column justify-content-around h-100">
                                <div class="layer-1">
                                  <div>
                                    <h2 class="title">Exportação de soja ganha atalho pelo Norte com novo terminal no Pará
                                    </h2>
                                    <span class="date">25/04/2014 - Folha de São Paulo</span>
                                  </div>
                                  <img src="/img/elements/noticias/folhadesp-exportacao.jpeg" class="img-fluid" alt="">
                                </div>

                                <p class="d-none d-md-block">O sistema, que combina as modalidades rodoviária,
                                    hidroviária e marítima, deve reduzir o tempo do transporte dos grãos, o custo do
                                    frete e o congestionamento nos portos do Sudeste, que concentram o embarque do
                                    principal produto exportado pelo Brasil.</p>
                                <span class="link">Leia mais <i class="fas fa-chevron-right"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row noticias w-100">
                <div class="col-10">
                    <a href="{{ route('site.blog.noticia-protecao') }}" class="row">

                        <div class="col-12 texto">
                            <div class="d-flex flex-column justify-content-around h-100">
                                <div class="layer-1">
                                  <div>
                                    <h2 class="title">Prêmio Proteção Brasil 2019 – Melhor Case da Região Norte – Unitapajós
                                      Terminais e Navegação</h2>
                                      <span class="date">27/05/2020 - Proteção+</span>
                                    </div>
                                  <img src="/img/elements/noticias/protecao-premio.jpg" class="img-fluid" alt="">
                                </div>

                                <p class="d-none d-md-block">A inovação vem sendo empregada desde o início de 2019, com
                                    ganhos em produtividade, redução de custos e riscos a partir da eliminação do
                                    trabalho em desnível.</p>
                                <span class="link">Leia mais <i class="fas fa-chevron-right"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row noticias w-100">
                <div class="col-10">
                    <a href="{{ route('site.blog.noticia-amaggi') }}" class="row">
                        <div class="col-12 texto">
                            <div class="d-flex flex-column justify-content-around h-100">

                                <div class="layer-1">
                                  <div>
                                    <h2 class="title">AMAGGI é reconhecida por apoio ao programa Na Mão Certa</h2>
                                    <span class="date">14/12/2018 - Amaggi</span>
                                  </div>
                                  <img src="/img/elements/noticias/amaggi-premio.jpg" class="img-fluid" alt="">
                                </div>


                                <p class="d-none d-md-block">A AMAGGI e a Unitapajós foram reconhecidas pela organização
                                    social Childhood Brasil, na última terça-feira (11/12), por apoiarem e patrocinarem
                                    o Programa Na Mão Certa, que há 11 anos atua no enfrentamento à exploração sexual de
                                    crianças e adolescentes.</p>
                                <span class="link">Leia mais <i class="fas fa-chevron-right"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row noticias w-100">
                <div class="col-10">
                    <a href="{{ route('site.blog.noticia-barcarena') }}" class="row">
                        <div class="col-12 texto">
                            <div class="d-flex flex-column justify-content-around h-100">
                                <div class="layer-1">
                                  <div>
                                    <h2 class="title">TÉCNICOS DA PREFEITURA VISITAM TRILHA ECOLÓGICA DE ITUPANEMA</h2>
                                    <span class="date">08/11/2018 - Prefeitura de Barcarena</span>
                                  </div>
                                  <img src="/img/elements/noticias/barcarena-tecnicos.jpeg" class="img-fluid" alt="">
                                </div>

                                <p class="d-none d-md-block">Mata primária, animais nativos, árvores centenárias e
                                    contato com a natureza. Foram os cenários da visita técnica realizada por servidores
                                    das secretarias municipais de Turismo e Meio Ambiente, nessa quarta-feira (07), na
                                    trilha ecológica localizada na comunidade de Itupanema. </p>
                                <span class="link">Leia mais <i class="fas fa-chevron-right"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row noticias w-100">
                <div class="col-10">
                    <a href="{{ route('site.blog.noticia-ufra') }}" class="row">
                        <div class="col-12 texto">
                            <div class="d-flex flex-column justify-content-around h-100">
                                <div class="layer-1">
                                  <div>
                                    <h2 class="title">PROJETO PROMOVE ATIVIDADES SOCIOAMBIENTAIS E EDUCATIVAS EM BARCARENA
                                    </h2>
                                    <span class="date">03/05/2019 - UFRA</span>

                                  </div>
                                  <img src="/img/elements/noticias/ufra-projeto.jpg" class="img-fluid" alt="">
                                </div>
                                <p class="d-none d-md-block">Estimular, educar e sensibilizar crianças, jovens e adultos
                                    para questões ambientais e de cidadania, incentivar a integração entre homem e
                                    natureza, promover a inclusão de pessoas com deficiência e, ainda, gerar renda para
                                    a comunidade.</p>
                                <span class="link">Leia mais <i class="fas fa-chevron-right"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div> --}}
        </div>
    </div> {{-- end container --}}
</section>

@endsection
