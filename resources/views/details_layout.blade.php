<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{asset('coffeebucks/public/images/beans.png')}}" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#000",
                        },
                    },
                },
            };
        </script>
        <title>CoffeeBucks | Best Beans</title>
    </head>
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4">
            <a href="/coffeebucks/public/"
                ><img class="w-24" src="{{asset('coffeebucks/public/images/logo.png')}}" alt="" class="logo"
            /></a>
            <ul class="flex space-x-6 mr-6 text-lg">
                <li>
                    <a href="/coffeebucks/public/" class="hover:text-laravel"
                        ><i class="fa-solid"></i><b>Home</b></a
                    >
                </li>
            </ul>
        </nav>
        <main>
            @yield('content')
        </main>
        <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 md:justify-center">
            <p class="ml-2">Copyright &copy; 2023, All Rights Reserved</p>
            <a href="products/create" class="absolute top-1/3 right-10 bg-white text-black py-2 px-5"><b>Add Product</b></a>
        </footer>
        <x-success/>
    </body>
</html>
