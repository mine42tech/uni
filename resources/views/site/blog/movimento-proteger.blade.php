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
          <h3 class="post-title">Conclusão do Projeto “Movimento Proteger” em Barcarena-PA</h3>
          <a
            href="#"
            class="date"
            target="_blank"
          >
            23/02/2021
          </a>

          <picture class="w-100">
            <img src="{{asset('/img/elements/noticias/movimento-proteger/img-1.jpg')}}"
                 srcset="{{asset('/img/elements/noticias/movimento-proteger/img-1.jpg')}}"
                 alt="audio description content"
                 class="img-fluid post-banner">
          </picture>

          <article class="post-content">
            <p>
              Em janeiro, a área de Gestão Socioambiental da Unitapajós realizou a conclusão do projeto social “Movimento Proteger”. Ao todo 38 mulheres, de várias faixas etárias, receberam o certificado de participação no projeto de capacitação na produção de máscaras de tecido.
            </p>

            <p>
              O Movimento Proteger somou esforços para reduzir os impactos econômicos e sociais causados pela pandemia do novo Coronavírus (COVID-19) nas comunidades Fazendinha e Vila Nova, vizinhas do Terminal Portuário da Unitapajós em Barcarena-PA. O projeto objetivou capacitar, instruir e prover insumos para confecção de máscaras de proteção de tecido, oportunizando a geração de renda ao grupo de mulheres.
            </p>

            <p>
              Além das oficinas, as participantes do projeto foram beneficiadas com o empréstimo de máquinas de costura e doação dos primeiros insumos para produção inicial. O projeto foi muito bem recebido pela Leilane, uma das participantes. “O Movimento Proteger me deu essa nova oportunidade, de ter minha própria renda, trabalhar de casa e ainda poder cuidar dos meus filhos”, relatou a moradora da comunidade Fazendinha, em Barcarena-PA.
            </p>

            <div class="row galeria">
              <div class="col-lg-3 col-6">
                <a data-lightbox="gallery" href="{{asset('/img/elements/noticias/movimento-proteger/img-1.jpg')}}">
                  <img src="{{asset('/img/elements/noticias/movimento-proteger/img-1.jpg')}}" alt="">
                </a>
              </div>

              <div class="col-lg-3 col-6">
                <a data-lightbox="gallery" href="{{asset('/img/elements/noticias/movimento-proteger/img-2.jpg')}}">
                  <img src="{{asset('/img/elements/noticias/movimento-proteger/img-2.jpg')}}" alt="">
                </a>
              </div>

              <div class="col-lg-3 col-6">
                <a data-lightbox="gallery" href="{{asset('/img/elements/noticias/movimento-proteger/img-3.jpg')}}">
                  <img src="{{asset('/img/elements/noticias/movimento-proteger/img-3.jpg')}}" alt="">
                </a>
              </div>

              <div class="col-lg-3 col-6">
                <a data-lightbox="gallery" href="{{asset('/img/elements/noticias/movimento-proteger/img-4.jpg')}}">
                  <img src="{{asset('/img/elements/noticias/movimento-proteger/img-4.jpg')}}" alt="">
                </a>
              </div>

              <div class="col-lg-3 col-6">
                <a data-lightbox="gallery" href="{{asset('/img/elements/noticias/movimento-proteger/img-5.jpg')}}">
                  <img src="{{asset('/img/elements/noticias/movimento-proteger/img-5.jpg')}}" alt="">
                </a>
              </div>

              <div class="col-lg-3 col-6">
                <a data-lightbox="gallery" href="{{asset('/img/elements/noticias/movimento-proteger/img-6.jpg')}}">
                  <img src="{{asset('/img/elements/noticias/movimento-proteger/img-6.jpg')}}" alt="">
                </a>
              </div>

              <div class="col-lg-3 col-6">
                <a data-lightbox="gallery" href="{{asset('/img/elements/noticias/movimento-proteger/img-7.jpg')}}">
                  <img src="{{asset('/img/elements/noticias/movimento-proteger/img-7.jpg')}}" alt="">
                </a>
              </div>

              <div class="col-lg-3 col-6">
                <a data-lightbox="gallery" href="{{asset('/img/elements/noticias/movimento-proteger/img-8.jpg')}}">
                  <img src="{{asset('/img/elements/noticias/movimento-proteger/img-8.jpg')}}" alt="">
                </a>
              </div>
            </div>

            <p>
              A iniciativa foi realizada em parceria com o negócio sustentável, Lixo Xiki, que ficou responsável pela capacitação, montagem e manutenção básica das máquinas de costura, acompanhamento diário da produção e assessoria na comercialização das máscaras produzidas.
            </p>

            <p>
              Os principais resultados do Movimento Proteger foram a capacitação das 38 mulheres e a geração de cerca de R$ 40.000,00 em receita com a venda das máscaras de tecido confeccionadas, sendo todo o valor revertido para as próprias participantes do projeto, que puderam aprender um novo ofício e resgatar a renda familiar em um momento tão desafiador.
            </p>

            <p>
              “Aprendemos na prática que a capacidade de adaptação e aceitação das mudanças é peça chave para a realização das nossas ações, pois o Movimento Proteger nasceu da impossibilidade de a nitapajós dar continuidade aos Programas de Geração de Renda já implementados na região devido ao cenário da Pandemia” comenta Pamela Longo, Supervisora Socioambiental.
            </p>

            <p>Confira o vídeo de conclusão do Projeto “Movimento Proteger”</p>

            <div class="video">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/tCe2LCbT5oM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            {{-- <a
              href=""
              target="_blank"
              class="btn-theme text-white"
            >
              Ver Notícia
            </a> --}}
          </article>
        </div>
      </div> {{-- end row --}}
    </div> {{-- end container --}}
  </section>

@endsection
