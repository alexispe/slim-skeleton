# SLIM-SKELETON

[![N|Solid](https://i.imgur.com/i7CZ4qC.png)](http://alexis-petit.fr)

Skeleton for [Slim framework](https://www.slimframework.com/) ! Easy to install

# Features!

  - Controllers
  - Middlewares
  - Routes
  - Slim-pdo
  - Twig (views)
  - Cache

# Directory tree
  app  
  |- Controllers  
  &nbsp;&nbsp;&nbsp;|- Controller.php (the main controller)  
  &nbsp;&nbsp;&nbsp;|- UserController.php (user controller example)  
  |- Middlewares  
  &nbsp;&nbsp;&nbsp;|- FlashMiddleware.php (errors display)  
  |- views  
  &nbsp;&nbsp;&nbsp;|- error  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|- 404.twig (404 error page)  
  &nbsp;&nbsp;&nbsp;|- user  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|- create.twig  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|- list.twig  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|- update.twig  
  &nbsp;&nbsp;&nbsp;|- layout.frontend.twig (main layout)  
  |- install  
  &nbsp;&nbsp;&nbsp;|- init.json (mysql database access)  
  public  
  |- css  
  |- fonts  
  |- img  
  |- js  
  |- index.php (ENTRY POINT)  
  tmp  
  |- cache  

# Installation

```sh
$ git clone https://github.com/alexispe/slim-skeleton.git
$ cd slim-skeleton
$ php composer install
```
1. After install set write permissions on `/tmp/cache` -- create folder if not exist.

2. Create database and user whiwh have access.
Update `/app/install/init.json` with our database access. Set init to true and save.

Installation done.

# You need help ?
If you have problems on installation please contact me at *contact@alexis-petit.fr* and I will try to help you.

# I need help !
I'm french developper, correct my english please.

Made with :heart: by @alexispe [alexis-petit.fr](http://www.alexis-petit.fr)
