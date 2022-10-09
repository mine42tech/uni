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
            <div class="col-12 col-lg-8">

              <h3 class="post-title">{{$post->title}}</h3>

              <span class="date">{{dateBr($post->published_at)}}</span>

              <picture class="w-100">
                <img src="{{route('imagem.render', 'posts/h/' . $post->image)}}"
                class="img-fluid post-banner"
                >
              </picture>


              <article class="post-content">
                {!! $post->content!!}
              </article>
            </div>

            @isset($otherPosts)

            <div class="col-12 col-lg-4">
                <div class="related-posts">
                  <h3 class="post-title --alt">Outras Postagens</h3>

                  @forelse ($otherPosts as $otherPost)

                  <div class="card-related-post">
                    <a href="{{ route('site.blog.post-detalhe', $otherPost->slug) }}">
                    {{-- <div class="image">
                        <img src="{{route('imagem.render', 'posts/h/' . $otherPost->image)}}">

                    </div> --}}
                    <div class="description">
                      <h3 class="card-post-title">{{$otherPost->title}}</h3>
                      <span class="date">{{dateBr($otherPost->published_at)}}</span>

                      <p class="short-description">
                        {{$otherPost->description}}
                      </p>

                    </div>
                    </a>
                  </div>


                  @empty

                  @endforelse

                </div>
              </div>

            @endisset


          </div>

      {{-- <div class="row">
        <div class="col-12 col-lg-8">

          <picture class="w-100">
            <img src="https://source.unsplash.com/800x600/?sig=94"
                 srcset="https://source.unsplash.com/1600x1200/?sig=94 2x"
                 alt="audio description content"
                 class="img-fluid post-banner">
          </picture>

          <h3 class="post-title">Dicas de compras para ao Black Friday</h3>
          <span class="date">22/07/2019 - Conexão informa</span>
          <article class="post-content">
            <p>
              Lorem ipsum dollor deacdanc avec elegance espirit no improbitus per no varretis. E e dirmis a censibilus sobis altorrant Dis for coompilance deutederios estiliva por iu tiuow dormis atringerf redemptoris mater ora per nobis, Domus Galilae Lorem ipsum dollor deacdanc avec elegance espirit no improbitus per no varretis. E e dirmis a censibilus sobis altorrant Dis for coompilance deutederios estiliva por iu tiuow dormis atringerf redemptoris mater ora per nobis, Domus Galilae Lorem ipsum dollor deacdanc avec elegance espirit no improbitus per no varretis. E e dirmis a censibilus sobis altorrant Dis for coompilance deutederios estiliva por iu tiuow dormis atringerf redemptoris mater ora per nobis, Domus Galilae
            </p>

            <p>
              Lorem ipsum dollor deacdanc avec elegance espirit no improbitus per no varretis. E e dirmis a censibilus sobis altorrant Dis for coompilance deutederios estiliva por iu tiuow dormis atringerf redemptoris mater ora per nobis, Domus Galilae
            </p>

            <p>
              Lorem ipsum dollor deacdanc avec elegance espirit no improbitus per no varretis. E e dirmis a censibilus sobis altorrant Dis for coompilance deutederios estiliva por iu tiuow dormis atringerf redemptoris mater ora per nobis, Domus GalilaeLorem ipsum dollor deacdanc avec elegance espirit no improbitus per no varretis. E e dirmis a censibilus sobis altorrant Dis for coompilance deutederios estiliva por iu tiuow dormis atringerf redemptoris mater ora per nobis, Domus GalilaeLorem ipsum dollor deacdanc avec elegance espirit no improbitus per no varretis. E e dirmis a censibilus sobis altorrant Dis for coompilance deutederios estiliva por iu tiuow dormis atringerf redemptoris mater ora per nobis, Domus Galilae
            </p>
          </article>
        </div>

        <div class="col-12 col-lg-4">
          <div class="related-posts">
            <h3 class="post-title --alt">Outras Postagens</h3>

            @foreach (range(1, 2) as $i)
              @component('components.site.card-related-post')
              @endcomponent
            @endforeach
          </div>
        </div>
      </div> --}}
       {{-- end row --}}
    </div> {{-- end container --}}
  </section>

@endsection
