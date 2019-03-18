<?php
$navbarName = 'History';
$historyButton = true;
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

<!-- Modal for input date -->
<div class="modal fade" id="inputDate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Search Date</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="date" name="startdate" value="">
        <input type="datetime" name="enddate" value="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
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
