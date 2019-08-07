<?php
namespace php_templateTest;
use php_template;
use php_template\template;
use PHPUnit\Framework\TestCase;
class php_templateTest extends TestCase{
  public function testtemplate(){
    $dir = dirname(__FILE__).'/../mould/';
    $tpl = new template($dir);
    $tpl->assign("string","I was the title");
    $tpl->assign("array",array('aaa','bbb','ccc'));
    $tpl->assign("number", date("Y"));
    $tpl->assign("footer","***, Inc.");
    $tpl->GetFile("header.tpl")->GetFile("body.tpl")->GetFile("footer.tpl")->render();

    $this->assertContains(date("Y"), $tpl->DiyKeyword);
    $this->assertFileExists($tpl->CacheDir.'header.tpl');
    $this->assertFileExists($tpl->CacheDir.'body.tpl');
    $this->assertFileExists($tpl->CacheDir.'footer.tpl');
  }
}
