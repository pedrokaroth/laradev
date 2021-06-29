<!doctype html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraDev - @yield('title') </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @hasSection('css')
        @yield('css')
    @endif
</head>
<body>
@include('front.include.header')

<div class="container py-3">
    <div class="row">
        <div class="col-8">
            @yield('content')
        </div>
        <div class="col-4">
            @section('sidebar')
                <h3>[MASTER] Sidebar do Master</h3>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, omnis?</li>
                    <li>Accusamus, accusantium blanditiis dicta nam non qui reprehenderit vero voluptate!</li>
                    <li>Architecto, consectetur cumque harum ipsum mollitia nemo nulla quae reprehenderit.</li>
                    <li>Alias asperiores consequuntur cumque fugiat magni nesciunt obcaecati optio, similique?</li>
                    <li>Deserunt distinctio impedit numquam sunt! Illum labore laboriosam quo tempore?</li>
                </ul>
            @show
        </div>
    </div>
</div>

@include('front.include.footer')

<script src=" {{ asset('js/app.js') }}"></script>
@hasSection('js')
    @yield('js')
@endif
</body>
</html>
