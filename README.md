# SaeKV
imitate sina cloud SaeKV class


### Github

[![Downloads](https://img.shields.io/github/downloads/yakeing/SaeKV/total.svg)](https://github.com/yakeing/SaeKV)
[![Size](https://img.shields.io/github/size/yakeing/SaeKV/SaeKV.php.svg)](https://github.com/yakeing/SaeKV)
[![tag](https://img.shields.io/github/tag/yakeing/SaeKV.svg)](https://github.com/yakeing/SaeKV)
[![Language](https://api.apptb.com/Badge/4D4D4D/Language/F66000/PHP/image.svg)](https://github.com/yakeing/SaeKV)
[![License](https://api.apptb.com/Badge/4D4D4D/License/007EC6/MPL-2.0/image.svg)](https://github.com/yakeing/SaeKV)

BY: [yakeing](http://weibo.com/yakeing)

### KV init

```php
    $kv = new SaeKV(3000);
    $ret = $kv->init("accesskey");
```

### KV set data

```php
      $kv->set('kev','value');
```

### KV add data

```php
    $kv->add('kev','value');
```

### KV get data

```php
    $kv->get('kev');
```

### KV delete data

```php
    $kv->delete('kev');
```

### replace data

```php
    $ret = $kv->replace('abc', 'cccccc');
```

### Get multiple groups of data

```php
    $keys = array();
    array_push($keys, 'abc1');
    array_push($keys, 'abc2');
    array_push($keys, 'abc3');
    $ret = $kv->mget($keys);
```

### Get prefix range data

```php
    $ret = $kv->pkrget('abc', 3);
```

### Get all data

```php
    $ret = $kv->pkrget('');
```

Invalid

  ~~$ret = $kv->pkrget('', 100);~~
  
  ~~while(true){~~
  
  ~~var_dump($ret);~~
  
  ~~end($ret);~~
  
  ~~$start_key = key($ret);~~
  
  ~~$i = count($ret);~~
  
  ~~if ($i < 100) break;~~
  
~~$ret = $kv->pkrget('', 100, $start_key);~~

~~}~~


### get options list

```php
    $opts = $kv->get_options();
```

### set options

```php
    $opts = array('encodekey' => 0);
    $ret = $kv->set_options($opts);
```

### Local file

```
    kvdb.txt (json)
    {
        kev1:value1,
        kev2:[
            kev2:value2,
            kev3:value3
        ],.....
    }
```

Original document
---

[SaeKV-code](http://apidoc.sinaapp.com/class-SaeKV.html)


Donate
---
Your donation makes CODE better.

 Bitcoin (比特币赞助)

 1Ff2hTfr4EioWv2ZDLKTedUiF9wBBVYSbU

 ![Bitcoin](https://api.apptb.com/QR/230/bitcoin%3a1Ff2hTfr4EioWv2ZDLKTedUiF9wBBVYSbU/Bitcoin.png)

 WeChat (微信赞助)

 ![WeChat](https://api.apptb.com/QR/230/https%3a%7C%7Cpayapp.weixin.qq.com%7Cqr%7CAQFjACEumLq80lLV2aIgLwjh*t%3dCwAK%25wechat_pay/WeChat.png)

 Alipay (支付宝赞助)

 ![Alipay](https://api.apptb.com/QR/230/HTTPS%3a%7C%7CQR.ALIPAY.COM%7CTSX082709YGHVXYUQCWKD6/Alipay.png)

