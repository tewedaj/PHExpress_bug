<?php


 class phexpress{

    private int $routeStarter = 0;
    private String $uri = "";
    private String $body = "";
    private String $header ="";
    private String $headerAuth = "";
    private bool $isPost = false;
    private String $initalRoute = "";
    // private  $requestData = new Request();


    // $router->setRouteStarter(3);
    // $router->setUrl($uri);
    // $router->setIsPost($_SERVER['REQUEST_METHOD'] == 'POST'? true : false);
    // $body = file_get_contents('php://input');
    // $router->setHeader(json_encode(get_headers("http://".$_SERVER["SERVER_NAME"]."/".$uri)));
    // $router->setBody(json_encode($body));
    // $router->setInitalRoute("food");

    public function filterUri(){
         $method = $_SERVER['REQUEST_METHOD'];
         $url =$_SERVER["REQUEST_URI"];
         $headers = getallheaders();
         $body =  file_get_contents('php://input');
        if($url[strlen($url)-1] == "/"){
            $url= substr($url,0,strlen($url)-1);
        }
    }

    public function setIsPost($ispost){
        // $requestData = new Request();
         $method = $_SERVER['REQUEST_METHOD'];
         $url =$_SERVER["REQUEST_URI"];
         $headers = getallheaders();
         $body =  file_get_contents('php://input');
        $this->isPost = $method == "POST"? true : false;
    }

    public function filterRoute($route): String{
         $response = $route;
        if($route[0] == "/"){
            $response = substr($route,1,strlen($route)-1);
        }
        return $response;
        
    }

    public function Get(String $routes,$callBack){ 
        // $requestData = new Request();
         $method = $_SERVER['REQUEST_METHOD'];
         $url =$_SERVER["REQUEST_URI"];
         $headers = getallheaders();
         $body =  file_get_contents('php://input');
         
        if(!($method == "POST")){
        //filter route if it starts with '/'
        $routes = $this->filterRoute($routes);
        //split the endpoint by '/'
        $route = explode( '/', $routes);
        //remove the the last '/' if the uri ends with '/'
        $this->filterUri();
        
        $uri = explode('.php/',$url);
        //since the size starts from 1 we want it to start from zero
        //so minimize one
        $initialRoute ="saf";
            $route = json_encode($route);   
        $endpointUrls = [
            "{$initialRoute}/{$route}",
            "{$initialRoute}/{$route}/",
            "{$initialRoute}/{$uri[1]}/{$route}",
        ];

      
        if($uri[1] == $initialRoute."/".$routes || $uri[1]."/" == $initialRoute."/".$routes || $uri[1] == $initialRoute."/".$routes."/" ){

            $callBack($this->uri,"none");

            return true;
        }else{
            return false;

        }
     


        //this will be the parent route
    //     if($this->getInitalRoute() == $uri[$this->routeStarter]){
            
    //     for($x = $this->routeStarter; $x < sizeof($uri)-1;$x++){
    //         $size++;
            
    //         if(strtolower($uri[$x+1]) == strtolower($route[$x-$this->routeStarter])){
          
    //             $parameters++;
               
    //         }
    //     }
    // }


        //check if all the paramters of the requested End point exist
        //check if the size matchs the given route
        // if($parameters == $cout && $size == sizeOf($route)-1){
        // $callBack($this->uri,"none");

        //     return true;
        // }else{
          
        //     return false;
        // }
    }
    }


    public function Post(String $routes,$callBack){ 
       

        if($this->isPost){
        //filter route if it starts with '/'
        $routes = $this->filterRoute($routes);
        //split the endpoint by '/'
        $route = explode( '/', $routes);
        //remove the the last '/' if the uri ends with '/'
        $this->filterUri();
        $uri = explode('.php/',$this->uri);
       

        //since the size starts from 1 we want it to start from zero
        //so minimize one
        $cout = sizeof($route)-1;
        $parameters = 0;
        $size = 0;
        // echo "\n ***** \n";
        // echo "\n URI: ". $uri[1];
        // echo "\n Rout: ".$this->getInitalRoute()."/". $routes;

        if($uri[1] == $this->getInitalRoute()."/".$routes || $uri[1]."/" == $this->getInitalRoute()."/".$routes || $uri[1] == $this->getInitalRoute()."/".$routes."/" ){
            $callBack($this->body,"none");

            return true;
        }else{
            return false;
        }


        //this will be the parent route
    //     if($this->getInitalRoute() == $uri[$this->routeStarter]){
            
    //     for($x = $this->routeStarter; $x < sizeof($uri)-1;$x++){
    //         $size++;
            
    //         if(strtolower($uri[$x+1]) == strtolower($route[$x-$this->routeStarter])){
          
    //             $parameters++;
               
    //         }
    //     }
    // }


        //check if all the paramters of the requested End point exist
        //check if the size matchs the given route
        // if($parameters == $cout && $size == sizeOf($route)-1){
        // $callBack($this->body,"none");
        //     // exit();
        //     return true;
        // }else{
          
        //     return false;
        // }
    }
    }

    public function setHeaderAuth($auth){
        $this->headerAuth = $auth;
    }

    public function setHeader($header){
        $this->header = $header;
    }

    public function setBody($body){
        $this->body = $body;
    }

    public function getHeader(){
        return $this->header;
    }

    public function setUrl(String $url){
        $this->uri = $url;
    }

    public function setRouteStarter(int $routeStarter){     
        $this->routeStarter = 3;
    }

    public function getRouterStart(): int{
        return $this->routeStarter;
    }

    /**
     * Get the value of initalRoute
     */ 
    public function getInitalRoute()
    {
        return $this->initalRoute;
    }

    /**
     * Set the value of initalRoute
     *
     * @return  self
     */ 
    public function setInitalRoute($initalRoute)
    {
        $this->initalRoute = $initalRoute;

        return $this;
    }
}



?>