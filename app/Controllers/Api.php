<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use Exception;
use PHPUnit\Util\Json;
use ResponseTrait;

class Api extends BaseController
{    
    private $host="https://sandbox.ixaya.net/";
    private $token="owkcsc0ks8k0cocs4gscw8kw40gss00448so0gco";

    private $route=[
        "products"=>"/api/products",
        "orders"=>"/api/orders",
        "orders_list_record"=>"/api/orders/list_record",
        "orders_details"=>"/api/orders/detail",
        "orders_create"=>"/api/orders/create",
    ];

    public function request_api($data=null,$method="GET",$route="products"){
        
        $url=$this->host.$this->route[$route];

        $curl = curl_init();

        if($data!=null)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopT($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl,CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($curl,CURLOPT_MAXREDIRS,10);
        
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'X-API-KEY:'.$this->token
        ));
        
        $result = curl_exec($curl);
        if(!$result){
            die('Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl));
        }
        curl_close($curl);

        $json = [];
        $json = json_decode($result, true);
        return $json;
    }

    //metodo para obtener los 5 productos mas vendidoss

    public function api_top_products()
    {
        try{
            $json=$this->request_api(null,"GET","products");
            $json=$json["response"];
            $products=[];

            helper("array");

            array_sort_by_multiple_keys($json, ['sale_count' => SORT_DESC,]);
            
            for ($i=0; $i < count($json); $i++) {
                $products[$i]=$json[$i];
            };

            $products=array_slice($products,0,5);
            return $this->response->setJSON($products);
        }catch(Exception $e){
            return $this->response(array(
                "data" => $e,
                "code" => 500
            ));
        }
        
    }

    //metodo para obtener los 5 productos mas vendidoss

    public function api_products()
    {
        try{
            $json=$this->request_api(null,"GET","products");
            $json=$json["response"];

            return $this->response->setJSON($json);
        }catch(Exception $e){
            return $this->response(array(
                "data" => $e,
                "code" => 500
            ));
        }
        
    }

    //metodo para obtener las ordenes filtradas por usuario

    public function api_orders(){
        try{
            $json=$this->request_api(null,"GET","orders");
            $json=$json["response"];

            return $this->response->setJSON($json);
        }catch(Exception $e){
            return $this->response(array(
                "data" => $e,
                "code" => 500
            ));
        }
    }


    //metodo para obtener las ordenes de todos los usuarios

    public function api_orders_list_record(){
        try{
            $json=$this->request_api(null,"GET","orders_list_record");
            $json=$json["response"];

            return $this->response->setJSON($json);
        }catch(Exception $e){
            return $this->response(array(
                "data" => $e,
                "code" => 500
            ));
        }
    }

    //metodo para obtener los detalles de una orden

    public function api_orders_details($id){
        try{
            $json=$this->request_api(null,"POST","orders_details");
            $json=$json["response"];

            $order=[];
            for ($i=0; $i < count($json); $i++) { 
                if($json[$i]["id"]==$id){
                    $order=$json[$i];
                }
            }

            return $this->response->setJSON($order);
        }catch(Exception $e){
            return $this->response(array(
                "data" => $e,
                "code" => 500
            ));
        }
    }

    //metodo para crear una orden
    public function api_orders_create($json){
        try{
            $data = $this->request->getJSON();
            $json=$this->request_api($data,"POST","orders_create");
            $json=$json["response"];

            return $this->response->setJSON($json);
        }catch(Exception $e){
            return $this->response(array(
                "data" => $e,
                "code" => 500
            ));
        }
    }

}