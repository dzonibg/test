<div class="container">

    <h2><?=$product->title?></h2>
    <hr>
    <h4><?=$product->description?></h4>
    <img class="img-fluid" src="/storage/product/images/<?=$product->image?>">

    <hr>

    <div>
        <p>Comments:</p>

        <?php foreach ($comments as $comment) { ?>

            <p> <?=$comment->name?>: <?=$comment->body?> </p>

        <?php } ?>

        <div class="card">
            <div class="card-header">Write a comment</div>
            <div class="card-body">
                <form class="form-inline" action="/comment/store" method="POST">
                    <div class="input-group-text">
                        <input type="text" name="name" placeholder="Name" class="form-control mb-2 mr-sm-2">
                    </div>
                    <div class="input-group-text">
                        <input type="text" name="email" placeholder="E-mail" class="form-control mb-2 mr-sm-2">
                    </div>
                    <div class="input-group-text">
                        <input type="text" name="body" placeholder="Comment text" class="form-control mb-2 mr-sm-2">
                    </div>
                    <input type="hidden" name="product_id" value="<?=$product->id?>">
                    <button type="submit" class="btn btn-primary mb-2">Post a comment</button>
                </form>

            </div>
        </div>

    </div>

</div>