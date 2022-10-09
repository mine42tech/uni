<!DOCTYPE html>
<html lang="pt-br" style="font-size: 10px;">
<head>
	@component('components.site.head')
	@endcomponent
</head>

<body>
	<header>
		@component('components.site.header-complex')
		@endcomponent
	</header>

	<main id="top">
		@yield('content')
	</main>

	<footer>
		@component('components.site.footer')
		@endcomponent
	</footer>

	@component('components.site.modals')
	@endcomponent

	@component('components.site.scripts')
  @endcomponent
</body>
</html>
