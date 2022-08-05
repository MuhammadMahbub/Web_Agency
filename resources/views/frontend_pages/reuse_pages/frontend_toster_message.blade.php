@section('custom_css')
    <link rel="stylesheet" href="{{asset('frontend_assets/css')}}/success_pop_up.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('dashboard_assets/app-assets/vendors/css/extensions/toastr.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('dashboard_assets/app-assets/css/plugins/extensions/ext-component-toastr.css') }}">
@endsection

@section('custom_js')

    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "3000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr.error('{{ $error }}');
            </script>
        @endforeach
    @endif

    @if (session()->get('error'))
        <script>
            toastr.error('{{ session()->get('error') }}');
        </script>
    @endif

    @if (session()->get('success'))
        <script>
            toastr.success('{{ session()->get('success') }}');
        </script>
    @endif

@endsection