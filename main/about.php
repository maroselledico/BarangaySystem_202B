<html>
<head>
    <meta charset="UTF-8">
    <title>Barangay Information System</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="../js/morris/morris-0.4.3.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />

    <link href="../css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../css/select2.css" rel="stylesheet" type="text/css" />
    <script src="../js/jquery-1.12.3.js" type="text/javascript"></script>

</head>
<body>
<nav class="navbar navbar-inverse" style="border-radius:0px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img alt="Brand" src="../img/brgy55.png" style="width:50px; margin-top:-15px; "></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
         <li><a href="../pages/resident/login.php">Resident</a></li>
        <li><a href="about.php">About</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="wrapper row-offcanvas row-offcanvas-left">

<div class="breadcrumb">
    <h3>Welcome to About Page</h3>
</div>
<div style="width:100%; padding:40px;">
<center><h4><p>Barangay 55 is a barangay in the city of Caloocan. Its population as determined by the 2020 Census was 1,442. 
This represented 0.09% of the total population of Caloocan. The population of Barangay 55 grew from 1,438 in 1990 to 1,442 in 2020, an increase of 4 people over the course of 30 years. 
The latest census figures in 2020 denote a positive growth rate of 2.85%, or an increase of 180 people, from the previous population of 1,262 in 2015.
The household population of Barangay 55 in the 2015 Census was 1,262 broken down into 342 households or an average of 3.69 members per household.
Combining age groups together, those aged 14 and below, consisting of the young dependent population which include infants/babies, children and young adolescents/teenagers, make up an aggregate of 27.02% (341). Those aged 15 up to 64, roughly, the economically active population and actual or potential members of the work force, constitute a total of 68.46% (864). 
Finally, old dependent population consisting of the senior citizens, those aged 65 and over, total 4.52% (57) in all. The computed Age Dependency Ratios mean that among the population of Barangay 55, there are 39 youth dependents to every 100 of the working age population; 
 there are 7 aged/senior citizens to every 100 of the working population; and overall, there are 46 dependents (young and old-age) to every 100 of the working population. The median age of 27 indicates that half of the entire population of Barangay 55 are aged less than 27 and the other half are over the age of 27.
 <p></h4></center>
 </div>
</div>

</body>


<script src="../js/alert.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>


<script src="../js/morris/raphael-2.1.0.min.js" type="text/javascript"></script>
<script src="../js/morris/morris.js" type="text/javascript"></script>
<script src="../js/select2.full.js" type="text/javascript"></script>

<script src="../js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="../js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="../js/buttons.print.min.js" type="text/javascript"></script>

<script src="../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="../js/AdminLTE/app.js" type="text/javascript"></script>

<script type="text/javascript">
  $(function() {
      $("#table").dataTable({
         "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,5 ] } ],"aaSorting": []
      });
  });
</script>
</html>