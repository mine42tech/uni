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
          <h3 class="post-title">Bunge vende 50% de dois terminais de grãos para Amaggi</h3>
          <a
            href="https://exame.com/negocios/bunge-vende-50-de-dois-terminais-de-graos-para-amaggi/"
            class="date"
            target="_blank"
          >
            26/07/2016 - Exame
          </a>

          <picture class="w-100">
            <img src="{{asset('/img/elements/noticias/exame-bunge.jpg')}}"
                 srcset="{{asset('/img/elements/noticias/exame-bunge.jpg')}}"
                 alt="audio description content"
                 class="img-fluid post-banner">
          </picture>

          <article class="post-content">
            <p>
              São Paulo – A multinacional do agronegócio Bunge fechou acordo para vender 50 por cento dos terminais de grãos que construiu recentemente em Miritituba e em Barcarena, no Pará, para o grupo brasileiro de produção e exportação de grãos Amaggi, segundo comunicado divulgado pela Bunge nesta terça-feira.
            </p>

            <p>
              As empresas não revelaram os valores envolvidos no negócio, mas destacaram que a transação está sujeita à aprovação do Conselho Administrativo de Defesa Econômica (Cade).
            </p>

            <p>
              Os dois terminais, inaugurados pela Bunge em 2014, foram o primeiro binário a operar na promissora rota de escoamento de grãos ligando o distrito de Miritituba, no município de Itaituba, às margens do Rio Tapajós, até o porto de Barcarena, na região metropolitana de Belém. Os grãos produzidos principalmente em Mato Grosso chegam a Miritituba pela BR-163, são carregados em barcaças, seguem para Barcarena e são finalmente colocados em navios com destino à exportação.
            </p>

            <p>
              Bunge e Amaggi já atuam em conjunto na região por meio de uma joint venture chamada Unitapajós, que opera uma frota de 90 barcaças e movimenta 3,5 milhões de toneladas anualmente.
            </p>

            <p>
              “Esta operação está totalmente alinhada com a estratégia da Bunge de otimizar seus ativos e buscar parcerias estratégicas para capturar oportunidades de crescimento”, disse em nota o presidente da Bunge no Brasil, Raul Padilla.
            </p>

            <p>
              As empresas destacaram, no comunicado, que a “parceria entre as duas empresas não muda as atividades comerciais, nem a operação de escoamento de grãos”.
            </p>
            <a
              href="https://exame.com/negocios/bunge-vende-50-de-dois-terminais-de-graos-para-amaggi/"
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
