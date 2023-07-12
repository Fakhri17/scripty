<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scripty</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body>
  <section class="bg-white">
		<div class="flex justify-center min-h-screen">
			<div class="relative hidden bg-cover lg:block lg:w-1/2" style="background-image: url('{{ Vite::asset('resources/images/cover-auth.png') }}')">
				<div class="absolute top-0 left-0 right-0 bg-black bg-opacity-70 h-full flex items-center">
					<div class="p-4 md:p-5">
						<h2 class="font-bold text-white">
							Welcome to <span class="text-main-color-2">Scripty</span>
						</h2>
						<p class="mt-5 text-white">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
						</p>
					</div>
				</div>
			</div>
      @yield('content')
			
		</div>
	</section>
 


  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>
</html>