<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Amy template</title>
    <link rel="stylesheet" href="/css/app.css" media="screen">
  </head>
  <body>
    <main class="container">
      @include ('templates.amy.modules.front.mainMenu.mainMenu')

      @yield('content')
    </main>
  </body>
</html>
