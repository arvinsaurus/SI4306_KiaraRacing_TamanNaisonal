@if(!empty(Session::get('code')) && Session::get('code') == 1)
    <script>
        $(function() {
            $('#modalRegister').modal('show');
        });
    </script>
@endif

<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content bg-black px-5">
            <div class="modal-header border-bottom border-secondary">
                <img src="img/Logo.png" alt="" height="40em">
                <p class="fw-bold pt-4">Daftar</p>
            </div>
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <div class="my-3">
                    <label for="nama" class="col-form-label fw-bold">Nama</label>
                    <input type="text" style="height: auto;" class="form-control @error('nama') is-invalid @enderror bg-dark border-0 p-2 text-light" name="nama" id="nama">
                    @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <input type="hidden" name="level" value="user">
                <div class="mb-3">
                    <label for="email" class="col-form-label fw-bold">E-mail</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror p-2 bg-dark border-0 text-light" name="email" id="email">
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
                <div class="mb-3">
                    <label for="password_confirmation" class="col-form-label fw-bold">Ketik ulang password</label>
                    <input type="password" class="form-control p-2 bg-dark border-0 text-light" name="password_confirmation" id="password_confirmation">
                </div>
                <div class="mb-3 mt-4">
                    <input type="submit" class="btn btn-primary w-100 fw-bold p-2" value="Daftar">
                </div>
            </form>
            <div class="mb-3">
                <p class="text-center">Sudah punya akun? <a href="" data-bs-toggle="modal" data-bs-target="#modalSignIn" class="fw-bold text-white">Sign In</a></p>
            </div>
        </div>
    </div>
</div>