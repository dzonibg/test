<div class="container">
    <p>Comments Index</p>
    <div><a href="/comment/unapproved">Approve Comments</a></div>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Product ID</th>
                <th>Name</th>
                <th>Body</th>
                <th>Approved?</th>
                <th>Approve</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($comments as $comment) { ?>

                <tr>
                    <td><?=$comment->id?></td>
                    <td><?=$comment->product_id?></td>
                    <td><?=$comment->name?></td>
                    <td><?=$comment->body?></td>
                    <td><?=$comment->is_approved?></td>
                    <td> <a href="/comment/approve/<?=$comment->id?>">Approve</a> </td>
                    <td> <a href="/comment/delete/<?=$comment->id?>">Delete</a> </td>
                </tr>

            <?php } ?>
            </tbody>
        </table>
    </div>

</div>