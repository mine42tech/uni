@extends('layouts.app')

@section('content')
<section id="title"> {{--style="background-image: url('/img/elements/title.jpg')"--}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title">
                    Qualidade
                </h2>
            </div>
        </div>
    </div>
</section>
<span class="anchor" id="qualidade-um my-5"></span>
<section id="" class="seguranca sobre" style="overflow-y: visible">
    <div class="img-destaque">
        <img src="/img/elements/qualidade/qualidade.jpg" class="w-100" alt="">
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5">

            </div>
            <div class="col-12 col-md-7 d-flex align-items-center">
                <div class="text-md-justify">
                    <h1>Atuamos fortemente na gestão da qualidade dos processos para garantir a satisfação dos nossos clientes.</h1>
                    <p>
                        A Unitapajós tem um time comprometido com os valores da companhia e focado na excelência dos processos e serviços. Investimos em controles e programas de gestão em todas as etapas dos processos, desde o recebimento do produto até a expedição em navios. Nossas operações possuem certificação com reconhecimento internacional (GMP+B3), que validam todas as Boas Práticas implementadas, para cumprir os requisitos legais e assegurar as condições sanitárias de nossas instalações, agregando valor ao negócio.
                    </p>

                    <p>
                        Nos empenhamos de forma permanente para manter um relacionamento aberto e transparente com nossos parceiros e fornecedores.
                    </p>

                    <p>
                        Além disso, contamos com processos de auditoria e programas internos como o UniSensos, Uniexcelência e capacitação e aperfeiçoamento contínuo dos colaboradores e parceiros, tornando-os guardiões da qualidade.
                    </p>
                </div>
            </div>
        </div>
    </div> {{-- end container --}}
</section>
<span class="anchor" id="qualidade-dois"></span>
<section id="atuacao" class="sobre seguranca tres " style="z-index: 1" >

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 d-flex align-items-start" >
                <div class="text-md-justify">
                    <h1 class="">Uniexcelência</h1>
                    <p class="mb-0">Programa de Excelência Operacional baseado na metodologia PDCA e SDCA com foco na gestão da rotina e melhoria dos nossos processos e resultados. Com uso das ferramentas de mapeamento de processo, matriz de atividades críticas e plano de capacitação visamos que nossas equipes desenvolvam suas atividades com padronização buscando garantir a sustentabilidade dos nossos resultados. A gestão a vista dos nossos indicadores, as análises de causa raiz dos desvios e os registros de melhoria e auditorias internas do programa nos auxiliam no monitoramento da eficiência dos resultados. </p>
                </div>
            </div>

            <div class="col-12 col-md-6 d-flex align-items-start" >
                <div class="text-md-justify">
                   <h1 class="">Unisensos</h1>
                    <p>Programa de gestão da Qualidade focado em organização, limpeza e padronização para alcançar a melhoria contínua e qualidade total. Através das inspeções internas dos sensos de utilização, organização, limpeza, padronização e disciplina buscamos aumento de produtividade, qualidade de nossos produtos e melhoria do ambiente de trabalho e qualidade de vida.</p>
                </div>
            </div>
        </div>
    </div> {{-- end container --}}
</section>
<span class="anchor" id="qualidade-tres"></span>
<section id="atuacao" class="sobre atuacao um" >
    <div class="img-destaque7 bg-white certificado">
        <img src="/img/elements/qualidade/qualidade-gmp.png" class="" alt="">
        
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 d-flex align-items-center" >
                <div class="text-md-justify">
                   <h1 class="">Certificação GMP+B3</h1>
                    <p>
                        Com as Boas Práticas de Fabricação implementadas nos terminais garantimos as condições sanitárias das nossas instalações e a segurança alimentar do produto movimentado. O plano de HACCP estabelece todas as diretrizes de monitoramento dos pontos críticos de controle para mitigação dos riscos de contaminação do produto exportado atendendo a exigências de nossos clientes. Anualmente passamos por auditorias de monitoramento interno e externo, com a certificação sendo revalidada a cada 03 anos. 
                    </p>
                </div>
            </div>
        </div>
    </div> {{-- end container --}}
</section>
<span class="anchor" id="qualidade-quatro"></span>
<section id="" class="seguranca sobre" style="background: #348be5" >
    <div class="img-destaque img-destaque4">
        <img src="/img/elements/qualidade/semana-qualidade.jpg" class="w-100" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6"></div>
            <div class="col-12 col-md-6 d-flex align-items-center" >
                <div class="text-md-justify">
                    <h1 class="">Semana da Qualidade</h1>
                    <p class="mb-0 text-white">
                        Semana de conscientização e capacitação dos nossos colaboradores através de palestras e mini cursos, com facilitadores internos e externos buscando que todo o time da Unitapajos e Parceiros conheça o papel, importância e impacto da Gestão da Qualidade nos processos de recebimento e exportação dos produtos.

                    </p>
                </div>
            </div>
        </div>
    </div> {{-- end container --}}
</section>

@endsection