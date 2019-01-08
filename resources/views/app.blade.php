<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include ('_layouts.head')
    <body>
        <div id="app">
            @include ('_layouts.navigation')
            <main class="main-content">
                @yield ('content')
            </main>
            @include ('_layouts.footer')
        </div>
        @include ('_layouts.scripts')
    </body>
</html>
