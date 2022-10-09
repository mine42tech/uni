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
        <h3 class="post-title">Movimentação de grãos da Unitapajós quebra Cinco recordes operacionais</h3>
        <a href="#">
          08/04/2021 - Unitapajós
        </a>

        <picture class="w-100">
          <img src="{{asset('/img/elements/noticias/noticia-recorde.png')}}"
            srcset="{{asset('/img/elements/noticias/noticia-recorde.png')}}" alt="audio description content"
            class="img-fluid post-banner">
        </picture>

        <article class="post-content">

          <p>
            Cinco recordes operacionais foram quebrados simultaneamente na última quinta-feira (31), com o volume de soja em grãos movimentado nas operações da Unitapajós no corredor norte.
          </p>

          <h4><strong>Recorde de volume mensal de grãos recebido e expedido na ETC Miritituba</strong></h4>

          <p>
            As operações da Unitapajós iniciam na Estação de Transbordo de Carga (ETC) de Miritituba, em Itaituba-Pa. A unidade localizada no sudoeste paraense alcançou a marca de 329.768,200 toneladas de grãos de soja descarregadas no mês, equivalente a 6.792 carretas, ou 03% de aumento em relação à marca anterior, de Abril de 2020. Consequentemente, ao número anterior, a ETC Miritituba também quebrou o recorde de volume expedido, totalizando 335.461,178 toneladas de grãos de soja enviadas para o Terminal Portuário de Barcarena por meio dos comboios de barcaças graneleiras, ou 03% de aumento em relação ao número anterior, de Julho de 2020. Clayton Brito, Supervisor de Terminal em Itaituba, destaca que o recorde só foi possível “Com a contribuição de todos os setores. Graças ao time conseguimos atingir as expectativas das nossas operações e otimizar os nossos processos. Resultados como esse demonstram que podemos chegar mais longe e superar os nossos limites e desafios, sempre de forma segura e alinhados aos nossos valores e políticas”.
          </p>

          <h4><strong>Recorde de volume mensal de grãos descarregados de barcaças no TUP Barcarena</strong></h4>

          <p>
            Em sequência aos números alcançados pela unidade de Itaituba, o Terminal de Uso Privado (TUP) de Barcarena quebrou o recorde mensal de volume descarregado de barcaças graneleiras nesse mês, atingindo a marca de 338.965,543 toneladas de grãos descarregados, ou 05% a mais em comparação a marca atingida em Julho de 2020. “O resultado garante a prontidão de carga, reduz o laytime allowed (tempo de embarque) dos navios atracados em nossos berços, evita perdas de demurrage (penalidades por atraso na operação de embarque) e garante a satisfação dos nossos stakeholders, tornado as nossas operações mais atrativas e competitivas no mercado” explica Valdenilson Fialho, supervisor de Terminal em Barcarena.
          </p>

          <h4><strong>Recorde de volume de grãos exportados no mês e no trimestre</strong></h4>

          <p>
            Com os resultados apresentados acima, a Unitapajós fecha o mês de março com 460.087,812 toneladas de grãos exportados pelo Terminal Portuário de Barcarena. Foram 139.000,00 toneladas a mais do que a marca anterior de 2018. Em números práticos, a diferença de volume representa 2 navios tipo Panamax carregados a mais no TUP, um aumento de 30% em relação ao recorde anterior. A conclusão do mês de março de 2021 resultou também no melhor trimestre em quantidade de grãos exportados em toda a história da Unitapajós: foram 765.155,168 toneladas de grãos escoadas pelo TUP Barcarena nesse período, a melhor marca desde o último recorde alcançado em 2019.
          </p>

          <p>
            Marcelo Mello, Gerente de Operações, ressalta que “O fechamento do trimestre no corredor é resultado de muita sinergia entre as todas as áreas. Apesar das adversidades que acometem o mundo, estamos conseguindo por meio dos nossos rígidos protocolos manter a saúde e segurança do time, e, consequentemente alcançar números cada vez melhores dentro de um processo de melhoria contínua. Meus parabéns a todos!”
          </p>

          <p>
            <strong>A Unitapajós agradece e parabeniza</strong> todos os colaboradores da ETC Miritituba, Navegação e TUP Barcarena pelo empenho e dedicação com os nossos valores, políticas e compromissos. A quebra dos recordes só foi possível graças ao esforço de cada um em manter nossas operações rodando de forma segura e comprometida com os nossos resultados.
          </p>

        </article>
      </div> {{-- end row --}}
    </div> {{-- end container --}}
</section>

@endsection
