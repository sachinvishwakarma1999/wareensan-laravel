@include('layouts.header')

<!-- Content -->
<section class="container-fluid">
    <div class="row">
        <div class="page-body w-100">
            <div class="d-flex flex-wrap">
                <!-- Sidebar -->
                	@guest

                    @else
                    	@include('layouts.sidebar')
                    @endguest
                <!-- / Sidebar -->

                <div class="page-right-body">
                    <div class="page-right-header">
                        @yield('content_header')
                    </div>
                    <div class="page-right-body-content">
 						@yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Content -->
@include('layouts.footer')
