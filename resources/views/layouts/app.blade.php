<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Escape Task</title>
    <link rel="icon" href="{!! asset('/img/escapeTask2.png') !!}"/>
    <link href='/css/app.css' rel="stylesheet" >
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"/>

</head>
<body class="font-Poppins">
    <div class="landing-bg">
        <div class="landing-wrapper ">
            {{-- Header --}}
            <header>
                @include('layouts.header')
            </header>

            {{-- Landing Card --}}
            <section>
                @include('components.hero')
            </section>
        </div>
    </div>
{{-- Features --}}
<section>
    @include('components.features')
</section>

{{-- Download  --}}
<section>
    @include('components.download')
</section>

{{--  Floating Card --}}
<section>
    @include('components.floatingCard')
</section>
@yield('content')

<footer>
    @include('layouts.footer')
</footer>





<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    offset: 180,
    duration:1000,
  });
</script>
</body>
</html>
