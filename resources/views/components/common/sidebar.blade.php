<div :class="{ 'dark text-white-dark': $store.app.semidark }">
	<nav x-data="sidebar" class="sidebar fixed min-h-screen h-full top-0 bottom-0 w-[260px] shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] z-50 transition-all duration-300">
		<div class="bg-white dark:bg-[#0e1726] h-full">
			<div class="flex items-center justify-between px-4 py-3">
				<a href="/" class="flex items-center main-logo shrink-0">
					<img class="w-8 ml-[5px] flex-none" src="{{ asset('assets/images/megaspeed-favicon.png') }}"
							alt="image" />
					<span class="hidden ml-0 text-2xl font-bold align-middle transition-all duration-300 md:inline text-gradient">MegaSpeed</span>
				</a>
				<a href="javascript:;" class="flex items-center w-8 h-8 transition duration-300 rounded-full collapse-icon hover:bg-gray-500/10 dark:hover:bg-dark-light/10 dark:text-white-light rtl:rotate-180" @click="$store.app.toggleSidebar()">
					<svg class="w-5 h-5 m-auto" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						<path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor" troke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</a>
			</div>
			<ul class="perfect-scrollbar relative font-semibold space-y-0.5 h-[calc(100vh-80px)] overflow-y-auto overflow-x-hidden  p-4 py-0" x-data="{ activeDropdown: null }">
				<li class="menu nav-item">
					<a href="/" class="nav-link group">
						<div class="flex items-center">
							<svg class="group-hover:!text-primary shrink-0" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.5" d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z" fill="currentColor" />
								<path d="M9 17.25C8.58579 17.25 8.25 17.5858 8.25 18C8.25 18.4142 8.58579 18.75 9 18.75H15C15.4142 18.75 15.75 18.4142 15.75 18C15.75 17.5858 15.4142 17.25 15 17.25H9Z" fill="currentColor" />
							</svg>
							<span class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Dashboard</span>
						</div>
					</a>
				</li>
				<li class="menu nav-item">
					<a href="/projects" class="nav-link group">
						<div class="flex items-center">
							<svg class="group-hover:!text-primary shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
								<path fill="currentColor" fill-rule="evenodd" d="M14 22h-4c-3.771 0-5.657 0-6.828-1.172C2 19.657 2 17.771 2 14v-4c0-3.771 0-5.657 1.172-6.828C4.343 2 6.239 2 10.03 2c.606 0 1.091 0 1.5.017-.013.08-.02.161-.02.244l-.01 2.834c0 1.097 0 2.067.105 2.848.114.847.375 1.694 1.067 2.386.69.69 1.538.952 2.385 1.066.781.105 1.751.105 2.848.105h4.052c.043.534.043 1.19.043 2.063V14c0 3.771 0 5.657-1.172 6.828C19.657 22 17.771 22 14 22Z" clip-rule="evenodd" opacity=".5"/>
								<path fill="currentColor" d="M6 13.75a.75.75 0 0 0 0 1.5h8a.75.75 0 0 0 0-1.5H6Zm0 3.5a.75.75 0 0 0 0 1.5h5.5a.75.75 0 0 0 0-1.5H6Zm5.51-14.99-.01 2.835c0 1.097 0 2.066.105 2.848.114.847.375 1.694 1.067 2.385.69.691 1.538.953 2.385 1.067.781.105 1.751.105 2.848.105h4.052c.013.155.022.321.028.5H22c0-.268 0-.402-.01-.56a5.322 5.322 0 0 0-.958-2.641c-.094-.128-.158-.204-.285-.357C19.954 7.494 18.91 6.312 18 5.5c-.81-.724-1.921-1.515-2.89-2.162-.832-.555-1.248-.833-1.819-1.04a5.488 5.488 0 0 0-.506-.153c-.384-.095-.758-.128-1.285-.14l.01.255Z"/>
							</svg>																			
							<span class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Projects</span>
						</div>
					</a>
				</li>
				<li class="menu nav-item">
					<a href="/inventory" class="nav-link group">
						<div class="flex items-center">
							<svg class="group-hover:!text-primary shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
								<path fill="currentColor" d="M2 6.21c0-1.984 0-2.977.659-3.593C3.318 2 4.379 2 6.5 2c2.121 0 3.182 0 3.841.617C11 3.233 11 4.226 11 6.21v11.58c0 1.984 0 2.977-.659 3.593C9.682 22 8.621 22 6.5 22c-2.121 0-3.182 0-3.841-.617C2 20.767 2 19.774 2 17.79V6.21Z" opacity=".5"/>
								<path fill="currentColor" d="M13 15.4c0-2.074 0-3.111.659-3.756C14.318 11 15.379 11 17.5 11c2.121 0 3.182 0 3.841.644C22 12.29 22 13.326 22 15.4v2.2c0 2.074 0 3.111-.659 3.756-.659.644-1.72.644-3.841.644-2.121 0-3.182 0-3.841-.644C13 20.71 13 19.674 13 17.6v-2.2Zm0-9.9c0-1.087 0-1.63.171-2.06a2.293 2.293 0 0 1 1.218-1.262C14.802 2 15.327 2 16.375 2h2.25c1.048 0 1.573 0 1.986.178.551.236.99.69 1.218 1.262.171.43.171.973.171 2.06 0 1.087 0 1.63-.171 2.06a2.293 2.293 0 0 1-1.218 1.262C20.198 9 19.673 9 18.625 9h-2.25c-1.048 0-1.573 0-1.986-.178a2.293 2.293 0 0 1-1.218-1.262C13 7.13 13 6.587 13 5.5Z"/>
							</svg>							
							<span class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Inventory</span>
						</div>
					</a>
				</li>
				<li class="menu nav-item">
					<a href="/users" class="nav-link group">
						<div class="flex items-center">
							<svg class="group-hover:!text-primary shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
								<circle cx="12" cy="6" r="4" fill="currentColor"/>
								<ellipse cx="12" cy="17" fill="currentColor" opacity=".5" rx="7" ry="4"/>
							</svg>	
							<span class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Users</span>
						</div>
					</a>
				</li>
				<li class="menu nav-item">
					<a href="/user-roles" class="nav-link group">
						<div class="flex items-center">
							<svg class="group-hover:!text-primary shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
								<circle cx="15" cy="6" r="3" fill="currentColor" opacity=".5"/>
								<ellipse cx="16" cy="17" fill="currentColor" opacity=".5" rx="5" ry="3"/>
								<circle cx="9.001" cy="6" r="4" fill="currentColor"/>
								<ellipse cx="9.001" cy="17.001" fill="currentColor" rx="7" ry="4"/>
							</svg>
							<span class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">User Roles</span>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</nav>
</div>
<script>
	document.addEventListener("alpine:init", () => {
		Alpine.data("sidebar", () => ({
			init() {
				const selector = document.querySelector('.sidebar ul a[href="' + window.location.pathname + '"]');
				if (selector) {
					selector.classList.add('active');
					const ul = selector.closest('ul.sub-menu');
					if (ul) {
						let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
						if (ele) {
							ele = ele[0];
							setTimeout(() => {
								ele.click();
							});
						}
					}
				}
			},
		}));
	});
</script>
