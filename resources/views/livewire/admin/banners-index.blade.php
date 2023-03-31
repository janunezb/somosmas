<div>
    @push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
        
    @endpush
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($banners as $banner)
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $loop->index }}"
                    class="@if ($loop->index == 0) active @endif" aria-current="true"
                    aria-label="Slide {{ $banner->id }}"></button>
            @endforeach
        </div>


        <div class="carousel-inner">
            @foreach ($banners as $banner)
                <div class="carousel-item @if ($loop->index == 0) active @endif" data-bs-interval="4000">
                    <img src="../images/banners/{{ $banner->ruta }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!--h5 style="color: black">{{ $banner->nombre }}</h5>
                                        <p style="color : black">
                                        {{ $banner->titulo }}
                                        </p-->
                    </div>
                </div>
            @endforeach
        </div>


        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {});
    </script>
    
@endpush
    
</div>
