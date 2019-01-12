<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListCupom;
use Image;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ListCupom::orderBy('id', 'asc')->get();
        return view('home', compact('data'));
    }

    public function createList()
    {
        return view('create_list');
    }

    public function storeList(Request $request)
    {
        try{
            if($request->hasFile('file')):
                $data   = $request->all();
                $file   = $request->file('file');
                $name   = Str::lower(date('H-i-s').'-'.$request->file('file')->getClientOriginalName());
                $path   = 'upload';

                $data['document']   = $name;
                $data['status']     = 1;
                $array               = ListCupom::create($data);

                if ($array->save()):
                     $pfile = public_path($path);
                     \File::makeDirectory($pfile, 0777, true, true);
                     $file->move($path, $name);

                    \Session::flash('messageclass', 'success');
                    \Session::flash('messageform', 'Arquivo enviado com suecesso!');
                    return back()->withInput();
                else:
                    \Session::flash('messageclass', 'danger');
                    \Session::flash('messageform', 'Erro ao enviar o arquivo!');
                    return back()->withInput();
                endif;
            else:
                \Session::flash('messageclass', 'info');
                \Session::flash('messageform', 'Favor selecionar um arquivo!');          
                return back()->withInput();
            endif;
        }catch(\Exception $e){
            \Session::flash('messageclass', 'danger');
            \Session::flash('messageform', 'Erro ao enviar o arquivo!');
            return back()->withInput();
        }
    }

    public function destroyList($id)
    {
        try{
            $id = $id;

            $document  = ListCupom::find($id);   
            
            if($document->status == 1){
                \File::delete('upload/'.$document->document);
                $document->delete();

                \Session::flash('messageclass', 'success');
                \Session::flash('messageform', 'Arquivo excluido com suecesso!');
                return back()->withInput();
            }else{
                \Session::flash('messageclass', 'danger');
                \Session::flash('messageform', 'Erro ao excluir o arquivo. Já foi <strong>PROCESSADO</strong> no sistema!');
                return back()->withInput();
            }
        
        }catch(\Exception $e){
            \Session::flash('messageclass', 'danger');
            \Session::flash('messageform', 'Erro ao excluir o arquivo!');
            return back()->withInput();
        }
    }



    public function submitform(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'txt_name'      => 'required',
            'txt_email'     => 'required',
            'txt_phone'     => 'required',
            'txt_uf'        => 'required',
            'txt_message'   => 'required',
            'txt_coop'      => 'required'
        ]);

        if ($validator->fails()) {
            session()->forget('lk_goto');
            session()->put('lk_goto', '#lk_contact');
            \Session::flash('messageclass', 'text-danger');
            \Session::flash('messageform', 'Favor preencher todos os campos!');
            return back()->withInput();
        }

        try{
            session()->forget('lk_goto');
            session()->put('lk_goto', '#lk_contact');
            \Session::flash('messageclass', 'text-success');
            \Session::flash('messageform', 'Contato enviado com suecesso!');

            $args = $request->only('txt_name', 'txt_email', 'txt_phone', 'txt_uf', 'txt_coop',   'txt_message');

            if($request->txt_coop == 'Crediminas'){
                $contact_dest = 'comunicacao@sicoobcrediminas.com.br';
            }else{
                $contact_dest = 'daniela.miranda@cecremge.org.br';
            }

            //$args['toc'] = [$contact_dest, 'alfjuniorbh.web@gmail.com'];
            $args['toc'] = [$contact_dest];

           \Mail::send("email.contato", $args, function($message)  use ($args){
                $message->from($args['txt_email'],'Cartão Premiado')
                    ->to($args['toc'])
                    ->subject('[Sicoob] Cartão Premiado');
            });
            
            return back();
        }catch(\Exception $e){
            session()->forget('lk_goto');
            session()->put('lk_goto', '#lk_contact');
            \Session::flash('messageclass', 'text-danger');
            \Session::flash('messageform', 'Erro ao eviar o formulário!');
            return back()->withInput();
        }
    }
}
