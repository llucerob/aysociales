<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domicilios</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <style type="text/css">

@page {
    margin: 0px 0px 0px 0px !important;
    padding: 0px 0px 0px 0px !important;
}


.text-danger strong {
        	color: #04346c;
		}
		.receipt-main {
			background: #ffffff none repeat scroll 0 0;
			border-bottom: 12px solid #eeaf33;
			border-top: 12px solid #04346c;
			margin-top: 20px;
			margin-bottom: 20px;
			padding: 40px 30px !important;
			position: relative;
			box-shadow: 0 1px 21px #acacac;
			color: #333333;
			font-family: open sans;
		}
		.receipt-main p {
			color: #333333;
			font-family: open sans;
			line-height: 1.42857;
		}
		.receipt-footer h1 {
			font-size: 15px;
			font-weight: 400 !important;
			margin: 0 !important;
		}
		.receipt-main::after {
			background: #414143 none repeat scroll 0 0;
			content: "";
			height: 5px;
			left: 0;
			position: absolute;
			right: 0;
			top: -13px;
		}
		.receipt-main thead {
			background: #414143 none repeat scroll 0 0;
		}
		.receipt-main thead th {
			color:#fff;
		}
		.receipt-right h5 {
			font-size: 16px;
			font-weight: bold;
			margin: 0 0 7px 0;
		}
		.receipt-right p {
			font-size: 12px;
			margin: 0px;
		}
		.receipt-right p i {
			text-align: center;
			width: 18px;
		}
		.receipt-main td {
			padding: 9px 20px !important;
		}
		.receipt-main th {
			padding: 13px 20px !important;
		}
		.receipt-main td {
			font-size: 13px;
			font-weight: initial !important;
		}
		.receipt-main td p:last-child {
			margin: 0;
			padding: 0;
		}	
		.receipt-main td h2 {
			font-size: 20px;
			font-weight: 900;
			margin: 0;
			text-transform: uppercase;
		}
		.receipt-header-mid .receipt-left h1 {
			font-weight: 100;
			margin: 34px 0 0;
			text-align: right;
			text-transform: uppercase;
		}
		.receipt-header-mid {
			margin: 24px 0;
			overflow: hidden;
		}
		
		#container {
			background-color: #dcdcdc;
		}
    </style>
<div class="receipt-main">
   <table class="col-12 receipt-header">
    <td><img src="{{asset('assets/images/logo/logom.png')}}" alt="Logo Municipal" width="220px"></td>
    <td class="text-right">
        <div class="receipt-right">
            <h5></h5>
            <p> </p>
            <p> </p>
            <p> </p>
            <p> </p>            	
        </div>                  
    </td>
   </table>


   <table class="col-12 receipt-header receipt-header-mid table table-bordered mt-3">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Rut</th>
            <th>Direccion</th>
            <th>Contacto</th>
            
            <th>Ultima Entrega</th>
            <th>Productos</th>
            <th>Firma</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($domicilio as $d)
            <tr>
                <td >{{$d['nombre']}} {{$d['apellido']}}</td>
                <td width="12%">{{$d['rut']}}</td>
                <td>{{$d['direccion']}}, {{$d['sector']}}</td>
                <td>{{$d['telefono']}} / {{$d['correo']}}</td>
                <td width="11%">{{$d['ultimaentrega']}}</td>
                <td>
                    
                        @foreach($d['productos'] as $productos)
                            <li>{{$productos['nombre']}} {{$productos['cantidad']}} {{$productos['medida']}}</li>
                        @endforeach
                   
                </td>
                
                <td width="15%">
                    <hr>
                </td>
                
            </tr>
        @endforeach

    </tbody>
   </table>
   




</div>
        
    



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>