# template

PHP TEMPLATE ANALYSIS

Author [yakeing](http://weibo.com/yakeing)

[![image](https://oauth.sinaapp.com/svg/4D4D4D/License/F66000/MPL2.0/image.svg)](https://github.com/yakeing/template/blob/master/LICENSE)

[![image](https://oauth.sinaapp.com/svg/4D4D4D/Language/007EC6/PHP/image.svg)](https://github.com/yakeing/template/blob/master/template.php)

[![image](https://oauth.sinaapp.com/svg/4D4D4D/Version/97CA00/2.1/image.svg)](https://github.com/yakeing/template)





### 调试模板

- [x] example

---
	//Template path 模板路径
  	$tpl = new template("/home/www/mould/");
  
	$tpl->assign("title","I was the title");
	$tpl->assign("arr",array('aaa','bbb','ccc'));
    
	//The transfer of files at the same time output 执行模板文件
	$tpl->GetFile("header.html")->GetFile("index.html")->GetFile("footer.html")->render(); 
---



### Format 判断
 
- [x] example

---
        {if $array}...{elseif $array[0]!=null}...{else}...{/if}
---

### foreach 循环
 
- [x] example

---
        {foreach $array as $key => $value}...{$key} => {$value}...{/foreach}
---

### while 循环
 
- [x] example

---
        {$i = 1}...{while $i < $j}...{$i}...{$i++}...{/while}
---

### for 循环
 
- [x] example

---
        {for ($i=0;$i<count($array);$i++)}...{$array[$i]}...{/for}
		
### switch 分支选择
 
- [x] example

---
		{switch $str} ..{case 1}...{break}...{default}...{/switch}
---

### 赋值 OR 计算
 
- [x] example

---
        {$i = 1}//There must be a space about equal 等号左右必须有一个空格
        {$i++}
        {$i--}
---
