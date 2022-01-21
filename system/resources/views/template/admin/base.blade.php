<!doctype html>
<html lang="en">

<head>
  <title>Hello, world!</title>
 @include("template.admin.section.assets")
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
      Tip 2: you can also add an image using data-image tag
  -->
  @include("template.admin.section.sidebar")
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        @include("template.admin.section.header")
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">

          <div class="container">
            <div class="row">
              <div class="col-md-12">
                @include('template.admin.utils.notif')
              </div>
            </div>
          </div>
          @yield('content')
        </div>
      </div>
     @include("template.admin.section.footer")
    </div>
  </div>
@include("template.admin.section.js")
</body>

</html>