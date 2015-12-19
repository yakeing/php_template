<?php
/**
 * Template compilation cache 模板编译缓存
 *
 * @version 2.0
 * @Author weibo.com/yakeing
 */
class template {
    public $DiyKeyword   = array();//自定义转译表
    public $CacheDir       = "saestor://cache/";//缓存编译文件目录 (新浪云 saestor://  分布式文件存储服务)
    public $CacheSuffix  = ".tpl";//缓存编译文件后缀
    public $caches           = FALSE;//缓存编译文件开关 FALSE TRUE

    private $vars                = array();//注册变量
    private $TplFileAll       = array();//注册文件路径
    private $ErrFileAll       = array();//注册错误文件
	
    //Initialization
    function __construct($TplDir) {
        $this->TplDir = $TplDir;
        if (version_compare(PHP_VERSION, '5') == -1) { //Judgment PHP version
            register_shutdown_function(array( & $this, '__destruct'));
        }
    }

    //vars
    function assign($k, $v) {
        $this->vars[$k] = $v;
    }

    //get file
    function GetFile($file) {
        $TplFile = $this->TplDir.$file;
        $CacheFile = $this->CacheDir.$file.$this->CacheSuffix;
         if (is_file($TplFile)) {
             array_push($this->TplFileAll, array($TplFile, $CacheFile));
         }else{
             array_push($this->ErrFileAll, $TplFile);
         }
        return $this;
    }

    //Translation table
    private function translation() {
        $keyword = array(
            '{if %%}' => 'if (\1):',
            '{elseif %%}' => 'elseif (\1):',
            '{else}' => '; else:',
            '{/if}' => 'endif;',
            '{for %%}' => 'for (\1):',
            '{/for}' => 'endfor;',
            '{foreach %%}' => 'foreach (\1):',
            '{/foreach}' => 'endforeach;',
            '{while %%}' => 'while (\1):',
            '{/while}' => 'endwhile;',
            '{switch %%}' => 'switch (\1):',
            '{case %%}' => 'case \1:',
            '{break}' => 'break;',
            '{default}' => 'default:',
            '{/switch}' => 'endswitch;',
            '{$%% = %%}' => '$\1 = \2;',
            '{$%%++}' => '$\1++;',
            '{$%%}' => 'echo $\1;'
        );
        //Can be customized to the translation table, there is a repeat of $this->DiyKeyword as the standard
        return array_merge($keyword, $this->DiyKeyword);
    }

    //compile
    private function compile($buffer){
        $patterns = $replace = array();
        $keyword = $this->translation();
        foreach ($keyword as $key => $val) {
            array_push($patterns, '#' . str_replace('%%', '(.+)', preg_quote($key, '#')) . '#U');
            array_push($replace, '<?php ' . $val.' ?>');
        }
        return preg_replace($patterns, $replace, file_get_contents($buffer));
    }

    //render
    function render(){
        if(count($this->ErrFileAll) < 1){
            $conout = '';
            foreach ($this->TplFileAll as $file) {
                   $conout .= $this->cache($file);
            }
            extract($this->vars);
            $string =  eval('?>' . $conout);
        }else{
            $string = "Lack of the following files".implode("\n<br /> File missing: ".$file);
        }
        echo $string;
    }

    //cache
    private function cache($file){
        if($this->caches){
            $renew = true;
            //  if(is_file($file[1]) OR @filemtime($file[1]) > @filemtime($file[0]))
            if(is_file($file[1])){
               $renew = (filemtime($file[0]) > filemtime($file[1])) ? true : false;
            }
            if($renew){
                $conthtml = $this->compile($file[0]);
                file_put_contents($file[1], $conthtml); //It can determine whether to increase success
            }else{
                $conthtml = file_get_contents($file[1]);
            }
        }else{
            $conthtml = $this->compile($file[0]);
        }
        return $conthtml;
    }
}
?>
