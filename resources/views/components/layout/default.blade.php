<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset='utf-8' />
	<meta http-equiv='X-UA-Compatible' content='IE=edge' />
	<title>{{ @config('app.name') . ($title ?? '') }}</title>
	<meta name='viewport' content='width=device-width, initial-scale=1' />
	<link rel="icon" type="image/x-icon" href="{{ asset('assets/images/megaspeed-favicon.png') }}" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
	@vite(['resources/css/app.css'])
	<script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>
	<script defer src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script defer src="{{ asset('assets/js/tippy-bundle.umd.min.js') }}"></script>
	<script defer src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
</head>
<body x-data="main" class="relative overflow-x-hidden text-sm antialiased font-normal font-nunito" :class="[$store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ?  'dark' : '', $store.app.menu, $store.app.layout, $store.app .rtlClass ]">
	<div x-cloak class="fixed inset-0 bg-[black]/60 z-50 lg:hidden" :class="{ 'hidden': !$store.app.sidebar }"
		@click="$store.app.toggleSidebar()"></div>
	{{-- <x-common.theme-customiser /> --}}
	<div class="min-h-screen text-black main-container dark:text-white-dark" :class="[$store.app.navbar]">
		<x-common.sidebar />
		<div class="flex flex-col min-h-screen main-content">
			<x-common.header />
			<div class="p-6 dvanimation animate__animated" :class="[$store.app.animation]">
				{{ $slot }}
			</div>
			<x-common.footer />
		</div>
	</div>
	<div class="fixed z-50 bottom-6 ltr:right-6 rtl:left-6" x-data="scrollToTop">
		<template x-if="showTopButton">
			<button type="button" class="btn btn-outline-primary rounded-full p-2 animate-pulse bg-[#fafafa] dark:bg-[#060818] dark:hover:bg-primary"
				@click="goToTop">
				<svg width="24" height="24" class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M12 20.75C12.4142 20.75 12.75 20.4142 12.75 20L12.75 10.75L11.25 10.75L11.25 20C11.25 20.4142 11.5858 20.75 12 20.75Z" fill="currentColor" />
					<path d="M6.00002 10.75C5.69667 10.75 5.4232 10.5673 5.30711 10.287C5.19103 10.0068 5.25519 9.68417 5.46969 9.46967L11.4697 3.46967C11.6103 3.32902 11.8011 3.25 12 3.25C12.1989 3.25 12.3897 3.32902 12.5304 3.46967L18.5304 9.46967C18.7449 9.68417 18.809 10.0068 18.6929 10.287C18.5768 10.5673 18.3034 10.75 18 10.75L6.00002 10.75Z" fill="currentColor" />
				</svg>
			</button>
		</template>
	</div>
	<script>
		document.addEventListener("alpine:init", () => {
			Alpine.data("scrollToTop", () => ({
				showTopButton: false,
				init() {
					window.onscroll = () => {
						this.scrollFunction();
					};
				},
				scrollFunction() {
					if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
						this.showTopButton = true;
					} else {
						this.showTopButton = false;
					}
				},
				goToTop() {
					document.body.scrollTop = 0;
					document.documentElement.scrollTop = 0;
				},
			}));
		});
	</script>
	<script src="{{ asset('assets/js/alpine-collaspe.min.js') }}"></script>
	<script src="{{ asset('assets/js/alpine-persist.min.js') }}"></script>
	<script defer src="{{ asset('assets/js/alpine-ui.min.js') }}"></script>
	<script defer src="{{ asset('assets/js/alpine-focus.min.js') }}"></script>
	<script defer src="{{ asset('assets/js/alpine.min.js') }}"></script>
	<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
