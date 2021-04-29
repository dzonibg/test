<div class="container">

    <p>We're a Citrus selling company. Growing fast. Take our lemon, make a lemonade.</p>

    <div class="row">
    <?php foreach ($products as $product) { ?>
                <div class="col-sm-4">
                     <div class="card">
                        <div class="card-header"><?=$product->title?></div>
                         <div class="card-body">
                             <img class="img-fluid" src="/storage/product/images/<?=$product->image?>">
                             <p><?=$product->description?></p>
                         </div>
                     </div>
                 </div>

    <?php } ?>
    </div>

    <div class="text-center">
    <p>
        <a href="/product/list/<?=$page-1?>"><- Previous</a>    <a href="/product/list/<?=$page+1?>">Next -></a>
    </p>
    </div>

    <div>

        <div>
            <?php var_dump($comments) ?>
        </div>



        <div class="card">
            <div class="card-header">Write a comment</div>
            <div class="card-body">
                Form for comment creation.
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
                    <input type="hidden" name="product_id" value="0">
                    <button type="submit" class="btn btn-primary mb-2">Post a comment</button>
                </form>

            </div>
        </div>

    </div>

</div>