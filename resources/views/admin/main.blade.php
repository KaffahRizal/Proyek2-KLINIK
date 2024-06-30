<!DOCTYPE html>
<html lang="en">

@include('admin.partials._head')

  <body>
    <div class="wrapper">

        @include('admin.partials._sidebar')

      <div class="main-panel">

        @include('admin.partials._header')

        <div class="container">
          <div class="page-inner">

            @yield('content')

          </div>
        </div>

        @include('admin.partials._footer')

      </div>

    </div>

    @include('admin.partials._script')

  </body>
</html>