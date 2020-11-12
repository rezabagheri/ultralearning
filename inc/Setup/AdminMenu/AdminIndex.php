<style>
 body {
     background-color: #f9f9fa
 }

 .flex {
     -webkit-box-flex: 1;
     -ms-flex: 1 1 auto;
     flex: 1 1 auto
 }

 @media (max-width:991.98px) {
     .padding {
         padding: 1.5rem
     }
 }

 @media (max-width:767.98px) {
     .padding {
         padding: 1rem
     }
 }

 .padding {
     padding: 5rem
 }

 .card {
     background: #fff;
     border-width: 0;
     border-radius: .25rem;
     box-shadow: 0 1px 3px rgba(0, 0, 0, .05);
     margin-bottom: 1.5rem
 }

 .card {
     position: relative;
     display: flex;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid rgba(19, 24, 44, .125);
     border-radius: .25rem
 }

 .list-item {
     position: relative;
     display: -ms-flexbox;
     display: flex;
     -ms-flex-direction: column;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word
 }

 .list-item.block .media {
     border-bottom-left-radius: 0;
     border-bottom-right-radius: 0
 }

 .list-item.block .list-content {
     padding: 1rem
 }

 .w-40 {
     width: 40px !important;
     height: 40px !important
 }

 .avatar {
     position: relative;
     line-height: 1;
     border-radius: 500px;
     white-space: nowrap;
     font-weight: 700;
     border-radius: 100%;
     display: -ms-flexbox;
     display: flex;
     -ms-flex-pack: center;
     justify-content: center;
     -ms-flex-align: center;
     align-items: center;
     -ms-flex-negative: 0;
     flex-shrink: 0;
     border-radius: 500px;
     box-shadow: 0 5px 10px 0 rgba(50, 50, 50, .15)
 }

 .avatar img {
     border-radius: inherit;
     width: 100%
 }

 .gd-primary {
     color: #fff;
     border: none;
     background: #448bff linear-gradient(45deg, #448bff, #44e9ff)
 }

 .flex {
     -webkit-box-flex: 1;
     -ms-flex: 1 1 auto;
     flex: 1 1 auto
 }

 .text-color {
     color: #5e676f
 }

 .text-sm {
     font-size: .825rem
 }

 .h-1x {
     height: 1.25rem;
     overflow: hidden;
     display: -webkit-box;
     -webkit-line-clamp: 1;
     -webkit-box-orient: vertical
 }

 .no-wrap {
     white-space: nowrap
 }

 .list-row .list-item {
     -ms-flex-direction: row;
     flex-direction: row;
     -ms-flex-align: center;
     align-items: center;
     padding: .75rem .625rem
 }

 .list-item {
     position: relative;
     display: -ms-flexbox;
     display: flex;
     -ms-flex-direction: column;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word
 }

 .list-row .list-item>* {
     padding-left: .625rem;
     padding-right: .625rem
 }

 .dropdown {
     position: relative
 }

 a:focus,
 a:hover {
     text-decoration: none
 }

 list-item {
     background: white
 }
</style>
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <?php 
        require_once(__DIR__."/templates-parts/navbar-top.php");
        ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashobord</h1>
          </div>

          <div class="row">

            <!-- Courses -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h2 font-weight-bold text-primary text-uppercase mb-1">Courses</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Classes (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h2 mb-1 font-weight-bold text-success text-uppercase mb-1">Active Classes</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tasks Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h2 mb-1 font-weight-bold text-info text-uppercase mb-1">Students</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">120</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h2 mb-1 font-weight-bold text-warning text-uppercase mb-1">Finished Classes</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">

            <div class="col-lg-6">

              <!-- Default Card Example -->
              <div class="card mb-4">
                <div class="card-header">
                  Default Card Example
                </div>
                <div class="card-body">
                  This card uses Bootstrap's default styling with no utility classes added. Global styles are the only things modifying the look and feel of this default card example.
                </div>
              </div>

              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
                </div>
                <div class="card-body">
                  The styling for this basic card example is created by using default Bootstrap utility classes. By using utility classes, the style of the card component can be easily modified with no need for any custom CSS!
                </div>
              </div>

            </div>

            <div class="col-lg-6">

              <!-- Dropdown Card Example -->
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Dropdown Card Example</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  Dropdown menus can be placed in the card header in order to extend the functionality of a basic card. In this dropdown card example, the Font Awesome vertical ellipsis icon in the card header can be clicked on in order to toggle a dropdown menu.
                </div>
              </div>

              <!-- Collapsable Card Example -->
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">Collapsable Card Example</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample" style="">
                  <div class="card-body">
                    This is a collapsable card example using Bootstrap's built in collapse functionality. <strong>Click on the card header</strong> to see the card body collapse and expand!
                  </div>
                </div>
              </div>

            </div>

          </div>

        </div>

    </div>
    <!-- End of Main Content -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $(function() {
        $("#sortable").sortable();
        $("#sortable").disableSelection();
    });
</script>
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row">
            <div class="col-sm-8">
                <div class="container-fluid d-flex justify-content-center">
                    <div class="list list-row card" id="sortable" data-sortable-id="0" aria-dropeffect="move">
                        <div class="list-item" data-id="13" data-item-sortable-id="0" draggable="true" role="option" aria-grabbed="false" style="">
                            <div><a href="#" data-abc="true"><span class="w-40 avatar gd-primary">P</span></a></div>
                            <div class="flex"> <a href="#" class="item-author text-color" data-abc="true">Patrick Linod</a>
                                <div class="item-except text-muted text-sm h-1x">For what reason would it be advisable for me to think about business content?</div>
                            </div>
                            <div class="no-wrap">
                                <div class="item-date text-muted text-sm d-none d-md-block">3 weeks ago</div>
                            </div>
                            <div>
                                <div class="item-action dropdown"> <a href="#" data-toggle="dropdown" class="text-muted" data-abc="true"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg> </a>
                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu"> <a class="dropdown-item" href="#" data-abc="true">See detail </a><a class="dropdown-item download" data-abc="true">Download </a><a class="dropdown-item edit" data-abc="true">Edit</a>
                                        <div class="dropdown-divider"></div> <a class="dropdown-item trash" data-abc="true">Delete item</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-item" data-id="9" data-item-sortable-id="0" draggable="true" role="option" aria-grabbed="false">
                            <div><a href="#" data-abc="true"><span class="w-40 avatar gd-info"><img src="https://img.icons8.com/bubbles/24/000000/user.png" alt="."></span></a></div>
                            <div class="flex"> <a href="#" class="item-author text-color" data-abc="true">Steven Hmpire</a>
                                <div class="item-except text-muted text-sm h-1x">Build a progressive web app using jQuery</div>
                            </div>
                            <div class="no-wrap">
                                <div class="item-date text-muted text-sm d-none d-md-block">2 days ago</div>
                            </div>
                            <div>
                                <div class="item-action dropdown"> <a href="#" data-toggle="dropdown" class="text-muted" data-abc="true"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg> </a>
                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu"> <a class="dropdown-item" href="#" data-abc="true">See detail </a><a class="dropdown-item download" data-abc="true">Download </a><a class="dropdown-item edit" data-abc="true">Edit</a>
                                        <div class="dropdown-divider"></div> <a class="dropdown-item trash" data-abc="true">Delete item</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-item" data-id="17" data-item-sortable-id="0" draggable="true" role="option" aria-grabbed="false" style="">
                            <div><a href="#" data-abc="true"><span class="w-40 avatar gd-warning">A</span></a></div>
                            <div class="flex"> <a href="#" class="item-author text-color" data-abc="true">Alan musk</a>
                                <div class="item-except text-muted text-sm h-1x">it be advisable for me to think about business content?</div>
                            </div>
                            <div class="no-wrap">
                                <div class="item-date text-muted text-sm d-none d-md-block">13/12 18</div>
                            </div>
                            <div>
                                <div class="item-action dropdown"> <a href="#" data-toggle="dropdown" class="text-muted" data-abc="true"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg> </a>
                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu"> <a class="dropdown-item" href="#" data-abc="true">See detail </a><a class="dropdown-item download" data-abc="true">Download </a><a class="dropdown-item edit" data-abc="true">Edit</a>
                                        <div class="dropdown-divider"></div> <a class="dropdown-item trash" data-abc="true">Delete item</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-item" data-id="8" data-item-sortable-id="0" draggable="true" role="option" aria-grabbed="false">
                            <div><a href="#" data-abc="true"><span class="w-40 avatar gd-success"><img src="https://img.icons8.com/doodle/24/000000/user-male.png" alt="."></span></a></div>
                            <div class="flex"> <a href="#" class="item-author text-color" data-abc="true">Lawrence Telon</a>
                                <div class="item-except text-muted text-sm h-1x">For what reason would it be advisable for me to think</div>
                            </div>
                            <div class="no-wrap">
                                <div class="item-date text-muted text-sm d-none d-md-block">02/11 18</div>
                            </div>
                            <div>
                                <div class="item-action dropdown"> <a href="#" data-toggle="dropdown" class="text-muted" data-abc="true"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg> </a>
                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu"> <a class="dropdown-item" href="#" data-abc="true">See detail </a><a class="dropdown-item download" data-abc="true">Download </a><a class="dropdown-item edit" data-abc="true">Edit</a>
                                        <div class="dropdown-divider"></div> <a class="dropdown-item trash" data-abc="true">Delete item</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-item" data-id="10" data-item-sortable-id="0" draggable="true" role="option" aria-grabbed="false" style="">
                            <div><a href="#" data-abc="true"><span class="w-40 avatar gd-danger"><img src="https://img.icons8.com/color/16/000000/administrator-male.png" alt="."></span></a></div>
                            <div class="flex"> <a href="#" class="item-author text-color" data-abc="true">Stuart Clark</a>
                                <div class="item-except text-muted text-sm h-1x">For what reason would, i think about business content?</div>
                            </div>
                            <div class="no-wrap">
                                <div class="item-date text-muted text-sm d-none d-md-block">1 day ago</div>
                            </div>
                            <div>
                                <div class="item-action dropdown"> <a href="#" data-toggle="dropdown" class="text-muted" data-abc="true"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg> </a>
                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu"> <a class="dropdown-item" href="#" data-abc="true">See detail </a><a class="dropdown-item download" data-abc="true">Download </a><a class="dropdown-item edit" data-abc="true">Edit</a>
                                        <div class="dropdown-divider"></div> <a class="dropdown-item trash" data-abc="true">Delete item</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-item" data-id="3" data-item-sortable-id="0" draggable="true" role="option" aria-grabbed="false">
                            <div><a href="#" data-abc="true"><span class="w-40 avatar gd-primary"><img src="https://img.icons8.com/bubbles/16/000000/administrator-male.png" alt="."></span></a></div>
                            <div class="flex"> <a href="#" class="item-author text-color" data-abc="true">Jordan Stephens</a>
                                <div class="item-except text-muted text-sm h-1x">For what reason would it be advisable for me to think about business</div>
                            </div>
                            <div class="no-wrap">
                                <div class="item-date text-muted text-sm d-none d-md-block">1 hour ago</div>
                            </div>
                            <div>
                                <div class="item-action dropdown"> <a href="#" data-toggle="dropdown" class="text-muted" data-abc="true"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg> </a>
                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu"> <a class="dropdown-item" href="#" data-abc="true">See detail </a><a class="dropdown-item download" data-abc="true">Download </a><a class="dropdown-item edit" data-abc="true">Edit</a>
                                        <div class="dropdown-divider"></div> <a class="dropdown-item trash" data-abc="true">Delete item</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright © Your Website 2020</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>