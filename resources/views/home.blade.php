@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Listagem de cupons <a class="btn btn-primary" href="{{url('create-list')}}">Criar nova lista de cupons</a> </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   @if(session('messageform'))
                        <div id="message-send" class="alert alert-<?php echo  \Session::get('messageclass'); ?>"><?php echo  \Session::get('messageform'); ?></div>
                    @else
                        <div id="message-send"></div>
                    @endif

                   <table class="table table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">CAMINHO DO ARQUIVO</th>
                                <th class="text-center">STATUS</th>                 
                                <th class="text-center">AÇÃO</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if ($data->count() > 0)
                        
                            @foreach ($data as $list)                        
                            <tr>
                                <td><a href="/upload/{{$list->document}}">{{$list->document}}</a></td>                            
                                <td>{{$list->status == 2 ? 'Processado' : 'Não Processado'}}</td>
                                <td class="text-center text-danger"><a href="{{url('create-list-destroy')}}/{{$list->id}}">EXCLUIR</a></td>
                            </tr>
                            @endforeach                        
                        @else
                            <tr>
                                <td colspan="3" class="text-center">Nenhum resultado</td>
                            </tr>
                        @endif
                        </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
