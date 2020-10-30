<?php
namespace php_templateTest;
use php_template;
use php_template\template;
use PHPUnit\Framework\TestCase;
class php_templateTest extends TestCase{
  
  public function testTemplate(){
    $dir = dirname(__FILE__).'/mould/';
    $tpl = new template($dir);
    $tpl->caches = true;
    $tpl->assign("string","I was the title");
    $tpl->assign("array",array('aaa','bbb','ccc'));
    $tpl->assign("number", date("Y"));
    $tpl->assign("footer","***, Inc.");
    $ret = $tpl->GetFile("header.tpl")->GetFile("body.tpl")->GetFile("footer.tpl")->render();
    echo "\n----------------------------- testTemplate() ------------------------------------\n";
    var_dump($ret);
    $this->assertTrue(is_string($ret));
    //$this->assertEqual(date("Y"), $tpl->vars['number']); private
    $this->assertFileExists($tpl->CacheDir.'header.tpl'.$tpl->CacheSuffix);
    $this->assertFileExists($tpl->CacheDir.'body.tpl'.$tpl->CacheSuffix);
    $this->assertFileExists($tpl->CacheDir.'footer.tpl'.$tpl->CacheSuffix);
    return $tpl;
  }

  /**
  * @depends testTemplate
  */
  public function testIsCachesTemplate($tpl){
    $ret = $tpl->GetFile("footer.tpl")->render();
    echo "\n----------------------------- testIsCachesTemplate() ------------------------------------\n";
    var_dump($ret);
    $this->assertTrue(is_string($ret));
  }

  public function testErrorTemplate(){
    $dir = dirname(__FILE__).'/mould/';
    $tpl = new template($dir);
    $tpl->caches = true;
    $ret = $tpl->GetFile("error.tpl")->render();
    echo "\n----------------------------- testErrorTemplate() ------------------------------------\n";
    var_dump($ret);
    $this->assertTrue(is_string($ret));
  }

  public function testOnCachesTemplate(){
    $dir = dirname(__FILE__).'/mould/';
    $tpl = new template($dir);
    $tpl->assign("string","I was the title");
    $ret = $tpl->GetFile("header.tpl")->render();
    echo "\n----------------------------- testOnCachesTemplate() ------------------------------------\n";
    var_dump($ret);
    $this->assertTrue(is_string($ret));
    echo "\n----------------------------- END ------------------------------------\n";
  }
}
