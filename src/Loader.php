<?php


namespace Bcsapi;



class Loader
{
    public $apiurl;
    public $apikey;
    public $v3apiurl;
    public $v3apikey;
    public $v4apiurl;
    public $photoapiurl;
    public $recipeapiurl;
    public $recipeapikey;
    public $v4renderurl;
    public $v4rendertoken;

    /**
     * Pull correct config values for use by api objects.
     */
    public function __construct(){

        $this->apiurl = config('bcsapi.v2.backoffice.url');
        $this->apikey = config('bcsapi.v2.backoffice.key');
        $this->v3apiurl = config('bcsapi.v3.backoffice.url');
        $this->v3apikey = config('bcsapi.v3.backoffice.key');
        $this->v4apiurl = config('bcsapi.v4.backoffice.url');
        $this->photoapiurl = config('bcsapi.v2.demophoto.url');
        $this->recipeapiurl = config('bcsapi.v2.recipe.url');
        $this->recipeapikey = config('bcsapi.v2.recipe.key');

        $this->v4renderurl = config('bcsapi.v4.render.url');
        $this->v4rendertoken = config('bcsapi.v4.render.token');

    }

    /**
     * Current api wrapper version.
     * @return string
     */
    public function Version(){
        return '4.6.2';
    }

    /**
     * @return Voucher
     */
    public function Voucher(){
         if ($this->isBackofficeV4()){

            return  new Voucher($this->v4apiurl, 'v4');
         }
      return  new Voucher($this->apiurl, $this->apikey);
    }

    /**
     * @return Course
     */
    Public function Course(){
        if ($this->isBackofficeV4()) {
            return new Course($this->v4apiurl, 'v4');
        }
        return new Course($this->apiurl, $this->apikey);

    }

    /**
     * Return StudentApi Instance
     * @return Student
     */
    Public function Student(){
         if ($this->isBackofficeV4()){
            return new Student($this->v4apiurl, 'v4');
         }
        return new Student($this->apiurl,$this->apikey);
    }

    /**
     * @return DemoPhoto
     */
    public function DemoPhoto(){
        return new DemoPhoto($this->photoapiurl);
    }

    /**
     * @return Store
     */
    public function Store(){
        if ($this->isBackofficeV4()) {
            return new Store($this->v4apiurl, 'v4');
        }
            return new Store($this->apiurl, $this->apikey);
    }
    public function Accommodation(){
        return new Accommodation($this->v4apiurl, $this->apikey);
    }

    /**
     * @return Recipe
     */
    public function Recipe(){
        return new Recipe($this->recipeapiurl,$this->recipeapikey);
    }

    /**
     * @return Subscription
     */
    public function Subscription(){
        return new Subscription($this->v4apiurl,'v4');
    }

    /**
     * @return Subscriber
     */
    public function Subscriber(){

        return new Subscriber($this->v4apiurl,'v4');

    }

    /**
     * @return Mediaitems
     */
    public function MediaItems(){
        return new Mediaitems($this->v4apiurl, 'v4');
    }

    public function Render(){
        return new Render($this->v4renderurl, $this->v4rendertoken);
    }

    /**
     * @return bool
     */
    public static function isBackofficeV4(){
        if (config('bcsapi.v4.backoffice.url') > ''){
            return true;
        }
        return false;
    }

}
