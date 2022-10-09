@extends('layouts.app')

@section('content')
<section id="title" style="background-image: url(/img/elements/title.jpg) ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title">
                    Governança corporativa
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
                    <img src="/img/elements/governanca.png" class="w-100" alt="">
                </div>
            </div>
            <div class="col-12 col-md-7 order-2 order-md-1" >
                <div class="box-texto-destaque right">
                    <h2><img src="/img/icons/aspas01.svg" class="img01" alt=""><span>Nosso modelo de governança é sustentado pela conformidade legal, ética e transparência, visando o crescimento sustentável de nossas operações.</span><img src="/img/icons/aspas02.svg" class="img02" alt=""></h2>
                    <p>A Unitapajós adota as melhores práticas de governança corporativa, com políticas e mecanismos que garantam transparência e respeito aos direitos daqueles que são impactados pelas nossas operações. Por isso, em poucos anos de existência, conseguimos construir uma relação de confiança e respeito com todos os nossos públicos de interesse.</p>
                </div>
            </div>
        </div>
    </div> {{-- end container --}}
</section>
<section id="seguranca">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex mb-4 align-items-center">
                <div>
                    <p>Nosso time desenvolveu uma nova estrutura e procedimento que permitem que o trabalho de manutenção seja mais seguro (redução de 95% do tempo de exposição ao risco), mais confortável para os colaboradores, além de trazer significativos ganhos de produtividade. Este é um exemplo das iniciativas que inúmeras iniciativas da Unitapajós em segurança, que nos impulsiona a fortalecer ainda mais nosso futuro. </p>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center mb-3 mt-3" >
                <img src="/img/icons/check.svg" class="mr-4" alt="">
                <h3>Comitê Geral de Segurança</h3>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center mb-3 mt-3" >
                <img src="/img/icons/check.svg" class="mr-4" alt="">
                <h3>Cipa Barcarena</h3>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center mb-3 mt-3" >
                <img src="/img/icons/check.svg" class="mr-4" alt="">
                <h3>Comitê de Avaliação da Pesquisa de Clima</h3>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center mb-3 mt-3" >
                <img src="/img/icons/check.svg" class="mr-4" alt="">
                <h3>Cipa Navegação</h3>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center mb-3 mt-3" >
                <img src="/img/icons/check.svg" class="mr-4" alt="">
                <h3>Comitê de Voluntariado</h3>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center mb-3 mt-3" >
                <img src="/img/icons/check.svg" class="mr-4" alt="">
                <h3>Cipa Itaituba</h3>
            </div>
        </div>
    </div> {{-- end container --}}
</section>

@endsection
