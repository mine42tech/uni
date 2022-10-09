<nav class="navbar navbar-expand-xl fixed-top">
    <div class="topo-info d-none">
        <div class="container">

            <div id="language">
                
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-globe-americas fa-sm mr-2"></i><span></span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item selected" href="#">Português</a>
                  <a class="dropdown-item" href="#">English</a>
                </div>
              </div>
       
        </div>
    </div>
    <div class="navbar-top-wrapper container">
        <a class="navbar-brand" href="{{ route('site.index.index') }}">
            <img src="/img/logo/logo.svg">
        </a>
        <div id="menu">
            <ul class="navbar-nav" id="">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('site.index.index') }}">
                        Home
                    </a>
                </li>
                
                <li class="nav-item {{ request()->is('sobre') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('site.pages.about') }}">
                        A Unitapajós
                    </a>
                </li>
                
                <li class="nav-item {{ request()->is('atuacao') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('site.pages.atuacao') }}">
                        Nossa atuação
                    </a>
                </li>
                
                <li class="nav-item {{ request()->is('seguranca') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('site.pages.seguranca') }}">
                        Segurança
                    </a>
                </li>

                 <li class="nav-item {{ request()->is('qualidade') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('site.pages.qualidade') }}">
                        Qualidade
                    </a>
                </li>

                 <li class="nav-item {{ request()->is('socioambiental') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('site.pages.socioambiental') }}">
                        Socioambiental
                    </a>
                </li>
                
                <li class="nav-item {{ request()->is('oportunidades') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('site.pages.oportunidade') }}">
                        Oportunidades
                    </a>
                </li>


                <li class="nav-item {{ request()->is('blog') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('site.blog.index') }}">
                        Notícias
                    </a>
                </li>

             {{--    <li class="nav-item {{ request()->is('contato') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('site.pages.contact') }}">
                        Contato
                    </a>
                </li> --}}

              {{--   <li class="nav-item search">
                    <a class="nav-link" href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </li> --}}

                {{--
        for contact form in home page, use this code!

        <li class="nav-item">
          <a class="nav-link" href="{{ (\Route::currentRouteName() == 'site.index.index') ? '#contato' : route('site.index.index', '#contato') }}">Contact</a>
                </li>
                --}}
            </ul>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <div class="menu-bar bar-1"></div>
            <div class="menu-bar bar-2"></div>
            <div class="menu-bar bar-3"></div>
        </button>
    </div> {{-- end container --}}
</nav>
