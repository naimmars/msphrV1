<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>MSP HRsoft</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css" />
    <!-- EOF CSS INCLUDE -->
</head>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">

        <!-- START PAGE SIDEBAR -->
        <div class="page-sidebar">
            <!-- START X-NAVIGATION -->
            <ul class="x-navigation">
                <li class="xn-logo">
                    <a href="index.html">MSP HRsoft</a>
                    <a href="#" class="x-navigation-control"></a>
                </li>
                <li class="xn-profile">
                    <a href="#" class="profile-mini">
                        <img src="assets/images/users/avatar.png" alt="John Doe" />
                    </a>
                    <div class="profile">
                        <div class="profile-image">
                            <img src="img/user-profile.png" alt="Naim Marsidi" />
                        </div>
                        <div class="profile-data">
                            <div class="profile-data-name">Naim Marsidi</div>
                            <div class="profile-data-title">Web Developer/Designer</div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="index.html"><span class="fa fa-user"></span> <span class="xn-text">View Profile</span></a>
                </li>
                <li>
                    <a href="timesheet.html"><span class="fa fa-upload"></span> <span class="xn-text">Timesheet</span></a>
                </li>
                <li class="active">
                    <a href="#"><span class="fa fa-upload"></span> <span class="xn-text">Leave</span></a>
                </li>
                <li>
                    <a href="salary.html"><span class="fa fa-file-o"></span> <span class="xn-text">Salary Slip</span></a>
                </li>
            </ul>
            <!-- END X-NAVIGATION -->
        </div>
        <!-- END PAGE SIDEBAR -->

        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
            <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                <!-- TOGGLE NAVIGATION -->
                <li class="xn-icon-button">
                    <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                </li>
                <!-- END TOGGLE NAVIGATION -->
                <!-- SIGN OUT -->
                <li class="xn-icon-button pull-right">
                    <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
                </li>
                <!-- END SIGN OUT -->
            </ul>
            <!-- END X-NAVIGATION VERTICAL -->

            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a>
                </li>
                <li class="active">View/Upload Leave Application</li>

            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="row">
                    <div class="row">
                        <div class="col-md-12">

                            <form class="form-horizontal">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong>Upload </strong>Leave Application</h3>
                                    </div>
                                    <!--
                                <div class="panel-body">
                                    <p>Add class <code>.form-group-separated</code> to form wrapper to get rows separated</p>
                                </div>
-->
                                    <div class="panel-body form-group-separated">

                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Name</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                    <input type="text" class="form-control" disabled/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Job Title</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-briefcase"></span></span>
                                                    <input type="text" class="form-control" disabled/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Client Site</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-institution"></span></span>
                                                    <input type="text" class="form-control" disabled/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Date of Application</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control">
                                                <?php
echo "Today is " . date("Y/m/d");
?>                                            
                                            </div>
                                           
                                        </div>
                                    </div>
                                        <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Start Date</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker">                                            
                                            </div>
                                            
                                        </div>
                                    </div>
                                        <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">End Date</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker">                                            
                                            </div>
                                           
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Leave Type</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-plane"></span></span>
                                                    <input type="text" class="form-control" disabled/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Attached Document</label>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="file" class="fileinput btn-primary" name="filename" id="filename" title="Browse file" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="panel-footer">
                                        <button class="btn btn-primary pull-right">Submit</button>
                                        <button class="btn btn-default pull-right">Clear Form</button>
                                    </div>
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong>View </strong>Leave Application</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-actions">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Leave Type</th>
                                                        <th>Start Date</th>
                                                        <th>End Date</th>
                                                        <th>Total Days</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr id="trow_1">
                                                        <td class="text-center">1</td>
                                                        <td><strong>Annual</strong>
                                                        </td>
                                                        <td><strong>13/02/2015</strong>
                                                        </td>
                                                        <td><strong>15/02/2015</strong>
                                                        </td>
                                                        <td><strong>3 Days</strong>
                                                        </td>
                                                    </tr>
                                                    <tr id="trow_2">
                                                        <td class="text-center">2</td>
                                                        <td><strong>Annual</strong>
                                                            <td><strong>02/01/2015</strong>
                                                            </td>
                                                            <td><strong>02/01/2015</strong>
                                                            </td>
                                                            <td><strong>1 Day</strong>
                                                            </td>
                                                        </td>
                                                    </tr>
                                                    <tr id="trow_1">
                                                        <td class="text-center">3</td>
                                                        <td><strong>Marriage</strong>
                                                            <td><strong>22/11/2014</strong>
                                                            </td>
                                                            <td><strong>30/11/2014</strong>
                                                            </td>
                                                            <td><strong>9 Days</strong>
                                                            </td>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>

            </div>
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->

    <!-- MESSAGE BOX-->
    <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
        <div class="mb-container">
            <div class="mb-middle">
                <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                <div class="mb-content">
                    <p>Are you sure you want to log out?</p>
                    <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                </div>
                <div class="mb-footer">
                    <div class="pull-right">
                        <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                        <button class="btn btn-default btn-lg mb-control-close">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MESSAGE BOX-->

    <!-- START PRELOADS -->
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
    <!-- START PLUGINS -->
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- END PLUGINS -->

    <!-- THIS PAGE PLUGINS -->
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
    <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
    <!-- END THIS PAGE PLUGINS -->

    <!-- START TEMPLATE -->

    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
</body>

</html>