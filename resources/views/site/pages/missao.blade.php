@extends('layouts.app')

@section('content')
<section id="title" style="background-image: url(/img/elements/title.jpg) ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title">
                    Missão, visão e valores
                </h2>
            </div>
        </div>
    </div>
</section>
<section id="about" class="pt-5 pb-5 mt-5 mb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-7" >
                <div class="box-img-destaque">
                    <img src="/img/elements/destaque-missao.jpg" class="w-100" alt="">
                </div>
            </div>
            <div class="col-12 col-md-5" >
                <div class="box-texto-destaque">
                    <h2><img src="/img/icons/aspas01.svg" class="img01" alt=""><span>Nossa missão, visão e valores refletem nossa razão de existir, e orientam todas as nossas ações.</span><img src="/img/icons/aspas02.svg" class="img02" alt=""></h2>
                </div>
            </div>
        </div>
    </div> {{-- end container --}}
</section>
<section id="box-missao">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 mb-4" >
                <div class="box-img">
                    <img src="/img/elements/visao.jpg" class="w-100" alt="">
                    <img src="/img/elements/visao.svg" class="efeito" alt="">
                </div>
                <p><b>Contribuir com o desenvolvimento logístico do agronegócio brasileiro</b>, realizando serviços de navegação fluvial e operações portuárias, através das melhores práticas em saúde e segurança ocupacional, qualidade, meio ambiente e responsabilidade social.</p>
            </div>
            <div class="col-12 col-md-4 mb-4" >
                <div class="box-img">
                    <img src="/img/elements/missao.jpg" class="w-100" alt="">
                    <img src="/img/elements/missao.svg" class="efeito" alt="">
                </div>
                <p>Ser uma referência na operação de logística portuária e hidroviária na região norte do Brasil.</p>
            </div>
            <div class="col-12 col-md-4 mb-4" >
                <div class="box-img">
                    <img src="/img/elements/valores.jpg" class="w-100" alt="">
                    <img src="/img/elements/valores.svg" class="efeito" alt="">
                </div>
                <ul class="m-0">
                    <li>Integridade</li>
                    <li>Trabalho em Equipe</li>
                    <li>Pioneirismo e Inovação</li>
                    <li>Empreendedorismo</li>
                    <li>Excelência em Segurança e Saúde Ocupacional</li>
                    <li>Respeito ao Meio Ambiente, Comunidades e Parceiros</li>
                </ul>
            </div>
        </div>
    </div> {{-- end container --}}
</section>

@endsection
