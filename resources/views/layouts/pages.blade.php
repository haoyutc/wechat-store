<!--

     __   __   __  _________  __   __   __  __       __         _________   __          __
    / /  / /  / / / _______/ / /  / /  / / / /      / /        / _______/  / /         / /
   / /  / /  / / / /______  / /  / /  / /   / /    / /        / /         / / / /     / /
  / /  / /  / / / /______/ / /  / /  / /     / // /          / /         / /   / /   / /
 / /__/ /__/ / / /_______ / /__/ /__/ /   / /    / /    __  / /_______  / /     / / / /
 \__________/  \________/ \__________/   /_/      /_/  /_/ /_________/ /_/         /_/
 __________________________________________________________________________________________
                                                                                    wewx.cn
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="baidu-site-verification" content="nhaOUVIFwL" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>@section('title')@show- 微信小程序商店 - Powered by WxStore </title>
    <meta name="keywords" content="@section('keywords') @show wxstore,微信小程序,微信小程序商店,微信小程序导航,微信小程序应用商店,小程序应用商店,微信小程序应用市场,小程序应用市场,微信,小程序,微信小程序发布平台,小程序排行榜,市场,商店,导航,排行榜" />
    <meta name="author" content="WxStore" />
    <meta name="description" content="@section('description')WX小程序，微信小程序商店。订阅小程序开发资讯，第一时间体验最新最好的微信小程序。这里也是小程序发布平台，您可以在这里发布您的小程序，让你的小程序无人不知。@show" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ cdn(elixir('css/app.css')) }}">
    <link href="{{ cdn('vendor/messenger/css/messenger.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ cdn('vendor/messenger/css/messenger-theme-flat.css') }}" type="text/css" rel="stylesheet" />

    @yield('styles')

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

<div id="app">

    @include('widgets.browsoer_type_tag_start')

        @include('layouts.partials.header')

        @yield('content')

        @include('layouts.partials.footer')

    @include('widgets.browsoer_type_tag_end')

</div>

@include('layouts.partials.script')
@include('flash::message')

</body>
</html>
