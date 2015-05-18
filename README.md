Yii2-Advanced-funson86
==========

Backend user & password:
Login: `admin`
Password: `qwe1234`

Installation and getting started:
---------------------------------

If you do not have Composer, you may install it by following the instructions at getcomposer.org.

1. Run the following command: `php composer.phar create-project --stability=dev funson86/yii2-advanced-funson86 yii2-advanced` to install Yii2-Advanced-funson86.
2. Run command: `cd /my/path/to/yii2-advanced/` and go to main application directory.
3. Run command: `php requirements.php` and check the requirements.
4. Run command: `php init` to initialize the application with a specific environment.
5. Create a new database and adjust it configuration in `common/config/main-local.php` accordingly.
6. Run command: `yii migrate` to apply migrations with console commands:
   - m140608_201405_user_init : user table
7. Run commond: `yii migrate --migrationPath=@funson86/auth/migrations` to apply https://github.com/funson86/yii2-auth
8. This will create tables needed for the application to work.
9. You also can use database dump from `my/path/to/yii2-adminlte/tests/yii2-advanced-funson86.sql`, but however I recommend to use migrations.


Usage
-----
- Use the URL `http://yii2-advanced-funson86.domain` point to `yii2-advanced-funson86/frontend/web/` to access application frontend.
- Use the URL `http://backend.yii2-advanced-funson86.domain` point to `yii2-advanced-funson86/backend/web/` to access application backend.


Use yii2-auth
-------------
- To check weather show on top menu or side bar, add `'visible' => Yii::$app->user->can('readPost'),` in top-menu.php or sidebar-menu.php.
- To check could run action. add `if(!Yii::$app->user->can('createPost')) throw new HttpException(401, 'No Auth');` in actionIndex, actionCreate, actionUpdate in XXXController.php file.

Notes:
------

By default will be created one super admin user with login `admin` and password `qwe1234`, you can use this data to sing in application frontend and backend.

Themes:
-------
- Application backend it's based on "Yii2 Advanced Backend" template. More detail about this nice template you can find [here](http://www.bootstrapstage.com/admin-lte/).
- Application frontend with default Yii2 advanced frontend page.


Preview:
-------
![Yii2-Advanced](tests/yii2-advanced-preview.jpg)


Related:
-------
- [Yii2-Gii](https://github.com/funson86/yii2-gii) : Gii for Yii2-advanced-funson86
- [Yii2-Setting](https://github.com/funson86/yii2-Setting) : Common Setting for Yii2
- [Yii2-Blog](https://github.com/funson86/yii2-blog) : A Blog extension for Yii2
- [Yii2-Cms](https://github.com/funson86/yii2-cms) : A Cms extension for Yii2

