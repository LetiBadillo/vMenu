<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(Request $request){
            $text = '<table class="text-center><tr><td>Descripción</td><td>Cantidad</td><td>Precio Unitario</td> <td> Total </td> </tr>';
            for($i = 0; $i < sizeof($request['description']); $i++){
                if(empty($request['description'][$i])) continue;
                if(empty($request['quantity'][$i]) || empty($request['price'][$i]) || !is_numeric($request['quantity'][$i]) || !is_numeric($request['price'][$i])) continue;
                $text =  $text.'<tr><td>'.$request['description'][$i].'</td><td>'.$request['quantity'][$i].'</td>'.'<td>'.$request['price'][$i].'</td><td>'.($request['price'][$i] * $request['quantity'][$i]).'</td></tr>'; 
            }
            return json_encode($text.'<table>');
            
    }
}
