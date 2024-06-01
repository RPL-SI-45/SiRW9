<!-- create.blade.php -->
<form action="{{ route('carousel-images.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" name="image" id="image" class="form-control-file">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
