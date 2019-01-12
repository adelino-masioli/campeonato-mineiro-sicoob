<div id="lk_formconsult"></div>
<div class="form-show-1" id="fh5co-register" style="background-image: url({{asset('site/images/img_bg_2.jpg')}});">
    <div class="container">
			<div class="row animate-box">
				<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 text-center fh5co-heading">
					<h1 class="h1-title"><img src="{{asset('site/images/txt_numero_da_sorte.png')}}" alt="" class="img-responsive animate-box"></h1>
				</div>
            </div>
    </div>
    
    <div class="row" >
        <div class="col-md-8 col-md-offset-2 animate-box">
            <div class="date-counter text-center">
                <div class="box-consult">
                    <form action="{{route('cupons.consult')}}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                        <input type="text" name="txt_document" id="txt_cupom" onkeypress="onlyNumber('#txt_cupom');" placeholder="Digite seu CPF ou CNPJ para consultar seus números da sorte:">
                        <input type="submit" id="btn_search_cupom" value="">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>