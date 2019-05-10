<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.layouts.theHeader')
    </head>
    <body>
        <div id="wrapper">
            @include('admin.layouts.headerAdmin')
            @yield('content')
        </div>
        @include('admin.layouts.script')
    </body>
</html>
