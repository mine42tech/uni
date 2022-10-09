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
          <h3 class="post-title">Exportação de soja ganha atalho pelo Norte com novo terminal no Pará</h3>
          <a
            href="https://m.folha.uol.com.br/mercado/2014/04/1445130-exportacao-de-soja-ganha-atalho-pelo-norte-com-novo-terminal-no-para.shtml"
            class="date"
            target="_blank"
          >
            25/04/2014 - Folha de São Paulo
          </a>

          <picture class="w-100">
            <img src="{{asset('/img/elements/noticias/folhadesp-exportacao.jpeg')}}"
                 srcset="{{asset('/img/elements/noticias/folhadesp-exportacao.jpeg')}}"
                 alt="audio description content"
                 class="img-fluid post-banner">
          </picture>

          <article class="post-content">
            <p>
              A soja ganha nesta sexta-feira (25) um novo caminho para a exportação, pelo Norte.
            </p>

            <p>
              O sistema, que combina as modalidades rodoviária, hidroviária e marítima, deve reduzir o tempo do transporte dos grãos, o custo do frete e o congestionamento nos portos do Sudeste, que concentram o embarque do principal produto exportado pelo Brasil.


            </p>

            <p>
              O primeiro terminal de exportação nesse modelo será inaugurado hoje pela Bunge em Barcarena (PA), de onde a soja seguirá em navios Panamax, com capacidade para 65 mil toneladas, para a Europa e para a Ásia. O primeiro deve deixar Barcarena amanhã, em direção à Espanha.



            </p>

            <p>
              A maior parte da soja exportada sairá do norte de Mato Grosso, maior Estado produtor. A carga seguirá pela BR-163 até uma estação de transbordo em Miritituba, no oeste do Pará, onde será colocada em barcaças que irão navegar pelo rio Tapajós, até o terminal de Barcarena.


            </p>

            <p>
              Outros sete sistemas logísticos semelhantes, com o recebimento da soja em Miritituba e o embarque em Barcarena, devem ser construídos, demandando R$ 6,2 bilhões em investimentos, segundo Renato Pavan, diretor da consultoria Macrologística.


            </p>

            <p>
              A ADM (EUA), outra gigante do setor, e a operadora logística Hidrovias do Brasil estão entre os investidores.


            </p>

            <div class="d-flex justify-content-center">
              <img src="{{asset('/img/elements/noticias/noticia-folhasp.png')}}" class="img-fluid" alt="">
            </div>


            <p>A Bunge investiu R$ 700 milhões no projeto, com a parceria do Grupo Amaggi no transporte hidroviário, a ser feito pela Unitapajós, joint venture entre as empresas.

            </p>

            <p>O Terfron (Terminal Fronteira Norte), da Bunge, deve exportar 2 milhões de toneladas de grãos neste ano, e a meta é dobrar o volume em 2015. Além da soja, o milho da safrinha também poderá ser exportado pela rota.

            </p>

            <p>O presidente da Bunge Brasil, Pedro Parente, diz que a capacidade pode chegar a 8 milhões de toneladas em 2018. O volume é significativo: no ano passado, a mesma quantidade (8 milhões de toneladas) foi exportada pelo terminal da Bunge em Santos (SP).

            </p>

            <p>De acordo com Pavan, em 2022 Barcarena terá o maior terminal exportador de grãos do Brasil, com capacidade para 22 milhões de toneladas, ante as 18 milhões de toneladas do porto de Santos, que ficará estagnado.

            </p>

            <p>Segundo Parente, a nova rota permitirá uma economia de 20% no tempo do transporte da soja para a Europa e de 15% para a China.

            </p>

            <p>Ele não estimou qual será o impacto no custo do frete, que pode variar de acordo com vários fatores, inclusive o tamanho do congestionamento para chegar a Santos.

            </p>

            <p>Mas Edeon Vaz Ferreira, do Movimento Pró-Logística da Aprosoja (Associação dos Produtores de Soja e Milho de Mato Grosso), diz que a saída pelo Norte reduzirá o valor do frete em 34%, considerando o transporte de Sorriso (MT), principal município produtor do país, a Santos.

            </p>

            <p>"Essa alternativa de transporte nos ajuda a consolidar o Brasil na liderança das exportações de soja. No próximo ano, teremos capacidade para exportar mais 4 milhões de toneladas", diz Parente.

            </p>

            <strong>FERROVIA</strong>

            <p>Os investimentos das tradings em logística não devem parar por aí. Empresas que concentram cerca de 70% das exportações brasileiras de soja, como Bunge, Cargill, Dreyfus e Amaggi, tentam viabilizar a construção de uma ferrovia de Sinop (MT) a Miritituba, o que aumentaria a eficiência do sistema inaugurado hoje. Com essa ferrovia, o trecho de mil quilômetros, que hoje é percorrido por caminhões, seria feito por trens.

            </p>

            <p>
              Segundo Parente, essas empresas manifestaram ao governo interesse em atuar como operadores ferroviários independentes. "A discussão ainda está no campo conceitual, mas a proposta foi bem recebida pelo governo."


            </p>

            <div  class="d-flex justify-content-center">
              <img src="{{asset('/img/elements/noticias/noticia-folhasp2.jpeg')}}" class="img-fluid" alt="">
            </div>
            <a
              href="https://m.folha.uol.com.br/mercado/2014/04/1445130-exportacao-de-soja-ganha-atalho-pelo-norte-com-novo-terminal-no-para.shtml"
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
