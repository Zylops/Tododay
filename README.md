# Tododay.
A todo app where you can register an account and create todos/delete them. I've been learning PHP and tried to make something. Took me around 3-4 hours, and was fun to finally see it work.

![Screenshot from the App](https://imgur.com/C4xGZCy.png)

# Host this on your end:
I used [XAMPP](https://www.apachefriends.org/index.html), so youll need to install that.
Copy the repo to a directory inside htdocs (usually C://XAMPP/htdocs), and setup the database as follows using phpmyadmin (usually on localhost/phpmyadmin):

### Users table:

| id | username | email         | password       |
|:--:|----------|---------------|----------------|
| 1  | test     | test@test.com | hashedpassword |

### Todos table:
| id | username | email         | password       |
|:--:|----------|---------------|----------------|
| 1  | test     | test@test.com | hashedpassword |

And you're good to go, make sure you've started Apache and MySQL in the XAMPP Control Panel.

![XAMPP Control Panel](https://imgur.com/GZtZ1BK.png)