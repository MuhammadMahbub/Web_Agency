@if ($all_service_data->count() > 0)
    @foreach ($all_service_data as $item)
        <div class="col-12 col-md-6 col-lg-4">
            <div class="vertical-item text-center">
                <div class="item-media">
                    <img src="{{ asset('uploads/images/service') }}/{{ $item->service_icon}}" alt="">
                </div>
                <div class="item-content">
                    <h6>
                        <a href="{{ route('single.service.details', $item->service_slug) }}">{{ $item->service_name }}</a>
                    </h6>

                    <p>
                        {{ \Str::limit($item->service_short_description, 100) }}
                    </p>
                </div>
            </div>
        </div>
    @endforeach
@endif
