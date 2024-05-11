<!DOCTYPE html>
<html lang="en">


@include('front.partials.head')


<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        @include('front.partials.spinner')
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            @include('front.partials.navbare')

           @yield('hero')

        </div>
        <!-- Navbar & Hero End -->


        @yield('content')
        <!-- About Start -->

        <!-- Team End -->

        @include('front.partials.footer')
        <!-- Footer Start -->


    @include('front.partials.scripts')
    <!-- JavaScript Libraries -->

</body>

</html>
