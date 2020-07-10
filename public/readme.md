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
## composer install 安装过程报错，可以尝试删除composer.lock文件

### PHPStorm 自动导入包 `alt + enter`

### git使用
1.创建git仓库
2.本地初始化
```genericsql
git init
git status #查看下文件
git add -A #添加到库


```
3.33

