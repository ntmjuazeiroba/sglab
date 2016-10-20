<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Escola;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Siem;


use App\Pessoa;


/**
 * Class EscolaController.
 *
 * @author  The scaffold-interface created at 2016-10-20 09:27:05am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class EscolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $escolas = Escola::all();
        return view('escola.index',compact('escolas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        $siems = Siem::all()->pluck('escola_nome','id');
        
        $pessoas = Pessoa::all()->pluck('nome','id');
        
        return view('escola.create',compact('siems' , 'pessoas'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $escola = new Escola();

        
        $escola->usuario = $request->usuario;

        
        $escola->inep = $request->inep;

        
        $escola->cep = $request->cep;

        
        $escola->distrito = $request->distrito;

        
        $escola->bairro = $request->bairro;

        
        $escola->logradouro = $request->logradouro;

        
        $escola->numero = $request->numero;

        
        $escola->complemento = $request->complemento;

        
        $escola->fone = $request->fone;

        
        $escola->email = $request->email;

        
        $escola->cel1 = $request->cel1;

        
        $escola->cel2 = $request->cel2;

        
        $escola->sigla = $request->sigla;

        
        $escola->possui_internet_escola = $request->possui_internet_escola;

        
        $escola->tipo_internet_escola = $request->tipo_internet_escola;

        
        $escola->status_escola = $request->status_escola;

        
        $escola->possui_lab = $request->possui_lab;

        
        $escola->possui_analista = $request->possui_analista;

        
        $escola->pessoa_id_analista = $request->pessoa_id_analista;

        
        $escola->tipo_sala = $request->tipo_sala;

        
        $escola->pregao1 = $request->pregao1;

        
        $escola->pregao2 = $request->pregao2;

        
        $escola->pregao3 = $request->pregao3;

        
        $escola->pregao4 = $request->pregao4;

        
        $escola->possui_internet_lab = $request->possui_internet_lab;

        
        $escola->tipo_internet_lab = $request->tipo_internet_lab;

        
        $escola->lab_montado = $request->lab_montado;

        
        $escola->qt_computadores_lab = $request->qt_computadores_lab;

        
        $escola->qt_monitorelab = $request->qt_monitorelab;

        
        $escola->status_lab = $request->status_lab;

        
        $escola->ar_condicionado_lab = $request->ar_condicionado_lab;

        
        $escola->impressora_lab = $request->impressora_lab;

        
        $escola->qt_notebook_lab = $request->qt_notebook_lab;

        
        $escola->roteador_lab = $request->roteador_lab;

        
        $escola->switch_lab = $request->switch_lab;

        
        $escola->qt_cadeiras_lab = $request->qt_cadeiras_lab;

        
        
        $escola->siem_id = $request->siem_id;

        
        $escola->pessoa_id = $request->pessoa_id;

        
        $escola->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new escola has been created !!']);

        return redirect('escola');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('escola/'.$id);
        }

        $escola = Escola::findOrfail($id);
        return view('escola.show',compact('escola'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('escola/'. $id . '/edit');
        }

        
        $siems = Siem::all()->lists('escola_nome','id');

        
        $pessoas = Pessoa::all()->lists('nome','id');

        
        $escola = Escola::findOrfail($id);
        return view('escola.edit',compact('escola' ,'siems', 'pessoas' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $escola = Escola::findOrfail($id);
    	
        $escola->usuario = $request->usuario;
        
        $escola->inep = $request->inep;
        
        $escola->cep = $request->cep;
        
        $escola->distrito = $request->distrito;
        
        $escola->bairro = $request->bairro;
        
        $escola->logradouro = $request->logradouro;
        
        $escola->numero = $request->numero;
        
        $escola->complemento = $request->complemento;
        
        $escola->fone = $request->fone;
        
        $escola->email = $request->email;
        
        $escola->cel1 = $request->cel1;
        
        $escola->cel2 = $request->cel2;
        
        $escola->sigla = $request->sigla;
        
        $escola->possui_internet_escola = $request->possui_internet_escola;
        
        $escola->tipo_internet_escola = $request->tipo_internet_escola;
        
        $escola->status_escola = $request->status_escola;
        
        $escola->possui_lab = $request->possui_lab;
        
        $escola->possui_analista = $request->possui_analista;
        
        $escola->pessoa_id_analista = $request->pessoa_id_analista;
        
        $escola->tipo_sala = $request->tipo_sala;
        
        $escola->pregao1 = $request->pregao1;
        
        $escola->pregao2 = $request->pregao2;
        
        $escola->pregao3 = $request->pregao3;
        
        $escola->pregao4 = $request->pregao4;
        
        $escola->possui_internet_lab = $request->possui_internet_lab;
        
        $escola->tipo_internet_lab = $request->tipo_internet_lab;
        
        $escola->lab_montado = $request->lab_montado;
        
        $escola->qt_computadores_lab = $request->qt_computadores_lab;
        
        $escola->qt_monitorelab = $request->qt_monitorelab;
        
        $escola->status_lab = $request->status_lab;
        
        $escola->ar_condicionado_lab = $request->ar_condicionado_lab;
        
        $escola->impressora_lab = $request->impressora_lab;
        
        $escola->qt_notebook_lab = $request->qt_notebook_lab;
        
        $escola->roteador_lab = $request->roteador_lab;
        
        $escola->switch_lab = $request->switch_lab;
        
        $escola->qt_cadeiras_lab = $request->qt_cadeiras_lab;
        
        
        $escola->siem_id = $request->siem_id;

        
        $escola->pessoa_id = $request->pessoa_id;

        
        $escola->save();

        return redirect('escola');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/escola/'. $id . '/delete/');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$escola = Escola::findOrfail($id);
     	$escola->delete();
        return URL::to('escola');
    }
}