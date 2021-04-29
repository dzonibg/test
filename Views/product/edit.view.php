<div class="container">

    <div class="card">
        <div class="card-header">
            Edit product #<?=$product->id?>
        </div>
        <div class="card-body">
            <h5 class="card-title">Edit data</h5>
            <p class="card-text">
            <form action="/product/update" method="POST">
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" name="title" class="form-control" value="<?=$product->title?>" required>
                </div>
                <div class="form-group">
                    <label for="name">Description</label>
                    <input type="text" name="description" class="form-control" value="<?=$product->description?>" required>
                </div>
                <input type="hidden" name="id" value="<?=$product->id?>">
                <button class="btn btn-primary" type="submit">Edit product</button>
            </form>


            </p>
        </div>
    </div>

</div>