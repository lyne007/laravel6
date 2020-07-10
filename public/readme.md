## Laravel 学习笔记
### 数据库 
1.修改字符集
```genericsql
alert datebase table CHARACTER set utf8;
```

2.创建迁移
```angular2html
php artisan make:migration create_table_user
```
第一次创建数据库报错：
```genericsql
 SQLSTATE[42000]: Syntax error or access
 violation: 1071 Specified key was too long; max key length is 767 bytes (SQL: a
lter table `users` add unique `users_email_unique`(`email`))

```
解决办法：
/app/Providers/AppServiceProvider.php 中的boot方法添加
```angular2html
Schema::defaultStringLength(191);
```

### 快捷键使用
1.PHPStorm 自动导入包 `alt + enter`

### Git使用
1.创建git仓库

2.本地初始化，并上传代码
```genericsql
git init
git status              # 查看下文件
git add -A              # 添加到库
git commit -m "描述内容"
git remote add origin https://github.com/lyne007/laravel6.git  # 添加远程仓库
git push -u origin master                                      # push 代码到仓库

```
3.客户端拉取数据
```genericsql
git clone https://github.com/lyne007/laravel6.git 项目名
```
4.客户端缺少vendor目录，需在项目根执行命令
```genericsql
composer install
```
如果 `composer install` 安装过程报错，可以尝试删除 `composer.lock` 文件

安装完成后，Laravel 中缺少 `.env` 文件，请将 `.env.example` 文件改为 `.env` 即可

再运行项目发现报错：
```genericsql
RuntimeException
No application encryption key has been specified. 
```
原因 `.env` 文件中 `APP_KEY` 是空，执行下面代码解决
```genericsql
php artisan key:generate
```
5.迁移数据库
```genericsql
php artisan migrate
```
