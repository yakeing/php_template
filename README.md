# template

PHP TEMPLATE ANALYSIS

### Github

[![Downloads](https://img.shields.io/github/downloads/yakeing/php_template/total.svg)](https://github.com/yakeing/php_template)
[![Size](https://img.shields.io/github/size/yakeing/php_template/template.php.svg)](https://github.com/yakeing/php_template/blob/master/template.php)
[![tag](https://img.shields.io/github/tag/yakeing/php_template.svg)](https://github.com/yakeing/php_template/releases)
[![Language](https://img.shields.io/github/license/yakeing/php_template.svg)](https://github.com/yakeing/php_template/blob/master/LICENSE)
[![Php](https://img.shields.io/github/languages/top/yakeing/php_template.svg)](https://github.com/yakeing/php_template)

### 调试模板

- [x] example

```php
    //Template path 模板路径
    $tpl = new template("/home/www/mould/");

    $tpl->assign("title","I was the title");
    $tpl->assign("arr",array('aaa','bbb','ccc'));

    //The transfer of files at the same time output 执行模板文件
    $tpl->GetFile("header.html")->GetFile("index.html")->GetFile("footer.html")->render();
```



### Format 判断

- [x] example

```
    {if $array}...{elseif $array[0]!=null}...{else}...{/if}
```

### foreach 循环

- [x] example

```php
    {foreach $array as $key => $value}...{$key} => {$value}...{/foreach}
```

### while 循环

- [x] example

```
    {$i = 1}...{while $i < $j}...{$i}...{$i++}...{/while}
```

### for 循环

- [x] example

```
    {for ($i=0;$i<count($array);$i++)}...{$array[$i]}...{/for}
```

### switch 分支选择

- [x] example

```
    {switch $str} ..{case 1}...{break}...{default}...{/switch}
```

### 赋值 OR 计算

- [x] example

```
    {$i = 1}//There must be a space about equal 等号左右必须有一个空格
    {$i++}
    {$i--}
```


Donate
---
Your donation makes CODE better.

 Bitcoin (比特币赞助)

 1FYbZECgs3V3zRx6P7yAu2nCDXP2DHpwt8

 ![Bitcoin](https://raw.githubusercontent.com/yakeing/Content/master/Donate/Bitcoin.png)

 WeChat (微信赞助)

 ![WeChat](https://raw.githubusercontent.com/yakeing/Content/master/Donate/WeChat.png)

 Alipay (支付宝赞助)

 ![Alipay](https://raw.githubusercontent.com/yakeing/Content/master/Donate/Alipay.png)

Author
---

weibo: [yakeing](https://weibo.com/yakeing)

twitter: [yakeing](https://twitter.com/yakeing)
