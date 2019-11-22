<!DOCTYPE html>
<html>
<head>
	<title>Home Registrasi</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/bootstrap/css/bootstrap.css") ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/customcss/home.css") ?>">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>

<body class="background register-page">
	<!-- menu bar -->
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><img src="assets/image/logo.png"></a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right" id="main-menu">
					<li role="presentation" class=""><a href="index.php"><b>Beranda</b></a></li>
					<li role="presentation"><a href="<?php echo base_url("login") ?>"><b>Masuk</b></a></li>
					<li role="presentation"><a href="<?php echo base_url("daftar") ?>"><b>Daftar</b></a></li>
				</ul>
			</div> 
		</div> 
	</nav>
	<header class="register">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1 style="padding-top: 100px;">Selamat Datang di<br>Sistem Informasi Pendaftaran Magang</h1>
					<p align="text-align:justify;"><span class="color: #fffff;"><b>PT.Integra Inovasi Indonesia</b></span></p>


					<div style="margin-top: 30px;">
						<a href="<?php echo base_url("daftar") ?>" class="btn btn-hijau btn-lg">Daftar Sekarang</a>
					</div>
				</div>
				<div class="col-md-6 text-center" id="grafik" style="padding-top: 100px"></div>
			</div>
		</div>
	</header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js") ?>"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script>
	
//Highcharts.chart('grafik', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie',
        backgroundColor: 'transparent'
    },
    title: {
        text: 'Grafik Magang Integra Inovasi Indonesia <?php echo date('Y') ?>'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y}</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.y} ',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Orang',
        colorByPoint: true,
        data: [

        <?php foreach ($grafik as $key => $value): ?>
        	
        
        {
            name: '<?php echo $value["bulan"] ?>',
            y: <?php echo $value['total'] ?>,
            sliced: true,
            selected: true
        },
        <?php endforeach ?> 
        ]
    }]
//});
</script>
</body>
</html>