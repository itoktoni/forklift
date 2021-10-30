<!DOCTYPE html>
<html>
    
<head>
        @include(Helper::setExtendFrontend('meta'))
        @include(Helper::setExtendFrontend('css'))
        
    </head>

    <body>
       
        @include(Helper::setExtendFrontend('header'))

        @yield('content')

        @include(Helper::setExtendFrontend('footer'))

        @include(Helper::setExtendFrontend('js'))
        @include(Helper::setExtendFrontend('script'))
        
    </body>

</html>
