<div id="lk_contact"></div>
<div id="fh5co-contact">
    <div class="container">
        <div class="row animate-box">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 text-center fh5co-heading">
                    <h1 class="h1-title"><img src="{{asset('site/images/txt_contato.png')}}" alt="" class="img-responsive animate-box" style="width:200px;"></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-push-2 col-md-10 col-md-push-1 animate-box">
                <form action="{{route('submitform')}}" method="post">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
    
                    <div class="row form-group">
                        <div class="col-xs-12 col-md-6">
                            <label for="txt_name">Nome:</label>
                            <input type="text" name="txt_name" id="txt_name" class="form-control"  value="{{old('txt_name')}}" required>
                        </div>
                  
                        <div class="col-xs-12 col-md-6">
                            <label for="txt_name">E-mail:</label>
                            <input type="text" name="txt_email" id="txt_email" class="form-control"  value="{{old('txt_email')}}" required>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-xs-12 col-md-4">
                            <label for="txt_name">Telefone:</label>
                            <input type="text" name="txt_phone" id="txt_phone" class="form-control" value="{{old('txt_phone')}}" required>
                        </div>
                
                        <div class="col-xs-12 col-md-4">
                            <label for="txt_name">Estado:</label>

                            <select name="txt_uf" id="txt_uf" class="form-control" required>
                                <option value="MG">Minas Gerais</option>
                        </select>

                            <select name="txt_ufs" id="txt_ufs" class="form-control hidden" required>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                            </select>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <label for="txt_ntxt_coopame">Cooperativa:</label>
                            <select name="txt_coop" id="txt_coop" class="form-control" required>

                            <option value="Cecremge">SICOOB AC CREDI</option>
                                <option value="Cecremge">SICOB CREDIMED</option>
                                <option value="Cecremge">SICOOB AC CREDI</option>
                                <option value="Cecremge">SICOOB ACICREDI</option>
                                <option value="Crediminas">SICOOB AGROCREDI</option>
                                <option value="Cecremge">SICOOB ARACOOP</option>
                                <option value="Crediminas">SICOOB ARACREDI</option>
                                <option value="Cecremge">SICOOB ARCOMCREDI</option>
                                <option value="Cecremge">SICOOB ASCICRED</option>
                                <option value="Crediminas">SICOOB BELCREDI</option>
                                <option value="Crediminas">SICOOB CARLOS CHAGAS</option>
                                <option value="Crediminas">SICOOB CARMOCREDI</option>
                                <option value="Cecremge">SICOOB CECREF</option>
                                <option value="Cecremge">SICOOB CECREMEC</option>
                                <option value="Cecremge">SICOOB CENTRO-OESTE</option>
                                <option value="Cecremge">SICOOB COFAL</option>
                                <option value="Cecremge">SICOOB COOCREZ</option>
                                <option value="Crediminas">SICOOB COOPACREDI</option>
                                <option value="Cecremge">SICOOB COOPCREDI</option>
                                <option value="Cecremge">SICOOB COOPEMATA</option>
                                <option value="Cecremge">SICOOB COOPEMG</option>
                                <option value="Crediminas">SICOOB COOPEROSA</option>
                                <option value="Cecremge">SICOOB COOPJUS</option>
                                <option value="Cecremge">SICOOB COPERMEC</option>
                                <option value="Crediminas">SICOOB COPERSUL</option>
                                <option value="Cecremge">SICOOB COPESITA</option>
                                <option value="Cecremge">SICOOB COSMIPA</option>
                                <option value="Crediminas">SICOOB CREDCAM</option>
                                <option value="Crediminas">SICOOB CREDCOOPER</option>
                                <option value="Cecremge">SICOOB CREDESP</option>
                                <option value="Crediminas">SICOOB CREDIAGRO</option>
                                <option value="Crediminas">SICOOB CREDIALP</option>
                                <option value="Cecremge">SICOOB CREDIALTO</option>
                                <option value="Crediminas">SICOOB CREDIARA</option>
                                <option value="Crediminas">SICOOB CREDIBAM</option>
                                <option value="Crediminas">SICOOB CREDIBELO</option>
                                <option value="Crediminas">SICOOB CREDIBOM</option>
                                <option value="Crediminas">SICOOB CREDICAF</option>
                                <option value="Crediminas">SICOOB CREDICAMPINA</option>
                                <option value="Crediminas">SICOOB CREDICAMPO</option>
                                <option value="Crediminas">SICOOB CREDICAPI</option>
                                <option value="Crediminas">SICOOB CREDICARMO</option>
                                <option value="Crediminas">SICOOB CREDICARMOMINAS</option>
                                <option value="Crediminas">SICOOB CREDICARPA</option>
                                <option value="Cecremge">SICOOB CREDICENM</option>
                                <option value="Cecremge">SICOOB CREDICOM</option>
                                <option value="Crediminas">SICOOB CREDICOOP</option>
                                <option value="Cecremge">SICOOB CREDICOPA</option>
                                <option value="Crediminas">SICOOB CREDICOPE</option>
                                <option value="Crediminas">SICOOB CREDIESMERALDAS</option>
                                <option value="Crediminas">SICOOB CREDIFIEMG</option>
                                <option value="Crediminas">SICOOB CREDIFOR</option>
                                <option value="Cecremge">SICOOB CREDIGERAIS</option>
                                <option value="Crediminas">SICOOB CREDIGUAPÉ</option>
                                <option value="Crediminas">SICOOB CREDIJEQUITINHONHA</option>
                                <option value="Cecremge">SICOOB CREDILEITE</option>
                                <option value="Cecremge">SICOOB CREDILESTE</option>
                                <option value="Crediminas">SICOOB CREDILIVRE</option>
                                <option value="Crediminas">SICOOB CREDILUZ</option>
                                <option value="Crediminas">SICOOB CREDIMAC</option>
                                <option value="Crediminas">SICOOB CREDIMATA</option>
                                <option value="Cecremge">SICOOB CREDIMEPI</option>
                                <option value="Crediminas">SICOOB CREDIMIL</option>
                                <option value="Crediminas">SICOOB CREDIMONTE</option>
                                <option value="Cecremge">SICOOB CREDIMONTES</option>
                                <option value="Crediminas">SICOOB CREDINDAIÁ</option>
                                <option value="Crediminas">SICOOB CREDINOR</option>
                                <option value="Crediminas">SICOOB CREDINORTE</option>
                                <option value="Crediminas">SICOOB CREDINOSSO</option>
                                <option value="Cecremge">SICOOB CREDINOVA</option>
                                <option value="Crediminas">SICOOB CREDINTER</option>
                                <option value="Crediminas">SICOOB CREDIOESTE</option>
                                <option value="Crediminas">SICOOB CREDIPATOS</option>
                                <option value="Crediminas">SICOOB CREDIPEL</option>
                                <option value="Crediminas">SICOOB CREDIPÉU</option>
                                <option value="Crediminas">SICOOB CREDIPIMENTA</option>
                                <option value="Crediminas">SICOOB CREDIPINHO</option>
                                <option value="Cecremge">SICOOB CREDIPONTAL</option>
                                <option value="Crediminas">SICOOB CREDIPRATA</option>
                                <option value="Crediminas">SICOOB CREDIRAMA</option>
                                <option value="Crediminas">SICOOB CREDIRIODOCE</option>
                                <option value="Crediminas">SICOOB CREDISALES</option>
                                <option value="Crediminas">SICOOB CREDISÃOGONÇALO</option>
                                <option value="Crediminas">SICOOB CREDISAVI</option>
                                <option value="Crediminas">SICOOB CREDISETE</option>
                                <option value="Crediminas">SICOOB CREDISG</option>
                                <option value="Crediminas">SICOOB CREDISUCESSO</option>
                                <option value="Crediminas">SICOOB CREDISUDESTE</option>
                                <option value="Cecremge">SICOOB CREDITÁBIL</option>
                                <option value="Crediminas">SICOOB CREDITAMA</option>
                                <option value="Crediminas">SICOOB CREDITIROS</option>
                                <option value="Cecremge">SICOOB CREDITRIÂNGULO</option>
                                <option value="Cecremge">SICOOB CREDITRIL</option>
                                <option value="Crediminas">SICOOB CREDIUNA</option>
                                <option value="Crediminas">SICOOB CREDIVAG</option>
                                <option value="Crediminas">SICOOB CREDIVALE - 3053</option>
                                <option value="Cecremge">SICOOB CREDIVALE - 4031</option>
                                <option value="Crediminas">SICOOB CREDIVAR</option>
                                <option value="Crediminas">SICOOB CREDIVASS</option>
                                <option value="Crediminas">SICOOB CREDIVAZ</option>
                                <option value="Crediminas">SICOOB CREDIVERDE</option>
                                <option value="Crediminas">SICOOB CREDIVERTENTES</option>
                                <option value="Cecremge">SICOOB CREDPIT</option>
                                <option value="Cecremge">SICOOB DIVICRED</option>
                                <option value="Cecremge">SICOOB ENGECRED</option>
                                <option value="Crediminas">SICOOB FRUTAL</option>
                                <option value="Crediminas">SICOOB GUARANICREDI</option>
                                <option value="Crediminas">SICOOB ITAPAGIPE</option>
                                <option value="Cecremge">SICOOB JUS-MP</option>
                                <option value="Cecremge">SICOOB LAGOACRED</option>
                                <option value="Crediminas">SICOOB MONTECREDI</option>
                                <option value="Crediminas">SICOOB NOROESTE DE MINAS</option>
                                <option value="Cecremge">SICOOB NOSSACOOP</option>
                                <option value="Crediminas">SICOOB NOSSOCRÉDITO</option>
                                <option value="Cecremge">SICOOB PARAISOCRED</option>
                                <option value="Crediminas">SICOOB PROFISSIONAIS DA SAUDE</option>
                                <option value="Crediminas">SICOOB SACRAMENTO</option>
                                <option value="Cecremge">SICOOB SAROMCREDI</option>
                                <option value="Cecremge">SICOOB SERTÃO MINAS</option>
                                <option value="Cecremge">SICOOB SUL DE MINAS</option>
                                <option value="Crediminas">SICOOB UBERABA</option>
                                <option value="Crediminas">SICOOB UNIÃO</option>
                                <option value="Crediminas">SICOOB UNIÃO CENTRAL</option>
                                <option value="Crediminas">SICOOB UNIÃO CENTRO-OESTE</option>
                                <option value="Cecremge">SICOOB VALE DO AÇO</option>


                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="txt_name">Mensagem:</label>
                            <textarea name="txt_message" id="message" cols="30" rows="10" class="form-control" required>{{old('txt_message')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group btn-send">
                        <button value="Enviar" class="btn">Enviar</button>
                    </div>

                    <div class="form-group text-left">
                        <a href="https://www.facebook.com/cartaopremiadosicoobcard/?__tn__=%2Cd%2CP-R&eid=ARA6LUG-AGfmPOHEslo0FP3PrOudWYVCJbVcKAQgN5ByJPHNuDJ2UB1IkQ6AhbV2ldVRDXl03t_54_dL" target="_blank"><img src="{{asset('site/images/btn-face.png')}}" alt=""></a>
                    </div>



                    @if(Session::has('messageform'))
                        <div id="message-send" class="<?php echo  \Session::get('messageclass'); ?>"><?php echo  \Session::get('messageform'); ?></div>
                    @else
                        <div id="message-send"></div>
                    @endif

                </form>
            </div>
        </div>

    </div>
</div>