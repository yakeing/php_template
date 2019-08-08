<?php
namespace php_templateTest;
use php_template;
use php_template\template;
use PHPUnit\Framework\TestCase;
class php_templateTest extends TestCase{
  public function testtemplate(){
    $dir = dirname(__FILE__).'/../mould/';
    $tpl = new template($dir);
    $tpl->caches = true;
    $tpl->assign("string","I was the title");
    $tpl->assign("array",array('aaa','bbb','ccc'));
    $tpl->assign("number", date("Y"));
    $tpl->assign("footer","***, Inc.");
    $tpl->GetFile("header.tpl")->GetFile("body.tpl")->GetFile("footer.tpl")->render();

    //$this->assertEqual(date("Y"), $tpl->vars['number']); private
    $this->assertFileExists($tpl->CacheDir.'header.tpl'.$tpl->CacheSuffix);
    $this->assertFileExists($tpl->CacheDir.'body.tpl'.$tpl->CacheSuffix);
    $this->assertFileExists($tpl->CacheDir.'footer.tpl'.$tpl->CacheSuffix);
  }
}
