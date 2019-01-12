<div id="my-numbers"></div>
<div id="fh5co-course-categories">

    <div class="col-md-12 img-table">
        <table class="table table-condensed tbl-numeros-sorte">
            <thead>
            <tr>
                <th class="col-md-8">Período considerado para <br/>distribuição dos Números da Sorte</th>
                <th class="col-md-4">Data disponibilização Números da<br/> Sorte referente ao período do hotsite</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-left">De 0h do dia 15/11/2017 até às 23h59m59s do dia 30/11/2017</td>
                <td>Até 15/12/2017</td>
            </tr>
            <tr>
                <td class="text-left">De 0h do dia 01/12/2017 até às 23h59m59s do dia 31/12/2017</td>
                <td>Até 17/01/2018</td>
            </tr>
            <tr>
                <td class="text-left">De 0h do dia 01/01/2018 até às 23h59m59s do dia 31/01/2018</td>
                <td>Até 20/02/2018</td>
            </tr>
            <tr>
                <td class="text-left">De 0h do dia 01/02/2018 até às 23h59m59s do dia 18/02/2017</td>
                <td>Até 01/03/2018</td>
            </tr>
            </tbody>
        </table>
    </div>


    <div class="container" id="sw-my-numbers">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading fh5co-heading-1">
                    <h1 class="h1-title"><img src="{{asset('site/images/txt_meus_numero_da_sorte.png')}}" alt="" class="img-responsive animate-box" style="width:400px;"></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center animate-box">
                <div class="results">
                    <div class="desc">
                        @if(Session::has('message_cupom'))
                            <h3>{!! Session::get('message_cupom') !!}</h3>
                        @endif
                        @if(Session::has('my_cupons'))
                            <table class="table table-condensed my-numbers">
                                <thead>
                                    <tr>
                                        <th class="text-center">CPF/CNPJ</th>
                                        <th class="text-center">REGIÃO</th>
                                        <th class="text-center">SÉRIE</th>
                                        <th class="text-center">Nº DA SORTE</th>
                                    </tr>
                                </thead>
                             <tbody>
                                @foreach(Session::get('my_cupons') as $my_cupon)
                                   
                                        <tr>
                                            <td>{{$my_cupon->document}}</td>
                                            <td>{{$my_cupon->singular}}</td>
                                            <td>{{$my_cupon->serie}}</td>
                                            <td>{{$my_cupon->cupom}}</td>
                                        </tr>
                                    
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>