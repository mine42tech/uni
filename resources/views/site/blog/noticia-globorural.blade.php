@extends('layouts.app')

@section('content')
  <section id="title" style="background-image: url(/img/elements/title.jpg) ">
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

      <div class="row">
        <div class="col-12">
          <h3 class="post-title">Bunge e Amaggi se unem para fundar corredor intermodal Unitapajós</h3>
          <a
            href="https://revistagloborural.globo.com/Noticias/Infraestrutura-e-Logistica/noticia/2014/04/bunge-e-amaggi-se-unem-para-fundar-corredor-intermodal-unitapajos.html"
            class="date"
            target="_blank"
          >
            25/04/2014 - Globo Rural
          </a>

          <picture class="w-100">
            <img src="{{asset('/img/elements/noticias/globorural-bunge.jpg')}}"
                 srcset="{{asset('/img/elements/noticias/globorural-bunge.jpg')}}"
                 alt="audio description content"
                 class="img-fluid post-banner">
          </picture>

          <article class="post-content">
            <p>
              A joint venture entre Bunge e Amaggi oferece a partir deste ano uma nova opção de transporte no país, que facilitará o escoamento de grãos para o exterior. Será a Navegações Unidas Tapajós (Unitapajós), que deve se firmar como importante corredor intermodal para a produção agrícola, uma alternativa aos portos do sul e sudeste do Brasil.
            </p>

            <p>
              O espaço está localizado entre os municípios paraenses Itaituba e Barcarena. O roteiro dos produtos devem seguir a ordem de sair de fazendas e armazéns da região médio-norte de Mato Grosso e seguir de caminhão ou carreta até o terminal de transbordo de Miritituba, em Itaituba (PA). De lá, deve seguir até Barcarena (PA), onde os grãos são colocados em navios com destino à Europa e Ásia.

            </p>

            <p>
              Primeiramente serão 50 barcaças e dois empurradores de 6 mil HP. A previsão inicial é transportar até 2 milhões de toneladas de grão em 2014, e no ano seguinte, com a adição de mais 40 barcaças e outro empurrador de 6 mil HP, dobrar o volume para 4 milhões de toneladas.

            </p>

            <p>
              “Todas as barcaças são equipadas com uma cobertura rígida exclusiva, de alumínio, projetada pela nossa equipe e desenvolvida por um fabricante da Bélgica”, explica Jorge Zanatta, diretor da Amaggi Navegação. “É uma tecnologia nova no Brasil, que proporciona maior segurança e qualidade”, complementa.

            </p>
            <a
              href="https://revistagloborural.globo.com/Noticias/Infraestrutura-e-Logistica/noticia/2014/04/bunge-e-amaggi-se-unem-para-fundar-corredor-intermodal-unitapajos.html"
              target="_blank"
              class="btn-theme text-white"
            >
              Ver Notícia
            </a>
          </article>
        </div>
      </div> {{-- end row --}}
    </div> {{-- end container --}}
  </section>

@endsection
