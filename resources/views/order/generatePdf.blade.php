<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style>
            .container{padding: 30px;}
        </style>
    </head>
    <body style="background-color: #b6c1e0">
    
    <table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
        <tr>
            <td style="background-color: #b6c1e0 ; text-align: left; padding: 0">
                <a href="https://github.com/ajospino/TechSavies">
                    <img width="20%" style="display:block; margin: 1.5% 3%" src="">
                </a>
            </td>
        </tr>
            
        <div style="text-align: center">
            <a href="link">
            
            <img src="https://i.imgur.com/VL223Kt.png" align="center"></a>
            </div>
        @if(empty($data))
            <h4>
                {{__('order.empty')}}
            </h4>
        @else
        @foreach ($data['list'] as $order)
        <tr>
            <td style="background-color: #b6c1e0 ">
                <div style="color: #b6c1e0 ; margin: 4% 10% 2%; text-align: justify;font-family: sans-serif">
                    <h1 align="center" style="color:#D6A06A ; margin: 0 0 7px">{{__('order.receipt_info')}}</h1>
                    
                    <p align="center" style="color: #D6A06A; margin: 2px; font-size: 15px">
                            {{__('order.id')}}</p>
                    <p align="center" style="color: #D6A06A; margin: 15px; font-size: 15px">
                            <b>{{$order->getId()}} </b></p>    
                    
                    <p align="center" style="color: #D6A06A; margin: 2px; font-size: 15px">
                            {{__('order.state')}}</p>
                    <p align="center" style="color: #D6A06A; margin: 15px; font-size: 15px">
                            <b>{{$order->getState()}} </b></p>   

                    <p align="center" style="color: #D6A06A; margin: 2px; font-size: 15px">
                            {{__('order.total')}}</p>
                    <p align="center" style="color: #D6A06A; margin: 15px; font-size: 15px">
                            <b>{{$order->getTotal()}} </b></p>                
            
                    <p align="center" style="color: #D6A06A; margin: 2px; font-size: 15px">
                            {{__('order.payment-type')}}</p>
                    <p align="center" style="color: #D6A06A; margin: 15px; font-size: 15px">
                            <b>{{$order->getPaymentType()}} </b></p>    
                    
                            <p align="center" style="color: #D6A06A; margin: 2px; font-size: 15px">
                            {{__('order.date')}}</p>
                    <p align="center" style="color: #D6A06A; margin: 15px; font-size: 15px">
                            <b>{{$order->getDate()}} </b></p>    
                    
                    <p align="center" style="color: #D6A06A; margin: 2px; font-size: 15px">
                            {{__('order.address')}}</p>
                    <p align="center" style="color: #D6A06A; margin: 15px; font-size: 15px">
                            <b>{{$order->getAddress()}} </b></p>    
                        
                    <div style="width: 100%;margin:20px 0; display: inline-block;text-align: center">
                        <img style="padding: 0; width: 200px; margin: 5px" src="">
                        <img style="padding: 0; width: 200px; margin: 5px" src="">
                    </div>
                    <div style="width: 100%; text-align: center">
                        <a style="text-decoration: none; border-radius: 5px; padding: 11px 23px; color: #1e2357; background-color: #e0cbb6" href="https://github.com/ajospino/TechSavies">{{__('order.receipt_visit')}}</a>	
                    </div>
                    <p style="color: #b3b3b3; font-size: 12px; text-align: center;margin: 30px 0 0">{{__('order.receipt_name')}}</p>
                </div>
            </td>
        </tr>
        @endforeach
        @endif
    </table>
    <!--hasta aquí-->

    </body>
    </html>