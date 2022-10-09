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
          <h3 class="post-title">Bunge e AMAGGI ampliam parceria para escoamento de grãos via Corredor Norte</h3>
          <a
            href="https://www.bunge.com.br/Imprensa/Noticia.aspx?id=936"
            class="date"
            target="_blank"
          >
            26/07/2016 - Bunge
          </a>

          <picture class="w-100">
            <img src="{{asset('/img/elements/sobre_a_unitapajos.jpg')}}"
                 srcset="{{asset('/img/elements/sobre_a_unitapajos.jpg')}}"
                 alt="audio description content"
                 class="img-fluid post-banner">
          </picture>

          <article class="post-content">
            <p>
              São Paulo, 26 de julho de 2016 – A Bunge e a AMAGGI anunciam hoje que estão ampliando a parceria iniciada em 2014, quando formaram a joint venture Unitapajós (Navegações Unidas Tapajós) para operar na rota conhecida como Corredor Norte, por meio da navegação na hidrovia Tapajós-Amazonas.
            </p>

            <p>
              A transação, sujeita à aprovação do Conselho Administrativo de Defesa Econômica (CADE), prevê a aquisição, por parte da AMAGGI, de 50% da Estação de Transbordo, em Miritituba, e do Terminal Portuário, em Barcarena, ativos que formam o complexo portuário Miritituba-Barcarena (PA) da Bunge, permitindo assim uma gestão compartilhada de todas as ações locais.
            </p>

            <p>
              “Esta operação está totalmente alinhada com a estratégia da Bunge de otimizar seus ativos e buscar parcerias estratégicas para capturar oportunidades de crescimento, contribuindo para o sucesso do negócio. Já vivenciamos situações similares em outras regiões com resultados muito positivos para todos os envolvidos”, diz Raul Padilla, Presidente e CEO da Bunge Brasil.
            </p>

            <p>
              Contando com uma frota de 90 barcaças e uma capacidade de movimentação anual de 3,5 milhões de toneladas de grãos, a Unitapajós veio confirmar a viabilidade logística do corredor Norte como opção aos portos do sul e sudeste do país.
            </p>

            <p>
              “Para a AMAGGI, após dois anos de operação da Unitapajós, esse novo passo fortalece nossa presença naquela região, em conformidade com o plano de crescimento estratégico da companhia, mas também contribui para o incremento de uma rota logística fundamental ao desenvolvimento do país.”, comenta Waldemir Loto, presidente executivo da AMAGGI.
            </p>

            <p>
              A ampliação da parceria entre as duas empresas não muda as atividades comerciais, nem a operação de escoamento de grãos. Soja e milho, transportados pelo Corredor Norte, seguem para Ásia ou Europa, desafogando o sistema logístico do Sudeste e contribuindo para o desenvolvimento da região Norte.
            </p>

            <strong>Sobre a Bunge</strong>

            <p>
              A Bunge trabalha diante de um dos maiores desafios do mundo contemporâneo: garantir de forma sustentável a alimentação de uma população em constante crescimento. No Brasil há 110 anos, a empresa é a maior exportadora do agronegócio e uma das principais no setor de alimentos e ingredientes para a indústria alimentícia. São cerca de 17 mil funcionários, que atuam para contribuir com a produção de alimentos e fazer com que produtos de alta qualidade cheguem à mesa de milhares de consumidores todos os dias. Eleita a empresa sustentável do ano de 2015 pelo Guia Exame de Sustentabilidade e reconhecida pela revista Você S/A como uma das 150 melhores empresas para se trabalhar, a Bunge compra e processa grãos, como soja, trigo e milho; produz alimentos, como óleos, margarinas, maioneses, azeite, arroz, farinhas de trigo, molhos e atomatados; presta serviços portuários; produz açúcar, etanol e bioenergia. São mais de 100 instalações no Brasil, entre fábricas, usinas, moinhos, portos, centros de distribuição e silos, em 17 estados e no Distrito Federal. Marcas como Soya, Delícia, Primor, Salada, Cardeal, Salsaretti, Suprema e Gradina fazem parte da história de milhares de pessoas e de uma das maiores empresas de agronegócio e alimentos do Brasil.
            </p>

            <strong>Sobre a AMAGGI</strong>

            <p>
              A AMAGGI atua dentro de toda a cadeia do agronegócio: da produção no campo à exportação de commodities, passando pela industrialização de soja, transporte fluvial e geração de energia elétrica. No campo, produz mais de um milhão de toneladas de grãos por ano entre soja, milho e algodão.            </p>

            <p>
              Origina mais de 8 milhões de toneladas de grãos e obteve, no ano passado, uma receita de US$ 2,9 bilhões em exportações. Foi pioneira no transporte fluvial pelo corredor Madeira-Amazonas, por onde transporta aproximadamente 3,5 milhões de toneladas de grãos por ano.

            </p>

            <p>
              O pioneirismo também está presente nas ações sustentáveis da AMAGGI. Foi a primeira empresa do Brasil a certificar uma fazenda de soja com a ISO 14001; foi também a primeira companhia do mundo a comercializar um lote de soja com a certificação RTRS. Além disso, conta com outras importantes certificações como ISCC e ProTerra, que garantem ao mercado um produto de qualidade e obtido de forma sustentável.

            </p>

            <p>
              Recentemente a AMAGGI foi apontada pelo ranking Maiores & Melhores da revista Exame na 39ª posição em volume de vendas líquidas. Dentre as empresas do agronegócio listadas entre as 40 maiores deste Ranking, a AMAGGI é a única de capital inteiramente nacional.

            </p>
            <a
            href="https://www.bunge.com.br/Imprensa/Noticia.aspx?id=936"
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
