@extends('welcome')


@section('content')
<div class="container">
	<center>
		<div class="well" style="width: 900px;">
			<div id="myCarousel" class="carousel slide">
	            <div class="carousel-inner">
	              <div class="item">
	                <img src="img/a.jpg" alt="">
	                
	              </div>
	              <div class="item">
	                <img src="img/b.jpg" alt="">
	               
	              </div>
	              <div class="item active">
	                <img src="img/c.jpg" alt="">
	               
	              </div>
	            </div>
	            <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	            <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
	         </div>
		</div>
		<div class="row">
			<div class="col-sm-5">
				<div class="well">

				</div>
				<div class="well"></div>
			</div>
		</div>
		
	</center>
	
</div>
<script type="text/javascript">
$('.carousel').carousel({
	interval: 2000
});
</script>
@endsection