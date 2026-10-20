<!DOCTYPE html>
<html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>@yield('title') | SimplePOS</title><link rel="stylesheet" href="{{ asset('css/app.css') }}"></head>
<body><aside class="sidebar"><a class="brand" href="{{ route('home') }}"><span class="brand-mark">sp</span>SimplePOS<span class="brand-dot">.</span></a><div class="workspace-label">ACCOUNT WORKSPACE</div><nav aria-label="Main navigation">
@foreach (['home' => ['Home', '⌂'], 'customers.index' => ['Customer Accounts', '◎'], 'users.index' => ['User Accounts', '▦'], 'about' => ['About', 'ⓘ']] as $route => [$label, $icon])
<a href="{{ route($route) }}" @class(['nav-link', 'active' => request()->routeIs($route)]) @if(request()->routeIs($route)) aria-current="page" @endif><span class="nav-icon">{{ $icon }}</span>{{ $label }}</a>
@endforeach
</nav><div class="sidebar-bottom"><span class="small-mark">L</span><div><strong>Laravel foundations</strong><small>IT0049 · TFA5</small></div></div></aside>
<div class="main-shell"><header class="topbar"><span>Workspace <span class="breadcrumb">/</span> <strong>@yield('title')</strong></span><span class="environment"><i></i>Local workspace</span></header><main id="main-content">@yield('content')</main><footer><span>SimplePOS · Account workspace</span><span>Angelo Kacey N. Pineda <span class="breadcrumb">/</span> TW33</span></footer></div></body></html>
