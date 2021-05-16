# Template

PHP TEMPLATE ANALYSIS, It can quickly compile the original template and generate HTML display pages.

### Travis CI badge

[![Travis-ci](https://api.travis-ci.com/yakeing/php_template.svg?branch=main)](https://travis-ci.com/yakeing/php_template)

### codecov badge

[![codecov](https://codecov.io/gh/yakeing/php_template/branch/main/graph/badge.svg)](https://codecov.io/gh/yakeing/php_template)

### Github badge

[![Downloads](https://badging.vercel.app/github/downloads/yakeing/php_template?icon=github)](../../)
[![Size](https://badging.vercel.app/github/size/yakeing/php_template?icon=github)](src)
[![tag](https://badging.vercel.app/github/tag/yakeing/php_template?icon=github)](../../releases)
[![license](https://badging.vercel.app/static/license/555/MPL-2.0/fe7d37?icon=github)](LICENSE)
[![languages](https://badging.vercel.app/static/language/555/PHP/34abef?icon=github)](../../search?l=php)

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

[![Sponsor](https://badging.vercel.app/static/Sponsor/EA4AAA?icon=heart)](https://github.com/yakeing/Documentation/blob/master/Sponsor/README.md)

Author
---

weibo: [yakeing](https://weibo.com/yakeing)

twitter: [yakeing](https://twitter.com/yakeing)
