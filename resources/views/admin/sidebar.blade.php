<div class="col-md-1">
    <div class="row mt-2">
        <div class="col-md-12">
            <a href="{{ route('admin.booking') }}" class="text-white {{ (request()->is('admin/booking*')) ? '' : 'text-muted' }}">Booking</a>
        </div>
    </div>
    <div class="row my-4">
        <div class="col-md-12">
            <a href="{{ route('admin.donation') }}" class="text-white {{ (request()->is('admin/donation*')) ? '' : 'text-muted' }}">Donasi</a>
        </div>
    </div>
    <div class="row my-4">
        <div class="col-md-12">
            <a href="{{ route('admin.news') }}" class="text-white {{ (request()->is('admin/news*')) ? '' : 'text-muted' }}">Berita</a>
        </div>
    </div>
</div>