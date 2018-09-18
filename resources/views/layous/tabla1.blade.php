<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TALLER FUTBOL - @yield('title')</title>
    </head>
    <body>

        <center>
        <table border=1>
            <tr>
                <td colspan=3 > <center><b> @yield('titulo_tabla') </b</center></td>
            </tr>


            
                       

            @for($i=0; $i < count($jugador);$i++)
                
            <tr>  
            
                  <td> {{$i+1}}</td>       
                  <td> {{$jugador[$i]}}</td>
                  <td> {{$posicion[$i]}}</td>      
            </tr>
                      
                
            @endfor
            

            <tr>
                <td colspan=3 ><center><b>@yield('footer')</b</center></td>
            </tr>
        </table>
        </center>

        
    </body>
</html>