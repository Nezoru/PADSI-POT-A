<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SIALDONG</title>
    @vite('resources/css/app.css')
</head>

<body class="w-full h-full">
    <!-- Kontainer utama yang membagi layar menjadi 2 kolom -->
    <div class="flex">
        <!-- Kolom Kiri: Sisi Logo Perusahaan -->
        <div class="lg:flex lg:w-1/2 items-center justify-center bg-white p-12">
            <img src="img/dingdong_logo.jpg" alt="SIALDONG" width="500" height="500" class="">
            <div class="w-full max-w-md flex flex-col items-center text-center">
                <!-- <h1 class="text-3xl font-bold text-gray-800">Nama Perusahaan Anda</h1> -->
            </div>
        </div>

        <!-- Kolom Kanan: Sisi Form Login -->
        <div class="flex-1 flex flex-col justify-center items-center bg-gray-100 px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <!-- Judul Form -->
                <div class="mt-10">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900">
                        Masuk ke akun Anda
                    </h2>
                    <p class="mt-2 text-sm text-gray-600">
                        Selamat datang kembali!
                    </p>
                </div>

                <!-- Form Login -->
                <div class="mt-8">
                    <form action="/login" method="POST" class="space-y-A6">
                        @csrf
                        <!-- Input Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">
                                Alamat email
                            </label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" required
                                    class="block w-full rounded-md border-0 py-2.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6
                                    @error('email') ring-red-500 @enderror"
                                    placeholder="anda@email.com" value="{{ old('email') }}">

                                @error('email')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <!-- Input Password -->
                        <div>
                            <div class="flex items-center justify-between">
                                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">
                                    Password
                                </label>

                                <!-- <div class="text-sm">
                                    <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">
                                        Lupa password?
                                    </a>
                                </div> -->
                            </div>
                            <div class="mt-2 relative">
                                <input id="password" name="password" type="password" required
                                    class="block w-full rounded-md border-0 py-2.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    placeholder="••••••••">
                            </div>
                        </div>
                        <!-- Tombol Submit -->
                        <div>
                            <button type="submit"
                                class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>