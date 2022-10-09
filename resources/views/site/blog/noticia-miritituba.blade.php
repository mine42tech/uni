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
        <h3 class="post-title">ETC Miritituba comemora 1000 dias Sem Acidentes com Afastamento</h3>
        <a
        >
          01/04/2021 - Unitapajós
        </a>

        <picture class="w-100">
          <img src="{{asset('/img/elements/noticias/noticia-miritituba.png')}}"
            srcset="{{asset('/img/elements/noticias/noticia-miritituba.png')}}" alt="audio description content"
            class="img-fluid post-banner">
        </picture>

        <article class="post-content">

          <p>
            A Estação de Transbordo de Carga (ETC) de Miritituba em Itaituba/PA completou na última sexta-feira (26) a importante marca de mil dias Sem Acidentes com Afastamento.
          </p>

          <p>
            Hoje (01), comemoramos a importante marca de 1000 dias Sem Acidentes com Afastamento na unidade da Unitapajós em Itaituba/Pa. O resultado alcançado na última sexta-feira (26) só foi possível graças ao comprometimento do time de Itaituba com a nossa política de Saúde e Segurança Ocupacional.
          </p>

          <p>
            Clayton Brito, Supervisor de Terminal, diz que esse feito “É fruto de muito suor e dedicação de cada um, pois sabemos que não foi fácil. Sabemos também que ainda temos muitos desafios pela frente quanto à segurança, em aprimorar cada vez mais os nossos processos e a segurança de todos que trabalham aqui. Eu fico muito lisonjeado em trabalhar junto à equipe da Estação e deixo aqui os meus Parabéns a todos!”
          </p>

          <p>
            A Unitapajós prioriza a Saúde e Segurança Ocupacional acima de tudo em todas as atividades, além de ser uma política organizacional, ela também faz parte dos valores e é uma das principais protagonistas dentro da nossa cultura.
          </p>

          <p>
            Para celebrar este marco importante de 1000 dias sem ACA, foi realizado um DDS (Diálogo de Segurança), respeitando as medidas de prevenção ao COVID-19 com todos os colaboradores e parceiros da unidade, onde homenageamos e reforçamos o nosso agradecimento pelo comprometimento de cada um com a nossa cultura de zero incidente.
          </p>

          <p>
            A Unitapajós prioriza a Saúde e Segurança Ocupacional acima de tudo em todas as atividades, além de ser uma política organizacional, ela também faz parte dos valores e é uma das principais protagonistas dentro da nossa cultura.
          </p>

          <p>
            Ao final do DDS os colaboradores assistiram uma mensagem de agradecimento. Confira a mensagem abaixo:
          </p>

          <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/HhR05nCxdgc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>

          <p>Problemas com o link do Youtube? <a target="_blank" href="https://youtu.be/HhR05nCxdgc">clique aqui</a></p>

        </article>
      </div> {{-- end row --}}
    </div> {{-- end container --}}
</section>

@endsection
