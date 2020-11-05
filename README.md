# Template

PHP TEMPLATE ANALYSIS, It can quickly compile the original template and generate HTML display pages.

### Travis CI badge

[![Travis-ci](https://api.travis-ci.com/yakeing/php_template.svg?branch=master)](https://travis-ci.com/yakeing/php_template)

### codecov badge

[![codecov](https://codecov.io/gh/yakeing/php_template/branch/master/graph/badge.svg)](https://codecov.io/gh/yakeing/php_template)

### Github badge

[![Downloads](https://img.shields.io/github/downloads/yakeing/php_template/total?color=dfb317&logo=github)](../../)
[![Size](https://img.shields.io/github/size/yakeing/php_template/src/template.php?color=b36d41&logo=github)](src/template.php)
[![tag](https://img.shields.io/github/v/tag/yakeing/php_template?color=28a745&logo=github)](../../releases)
[![license](https://img.shields.io/github/license/yakeing/php_template?color=FE7D37&logo=github)](LICENSE)
[![languages](https://img.shields.io/badge/languages-php-007EC6?logo=github)](../../search?l=php)

### Installation

Use [Composer](https://getcomposer.org) to install the library.
Of course, You can go to [Packagist](https://packagist.org/packages/yakeing/php_template) to view.

```
    $ composer require yakeing/php_template
```

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
    {$i = 1} OR {$t=2}
    {$i++}
    {$i--}
```

[Sponsor](https://github.com/yakeing/Documentation/blob/master/Sponsor/README.md)
---

If you've got value from any of the content which I have created, then I would very much appreciate your support by payment donate.

[![Sponsor](https://img.shields.io/badge/-Sponsor-EA4AAA?logo=google%20fit&logoColor=FFFFFF)](https://github.com/yakeing/Documentation/blob/master/Sponsor/README.md)

Author
---

weibo: [yakeing](https://weibo.com/yakeing)

twitter: [yakeing](https://twitter.com/yakeing)
