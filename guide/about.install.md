# Installation

To install Kohanut, follow these instructions:

## Installing using the zip

1. Download the [latest zip file](http://kohanut.com/download).

2. Extract the zip file, so the `index.php` file is in the root (or in a subfolder if you know what you are doing).

3. We need to make the `application/logs` and `application/cache` folders writable, Using an ftp client you can usually right-click on each folder, click on permisions, and mark as group and world writable.  If you have command-line access you can run the following commands:

   ~~~
   chmod 777 application/logs
   chmod 777 application/cache
   ~~~

4. You need to create a database, and a user with access to that database, and then edit `application/config/database.php` with those settings.  Here is the relevant pieces of that file:

   ~~~
   'hostname'   => 'localhost',
   'username'   => 'PUT USERNAME HERE',
   'password'   => 'PUT PASSWORD HERE',
   'persistent' => FALSE,
   'database'   => 'PUT DATABASE HERE',
   ~~~
   
5. Now point your browser to `/admin/install` and enter a password for the user `admin`, and click install. If you get no errors, then Kohanut is installed!

6. For security, you should rename `modules/kohanut/controllers/admin/install` to something like `modules/kohanut/controllers/admin/installed`
## Installing from github:

1. Download the code by cloning the repository, and fetching the submodules

   ~~~
   git clone git://github.com/bluehawk/kohanut.git
   cd kohanut/
   git submodule init
   git submodule update
   # now fetch the vendor stuff, like twig
   cd modules/kohanut
   git submodule init
   git submodule update
   ~~~

    
2. Next, either symbolic link **modules/kohanut/kohanutres** to **kohanutres** or copy it (linking is preferred)

   ~~~
   ln -s modules/kohanut/kohanutres/ kohanutres
   # or
   cp modules/kohanut/kohanutres kohanutres
   ~~~
   
3. We need to make the logs and cache writable

   ~~~
   chmod 777 application/logs
   chmod 777 application/cache
   ~~~
   
4. Continue from step 4 of installing the zip
