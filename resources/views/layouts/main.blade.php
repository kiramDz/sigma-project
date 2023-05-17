<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- TAILGRID -->
    <link rel="stylesheet" href="node_modules/tailgrids/assets/css/tailwind.css" />
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Onscroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <!-- Alpine js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ijo: '#C3E93A',
                    },
                },
            },
            plugins: [require('tailgrids/plugin')],
        };
    </script>
</head>

<body class='bg-black'>
    {{-- bertujuan untuk menyematkan jkode pada komponennavbar ke file ini --}}
    @include('components.navbar')

    {{-- untuk mewariskan bagian halaman ini ke anakannya yang nanti akan diakses menggunakan extend --}}
    @yield('content')

    @include('components.footer')

    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- SCRIPT -->
    <script src="/js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
