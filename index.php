<?php 

    require_once('php/connect.php');
    $sql = "SELECT * FROM `articles` WHERE `status` = 'true' ORDER BY RAND() LIMIT 6";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>THAI METROLOGY CRM</title>
    
<!-- Section Meta tag -->
    <?php include_once('includes/meta.php') ?>
<!-- CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
<!-- Section Navbar -->
    <?php include_once('includes/navbar.php') ?>

<!-- Section Carousel -->
    <section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-img" style="background-image: url('https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=74be18f074e19e06a51221f0f09969df&auto=format&fit=crop&w=1280&q=80') ;">
                    <div class="carousel-caption">
                        <h1 class="display-4 font-weight-bold">ยินดีต้อนรับ ท่านเข้าสู่ระบบ CRM</h1>
                    </div>
                    <div class="backscreen"></div>
                </div>
            </div>
           <div class="carousel-item">
                <div class="carousel-img" style="background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-0.3.5&s=d8791fe0f9f4e735158400f9daf6a558&auto=format&fit=crop&w=1280&q=80') ;">
                    <div class="carousel-caption">
                        <h1 class="display-4 font-weight-bold">TMG MEMBER CARD</h1>
                        <p class="lead">#</p>
                    </div>
                    <div class="backscreen"></div>
                </div>
            </div>
             <div class="carousel-item">
                <div class="carousel-img" style="background-image: url('https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?ixlib=rb-0.3.5&s=17460aa3d0fd3eb2fb7162edafc37175&auto=format&fit=crop&w=1280&q=80') ;">
                    <div class="carousel-caption">
                        <h1 class="display-4 font-weight-bold">TMC MEMBER CARD</h1>
                        <p class="lead">#</p>
                    </div>
                    <div class="backscreen"></div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>


<!-- Section Footer -->
    <?php include_once('includes/footer.php') ?>
    <?php include_once('php/userlogs.php') ?>

<!-- Section On to Top -->
    <div class="to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
    <!-- Chart Report -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN7pVYXyLuKkftPkDMFhpTjov4MYVxTnY&callback=initMap"></script>
    <script src="assets/js/main.js"></script>

    <script>
var ctx = document.getElementById("myChart").getContext('2d');
var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php echo $datebuy;?>
    
        ],
        datasets: [{
            label: 'รายงานภาพรวม แยกตามวันที่ & ปี (บาท)',
            data: [<?php echo $totol;?>
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255,0,0,0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(153, 50, 255, 0.6)',
                'rgba(0,51,255,0.6)',
                'rgba(51,153,102,0.6)',
                'rgba(102,153,51,0.6)',
                'rgba(255,51,0,0.6)',
                'rgba(204,204,70,0.8)',
                'rgba(153,255,0,0.6)',
                'rgba(204,0,255,0.6)',
                'rgba(187,187,187,0.8)',
                'rgba(153,51,255,0.6)',
                'rgba(204,255,255,1)',
                'rgba(102,153,255,0.6)',
                'rgba(102,255,255,0.6)',
                'rgba(51,102,0,0.6)',
                'rgba(0,0,102,0.6)',
                'rgba(102,0,0,0.6)',
                'rgba(0,255,0,0.6)',
                'rgba(255,0,255,0.6)',
                'rgba(255,255,0,0.6)',
                'rgba(204,255,0,0.6)',
                'rgba(0,255,204,0.6)',
                'rgba(0,0,0,0.6)',
                'rgba(153,153,0,0.6)',
                'rgba(255,51,51,0.6)',
                'rgba(255,153,0,0.6)',
                'rgba(102,204,0,0.6)',
                'rgba(255, 159, 64, 0.6)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
	</script>
</body>
</html>