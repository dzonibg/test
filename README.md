Hello to Citrus Systems team!

This is a small project done based on requirements from the PDF file received.

It features a small MVC router, similar to what I've built a year+ ago: https://github.com/dzonibg/mfwork

.htaccess on the root dir redirects everything to public/index.php which acts as an entry point to the app.
Later it's passed on from the Request class to Router to determine parameters for routing, and the data is then passed
to Director for finding the correct class and methods, along with arguments. Then the direct() method is called to
actually hit the HTTP route. It always calls a controller, which can request data from a model and then return a view
or a redirect (both are made as "helper" functions, there's a way to make a helper "class" and then call them as
static methods but this was a bit quicker).

DBQuery/base Model class is actually creating a PDO instance, having some methods that could prove useful not to
rewrite the code for multiple models. The idea is to pack as many of them in the base model and have clean code in
models usually just referencing to a tableName in the database. I chose not to go that route because I wasn't sure 
how much of it would be YAGNI code, so it's a bit more DRY if you look at the models themselves. My idea is better
presented in the mfwork repo and it's Model class (DBQuery.php).

The difference between this and mfwork (which I don't use because of =>) is that this follows PSR-4 autoloading. 
Since using autoloading isn't the same as "requiring" all classes, the code is written new to follow namespaces, 
class and method existion checks needed to be figured out, etc. Since I was a little bit short on time (holidays 
incoming) the controllers may look a bit cramped up.

For the admin checks, there's a million ways to do it. I used basic BCRYPT php functions to store them in the DB,
and after comparing them, just set a session variable (along with a few others for cosmetics). Then since there
were no requirements on users registering to eg. post comments, I added a gate instead of calling it authentication, 
because it's actually authorization - there's only one "role" so if you're authenticated, you're authorized.

I hope I didn't overcomplicate this, and must note one thing while doing it: the router shouldn't function this way.
An array with keys and values should be stored, where routes should be, it would be a lot cleaner and code
would be in proper controllers if needed. I thought I wouldn't dig this much into this project, but when I did, 
it was too late to change the routing system to meet the timeline. So "key => value" should really be the way to go.

Now, onto the task to set this up, as the PDF requires:

---

Requirements: PHP7, composer, Apache (we're using .htaccess), some DB management tool/or cli since there's an SQL dump, we're not using versioning for
DB or migrations.

Just do "composer dump-autoload -o" so it maps the App namespace to the folder since that's where the models and
controllers are - as set up in composer.json file.

Use the SQL dump via phpmyadmin or something else to create the DB structure.

Check /storage/product/images directory write permissions, since that's where they're stored on item/product creation.

A config.php file is there to set up DB parameters for PDO. Just edit it, there's no "example" files.

--- 

SQL dumps (a clean and a dirty one) will be in the "sql_dump" directory.