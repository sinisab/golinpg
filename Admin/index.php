<?php include("header_admin.php") ?>
<div class="wrapper">

 <?php include("nav_top.php");?>
</div>

  <?php include("sidebar.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $_SESSION['username']; ?>
        <small>Administrator</small>
      </h1>
      <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>
       
                <!-- /.row -->
                
<div class="row col-md-offset-1">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-table fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <?php
                        $query="SELECT * FROM sastanci";
                        $select_all_sastanci=mysqli_query($connection,$query);
                        $sastanci_counts=mysqli_num_rows($select_all_sastanci);
                        echo "<div class='huge'>{$sastanci_counts}</div>";
                        
                        
                        
                        ?>  
                        
                        
                        
                  
                        <div>Sastanci</div>
                    </div>
                </div>
            </div>
            <a href="sastanci.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php
                        $query="SELECT * FROM users";
                        $select_all_users=mysqli_query($connection,$query);
                        $users_counts=mysqli_num_rows($select_all_users);
                        echo "<div class='huge'>{$users_counts}</div>";
                        
                        
                        
                        ?> 
                        <div> Korisnici</div>
                    </div>
                </div>
            </div>
            <a href="users.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    
</div>
                <!-- /.row -->
    <div class="row col-md-offset-1">
       <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {

        var button = document.getElementById('change-chart');
        var chartDiv = document.getElementById('chart_div');

        var data = google.visualization.arrayToDataTable([
          ['Data', 'Count'],
            <?php
            $element_text=['Sastanci','Korisnici'];
            $element_count=[$sastanci_counts,$users_counts];
            for($i=0; $i<2; $i++){
                
                echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";
            }
            
            
            ?>
         
        ]);

        var materialOptions = {
          width: 900,
          chart: {
            title: '',
            subtitle: ''
          },
          series: {
            0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
            1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
          },
          axes: {
            y: {
              distance: {label: ''}, // Left y-axis.
              brightness: {side: 'right', label: ''} // Right y-axis.
            }
          }
        };

        var classicOptions = {
          width: 900,
          series: {
            0: {targetAxisIndex: 0},
            1: {targetAxisIndex: 1}
          },
          title: 'Nearby galaxies - distance on the left, brightness on the right',
          vAxes: {
            // Adds titles to each axis.
            0: {title: ''},
            1: {title: ''}
          }
        };

        function drawMaterialChart() {
          var materialChart = new google.charts.Bar(chartDiv);
          materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
          button.innerText = 'Change to Classic';
          button.onclick = drawClassicChart;
        }

        function drawClassicChart() {
          var classicChart = new google.visualization.ColumnChart(chartDiv);
          classicChart.draw(data, classicOptions);
          button.innerText = 'Change to Material';
          button.onclick = drawMaterialChart;
        }

        drawMaterialChart();
    };
    </script>
        <div id="chart_div" style="width: 'auto'; height: 500px;"></div>


      
      
      </div>
       
  </div>

<?php include("footer_admin.php") ?>