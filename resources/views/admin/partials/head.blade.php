<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Ekka - Admin Dashboard eCommerce HTML Template.">

    <title>Ekka - Admin Dashboard eCommerce HTML Template.</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">

    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />


    <!-- No Extra plugin used -->
    <link href='{{asset('tadmin/assets/plugins/data-tables/datatables.bootstrap5.min.css')}}' rel='stylesheet'>
    <link href='{{asset('tadmin/assets/plugins/data-tables/responsive.datatables.min.css')}}' rel='stylesheet'>

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('tadmin/assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('tadmin/assets/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />

    <!-- Ekka CSS -->
    <link id="ekka-css" href="{{ asset('tadmin/assets/css/ekka.css') }}" rel="stylesheet" />

    <!-- FAVICON -->
    <link href="{{ asset('tadmin/assets/img/favicon.png') }}" rel="shortcut icon" />
    @stack('css')
</head>
