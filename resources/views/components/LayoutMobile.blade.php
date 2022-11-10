<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="{{ asset('../../css/app.css') }}" rel="stylesheet">
    <title>HOC Mobile</title>
</head>

<body class="bg-[#FBFBFB] w-full h-screen">
    <div class="desktop3:hidden  desktop2:hidden  desktop:hidden laptop:hidden tablet:hidden">
        {{ $slot }}
    </div>
</body>

</html>
