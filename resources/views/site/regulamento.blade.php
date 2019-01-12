@extends('site.layout.site')

@section('content')

	<div class="fh5co-loader"></div>
	
	<div id="page">
		@include("site.layout.menu_internal")
		@include("site.layout.banner")




		<div id="fh5co-course-categories">
		<div class="container">
			<div class="row animate-box">
					<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 text-center fh5co-heading">
						<h1 class="h1-title"><img src="{{asset('site/images/txt_regulamento.png')}}" alt="" class="img-responsive animate-box" style="width:310px;"></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center animate-box">
					<div class="services cooperativas">
						<div class="desc">

                            <?php for($i=1;$i<18;$i++){ ?>
                                <img class="img-responsive animate-box" src="{{asset('site/images/regulamento/'.$i.'.jpg')}}" alt="Regulamento">
                            <?php } ?>

                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>

		@include("site.partials.form")
		@include("site.partials.footer")

	</div>
@endsection

@push('scripts')
	<script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function () {
                scrollToDiv('#fh5co-course-categories');
            }, 600);
        });
	</script>
@endpush