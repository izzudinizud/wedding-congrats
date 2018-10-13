<!DOCTYPE html>
<html>
<head>
	<title>Samawa</title>
</head>

<style type="text/css">
	body
	{
		margin: 0;
		padding: 0;
		font-family: sans-serif;
		background: #262626;  
	}
	.box
	{
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		width: 600px;
		height: 400px;
		background: #001e2d;
		box-sizing: border-box;
		box-shadow: 0 20px 50px rgba(0,0,0,.5);
		border: 2px solid rgba(0,0,0,.5);
	}
	.box .about
	{
		position: absolute;
		top: 200px;
		left: 15px;
		right: 15px;
		bottom: -170px;
		border: 2px solid #fff;
		padding-top: 100px;
		box-shadow: 0 5px 10px rgba(0,0,0,.5);
	}

	.box svg,
	.box svg rect
	{
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		fill: transparent;
	}
	.box svg rect
	{
		stroke: #fff;
		stroke-width: 4;
		stroke-dasharray: 400;
		animation: animate 3s linear infinite;
	}
@keyframes animate
{
	0%
	{
		stroke-dashoffset: 800;
	}
	100%
	{
		stroke-dashoffset: 0;
	}
}


	.about
	{
		padding: 40px;
		color: #fff;
		text-align: center;
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
	}
	.about h2
	{
		margin: 0;
		padding: 0;
		font-size: 30px;
		text-transform: uppercase; 
	}
	.figure
	{
		width: 100%;
		height: 100%;
	}
	.figure:before
	{
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		width: 50%;
		height: 100%;
		background: url(/coba/wp/image/dery.jpg);
		transform-origin: bottom;
		transition: .5s; 
	}
	.box:hover .figure:before
	{
		transform: rotateX(90deg) translateY(50%);
	}
	.figure:after
	{
		content: '';
		position: absolute;
		top: 0;
		right: 0;
		width: 50%;
		height: 100%;
		background: url(/coba/wp/image/dery.jpg);
		transform-origin: top;
		transition: .5s; 
		background-position: 300px;
	}
	.box:hover .figure:after
	{
		transform: rotateX(90deg) translateY(-50%);
	}

</style>


<body>

	<div class="box">
		<svg><rect></rect></svg>
		<div class="about">
			<h2>Selamat Atas Pernikahanya Deryansyah</h2>
			<p>sory gw gk bisa hadir ya bro di karenakan ada tugas kuliah yang gk bisa gw tinggalin
			Sakinah Mawadah Warohmah ya Atas Pernikahan Lu ini, semoga langgeng sampe Akhir hayat yg memisahkan.</p><br></br>
			<p>#Izzudin Ijtra'a</p>
		</div>
		<div class="figure"></div>
	</div>


</body>
</html>