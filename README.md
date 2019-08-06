# Template

PHP TEMPLATE ANALYSIS

### Travis CI

[![Travis-ci](https://api.travis-ci.org/yakeing/php_template.svg?branch=master)](https://travis-ci.org/yakeing/php_template)

### Packagist

[![Version](http://img.shields.io/packagist/v/yakeing/php_template.svg)](https://github.com/yakeing/php_template/releases)
[![Downloads](http://img.shields.io/packagist/dt/yakeing/php_template.svg)](https://packagist.org/packages/yakeing/php_template)

### Github

[![Downloads](https://img.shields.io/github/downloads/yakeing/php_template/total.svg)](https://github.com/yakeing/php_template)
[![Size](https://img.shields.io/github/size/yakeing/php_template/src/template.php.svg)](https://github.com/yakeing/php_template/blob/master/template.php)
[![tag](https://img.shields.io/github/tag/yakeing/php_template.svg)](https://github.com/yakeing/php_template/releases)
[![Language](https://img.shields.io/github/license/yakeing/php_template.svg)](https://github.com/yakeing/php_template/blob/master/LICENSE)
[![Php](https://img.shields.io/github/languages/top/yakeing/php_template.svg)](https://github.com/yakeing/php_template)

### Debugging Template

- [x] example

```php
    //Template path
    $tpl = new template("/home/www/mould/");

    $tpl->assign("title","I was the title");
    $tpl->assign("arr",array('aaa','bbb','ccc'));

    //The transfer of files at the same time output
    $tpl->GetFile("header.html")->GetFile("index.html")->GetFile("footer.html")->render();
```

### Format

- [x] example

```
    {if $array}...{elseif $array[0]!=null}...{else}...{/if}
```

### foreach

- [x] example

```php
    {foreach $array as $key => $value}...{$key} => {$value}...{/foreach}
```

### while

- [x] example

```
    {$i = 1}...{while $i < $j}...{$i}...{$i++}...{/while}
```

### for

- [x] example

```
    {for ($i=0;$i<count($array);$i++)}...{$array[$i]}...{/for}
```

### switch

- [x] example

```
    {switch $str} ..{case 1}...{break}...{default}...{/switch}
```

### assign OR calculation

- [x] example

```
    {$i = 1}//There must be a space about equal
    {$i++}
    {$i--}
```


Donate
---
Your donation makes CODE better.

 [Bitcoin](https://btc.com/1FYbZECgs3V3zRx6P7yAu2nCDXP2DHpwt8)

 1FYbZECgs3V3zRx6P7yAu2nCDXP2DHpwt8

 ![Bitcoin](https://raw.githubusercontent.com/yakeing/Content/master/Donate/Bitcoin.png)

 WeChat

 ![WeChat](https://raw.githubusercontent.com/yakeing/Content/master/Donate/WeChat.png)

 Alipay

 ![Alipay](https://raw.githubusercontent.com/yakeing/Content/master/Donate/Alipay.png)

Author
---

weibo: [yakeing](https://weibo.com/yakeing)

twitter: [yakeing](https://twitter.com/yakeing)
