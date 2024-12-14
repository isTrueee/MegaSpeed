<x-layout.auth>
	<div x-data="auth" class="bg-[#d7ebf5]">
		<div class="relative flex items-center justify-center min-h-screen sm:px-16">
			<div class="relative w-full max-w-[500px] rounded-md bg-[linear-gradient(45deg,#fff9f9_0%,rgba(255,255,255,0)_25%,rgba(255,255,255,0)_75%,_#fff9f9_100%)] p-2 dark:bg-[linear-gradient(52.22deg,#0E1726_0%,rgba(14,23,38,0)_18.66%,rgba(14,23,38,0)_51.04%,rgba(14,23,38,0)_80.07%,#0E1726_100%)]">
				<div class="relative flex flex-col justify-center rounded-md bg-white/60 backdrop-blur-lg dark:bg-black/50 px-6 lg:min-h-[400px] py-5">
					<div class="mx-auto w-full max-w-[440px]">
						<div className="flex justify-center mb-10">
							<img src="{{ asset('assets/images/megaspeed-logo.png') }}" alt="logo" />
						</div>
						<form class="py-5 mt-5 space-y-5 dark:text-white" @submit.prevent="window.location='/'">
							<div>
								<label for="Email">Email</label>
								<div class="relative text-white-dark">
									<input id="Email" type="email" placeholder="Enter Email" class="form-input ps-10 placeholder:text-white-dark" />
									<span class="absolute -translate-y-1/2 start-4 top-1/2">
										<svg width="18" height="18" viewBox="0 0 18 18" fill="none">
											<path opacity="0.5" d="M10.65 2.25H7.35C4.23873 2.25 2.6831 2.25 1.71655 3.23851C0.75 4.22703 0.75 5.81802 0.75 9C0.75 12.182 0.75 13.773 1.71655 14.7615C2.6831 15.75 4.23873 15.75 7.35 15.75H10.65C13.7613 15.75 15.3169 15.75 16.2835 14.7615C17.25 13.773 17.25 12.182 17.25 9C17.25 5.81802 17.25 4.22703 16.2835 3.23851C15.3169 2.25 13.7613 2.25 10.65 2.25Z" fill="currentColor" />
											<path d="M14.3465 6.02574C14.609 5.80698 14.6445 5.41681 14.4257 5.15429C14.207 4.89177 13.8168 4.8563 13.5543 5.07507L11.7732 6.55931C11.0035 7.20072 10.4691 7.6446 10.018 7.93476C9.58125 8.21564 9.28509 8.30993 9.00041 8.30993C8.71572 8.30993 8.41956 8.21564 7.98284 7.93476C7.53168 7.6446 6.9973 7.20072 6.22761 6.55931L4.44652 5.07507C4.184 4.8563 3.79384 4.89177 3.57507 5.15429C3.3563 5.41681 3.39177 5.80698 3.65429 6.02574L5.4664 7.53583C6.19764 8.14522 6.79033 8.63914 7.31343 8.97558C7.85834 9.32604 8.38902 9.54743 9.00041 9.54743C9.6118 9.54743 10.1425 9.32604 10.6874 8.97558C11.2105 8.63914 11.8032 8.14522 12.5344 7.53582L14.3465 6.02574Z" fill="currentColor" />
										</svg>
									</span>
								</div>
							</div>
							<div>
								<label for="Password">Password</label>
								<div class="relative text-white-dark">
									<input id="Password" type="password" placeholder="Enter Password" class="pl-10 pr-11 form-input placeholder:text-white-dark" />
									<span class="absolute -translate-y-1/2 start-4 top-1/2">
										<svg width="18" height="18" viewBox="0 0 18 18" fill="none">
											<path opacity="0.5" d="M1.5 12C1.5 9.87868 1.5 8.81802 2.15901 8.15901C2.81802 7.5 3.87868 7.5 6 7.5H12C14.1213 7.5 15.182 7.5 15.841 8.15901C16.5 8.81802 16.5 9.87868 16.5 12C16.5 14.1213 16.5 15.182 15.841 15.841C15.182 16.5 14.1213 16.5 12 16.5H6C3.87868 16.5 2.81802 16.5 2.15901 15.841C1.5 15.182 1.5 14.1213 1.5 12Z" fill="currentColor" />
											<path d="M6 12.75C6.41421 12.75 6.75 12.4142 6.75 12C6.75 11.5858 6.41421 11.25 6 11.25C5.58579 11.25 5.25 11.5858 5.25 12C5.25 12.4142 5.58579 12.75 6 12.75Z" fill="currentColor" />
											<path d="M9 12.75C9.41421 12.75 9.75 12.4142 9.75 12C9.75 11.5858 9.41421 11.25 9 11.25C8.58579 11.25 8.25 11.5858 8.25 12C8.25 12.4142 8.58579 12.75 9 12.75Z" fill="currentColor" />
											<path d="M12.75 12C12.75 12.4142 12.4142 12.75 12 12.75C11.5858 12.75 11.25 12.4142 11.25 12C11.25 11.5858 11.5858 11.25 12 11.25C12.4142 11.25 12.75 11.5858 12.75 12Z" fill="currentColor" />
											<path d="M5.0625 6C5.0625 3.82538 6.82538 2.0625 9 2.0625C11.1746 2.0625 12.9375 3.82538 12.9375 6V7.50268C13.363 7.50665 13.7351 7.51651 14.0625 7.54096V6C14.0625 3.20406 11.7959 0.9375 9 0.9375C6.20406 0.9375 3.9375 3.20406 3.9375 6V7.54096C4.26488 7.51651 4.63698 7.50665 5.0625 7.50268V6Z" fill="currentColor" />
										</svg>
									</span>
									<span class="absolute -translate-y-1/2 cursor-pointer end-4 top-1/2" @click="togglePasswordVisibility()">
										<svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
											<path fill="currentColor" d="M2 12c0 1.64.425 2.191 1.275 3.296C4.972 17.5 7.818 20 12 20c4.182 0 7.028-2.5 8.725-4.704C21.575 14.192 22 13.639 22 12c0-1.64-.425-2.191-1.275-3.296C19.028 6.5 16.182 4 12 4 7.818 4 4.972 6.5 3.275 8.704 2.425 9.81 2 10.361 2 12Z" opacity=".5"/>
											<path fill="currentColor" fill-rule="evenodd" d="M8.25 12a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0Zm1.5 0a2.25 2.25 0 1 1 4.5 0 2.25 2.25 0 0 1-4.5 0Z" clip-rule="evenodd"/>
										</svg>													
									</span>
									<span class="absolute mt-1 -translate-y-1/2 cursor-pointer end-4 top-1/2" @click="togglePasswordVisibility()">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
											<path x-show="showPassword" fill="currentColor" fill-rule="evenodd" d="M22.295 6.31a.75.75 0 0 1 .394.986L22 7l.69.296v.001l-.002.003-.003.007-.01.024-.039.084a13.858 13.858 0 0 1-.727 1.321 15.053 15.053 0 0 1-1.846 2.394l.968.969a.75.75 0 0 1-1.06 1.06l-1.001-1a11.548 11.548 0 0 1-2.274 1.497l.934 1.435a.75.75 0 1 1-1.258.818l-1.089-1.674c-.78.255-1.623.428-2.532.49V16.5a.75.75 0 0 1-1.5 0v-1.775a10.46 10.46 0 0 1-2.46-.466l-1.074 1.65a.75.75 0 1 1-1.258-.818l.913-1.402a11.503 11.503 0 0 1-2.293-1.49l-.96.96a.75.75 0 0 1-1.061-1.06l.924-.924A15.03 15.03 0 0 1 1.514 7.72a9.524 9.524 0 0 1-.188-.388l-.01-.025-.004-.007v-.003H1.31L2 7l-.69.296a.75.75 0 0 1 1.379-.592v.002l.007.014.029.063a12.39 12.39 0 0 0 .65 1.177c.475.76 1.197 1.747 2.18 2.662.867.805 1.928 1.546 3.197 2.034A8.97 8.97 0 0 0 12 13.25a8.963 8.963 0 0 0 3.312-.619c1.262-.497 2.316-1.243 3.175-2.049a13.303 13.303 0 0 0 2.789-3.8l.028-.063.006-.013v-.001m.985-.394a.75.75 0 0 0-.984.394l.984-.394ZM2.69 6.704Z" clip-rule="evenodd"/>
										</svg>				
									</span>
								</div>
							</div>
							<button type="submit" class="btn btn-gradient !mt-6 w-full border-0 uppercase shadow-[0_10px_20px_-10px_rgba(67,97,238,0.44)]"> Sign in </button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		document.addEventListener("alpine:init", () => {
			Alpine.data("auth", () => ({
				showPassword: false,
				togglePasswordVisibility() {
					this.showPassword = !this.showPassword;
					const passwordInput = document.getElementById("Password");
					passwordInput.type = this.showPassword ? "text" : "password";
				},
			}));
		});
	</script>
</x-layout.auth>

