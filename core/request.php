<?php  
  namespace core;
  class request{
    public function uri(){
        return trim(
            var_dump(trim(parse_url($_SERVER['REQUEST_URI'],component:PHP_URL_PATH),characters:"/"));
        )
    }
  }
 ?>