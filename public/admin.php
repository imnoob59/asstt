<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!--Custom style.css-->
    <link rel="stylesheet" href="../assets/css/quicksand.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <!--Chartist CSS-->
    <link rel="stylesheet" href="../assets/css/chartist.min.css">
    <!--Datatable-->
    <link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">
    <!--Nice select -->
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <title>Scht Dashboard</title>
</head>

<body>
    <div class="loader-wrapper">
        <div class="loader-circle">
            <div class="loader-wave"></div>
        </div>
    </div>

    <!--AKHIR LOADER-->

    <!--Page Wrapper-->
    <div class="container-fluid">
        <div class="row header shadow-sm">
            <!--Logo-->
            <div class="col-sm-3 pl-0 text-center header-logo">
                <div class="bg-theme mr-3 pt-3 pb-2 mb-0">
                    <h3 class="logo"><a href="#" class="text-secondary logo"><i class="fa fa-rocket"></i> Scht<span class="small">admin</span></a></h3>
                </div>
            </div>
            <!--Logo-->

            <!--Header Menu-->
            <div class="col-sm-9 header-menu pt-2 pb-0">
                <div class="row">

                    <!--Menu Icons-->
                    <div class="col-sm-4 col-8 pl-0">
                        <!--Toggle sidebar-->
                        <span class="menu-icon" onclick="toggle_sidebar()">
                            <span id="sidebar-toggle-btn"></span>
                        </span>
                        <!--Toggle sidebar-->
                        <!--Notification icon-->
                        <div class="menu-icon">
                            <a class="" href="#" onclick="toggle_dropdown(this); return false" role="button" class="dropdown-toggle">
                                <i class="fa fa-bell"></i>
                                <span class="badge badge-danger">5</span>
                            </a>
                            <div class="dropdown dropdown-left bg-white shadow border">
                                <a class="dropdown-item" href="#"><strong>Notifications</strong></a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-primary">
                                            <i class="fa fa-bookmark"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Meeting</strong></h6>
                                            <p>You have a meeting by 8:00</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-secondary">
                                            <i class="fa fa-link"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Events</strong></h6>
                                            <p>Launching new programme</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-warning">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Personnel</strong></h6>
                                            <p>New employee arrival</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-center link-all" href="#">See all notifications ></a>
                            </div>
                        </div>
                        <!--Notication icon-->

                        <!--Inbox icon-->
                        <span class="menu-icon inbox">
                            <a class="" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="badge badge-danger">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mt-10 animated zoomInDown" aria-labelledby="dropdownMenuLink3">
                                <a class="dropdown-item" href="#"><strong>Unread messages</strong></a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <img class="align-self-center mr-3 rounded-circle" src="assets/img/profile.jpg" width="50px" height="50px" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Adam Abdulrahman</strong></h6>
                                            <p>How are you?</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <img class="align-self-center mr-3 rounded-circle" src="assets/img/profile.jpg" width="50px" height="50px" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Adam Abdulrahman</strong></h6>
                                            <p>How are you?</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <img class="align-self-center mr-3 rounded-circle" src="assets/img/profile.jpg" width="50px" height="50px" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Adam Abdulrahman</strong></h6>
                                            <p>How are you?</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-center link-all" href="#">View all messages</a>
                            </div>
                        </span>
                        <!--Inbox icon-->
                        <span class="menu-icon">
                            <i class="fa fa-th-large"></i>
                        </span>
                    </div>
                    <!--Menu Icons-->

                    <!--Search box and avatar-->
                    <div class="col-sm-8 col-4 text-right flex-header-menu justify-content-end">
                        <div class="search-rounded mr-3">
                            <input type="text" class="form-control search-box" placeholder="Enter keywords.." />
                        </div>
                        <div class="mr-4">
                            <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="assets/img/profile.jpg" alt="Adam" class="rounded-circle" width="40px" height="40px">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mt-13" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#"><i class="fa fa-user pr-2"></i> Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-power-off pr-2"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                    <!--Search box and avatar-->
                </div>
            </div>
            <!--Header Menu-->

            <!--AKHIR HEADER-->
        </div>

        <!--Main Content-->
        <div class="row main-content">
            <!--Sidebar left-->
            <div class="col-sm-3 col-xs-6 sidebar pl-0">
                <div class="inner-sidebar mr-3">
                    <!--Image Avatar-->
                    <div class="avatar text-center">
                        <img src="assets/img/client-img4.png" alt="" class="rounded-circle" />
                        <p><strong>Scht Devaloper</strong></p>
                        <span class="text-primary small"><strong>UI/UX Designer</strong></span>
                    </div>
                    <!--Image Avatar-->

                    <div class="sidebar-menu-container">
                        <ul class="sidebar-menu mt-4 mb-4">
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('dashboard'); return false" class=""><i class="fa fa-dashboard mr-3"> </i>
                                    <span class="none">Dashboard <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="dashboard">
                                    <li class="child"><a href="index.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Default</a></li>
                                    <li class="child"><a href="index2.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Analytics</a></li>
                                    <li class="child"><a href="index3.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Ecommerce</a></li>
                                    <li class="child"><a href="index4.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Cryptocurrency</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('charts'); return false" class=""><i class="fa fa-pie-chart mr-3"></i>
                                    <span class="none">Charts <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="charts">
                                    <li class="child"><a href="chart.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Chart JS</a></li>
                                    <li class="child"><a href="chartist.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Chartist JS</a></li>
                                    <li class="child"><a href="echarts.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Echarts JS</a></li>
                                    <li class="child"><a href="flot.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Flot JS</a></li>
                                    <li class="child"><a href="morris.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Morris JS</a></li>
                                    <li class="child"><a href="nvd3.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> NVD3 JS</a></li>
                                    <li class="child"><a href="sparkline.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Sparkline JS</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="icons.html" class=""><i class="fa fa-toggle-on mr-3"></i>
                                    <span class="none">Icons</span>
                                </a>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('ecommerce'); return false" class=""><i class="fa fa-shopping-cart mr-3"></i>
                                    <span class="none">Ecommerce <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="ecommerce">
                                    <li class="child"><a href="products.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> ProductList</a></li>
                                    <li class="child"><a href="product-detail.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> ProductDetail</a></li>
                                    <li class="child"><a href="orders.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> OrderList</a></li>
                                    <li class="child"><a href="invoice.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Invoice</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('pages'); return false" class=""><i class="fa fa-file mr-3"></i>
                                    <span class="none">Pages <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="pages">
                                    <li class="child"><a href="email-inbox.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Email-Inbox</a></li>
                                    <li class="child"><a href="email.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Email-Compose</a></li>
                                    <li class="child"><a href="login.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Login</a></li>
                                    <li class="child"><a href="register.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Signup</a></li>
                                    <li class="child"><a href="lockscreen.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Lock Screen</a></li>
                                    <li class="child"><a href="forgot-password.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Forgot Password</a></li>
                                    <li class="child"><a href="profile.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Profile</a></li>
                                    <li class="child"><a href="gallery.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Gallery</a></li>
                                    <li class="child"><a href="invoice.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Invoice</a></li>
                                    <li class="child"><a href="search-result.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Search</a></li>
                                    <li class="child"><a href="pricing.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Pricing</a></li>
                                    <li class="child"><a href="blank.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Blank Page</a></li>
                                    <li class="child"><a href="error-404.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Error 404</a></li>
                                    <li class="child"><a href="error-500.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Error 500</a></li>
                                    <li class="child"><a href="error-504.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Error 504</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--Sidebar left-->
                </div>
            </div>
            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0">
                <h5 class="mb-0"><strong>Orders</strong></h5>
                <span class="text-secondary">Ecommerce <i class="fa fa-angle-right"></i> orders</span>
                <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
                    <div class="product-list">
                        <div class="row border-bottom mb-4">
                            <div class="col-sm-8 pt-2">
                                <h6 class="mb-4 bc-header">Order listing</h6>
                            </div>
                            <div class="col-sm-4 text-right pb-3">
                                <button type="button" id="add_data" class="btn btn-danger">Add
                                </button>


                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="table-responsive product-list">
                            <table class="table table-bordered table-striped mt-3" id="sample_data">
                                <thead>
                                    <tr>
                                        <th>TeleID</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

                <div class="modal" tabindex="-1" id="action_modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="post" id="sample_form">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="dynamic_modal_title">Add Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">First Name</label>
                                        <input type="text" name="first_name" id="first_name" class="form-control" />
                                        <span id="first_name_error" class="text-danger"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" name="last_name" id="last_name" class="form-control" />
                                        <span id="last_name_error" class="text-danger"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Gender</label>
                                        <select name="gender" id="gender" class="form-control">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Age</label>
                                        <input type="number" name="age" id="age" class="form-control" />
                                        <span id="age_error" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id" id="id" value="" />
                                    <input type="hidden" name="action" id="action" value="Add" />
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" id="action_button">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Main Content-->
                <div class="row mt-5 mb-4 footer">
                    <div class="col-sm-8">
                        <span>&copy; All rights reserved 2012 designed by <a class="text-info" href="#">SCH-T DEVALOPER</a></span>
                    </div>
                </div>
            </div>
        </div>

        <!--DIV AKHIR CTF-->
    </div>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery-1.12.4.min.js"></script>
    <!--Popper JS-->
    <script src="../assets/js/popper.min.js"></script>
    <!--Bootstrap-->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!--Sweet alert JS-->
    <script src="../assets/js/sweetalert.js"></script>
    <!--Progressbar JS-->
    <script src="../assets/js/progressbar.min.js"></script>
    <!--Datatable-->
    <script src="../assets/js/jquery.dataTables.min.js"></script>
    <script src="../assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/custom.js"></script>

    <script>
        $(document).ready(function() {

            load_data();

            function load_data() {
                var seconds = new Date() / 1000;

                $.getJSON("config/data.json?" + seconds + "", function(data) {

                    data.sort(function(a, b) {
                        return b.id - a.id
                    });

                    var data_arr = [];

                    for (var count = 0; count < data.length; count++) {
                        var sub_arr = {
                            'first_name': data[count].first_name,
                            'last_name': data[count].last_name,
                            'gender': data[count].gender,
                            'age': data[count].age,
                            'action': '<button type="button" class="btn btn-warning btn-sm edit" data-id="' + data[count].id + '">Edit</button>&nbsp;<button type="button" class="btn btn-danger btn-sm delete" data-id="' + data[count].id + '">Delete</button>'
                        };

                        data_arr.push(sub_arr);
                    }

                    console.log(data_arr);

                    $('#sample_data').DataTable({
                        data: data_arr,
                        order: [],
                        columns: [{
                                data: "first_name"
                            },
                            {
                                data: "last_name"
                            },
                            {
                                data: "gender"
                            },
                            {
                                data: "age"
                            },
                            {
                                data: "action"
                            },
                        ]
                    });

                });

            }





            $('#add_data').click(function() {

                $('#dynamic_modal_title').text('Add Data');

                $('#sample_form')[0].reset();

                $('#action').val('Add');

                $('#action_button').text('Add');

                $('.text-danger').text('');

                $('#action_modal').modal('show');

            });

            $('#sample_form').on('submit', function(event) {

                event.preventDefault();

                $.ajax({
                    url: "config/action.php",
                    method: "POST",
                    data: $('#sample_form').serialize(),
                    dataType: "JSON",
                    beforeSend: function() {
                        $('#action_button').attr('disabled', 'disabled');
                    },
                    success: function(data) {
                        $('#action_button').attr('disabled', false);
                        if (data.error) {
                            if (data.error.first_name_error) {
                                $('#first_name_error').text(data.error.first_name_error);
                            }
                            if (data.error.last_name_error) {
                                $('#last_name_error').text(data.error.last_name_error);
                            }

                            if (data.error.age_error) {
                                $('#age_error').text(data.error.age_error);
                            }
                        } else {
                            $('#message').html('<div class="alert alert-success">' + data.success + '</div>');
                            $('#action_modal').modal('hide');

                            $('#sample_data').DataTable().destroy();

                            load_data();

                            setTimeout(function() {
                                $('#message').html('');
                            }, 5000);
                        }
                    }
                });

            });

            $(document).on('click', '.edit', function() {

                var id = $(this).data('id');

                $('#dynamic_modal_title').text('Edit Data');

                $('#action').val('Edit');

                $('#action_button').text('Edit');

                $('.text-danger').text('');

                $('#action_modal').modal('show');

                $.ajax({
                    url: "config/action.php",
                    method: "POST",
                    data: {
                        id: id,
                        action: 'fetch_single'
                    },
                    dataType: "JSON",
                    success: function(data) {
                        $('#first_name').val(data.first_name);
                        $('#last_name').val(data.last_name);
                        $('#gender').val(data.gender);
                        $('#age').val(data.age);
                        $('#id').val(data.id);
                    }
                });

            });

            $(document).on('click', '.delete', function() {

                var id = $(this).data('id');

                if (confirm("Are you sure you want to delete this data?")) {
                    $.ajax({
                        url: "config/action.php",
                        method: "POST",
                        data: {
                            action: 'delete',
                            id: id
                        },
                        dataType: "JSON",
                        success: function(data) {
                            $('#message').html('<div class="alert alert-success">' + data.success + '</div>');

                            $('#sample_data').DataTable().destroy();

                            load_data();

                            setTimeout(function() {
                                $('#message').html('');
                            }, 5000);
                        }
                    });
                }

            });


        });
    </script>
</body>

</html>