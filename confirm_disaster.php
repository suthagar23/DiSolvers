<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DiSOL 2016|Externders </title>
    <link rel="stylesheet" href="../bottom_link/style.css"> <!-- Resource style -->
    <script src="../bottom_link/modernizr.js"></script> <!-- Modernizr -->

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- jVectorMap -->
    <link href="css/maps/jquery-jvectormap-2.0.3.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">

  </head>

  <body class="nav-md">



    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0; height: 65px;">
              <a href="index.html" class="site_title" style="height: 65px;">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                <span>DiSol</span>
              </a>
            </div>

            <div class="clearfix"></div>

            <!-- sidebar menu -->
            <?php include_once("left_menu.php"); ?>
            <!-- /sidebar menu -->

          </div>
        </div>

         <!-- top navigation -->
        <?php include_once("top_menu.php"); ?>
        <!-- /top navigation -->

        <div class="clearfix"></div>
        <!-- page content -->
            <div class="right_col" role="main"  >
              <div class="row" style="margin: 0px auto;">
                <div class="col-md-12 col-sm-12 col-xs-12" style="padding-top: 60px; margin: 0px auto; ">
                <div class="x_panel ui-ribbon-container">

                  <div class="x_content">
                    <div class="x_title" style="max-width: 500px;">
                      <h2><i class="fa fa-plus"></i> Confirm Disaster
                      </h2>
                      <div class="clearfix"></div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="@suthagar" disabled="true">
                      <span class="fa fa-mobile form-control-feedback left" aria-hidden="true"></span>
                    </div>

                    <div class="flex">
                      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-bullseye"></i>
                          </div>
                          <div class="count" style="font-size: x-large;">Tshunami</div>

                          <h5 style="padding-left: 5px;"><i class="fa fa-clock-o"></i> - 12:30pm today</h5>
                          <p> Currently located in Indonasia</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                      <button type="button" class="btn btn-info" style="  margin-left: 50px;  ">Locate my Place</button>
                      <i class="fa fa-check"> </i>
                      Colombo
                    </div>



                  </div>
                    <div class="row" style="margin-top: 7px;" >
                      <div class="col-md-10 col-sm-10 col-xs-10" style="float: none; margin: 0px auto;">
                        <a href="red_alert.php">
                          <button type="button" class="btn btn-danger" style="width: 100%; float: none; text-align: center;">
                            Confirm</button>
                        </a>
                      </div>
                    </div>



                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            DiSOL &copy; 2016 | Disaster Solvers | Provided by <a href="">Entenders</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/bernii/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="js/flot/jquery.flot.orderBars.js"></script>
    <script src="js/flot/date.js"></script>
    <script src="js/flot/jquery.flot.spline.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <!-- jVectorMap -->
    <script src="js/maps/jquery-jvectormap-2.0.3.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="js/moment/moment.min.js"></script>
    <script src="js/datepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>


    <!-- Flot -->
    <script>
      $(document).ready(function() {
        var data1 = [
          [gd(2012, 1, 1), 17],
          [gd(2012, 1, 2), 74],
          [gd(2012, 1, 3), 6],
          [gd(2012, 1, 4), 39],
          [gd(2012, 1, 5), 20],
          [gd(2012, 1, 6), 85],
          [gd(2012, 1, 7), 7]
        ];

        var data2 = [
          [gd(2012, 1, 1), 82],
          [gd(2012, 1, 2), 23],
          [gd(2012, 1, 3), 66],
          [gd(2012, 1, 4), 9],
          [gd(2012, 1, 5), 119],
          [gd(2012, 1, 6), 6],
          [gd(2012, 1, 7), 9]
        ];
        $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
          data1, data2
        ], {
          series: {
            lines: {
              show: false,
              fill: true
            },
            splines: {
              show: true,
              tension: 0.4,
              lineWidth: 1,
              fill: 0.4
            },
            points: {
              radius: 0,
              show: true
            },
            shadowSize: 2
          },
          grid: {
            verticalLines: true,
            hoverable: true,
            clickable: true,
            tickColor: "#d5d5d5",
            borderWidth: 1,
            color: '#fff'
          },
          colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
          xaxis: {
            tickColor: "rgba(51, 51, 51, 0.06)",
            mode: "time",
            tickSize: [1, "day"],
            //tickLength: 10,
            axisLabel: "Date",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial',
            axisLabelPadding: 10
          },
          yaxis: {
            ticks: 8,
            tickColor: "rgba(51, 51, 51, 0.06)",
          },
          tooltip: false
        });

        function gd(year, month, day) {
          return new Date(year, month - 1, day).getTime();
        }
      });
    </script>
    <!-- /Flot -->

    <!-- jVectorMap -->
    <script src="js/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/maps/jquery-jvectormap-us-aea-en.js"></script>
    <script src="js/maps/gdp-data.js"></script>
    <script>
      $(document).ready(function(){
        $('#world-map-gdp').vectorMap({
          map: 'world_mill_en',
          backgroundColor: 'transparent',
          zoomOnScroll: false,
          series: {
            regions: [{
              values: gdpData,
              scale: ['#E6F2F0', '#149B7E'],
              normalizeFunction: 'polynomial'
            }]
          },
          onRegionTipShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>
    <!-- /jVectorMap -->

    <!-- Skycons -->
    <script>
      $(document).ready(function() {
        var icons = new Skycons({
            "color": "#73879C"
          }),
          list = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
          ],
          i;

        for (i = list.length; i--;)
          icons.set(list[i], list[i]);

        icons.play();
      });
    </script>
    <!-- /Skycons -->

    <script>
      $(function() {
        $('.chart').easyPieChart({
          easing: 'easeOutElastic',
          delay: 3000,
          barColor: '#26B99A',
          trackColor: '#fff',
          scaleColor: false,
          lineWidth: 20,
          trackWidth: 16,
          lineCap: 'butt',
          onStep: function(from, to, percent) {
            $(this.el).find('.percent').text(Math.round(percent));
          }
        });
      });
    </script>

    <!-- Doughnut Chart -->
    <script>
      $(document).ready(function(){
        var options = {
          legend: false,
          responsive: false
        };

        new Chart(document.getElementById("canvas1"), {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              "Symbian",
              "Blackberry",
              "Other",
              "Android",
              "IOS"
            ],
            datasets: [{
              data: [15, 20, 30, 10, 30],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#E74C3C",
                "#26B99A",
                "#3498DB"
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#E95E4F",
                "#36CAAB",
                "#49A9EA"
              ]
            }]
          },
          options: options
        });
      });
    </script>
    <!-- /Doughnut Chart -->

    <!-- bootstrap-daterangepicker -->
    <script>
      $(document).ready(function() {

        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '12/31/2015',
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'MM/DD/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });
        $('#options1').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
          $('#reportrange').data('daterangepicker').remove();
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->

    <!-- gauge.js -->
    <script>
      var opts = {
          lines: 12,
          angle: 0,
          lineWidth: 0.4,
          pointer: {
              length: 0.75,
              strokeWidth: 0.042,
              color: '#1D212A'
          },
          limitMax: 'false',
          colorStart: '#1ABC9C',
          colorStop: '#1ABC9C',
          strokeColor: '#F0F3F3',
          generateGradient: true
      };
      var target = document.getElementById('foo'),
          gauge = new Gauge(target).setOptions(opts);

      gauge.maxValue = 6000;
      gauge.animationSpeed = 32;
      gauge.set(3200);
      gauge.setTextField(document.getElementById("gauge-text"));
    </script>
    <!-- /gauge.js -->




    <script src="../vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script>
      $(function() {
        $('.chart').easyPieChart({
          easing: 'easeOutElastic',
          delay: 3000,
          barColor: '#26B99A',
          trackColor: '#fff',
          scaleColor: false,
          lineWidth: 20,
          trackWidth: 16,
          lineCap: 'butt',
          onStep: function(from, to, percent) {
            $(this.el).find('.percent').text(Math.round(percent));
          }
        });
      });
    </script>
  </body>
</html>