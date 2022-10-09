@extends('layouts.app')

@section('content')
<section id="title"> {{--style="background-image: url('/img/elements/title.jpg')"--}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title">
                    Oportunidades
                </h2>
            </div>
        </div>
    </div>
</section>
<section id="" class="sobre oportunidades" style="padding: 3rem 0 3rem">
    <div class="img-destaque">
        <img src="/img/elements/oportunidade/oportunidade.png" class="w-100" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5" >

            </div>
            <div class="col-12 col-md-7 d-flex align-items-center" >
                <div class="text-md-justify">
                    <div class="clearfix w-100"></div>
                    <h1>Venha trabalhar na Unitapajós!</h1>
                    <p>
                        A Unitapajós é uma Joint Venture de duas grandes empresas do agronegócio brasileiro, Amaggi e Bunge. Trabalhar aqui é fazer parte de uma empresa que prioriza a segurança, o bem estar e o desenvolvimento profissional de seus colaboradores. Buscamos pessoas que queiram embarcar conosco nessa trajetória, para seguir fazendo diferença em diferentes frentes de atuação, alinhadas à nossa cultura de excelência. A segurança é nosso maior valor e acreditamos que nenhum trabalho é tão urgente ou tão importante que não possa ser realizado com segurança.
                    </p>
                    <p>
                        Nossa missão, visão e valores refletem nosso propósito e são o Norte de todas as nossas ações:
                    </p>
                    <p>
                        <strong>Missão </strong><br>
                        Contribuir para o desenvolvimento logístico do agronegócio brasileiro, realizando serviços de navegação fluvial e operações portuárias, através das melhores práticas em saúde e segurança ocupacional, qualidade, meio ambiente e responsabilidade social.
                    </p>
                    <p>
                        <strong>Visão</strong><br>               
                        Ser referência na operação de logística portuária e hidroviária na região Norte do Brasil.
                    </p>
                    <p>
                        <strong>Valores</strong><br>  
                        Integridade, trabalho em equipe, pioneirismo e inovação, empreendedorismo, credibilidade, excelência em segurança e saúde ocupacional, respeito ao meio ambiente, comunidades e aos nossos parceiros.
                    </p>
                    <p>
                        Gostaria de fazer parte de uma empresa com propósito, que valoriza as pessoas e investe em seu desenvolvimento pessoal e profissional? Confira nossas oportunidades de carreira e embarque com a gente:
                    </p>
                    <a 
                        href="https://www.vagas.com.br/vagas-de-unitapaj%C3%B3s" 
                        target="_blank"
                        class="btn btn-primary"
                    >
                        Oportunidades na Unitapajós<i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div> {{-- end container --}}
</section>

@endsection
