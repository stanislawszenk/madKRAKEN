{{-- sponsors block --}}
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
    <div class="sponsors_princ">Our Sponsors</div>
    @foreach($sponsors as $sponsor)
        <a href="{{ $sponsor->link }}" target="_blank">
            <div class="col-xs-12 col-md-3 sponsors">
                <img src="{{ $sponsor->images }}" alt="{{ $sponsor->name }}" class="img-responsive">
            </div>
        </a>
    @endforeach
</div>
