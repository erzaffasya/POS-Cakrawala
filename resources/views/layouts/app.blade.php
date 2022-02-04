<!DOCTYPE html>
<html lang="en" dir="ltr">

@include('admin.partials.head')

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">

    <!--  WRAPPER  -->
    <div class="wrapper">

        @include('admin.partials.sidebar')

        <!--  PAGE WRAPPER -->
        <div class="ec-page-wrapper">

            @include('admin.partials.navbar')

            <!-- CONTENT WRAPPER -->
            <div class="ec-content-wrapper">
                <div class="content">
                    {{ $slot }}
                </div>
            </div>

           @include('admin.partials.footer')

        </div> <!-- End Page Wrapper -->
    </div> <!-- End Wrapper -->

    @include('admin.partials.scripts')
</body>

</html>
