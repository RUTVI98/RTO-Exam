@foreach($signs as $index => $sign)
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card content-card traffic-sign-card">
            <div class="card-body">
                <div class="content-body card-border-none">
                    <span class="start-content start-number theme-color-fff text-center mx-sm-0 mx-auto">
                        {{ $loop->iteration + $offset }}
                    </span>
                    <div class="traffic-sign-image">
                        <img src="{{ asset('assets/image/ts-upload/ts-' . $sign->image) }}"
                             class="img-fluid mx-auto d-block">
                    </div>
                    <p class="traffic-signs-info fw-500 text-center theme-color-161616">
                        {{ $sign->title }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endforeach
