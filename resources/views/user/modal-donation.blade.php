    {{-- <script>
        $(function() {
            $('#modalDonasi').modal('show');
        });
    </script>

@foreach ($donasi as $d)
<div class="modal fade" id="modalDonasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content bg-black px-5">
            <div class="modal-header">
                <img src="img/Logo.png" alt="" height="40em">
                <p class="fw-bold pt-4">Detail Donasi</p>
            </div>
            <div class="container my-5">
                <div class="row mb-5">
                    <div class="col-12 text-white-50">
                        Nama
                    </div>
                    <div class="col-12 text-white">
                        {{ Auth::user()->nama }}
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-6">
                        <div class="col-12 text-white-50">
                            ID
                        </div>
                        <div class="col-12 text-white">
                            {{ $d->id }}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="col-12 text-white-50">
                            Status
                        </div>
                        <div class="col-12 text-white">
                            {{ $d->status }}
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-6">
                        <div class="col-12 text-white-50">
                            Tanggal
                        </div>
                        <div class="col-12 text-white">
                            {{ $d->created_at->formmat('d/m/Y') }}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="col-12 text-white-50">
                            Jumlah Donasi
                        </div>
                        <div class="col-12 text-white">
                            Rp. {{ $d->nominal }}
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <input type="submit" class="btn btn-secondary w-100 py-2" value="Close" data-bs-dismiss="modal" aria-label="Close">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach --}}