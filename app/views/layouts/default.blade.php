@include('layouts.header')
    <section class="row center">

        <section class="col-lg-3">
            @yield('leftbar')
        </section>

        <section  id="content" class="col-lg-6">
            @yield('content')
        </section>

        <section class="col-lg-3">
            @yield('rightbar')
        </section>

    </section><!--.center-->
@include('layouts.footer')