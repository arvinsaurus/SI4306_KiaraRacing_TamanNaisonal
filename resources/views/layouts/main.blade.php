{{-- header --}}
@include('layouts/header')
{{-- end of header --}}
    
{{-- topbar --}}
@include('layouts/topbar')
{{-- end of topbar --}}

{{-- main content --}}
@yield('main-content')
{{-- end of main content --}}

{{-- modal Sign In --}}
@include('layouts/modal-signin')
{{-- End of modal Sign In --}}

{{-- modal Register --}}
@include('layouts/modal-register')
{{-- End of modal Register --}}

{{-- footer --}}
@include('layouts/footer')
{{-- end of footer --}}