<div id="lk_section_five"></div>
<div class="form-show-1 fh5co-section-five" id="fh5co-section-one">
    <span class="fh5co-section-five-left"></span>
    <div class="container fh5co-section-five-content showrodadas" style="overflow:hidden;">
       @foreach($games as $game)
	<div class="row animate-box">
                <div class="col-xs-12 col-md-12 text-center fh5co-heading">
                        <h1 class="h1-title title-fuor">
                                @if($game->order <= 11)
                                A cada partida, novas emoções.<br/>
                                Confira os jogos da rodada.<br/>
        
                                <span class="ctrl pull-left icon icon-arrow-left" onclick="navigationStaging('left', '{{$game->id}}');"></span>
                                {{$game->title}}
                                <span class="ctrl pull-right icon icon-arrow-right" onclick="navigationStaging('right', '{{$game->id}}');"></span>
                                
                                @elseif($game->order > 12 && $game->order < 15)
                                Vão começar as semifinais
        
                                <span class="ctrl pull-left icon icon-arrow-left" onclick="navigationStaging('left', '{{$game->id}}');"></span>
                                <span class="ctrl pull-right icon icon-arrow-right" onclick="navigationStaging('right', '{{$game->id}}');"></span>
                               
                                @elseif($game->order > 14)
                                Agora que são elas:<br/>
                                chegaram os jogos da final.
        
                                <span class="ctrl pull-left icon icon-arrow-left" onclick="navigationStaging('left', '{{$game->id}}');"></span>
                                <span class="ctrl pull-right icon icon-arrow-right" onclick="navigationStaging('right', '{{$game->id}}');"></span>
                               

        
                                @else
                                Vão começar as Quartas de final
        
                                <span class="ctrl pull-left icon icon-arrow-left" onclick="navigationStaging('left', '{{$game->id}}');"></span>
                                <span class="ctrl pull-right icon icon-arrow-right" onclick="navigationStaging('right', '{{$game->id}}');"></span>
        
                                @endif
                        </h1>
                </div>

                
                
                <div class="col-xs-12 col-md-10 col-md-offset-1 text-center fh5co-heading results-play"> 

                        <div class="row">
                                @foreach(\App\Round::getRouds($game->id) as $round)
                                <div class="col-xs-12 col-sm-12 col-md-{{$game->order > 11 ? '8' : '6'}} col-md-offset-{{$game->order > 11 ? '2' : '3'}} text-center">
                                    <div class="row">
                                       
                                        <div class="col-xs-12 col-md-12 animated animate-box">
                                                <small class="datetimeround">{{$round->date}}</small>
                                        </div>
                                                        
                                        <div class="col-md-{{$game->order > 11 ? '3' : '5'}} showres animate-box">
                                                <img src="{{asset('escudos/'.$round->teamA->flag)}}" class="img-responsive" alt="{{$round->teamA->name}}">
                                                <p class="nametime">{{$round->teamA->name}}</p>
                                                <span class="placar">{{$round->result_a}}</span>
                                        </div>
                                        <div class="col-xs-2 col-md-2 showres showresx animate-box" style="{{$game->order > 11 ? 'min-height: 100px;' : ''}}"><h2>X</h2></div>
                                        <div class="col-md-{{$game->order > 11 ? '3' : '5'}} showres animate-box">
                                                <img src="{{asset('escudos/'.$round->teamB->flag)}}" class="img-responsive" alt="{{$round->teamB->name}}">
                                                <p class="nametime">{{$round->teamB->name}}</p>
                                                <span class="placar">{{$round->result_b}}</span>
                                        </div>

                                        @if($game->order > 11)
                                                <div class="hidden-xs col-md-4 teamlocal animated">                          
                                                        {{$round->city}}<br/>
                                                        {{$round->stadium}}
                                                </div>
                                        @endif

                                    </div>
                                </div>
                                @endforeach


                                @if($game->order > 12)
                                        <div class="col-md-12" style="background:#fff;min-height:700px;"> </div>
                                @endif
                        </div>
                </div>
            </div>
        </div>
        @endforeach 
    <span class="fh5co-section-five-right"></span>
</div>