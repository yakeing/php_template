# template
PHP TEMPLATE ANALYSIS

	
	//Template path 模板路径
  	$tpl = new template("/home/www/mould/");
  
	$tpl->assign("title","I was the title");
	$tpl->assign("arr",array('aaa','bbb','ccc'));
    
	//The transfer of files at the same time output 执行模板文件
	$tpl->GetFile("header.html")->GetFile("index.html")->GetFile("footer.html")->render(); 


Format
-----
 判断
  
        {if $array}...{elseif $array[0]!=null}...{else}...{/if}

foreach 循环
  
        {foreach $array as $key => $value}...{$key} => {$value}...{/foreach}

while 循环
  
        {$i = 1}...{while $i < $j}...{$i}...{$i++}...{/while}

for 循环
  
        {for ($i=0;$i<count($array);$i++)}...{$array[$i]}...{/for}
		
switch 分支选择
	
		{switch $str} ..{case 1}...{break}...{default}...{/switch}

赋值 OR 计算
  
        {$i = 1}//There must be a space about equal 等号左右必须有一个空格
        {$i++}
        {$i--}
