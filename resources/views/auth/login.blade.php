@extends('layouts.auth')


@section('content')
	<div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-1/2">
		<div class="w-full">
			<h1 class="font-bold text-center mb-5">Login</h1>
			<form class="grid grid-cols-1 px-5 md:px-20 gap-4">
				<div class="relative">
					<span class="absolute inset-y-4 left-0 flex items-center pl-3">
						<iconify-icon icon="octicon:person-24" class="text-3xl"></iconify-icon>
					</span>
					<input type="text" placeholder="NIM/Username"  class="w-full px-14 py-3 mt-2 input-auth rounded-lg" />
				</div>
				<div class="relative">
					<span class="absolute inset-y-4 left-0 flex items-center pl-3">
						<iconify-icon icon="gg:lock" class="text-3xl"></iconify-icon>
					</span>
					<input type="password" placeholder="Password"  class="w-full px-14 py-3 mt-2 input-auth rounded-lg" />
				</div>
				<p class="text-sm">Forgot Password ?</p>
				<button type="submit" class="px-6 py-3 text-sm text-white capitalize bg-main-color rounded-md hover:bg-red-900 ">
					<span>Login</span>
				</button>
				<p class="text-sm text-center">Don’t have an account? <a href="/register" class="text-main-color hover:underline">Register</a></p>
			</form>
		</div>
	</div>
@endsection
