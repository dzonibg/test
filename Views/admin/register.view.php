<div class="container">

    <div class="card">
        <div class="card-header">
            Create an admin account
        </div>
        <div class="card-body">
            <h5 class="card-title">Please fill the form below.</h5>
            <p class="card-text">
            <form action="/admin/create" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">E-mail</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button class="btn btn-primary" type="submit">Create account!</button>
            </form>


            </p>
        </div>
    </div>

</div>