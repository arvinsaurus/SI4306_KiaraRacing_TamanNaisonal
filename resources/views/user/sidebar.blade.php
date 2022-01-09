<div class="col-md-1">
    <div class="row mt-2">
        <div class="col-md-12">
            <a href="{{ route('user.booking-history') }}" class="text-white {{ (request()->is('user/booking-history*')) ? '' : 'text-muted' }}">Booking</a>
        </div>
    </div>
    <div class="row my-4">
        <div class="col-md-12">
            <a href="{{ route('user.donation-history') }}" class="text-white {{ (request()->is('user/donation-history*')) ? '' : 'text-muted' }}">Donasi</a>
        </div>
    </div>
</div>