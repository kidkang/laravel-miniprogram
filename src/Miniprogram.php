<?php 
namespace Kd\Lminiprogram;
use Kd\MiniProgram\Xcx;
class Miniprogram{
    private $client;
    public function __construct($config){
        $this->config = $config['miniprogram'];
        $this->client = new Xcx(
            $this->config['appid'],
            $this->config['appsecret']
        );
    }

    public function token(){
        return $this->client->token();
    }

    public function auth($code){
        return $this->client->auth($code);
    }
}
?>