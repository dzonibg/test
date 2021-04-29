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
        <a href="/<?=$page-1?>"><- Previous</a>    <a href="/<?=$page+1?>">Next -></a>
    </p>
    </div>

</div>