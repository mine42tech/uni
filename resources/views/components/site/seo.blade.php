@if(isset($post))

<meta name="title" content="{{$post->title}}">

<meta name="description" content="{{$post->description}}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">

<meta property="og:title" content="{{$post->title}}">

<meta property="og:image" content="{{route('imagem.render', 'posts/m/' . $post->image)}}">

<meta property="og:description" content="{{$post->description}}">

<meta property="og:url" content="{{url()->current()}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">

<meta property="twitter:url" content="{{url()->current()}}">

<meta property="twitter:title" content="{{$post->title}}">

<meta property="twitter:description" content="{{$post->description}}">

<meta property="twitter:image" content="{{route('imagem.render', 'posts/m/' . $post->image)}}">

<meta property="og:url" content="{{url()->current()}}">


{{-- @if ($currentPath == 'site.blog.movimento-proteger')

<meta name="title" content="Conclusão do Projeto “Movimento Proteger” em Barcarena-PA">

<meta name="description" content="Em janeiro, a área de Gestão Socioambiental da Unitapajós realizou a conclusão do projeto social “Movimento Proteger”. Ao todo 38 mulheres, de várias faixas etárias, receberam o certificado de participação no projeto de capacitação na produção de máscaras de tecido."> --}}

<!-- Open Graph / Facebook -->
{{-- <meta property="og:type" content="website">

<meta property="og:title" content="Conclusão do Projeto “Movimento Proteger” em Barcarena-PA">

<meta property="og:image" content="https://www.unitapajos.com.br/img/elements/noticias/movimento-proteger/img-1.jpg">

<meta property="og:description" content="Em janeiro, a área de Gestão Socioambiental da Unitapajós realizou a conclusão do projeto social “Movimento Proteger”. Ao todo 38 mulheres, de várias faixas etárias, receberam o certificado de participação no projeto de capacitação na produção de máscaras de tecido.">

<meta property="og:url" content="https://www.unitapajos.com.br/conclusao-movimento-proteger"> --}}

<!-- Twitter -->
{{-- <meta property="twitter:card" content="summary_large_image">

<meta property="twitter:url" content="https://www.unitapajos.com.br/conclusao-movimento-proteger">

<meta property="twitter:title" content="Conclusão do Projeto “Movimento Proteger” em Barcarena-PA">

<meta property="twitter:description" content="Em janeiro, a área de Gestão Socioambiental da Unitapajós realizou a conclusão do projeto social “Movimento Proteger”. Ao todo 38 mulheres, de várias faixas etárias, receberam o certificado de participação no projeto de capacitação na produção de máscaras de tecido.">

<meta property="twitter:image" content="https://www.unitapajos.com.br/img/elements/noticias/movimento-proteger/img-1.jpg"> --}}

{{-- <meta property="og:url" content="https://www.unitapajos.com.br/conclusao-movimento-proteger"> --}}

{{-- @elseif ($currentPath == 'site.blog.noticia-miritituba')

<meta name="title" content="ETC Miritituba comemora 1000 dias Sem Acidentes com Afastamento">
<meta name="description" content="A Estação de Transbordo de Carga (ETC) de Miritituba em Itaituba/PA completou na última sexta-feira (26) a importante marca de mil dias Sem Acidentes com Afastamento."> --}}

<!-- Open Graph / Facebook -->
{{-- <meta property="og:type" content="website">

<meta property="og:title" content="ETC Miritituba comemora 1000 dias Sem Acidentes com Afastamento">

<meta property="og:image" content="https://www.unitapajos.com.br/img/elements/noticias/noticia-miritituba-seo.jpg">

<meta property="og:description" content="A Estação de Transbordo de Carga (ETC) de Miritituba em Itaituba/PA completou na última sexta-feira (26) a importante marca de mil dias Sem Acidentes com Afastamento.">

<meta property="og:url" content="https://www.unitapajos.com.br/miritituba-1000-dias-sem-acidentes"> --}}

<!-- Twitter -->
{{-- <meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://www.unitapajos.com.br/miritituba-1000-dias-sem-acidentes">
<meta property="twitter:title" content="ETC Miritituba comemora 1000 dias Sem Acidentes com Afastamento">
<meta property="twitter:description" content="A Estação de Transbordo de Carga (ETC) de Miritituba em Itaituba/PA completou na última sexta-feira (26) a importante marca de mil dias Sem Acidentes com Afastamento.">
<meta property="twitter:image" content="https://www.unitapajos.com.br/img/elements/noticias/noticia-miritituba-seo.jpg">

@elseif ($currentPath == 'site.blog.noticia-recorde')

<meta name="title" content="Movimentação de grãos da Unitapajós quebra Cinco recordes operacionais">
<meta name="description" content="Cinco recordes operacionais foram quebrados simultaneamente na última quinta-feira (31), com o volume de soja em grãos movimentado nas operações da Unitapajós no corredor norte."> --}}

<!-- Open Graph / Facebook -->
{{-- <meta property="og:type" content="website">

<meta property="og:title" content="Movimentação de grãos da Unitapajós quebra Cinco recordes operacionais">

<meta property="og:image" content="https://www.unitapajos.com.br/img/elements/noticias/noticia-recorde-seo.png">

<meta property="og:description" content="Cinco recordes operacionais foram quebrados simultaneamente na última quinta-feira (31), com o volume de soja em grãos movimentado nas operações da Unitapajós no corredor norte.">

<meta property="og:url" content="https://www.unitapajos.com.br/unitapajos-quebra-cinco-recordes">
 --}}
<!-- Twitter -->
{{-- <meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://www.unitapajos.com.br/unitapajos-quebra-cinco-recordes">
<meta property="twitter:title" content="Movimentação de grãos da Unitapajós   quebra Cinco recordes operacionais">
<meta property="twitter:description" content="Cinco recordes operacionais foram quebrados simultaneamente na última quinta-feira (31), com o volume de soja em grãos movimentado nas operações da Unitapajós no corredor norte.">
<meta property="twitter:image" content="https://www.unitapajos.com.br/img/elements/noticias/noticia-recorde-seo.png"> --}}

@else

<meta property="og:title" content="Unitapajós">
<meta property="og:description" content="A Unitapajós é uma joint venture entre Amaggi e Bunge, que nasceu com a missão de contribuir para o desenvolvimento logístico do agronegócio brasileiro.">
<meta name="Description" content="A Unitapajós é uma joint venture entre Amaggi e Bunge, que nasceu com a missão de contribuir para o desenvolvimento logístico do agronegócio brasileiro.">
<meta property="og:image" content="https://www.unitapajos.com.br/img/logo/seo.jpg">
<meta property="og:image:type" content="image/png">
<meta name="twitter:title" content="Unitapajós">
<meta name="twitter:description" content="A Unitapajós é uma joint venture entre Amaggi e Bunge, que nasceu com a missão de contribuir para o desenvolvimento logístico do agronegócio brasileiro.">
<meta name="twitter:image" content="https://www.unitapajos.com.br/img/logo/seo.jpg">
<meta property="og:url" content="https://www.unitapajos.com.br/conclusao-movimento-proteger">
<meta name="twitter:image:alt" content="https://www.unitapajos.com.br">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Unitapajós">

<meta property="og:image:width" content="200">
<meta property="og:image:height" content="200">
{{-- twitter tags --}}
<meta name="twitter:card" content="summary">
@endif

<meta name="keywords" content="agronegócio brasileiro, unitapajos, joint venture, barcarena, pará, desenvolvimento logístico">




