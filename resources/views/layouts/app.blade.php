<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    @php(do_action('get_header'))
    @php(wp_head())
  </head>

  <body @php(body_class('is-preload'))>
    @php(wp_body_open())

    <div id="wrapper">
      <a class="sr-only focus:not-sr-only" href="#main">
        {{ __('Skip to content') }}
      </a>

      @include('sections.header')

      <main id="main" class="main">
        @yield('content')
      </main>

      @hasSection('sidebar')
        @yield('sidebar')
      @endif

      @include('sections.footer')
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>
