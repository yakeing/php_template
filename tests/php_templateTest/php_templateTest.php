<?php
namespace php_templateTest;
use php_template;
use php_template\template;
use PHPUnit\Framework\TestCase;
class php_templateTest extends TestCase{
  public function testtemplate(){
    $dir = "/home/www/mould/";
    $tpl = new template($dir);
    $tpl->assign("string","I was the title");
    $tpl->assign("array",array('aaa','bbb','ccc'));
    $tpl->assign("number",100);
    $tpl->GetFile("header.html")->GetFile("index.html")->GetFile("footer.html")->render();
    
    
    // undone
    //$this->assertTrue($set);
  }
}
