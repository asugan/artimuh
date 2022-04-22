<div class="container">
    <form method="post" action="{{ route('images.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="image">
            <label>
                <h4>Add image</h4>
            </label>
            <input type="file" class="form-control" required name="basimage">
            <input type="file" class="form-control" required name="image1">
            <input type="file" class="form-control" required name="image2">
            <input type="file" class="form-control" required name="image3">
            <input type="file" class="form-control" required name="image4">
            <input type="text" id="lname" name="baslik">
            <input type="text" id="lname" name="text">
        </div>

        <div class="post_button">
            <button type="submit" class="btn btn-success">Add</button>
        </div>
    </form>
</div>
