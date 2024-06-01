@foreach($carouselImages as $carouselImage)
    <img src="{{ asset($carouselImage->image) }}" alt="Carousel Image">
    <a href="{{ route('carousel-images.edit', $carouselImage->id) }}">Edit</a>
@endforeach
