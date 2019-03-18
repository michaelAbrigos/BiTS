<?php
$navbarName = 'Maps'
?>

@include('layouts.header')

<body class="">
  <div class="wrapper ">
    @include('layouts.sidenav')
    <div class="main-panel">
      @include('layouts.navbar')
      <!-- End Navbar -->
      <div id="map"></div>
    </div>
  </div>

@include('layouts.custom-panel')
@include('layouts.footer-js')

<script src="/demo/demo.js"></script>
<script>
  $(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    demo.initGoogleMaps();
  });
</script>
</body>

</html>
