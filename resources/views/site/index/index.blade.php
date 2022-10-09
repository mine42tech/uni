@extends('layouts.app')

@section('content')

<section id="home" >
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner"style="border-bottom:15px solid #fff">

            <a href="/oportunidades" class="carousel-item active">
                <img 
                    class="d-block w-100"  
                    src="{{asset('/img/banner/banner01.png')}}" 
                    alt="First slide"
                >
            </a>         

            <a  href="/socioambiental" class="carousel-item">
                <img 
                    class="d-block w-100"  
                    src="{{asset('/img/banner/banner02.png')}}" 
                    alt="Third slide"
                >
            </a>

            <a  href="/atuacao" class="carousel-item">
                <img 
                    class="d-block w-100"  
                    src="{{asset('/img/banner/banner03.png')}}" 
                    alt="Second slide"
                >
            </a>
            
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>

</section>

<section id="" class="sobre">
    <div class="img-destaque" style="">
        <img src="/img/elements/sobre_a_unitapajos.jpg" class="w-100" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7" >

            </div>
            <div class="col-12 col-md-5 d-flex align-items-center" >
                <div>
                    <h2 class="section-title">SOBRE A UNITAPAJÓS</h2>
                    <div class="clearfix w-100"></div>
                    <p>A UNITAPAJÓS é uma joint venture entre a Amaggi e a Bunge, que foi criada em 2013 para possibilitar o escoamento de grãos através do corredor norte pela hidroviária Tapajós Amazonas.</p>
                    <a href="/sobre" class="btn btn-primary">Leia mais <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div> {{-- end container --}}
</section>

<section id="negocios"  class="">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 d-flex align-items-center">
                <div>
                    <h2 class="section-title" >NOSSO NEGÓCIO</h2>
                    <div class="clearfix w-100"></div>
                    <p class="mt-5 mb-5" >No ano de 2016, foram agregados nesta parceria a Estação de Transbordo de Cargas em Miritituba (Itaituba PA) e o Terminal Portuário de Barcarena. </p>
                    <a href="/atuacao" class="btn btn-white">Leia mais <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-1"></div>
            <div class="col-12 col-md-6" >

            </div>
        </div>
    </div> {{-- end container --}}
    <img src="/img/elements/nosso_negocio.jpg" class="img-destaque" alt="">
</section>

<section id="seguranca"  style="margin-bottom: 50px">
    <div class="img-destaque" style="max-height: 520px; overflow: hidden">
        <img src="/img/elements/seguranca_home.jpg" class="w-100" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7" >
            </div>
            <div class="col-12 col-md-5 d-flex align-items-center" >
                <div>
                    <h2 class="section-title">SEGURANÇA, NOSSO MAIOR VALOR</h2>
                    <div class="clearfix w-100"></div>
                    <p>Trabalhar na Unitapajós é fazer parte de uma empresa que prioriza a segurança, o bem-estar e o desenvolvimento profissional de seus colaboradores.</p>
                    <div class="d-flex justify-content-center">
                        <a href="/seguranca" class="btn btn-primary mx-auto">Leia mais <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> {{-- end container --}}
</section>

{{-- 
<section id="blog" >
    <div class="container">
        <div class="row justify-content-center destaque-home">
            <h2 class="section-title" >FIQUE POR DENTRO</h2>
            <div class="clearfix w-100"></div>
            <div class="row noticias w-100">
                <div class="col-12 col-md-6">
                    <a href="#" class="row">
                        <div class="col-8 col-md-6 texto" >
                            <div>
                                <span class="date">22/07/2019 - Conexão informa</span>
                                <h2 class="title">Exame: ranking inclui AMAGGI entre as 30 maiores empresas do país</h2>
                                <p class="d-none d-md-block">AMAGGI será uma das empresas parceiras que ajudarão a manter, em Cuiabá, o primeiro espaço físico de Mato Grosso voltado a incubar e acelerar startups dedicadas à inovação</p>
                                <span class="link">Leia mais <i class="fas fa-chevron-right"></i></span>
                            </div>
                        </div>
                        <div class="col-4 col-md-6 p-0" ><img src="/img/elements/modelo01.svg" class="w-100" alt=""></div>
                    </a>
                </div>
                <div class="col-12 col-md-6">
                    <a href="#" class="row">
                        <div class="col-8 col-md-6 texto" >
                            <div>
                                <span class="date">22/07/2019 - Conexão informa</span>
                                <h2 class="title">Exame: ranking inclui AMAGGI entre as 30 maiores empresas do país</h2>
                                <p class="d-none d-md-block">AMAGGI será uma das empresas parceiras que ajudarão a manter, em Cuiabá, o primeiro espaço físico de Mato Grosso voltado a incubar e acelerar startups dedicadas à inovação</p>
                                <span class="link">Leia mais <i class="fas fa-chevron-right"></i></span>
                            </div>
                        </div>
                        <div class="col-4 col-md-6 p-0" ><img src="/img/elements/modelo01.svg" class="w-100" alt=""></div>
                    </a>
                </div>
                <div class="col-12 col-md-6">
                    <a href="#" class="row">
                        <div class="col-4 col-md-6 p-0" ><img src="/img/elements/modelo01.svg" class="w-100" alt=""></div>
                        <div class="col-8 col-md-6 texto" >
                            <div>
                                <span class="date">22/07/2019 - Conexão informa</span>
                                <h2 class="title">Exame: ranking inclui AMAGGI entre as 30 maiores empresas do país</h2>
                                <p class="d-none d-md-block">AMAGGI será uma das empresas parceiras que ajudarão a manter, em Cuiabá, o primeiro espaço físico de Mato Grosso voltado a incubar e acelerar startups dedicadas à inovação</p>
                                <span class="link">Leia mais <i class="fas fa-chevron-right"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6">
                    <a href="#" class="row">
                        <div class="col-4 col-md-6 p-0" ><img src="/img/elements/modelo01.svg" class="w-100" alt=""></div>
                        <div class="col-8 col-md-6 texto" >
                            <div>
                                <span class="date">22/07/2019 - Conexão informa</span>
                                <h2 class="title">Exame: ranking inclui AMAGGI entre as 30 maiores empresas do país</h2>
                                <p class="d-none d-md-block">AMAGGI será uma das empresas parceiras que ajudarão a manter, em Cuiabá, o primeiro espaço físico de Mato Grosso voltado a incubar e acelerar startups dedicadas à inovação</p>
                                <span class="link">Leia mais <i class="fas fa-chevron-right"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div> end container 
</section>
--}}

<section id="testimonials" class="d-none ">
    <div class="container">
        <h2 class="section-title">Sobre a Unitapajós</h2>
        <div class="clearfix w-100"></div>
        <p>A UNITAPAJÓS é uma joint venture entre a Amaggi e a Bunge, que foi criada em 2013 para possibilitar o escoamento de grãos através do corredor norte pela hidrovia Tapajós Amazonas. </p>
        <a href="#" class="btn btn-primary">Leia mais <i class="fas fa-chevron-right"></i></a>
        <div class="row">
            @foreach (range(1, 3) as $i)
            <div class="col-12 col-md-6 col-lg-4 lax" data-lax-preset="blurIn-10 fadeIn-.5">
                @component('components.site.card-testimonial')
                @endcomponent
            </div>
            @endforeach
        </div> {{-- end row --}}
    </div> {{-- end container --}}
</section>

@endsection
