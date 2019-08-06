<?php
/**
  * Template Compilation Cache
  *
  * @author yakeing
  * @version 2.2
**/

namespace php_template;
class template {
    public $DiyKeyword  = array();
    public $CacheDir    = "/tmp/cache/";
    public $CacheSuffix = ".tpl";
    public $caches  = false;

    private $ErrHtml        = '';
    private $ReadOrWriteErr = false;
    private $vars       = array();
    private $TplFileAll     = array();
    private $ErrFileAll     = array();

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
             $this->TplFileAll[] = array($TplFile, $CacheFile);
         }else{
             $this->ErrFileAll[] = $TplFile;
         }
        return $this;
    }

    // Translation table
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
            $patterns[] = '#' . str_replace('%%', '(.+)', preg_quote($key, '#')) . '#U';
            $replace[] = '<?php ' . $val.' ?>';
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
            if ($this->ReadOrWriteErr) {
                $string = $this->ErrHtml;
            }else{
                extract($this->vars);
                $string =  eval('?>' . $conout);
            }
        }else{
            $string = "Lack of the following files".implode("\n<br /> File missing: ".$file);
        }
        echo $string;
    }

    //cache
    private function cache($file){
        if($this->caches){
            $renew = true;
            $conthtml = '';
            if(is_file($file[0]) and is_file($file[1])){
               $renew = (filemtime($file[0]) > filemtime($file[1])) ? true : false;
            }
            if($renew){
                $conthtml = $this->compile($file[0]);
                 if(!file_put_contents($file[1], $conthtml)){
                    $this->ErrHtml = 'Error in adding file to server.';
                    $this->ReadOrWriteErr = true;
                 }
            }else{
                if(is_file($file[1])){
                    $conthtml = file_get_contents($file[1]);
                }else{
                    $this->ErrHtml = 'Error in adding file to server.';
                    $this->ReadOrWriteErr = true;
                }
            }
        }else{
            $conthtml = $this->compile($file[0]);
        }
        return $conthtml;
    }
