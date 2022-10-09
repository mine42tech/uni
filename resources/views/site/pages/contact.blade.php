@extends('layouts.app')

@section('content')
<section id="title" style="background-image: url(/img/elements/title.jpg) ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title">
                    Fale conosco
                </h2>
            </div>
        </div>
    </div>
</section>
  <section id="contact" class="pt-5 pb-5">
    <div class="container">
      <form class="row">
        <div class="col-12 col-md-6">
          <div class="form-group">
            <label for="email">Seu nome</label>
            <input type="text" class="form-control" id="nome" aria-describedby="nomeHelp" autocomplete="off" placeholder="Seu nome">
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" autocomplete="off" placeholder="Seu e-mail">
          </div>

          <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="tel" class="form-control" id="phone" autocomplete="off" placeholder="Telefone">
          </div>
        </div>

        <div class="col-12 col-md-6">
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" autocomplete="off" placeholder="Message"></textarea>
          </div>
        </div>

        <div class="col-12 mt-5">
          <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Enviar mensagem</button>
          </div>
        </div>
      </form> {{-- end row --}}
    </div> {{-- end container --}}
  </section>

@endsection
