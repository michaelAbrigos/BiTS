<?php
$navbarName = 'Friends'
?>

@include('layouts.header')

<body class="">
  <div class="wrapper ">
    @include('layouts.sidenav')
    <div class="main-panel">
      @include('layouts.navbar')
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
               <div class="card card-profile">
                 <div class="card-avatar">
                   <a href="#pablo">
                     <img class="img" src="/img/faces/marc.jpg" />
                   </a>
                 </div>
                 <div class="card-body">
                   <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                   <h4 class="card-title">Alec Thompson</h4>
                   <p class="card-description">
                     Don't be scared of the truth because we need to restart the human
                     foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                   </p>
                   <a href="#pablo" class="btn btn-primary btn-round">Visit</a>
                 </div>
               </div>
             </div>
             <div class="col-md-4">
                <div class="card card-profile">
                  <div class="card-avatar">
                    <a href="#pablo">
                      <img class="img" src="/img/faces/marc.jpg" />
                    </a>
                  </div>
                  <div class="card-body">
                    <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                    <h4 class="card-title">Alec Thompson</h4>
                    <p class="card-description">
                      Don't be scared of the truth because we need to restart the human
                      foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                    </p>
                    <a href="#pablo" class="btn btn-primary btn-round">Visit</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                 <div class="card card-profile">
                   <div class="card-avatar">
                     <a href="#pablo">
                       <img class="img" src="/img/faces/marc.jpg" />
                     </a>
                   </div>
                   <div class="card-body">
                     <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                     <h4 class="card-title">Alec Thompson</h4>
                     <p class="card-description">
                       Don't be scared of the truth because we need to restart the human
                       foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                     </p>
                     <a href="#pablo" class="btn btn-primary btn-round">Visit</a>
                   </div>
                 </div>
               </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@include('layouts.custom-panel')
@include('layouts.footer-js')
