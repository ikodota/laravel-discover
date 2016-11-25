## Yeo-admin Introduction

[![Total Downloads](https://img.shields.io/github/downloads/ikdoota/laravel-discover/latest/total.svg)]()
[![Bower](https://img.shields.io/bower/v/bootstrap.svg?style=flat-square)]()
[![StyleCI](https://styleci.io/repos/44852299/shield)](https://styleci.io/repos/44852299)
[![Packagist](https://img.shields.io/packagist/l/ikodota/laravel-discover.svg)]()



**This is an alpha, experimental release of Antvel. Everything will change gradually,ttps://styleci.io/repos/44852299 looking forward to get the best of this awesome product. Thank you for testing!**

***Laravel-discover*** is a backend management project written in Laravel 5.3 intended for building a friendly eStore either for startups or big companies, and is highly opinionated towards that use case. Because it is a platform already built, you only will need to add as many products as you need  to start selling and taking orders from customers

***Laravel-discover*** aim is giving to you and your clients the best eCommerse experience in a different aproach!

<a name="installation"></a>
## Installation

You can install laravel-discover in two ways.

The first way is using composer, just run this command in your terminal:

```bash
composer require ikodota/laravel-discover
```

The second way is cloning this repo, for that you need to run this commands:

```
git clone https://github.com/ikodota/laravel-discover.git
```


Next, you will need to run composer update/install into your ***laravel-discover*** project folder
```
composer update/install
```

## Setting up

After install set up your .env file, if this not exist you can copy the .env-example file and store like .env file in the root of your antVel intallation. Then change  the variables values with yours.

Be sure to create  your database and define the name and access credentials of it on the .env file.
Then you have to create the Laravel-discover schema running artisan migrate command:

```
php artisan migrate:refresh
```

Or if you want to create the schema and load data for a functional demo you can run:

```
php artisan migrate:refresh --seed
```

You need to run ***bower install***, in order to have all the frontend dependencies in your machine. So, go to your antvel directory using command line, as so:

```
bower install
```

## To do list
If you like laravel-discover and want to contribute to its core, you can check this task list.


## Using Laravel Elixir

First at all, you need to install Gulp package typing this command line in your terminal. Like so:

```
npm install --global gulp
```
 
Second at all, you will need to step into your laravel-discover folder, like so:
```
cd antVel
```

Third at all, type this following command in order for you to install the npm dependencies, like so:
```
npm install 
```

If you are developing on Windows or running your VM on it, you must try like so: 
```
npm install --no-bin-links
```

Now feel free to run gulp into your antVel folder, like so:
```
gulp
```

<a name="features"></a>
## Features

* Open Source [MIT]
* Beautiful Skin [Adminlte 2016] 
* Laravel登陆认证 [Guard]
* Laravel自带授权 [Gate]
* Attachment storage anywhere [本地,七牛,阿里OSS等]
* Common Image Uploader [本地上传，远程抓取，相册管理]
* 上传组件集成到在线编辑器 [可选择编辑器]
* Multi Language
* 常用服务的设置



### Contact

You can communicate with us using the following mediums:

* [Email](ikodota@gmail.com) for questions


### License

[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

The Laravel-discover is an open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

### Contributing

Before sending a Pull Request, be sure to review the [Contributing Guidelines](CONTRIBUTING.md) first.


