@extends('layouts.app')

@section('content')

  <section id="faq">
    <div class="container">
      <h2 class="section-title">
        FAQ
      </h2>

      <div class="accordion" id="accordionFAQ">
        <div class="card">
          <div class="card-header" id="heading1">
            <button class="" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
              <span>
                Question title?
              </span>
            </button>
          </div>

          <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordionFAQ">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div> {{-- end collapse item --}}

        <div class="card">
          <div class="card-header" id="heading2">
            <button class=" collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
              <span>
                Question title?
              </span>
            </button>
          </div>

          <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionFAQ">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div> {{-- end collapse item --}}

        <div class="card">
          <div class="card-header" id="heading3">
            <button class=" collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
              <span>
                Question title?
              </span>
            </button>
          </div>

          <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionFAQ">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div> {{-- end collapse item --}}

        <div class="card">
          <div class="card-header" id="heading4">
            <button class=" collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
              <span>
                Question title?
              </span>
            </button>
          </div>

          <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionFAQ">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div> {{-- end collapse item --}}

        <div class="card">
          <div class="card-header" id="heading5">
            <button class=" collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
              <span>
                Question title?
              </span>
            </button>
          </div>

          <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionFAQ">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div> {{-- end collapse item --}}
      </div> {{-- end accordion --}}

      <br>

      <div class="text-right support-text">
        <p>
          Do you have more questions?

          <a href="#">
            Click here
          </a>

          and mail us.
        </p>
      </div>
    </div> {{-- end container --}}
  </section>

@endsection
