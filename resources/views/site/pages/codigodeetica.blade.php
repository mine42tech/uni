@extends('layouts.app')

@section('content')
<section id="title" style="background-image: url(/img/elements/title.jpg) ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title">
                    Código de ética
                </h2>
            </div>
        </div>
    </div>
</section>
<section id="about" class="pt-5 pb-5 mt-5 mb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-5 order-1 order-md-2" >
                <div class="box-img-destaque right">
                    <img src="/img/elements/destaque-codigodeetica.png" class="w-100" alt="">
                </div>
            </div>
            <div class="col-12 col-md-7 order-2 order-md-1" >
                <div class="box-texto-destaque right">
                    <h2><img src="/img/icons/aspas01.svg" class="img01" alt=""><span>Os valores e compromissos institucionais assumidos pela Unitapajós encontram-se reunidos em nosso Código de Ética, que tem aplicação obrigatória entre todos os colaboradores.</span><img src="/img/icons/aspas02.svg" class="img02" alt=""></h2>
                    <p>Nossa governança é apoiada pelo nosso Código de Ética, documento que estabelece diretrizes para os processos exigidos e comportamento esperado de todos os colaboradores da Unitapajós em suas atividades diárias e na relação com as partes interessadas.</p>
                </div>
            </div>
        </div>
    </div> {{-- end container --}}
</section>
<section id="codigodeetica">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3" >
                <img src="/img/elements/codigodeetica-02.png" class="w-100" alt="">
            </div>
            <div class="col-12 col-md-9 d-flex align-items-center mt-4 mb-4">
                <div>
                    <p>Para nós, ética é o ideal de comportamento humano esperado nas relações sociais e que norteiam a busca do bem comum, através da prática de igualdade, liberdade, democracia, justiça e exercício da cidadania. Ser ético é muito mais do que não praticar condutas ilícitas ou não fraudar. A própria omissão diante do conhecimento de possíveis violações é igualmente considerada conduta antiética. </p>
                    <p><b>Conheça o Código de Ética da Unitapajós</b></p>
                    <a href="#" class="btn btn-primary">Download <i class="fas fa-download"></i></a>
                </div>
            </div>
        </div>
    </div> {{-- end container --}}
</section>
<section id="codigodeetica" class="interna">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7 d-flex align-items-center">
                <div>
                    <h2 class="section-title" >Canais de Comunicação</h2>
                    <div class="clearfix w-100"></div>
                    <p class="m-0">Qualquer violação ao Código de Ética da Unitapajós pode ser notificada pelos públicos interno e externo por meio de nosso canal de denúncias. Através dele, é possível fazer sugestões, reclamações, queixas e denúncias de procedimentos indevidos, de maneira estritamente confidencial. </p>
                    <h3 class="d-flex align-items-center">
                        <img src="/img/icons/ico-phone.svg" alt="">
                        <span>0800-6470-0004</span><span>0800-2004-060</span>
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-5" >
                <img src="/img/elements/codigodeetica-03.png" class="w-100" alt="">
            </div>
        </div>
    </div> {{-- end container --}}
</section>

@endsection
