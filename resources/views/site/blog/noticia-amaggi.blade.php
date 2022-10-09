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
        <h3 class="post-title">AMAGGI é reconhecida por apoio ao programa Na Mão Certa</h3>
        <a
          href="https://www.amaggi.com.br/noticias/amaggi-e-reconhecida-por-apoio-ao-programa-na-mao-certa/" class="date"
          target="_blank"
        >
          14/12/2018 - Amaggi
        </a>

        <picture class="w-100">
          <img src="{{asset('/img/elements/noticias/amaggi-premio.jpg')}}"
            srcset="{{asset('/img/elements/noticias/amaggi-premio.jpg')}}" alt="audio description content"
            class="img-fluid post-banner">
        </picture>

        <article class="post-content">

          <p>
            A AMAGGI e a Unitapajós foram reconhecidas pela organização social Childhood Brasil, na última terça-feira
            (11/12), por apoiarem e patrocinarem o Programa Na Mão Certa, que há 11 anos atua no enfrentamento à
            exploração sexual de crianças e adolescentes.


          </p>

          <p>
            Entregues aos parceiros da Childhood Brasil durante o 12º Encontro Anual Na Mão Certa, em São Paulo, os
            reconhecimentos foram recebidos em nome da AMAGGI pela supervisora Socioambiental, Heloísa Torres, e pela
            analista Socioambiental Daniele Paulo; e, em nome da Unitapajós, pelo supervisor Socioambiental, Leandro
            Morilha, e pelo piloto fluvial Ezequiel Costa Marques.




          </p>

          <div class="d-flex justify-content-center my-3">
            <img src="{{asset('/img/elements/noticias/noticia-amaggi.jpg')}}" class="img-fluid" alt="" width="300">
          </div>


          <p>
            A AMAGGI foi reconhecida por sua atuação no combate à exploração sexual de crianças e adolescentes nas
            rodovias e hidrovias, e a Unitapajós, nas hidrovias.
          </p>

          <p>
            O evento contou com a participação de profissionais, entidades e empresas envolvidas no enfrentamento da
            violência sexual de crianças e adolescentes para falar sobre os avanços nas práticas de prevenção e
            enfrentamento a partir de novas pesquisas, parcerias e o alinhamento estratégico com os princípios de
            “Empresas e Direitos Humanos” da ONU e os “Objetivos do Desenvolvimento Sustentável”.
          </p>

          <p>
            Heloísa Torres e Ezequiel Costa Marques participaram do painel “A importância das parcerias e pesquisas na
            prevenção e no enfrentamento da exploração sexual de crianças e adolescentes” junto às empresas Braskem,
            Jaloto Transportes e Golden Cargo, e ao SEST SENAT (Serviço Social do Transporte e o Serviço Nacional de
            Aprendizagem do Transporte).
          </p>

          <p>

            Durante o bate-papo, os representantes da AMAGGI e da Unitapajós tiveram a oportunidade de comentar sobre a
            importância da parceria entre a AMAGGI e a Childhood Brasil na Pesquisa do Perfil dos Caminhoneiros da Rota
            de Grãos (BR-364), além dos treinamentos realizados pela Unitapajós com os colaboradores envolvidos nas
            operações fluviais.

          </p>

          <p>
            A supervisora também apresentou o Programa Logística Responsável, que visa cultivar o bom relacionamento da
            companhia com seus fornecedores de transporte e promover o bem-estar dos trabalhadores envolvidos,
            minimizando os impactos econômicos e socioambientais das atividades e reduzindo riscos de acidentes em
            rodovias e hidrovias.




          </p>
          <a
            href="https://www.amaggi.com.br/noticias/amaggi-e-reconhecida-por-apoio-ao-programa-na-mao-certa/"
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
