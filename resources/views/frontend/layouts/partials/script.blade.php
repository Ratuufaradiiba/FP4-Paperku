<!-- JS Plugins -->


<script src="{{ asset('landingpage/plugins/jQuery/jquery.min.js') }}"></script>

<script src="{{ asset('landingpage/plugins/bootstrap/bootstrap.min.js') }}"></script>

<script src="{{ asset('landingpage/plugins/slick/slick.min.js') }}"></script>

<script src="{{ asset('landingpage/plugins/instafeed/instafeed.min.js') }}"></script>

{{-- sweet alert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session('success'))
    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: '{{ session('success') }}',
            showConfirmButton: true,
            timer: 1500
        })
    </script>
@endif

<!-- Main Script -->
<script src="{{ asset('landingpage/js/script.js') }}"></script>
