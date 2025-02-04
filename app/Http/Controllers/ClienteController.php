<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClienteRequest;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clientes = Cliente::paginate(5);

        return view('clientes/index', ['clientes' => $clientes]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes/cadastro');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateClienteRequest $request)
    {

        $arquivo = $request->file('cover');
        $arquivo->store('public/cliente');

        $dadosValidados = $request->validated();
        $dadosValidados['cover'] = $arquivo->hashName();

        Cliente::create($dadosValidados);

        session()->flash('success', 'Cliente cadastrado com sucesso!');

        return redirect()->route('cadastro.create');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);

        return view('partials/card', compact('cliente'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $cliente = Cliente::find($id);

        return view('clientes/edit', compact('cliente'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateClienteRequest $request, $id)
    {

         $clienteEncontrado = Cliente::find($id);

         $clienteEncontrado->update($request->all());

         session()->flash('edit', 'O registro foi atualizado com sucesso!');

         return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clienteEncontrado = Cliente::find($id);

        $clienteEncontrado->delete();

        session()->flash("delete", "O registro foi deletado com sucesso!");

        return redirect()->route('cliente');

    }
}
