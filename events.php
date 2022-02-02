<?php include("header.php"); ?>
<!-- </head> -->
<div class="banner-inner">
</div>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.php">Home</a>
  </li>
  <li class="breadcrumb-item active">Event</li>
</ol>
<!--//banner-->
<!--/main-->
<section class="main-content-w3layouts-agileits">
  <div class="container">
    <div class="section-title">
      <h2>Event</h2>
      <p>Check our Events</p>
    </div>
    <section id="features" class="features">
      <div class="container">
        <style>
          * {
            box-sizing: border-box;
          }

          body {
            font-family: Arial, Helvetica, sans-serif;
          }

          /* Float four columns side by side */
          .column {
            float: left;
            width: 25%;
            padding: 0 10px;
          }

          /* Remove extra left and right margins, due to padding */
          .row {
            margin: 0 -5px;
          }

          /* Clear floats after the columns */
          .row:after {
            content: "";
            display: table;
            clear: both;
          }

          /* Responsive columns */
          @media screen and (max-width: 600px) {
            .column {
              width: 100%;
              display: block;
              margin-bottom: 20px;
            }
          }

          /* Style the counter cards */
          .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            background-color: #f1f1f1;
          }

          /* CSS */
          .button-1 {
            background-color: green;
            border-radius: 8px;
            border-style: none;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            font-weight: 500;
            height: 40px;
            line-height: 20px;
            list-style: none;
            margin: 0;
            outline: none;
            padding: 10px 16px;
            position: relative;
            text-align: center;
            text-decoration: none;
            transition: color 100ms;
            vertical-align: baseline;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
          }

          .button-1:hover,
          .button-1:focus {
            background-color: #808080;
          }

          .button-2 {
            background-color: green;
            border-radius: 8px;
            border-style: none;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            font-weight: 500;
            height: 40px;
            line-height: 20px;
            list-style: none;
            margin: 0;
            outline: none;
            padding: 10px 16px;
            position: relative;
            text-align: center;
            text-decoration: none;
            transition: color 100ms;
            vertical-align: baseline;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
          }

          .button-2:hover,
          .button-2:focus {
            background-color: #808080;
          }
        </style>

        <body>
          <section class="main-content-w3layouts-agileits">

            <div class="container">
              <br />

              <div class="row">
                <div class="container mt-3 pt-2">
                  <!-- <h4 class="text-center text-white">Upcoming Events</h4> -->

                  <?php
                  include "bpms/db_connect.php";
                  $query = "select * from lada";
                  $result = mysqli_query($conn, $query);
                  ?>

                  <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <div class="card mb-3" style="max-width: 740px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img class="bd-placeholder-img" width="250" height="250" src="bpms/assets/uploads/<?php echo $row['image'] ?>" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" role="img">
                          <title>Placeholder</title>
                          <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6" dy=".3em"></text></svg>
                          <!-- <img src="bpms/assets/uploads/<?php echo $row['image'] ?>"alt="..." class="img-fluid rounded-start"> -->

                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h3 class="card-title"> <?php echo $row['file_name'] ?></h3>
                            <!-- <h4 class ="card-title">  <?php echo $row['file_code'] ?></h4> -->
                            <p class="card-text"><?php echo $row['file_code'] ?></p>

                            <!-- <a href="#event" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Register</a>
                  -->

                            <button data-id='<?php echo $row['id']; ?>' class="button-2 userinfo btn btn-success">View Detail </button>

                            <button class="button-1 btn btn-success btn-sm register btn-flat" data-id="<?php echo $row['id']; ?>"><i class="fa fa-edit"></i> Register </button>


                          </div>
                        </div>

                      </div>
                    </div>
                  <?php } ?>
                  </table>
                </div>
              </div>
            </div>
      </div>
  </div>
  </div>
  </div>
  </div>
  </div>


  <script type='text/javascript'>
    $(document).ready(function() {
      $('.userinfo').click(function() {
        var userid = $(this).data('id');
        $.ajax({
          url: 'ajax.php',
          type: 'post',
          data: {
            userid: userid
          },
          success: function(response) {
            $('.modal-body').html(response);
            $('#empModal').modal('show');
          }
        });
      });
    });
  </script>

  </div>
  <div class="modal fade" id="empModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div style="background-color:green;" class="modal-header">
          <h4 style="color:white;" class="modal-title">Event Detail</h4>
          <button style="color:white;" type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  </div>

  <script type='text/javascript'>
    $(document).ready(function() {
      $('.register').click(function() {
        var userid = $(this).data('id');
        $.ajax({
          url: 'register.php',
          type: 'post',
          data: {
            userid: userid
          },
          success: function(response) {
            $('.modal-body').html(response);
            $('#register').modal('show');
          }
        });
      });
    });
  </script>

  </div>
  <div class="modal fade" id="register" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div style="background-color:green;" class="modal-header">
          <h4 style="color:white;" class="modal-title">Registration</h4>
          <button style="color:white;" type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
        </div>
        <!-- <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div> -->
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </body>

  </html>

</section>
<?php include("footer.php"); ?>