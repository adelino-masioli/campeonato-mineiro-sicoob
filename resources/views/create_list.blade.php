@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastro de listas de cupons <a class="btn btn-primary" href="{{url('home')}}">Voltar para listagem</a></div>

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


                   <form method="post" action="create-list-store" enctype="multipart/form-data">
                   <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                        <div class="form-group">
                            <label for="file">Selecione o arquivo</label>
                            <input type="file" name="file" id="file">
                            <p class="help-block">Somente arquivos .CSV</p>
                        </div>
                        <button type="submit" class="btn btn-default">Enviar</button>
                  </form>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
