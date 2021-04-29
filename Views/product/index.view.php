<div class="container">
    <p>Products Index</p>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
        <?php foreach ($products as $product) { ?>

            <tr>
                <td><?=$product->id?></td>
                <td><?=$product->title?></td>
                <td><?=$product->description?></td>
            </tr>

        <?php } ?>
            </tbody>
        </table>
    </div>

    <p><a href="/product/create">Add new product</a></p>
</div>