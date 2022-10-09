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
        <h3 class="post-title">TÉCNICOS DA PREFEITURA VISITAM TRILHA ECOLÓGICA DE ITUPANEMA</h3>
        <a
          href="https://www.barcarena.pa.gov.br/portal/noticia?id=1033&url=tecnicos-da-prefeitura-visitam-trilha-ecologica-de-itupanema" class="date"
          target="_blank"
        >
          08/11/2018 - Prefeitura de Barcarena
        </a>

        <picture class="w-100">
          <img src="{{asset('/img/elements/noticias/barcarena-tecnicos.jpeg')}}"
            srcset="{{asset('/img/elements/noticias/barcarena-tecnicos.jpeg')}}" alt="audio description content"
            class="img-fluid post-banner">
        </picture>

        <article class="post-content">

          <p>
            Mata primária, animais nativos, árvores centenárias e contato com a natureza. Foram os cenários da visita
            técnica realizada por servidores das secretarias municipais de Turismo e Meio Ambiente, nessa quarta-feira
            (07), na trilha ecológica localizada na comunidade de Itupanema. A trilha é administrada pela empresa
            Unitapajós. O objetivo dos técnicos foi conhecer locais de preservação ambiental, potencial turístico no
            município e fortalecer parceria com a empresa.
          </p>

          <p>
            A trilha tem 2,5 km, com árvores de grande porte, espécie rara de macacos e insetos, além de rios e
            igarapés. A Unitapajós passou a cuidar da trilha no ano de 2014 e em 2015 liberou para visitação.
          </p>

          <p>
            “É muito bom encontrar um lugar com mata preservada, ainda com árvores grandes como castanheiras e copaíba”
            comentou Maria do Carmo, sociologia. A pedagoga Keise Cravo também participou do grupo e elogiou o local. “
            Importante ver rios e igarapés preservados bem pertinho de nós”, disse.
          </p>

          <p>
            O analista ambiental da Unitapajós, Eduardo Barros, explicou que a trilha começou junto com o projeto Centro
            de Educação Ambiental (CEA) em 2014, e que a partir da liberação para visita, a trilha passou a receber
            estudantes, membros de igrejas e de empresas. As visitas são agendadas pela equipe do ECA e são realizadas
            pela manhã.
          </p>
          <a
            href="https://www.barcarena.pa.gov.br/portal/noticia?id=1033&url=tecnicos-da-prefeitura-visitam-trilha-ecologica-de-itupanema"
            target="_blank"
            class="btn-theme text-white"
          >
            Ver Notícia
          </a>
        </article>
      </div> {{-- end row --}}
    </div> {{-- end container --}}
</section>

@endsection
