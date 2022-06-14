# Tododay.
A todo app where you can register an account and create todos/delete them. I've been learning PHP and tried to make something. Took me around 3-4 hours, and was fun to finally see it work.

![Screenshot from the App](https://imgur.com/C4xGZCy.png)

# Host this on your end:
I used [XAMPP](https://www.apachefriends.org/index.html), so youll need to install that. `git clone` the repo to a directory inside htdocs (usually located in C://XAMPP/htdocs), and setup the database (name it tododb or change its name in `config/connectDatabase.php`) as follows using phpmyadmin (usually on localhost/phpmyadmin):

### users table:

| id | username | email         | password       |
|:--:|----------|---------------|----------------|
| 1  | test     | test@test.com | hashedpassword |

### todos table:
| id | todo            | userid |
|:--:|-----------------|--------|
| 1  | This is a todo! | 1      |

And you're good to go, make sure you've started Apache and MySQL in the XAMPP Control Panel.

![XAMPP Control Panel](https://imgur.com/GZtZ1BK.png)
