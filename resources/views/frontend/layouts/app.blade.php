<!DOCTYPE html>
<html lang="en-us">

<head>
    @include('frontend.layouts.partials.head')
</head>

<body>
    <!-- navigation -->
    @include('frontend.layouts.partials.navbar')
    <!-- /navigation -->

    @yield('content')

    @include('frontend.layouts.partials.footer')

    @include('frontend.layouts.partials.script')
    <script>
        $('body').on('click', '.btnDelete', function(e) {
            e.preventDefault();
            var action = $(this).data('action');
            Swal.fire({
                title: 'Yakin ingin menghapus data ini?',
                text: "Data yang sudah dihapus tidak bisa dikembalikan lagi",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Yakin'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#formDelete').attr('action', action);
                    $('#formDelete').submit();
                }
            })
        })
    </script>
</body>

</html>
