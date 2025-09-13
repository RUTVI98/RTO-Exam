@foreach ($questions as $index => $q)
    @php $number = $offset + $index + 1; @endphp
    <div class="col-12 col-md-6 q-item">
        <div class="card content-card">
            <div class="card-body">
                <div class="content-body d-flex gap-2 align-items-center">
                    <span class="start-content text-center fw-700 start-number theme-color-fff">{{ $number }}</span>
                    <p class="fs-18px theme-color-54595f fw-300 mb-0">{{ $q->question }}</p>
                </div>
                <div class="content-body second-content d-flex gap-2 align-items-center">
                    <span class="start-content text-center start-alpha fs-18px">{{ __('questionbank.ans') }}</span>
                    <p class="fs-18px fw-300 theme-color-54595f mb-0">{{ $q->answer }}</p>
                </div>
            </div>
        </div>
    </div>
@endforeach
