<form action="{{ route('carousel-images.update', $carouselImage->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" name="image" id="image" class="form-control-file">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
