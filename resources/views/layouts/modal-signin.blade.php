@if(!empty(Session::get('code')) && Session::get('code') == 2)
    <script>
        $(function() {
            $('#modalSignIn').modal('show');
        });
    </script>
@endif

<div class="modal fade" id="modalSignIn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content bg-black px-5">
            <div class="modal-header border-bottom border-secondary">
                <img src="img/Logo.png" alt="" height="40em">
                <p class="fw-bold pt-4">Sign In</p>
            </div>
            @if (Session::has('error'))
                <div class="alert alert-danger d-flex alert-dismissible mt-1">
                    <strong>{{ Session::get('error') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert alert-success d-flex alert-dismissible mt-1">
                    <strong>{{ Session::get('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <div class="my-3">
                    <label for="email" class="col-form-label fw-bold">E-mail</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror p-2 bg-dark border-0 text-light" name="email" id="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="col-form-label fw-bold">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror p-2 bg-dark border-0 text-light" name="password" id="password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 mt-4">
                    <input type="submit" class="btn btn-primary w-100 fw-bold p-2" value="Sign In">
                </div>
                </form>
                <div class="mb-3">
                    <p class="text-center">Belum punya akun? <a href="" data-bs-toggle="modal" data-bs-target="#modalRegister" class="fw-bold text-white">Daftar</a></p>
                </div>
        </div>
    </div>
</div>