<!Doctype html>
<html>
    <head>
        <title>
            @if (!empty($site_title))
                    {{$site_title}}
              
            @else
                Trang chu
             @endif
        </title>
        <meta charset="utf-8"/>
    </head>
    
    <body>
        <div class="main">
                @yield('content')
                giang
        </div>
        <div class="footer">
            Demo laravel
        </div>
        
        
    </body>
    
</html>