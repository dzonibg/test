<div class="container">

    <div class="card">
        <div class="card-header">
            Add new product
        </div>
        <div class="card-body">
            <h5 class="card-title">Please enter the new citrus details.</h5>
            <p class="card-text">
            <form action="/product/store" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Description</label>
                    <input type="text" name="description" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="image">Product image</label>
                    <input type="file" class="form-control-file" name="image" id="image">
                </div>

                <button class="btn btn-primary" type="submit">Add new product</button>
            </form>


            </p>
        </div>
    </div>

</div>