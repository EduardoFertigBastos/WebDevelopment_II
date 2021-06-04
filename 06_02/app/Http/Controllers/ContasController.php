<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conta;
use Exception;

/**
 * Class ContasController.
 *
 * @package namespace App\Http\Controllers;
 */
class ContasController extends Controller
{

    /**
     * ContasController constructor.
     *
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        try {
            $contas_list = Conta::orderBy('id')->get();

            return view('contas.index', compact('contas_list'));
        } catch (Exception $e) {
            $e;
        }

    }

    public function create()
    {
        return view('contas.create');
    }

    public function store(Request $request)
    {
        try {
            Conta::create($request->all());

            return redirect()->route('contas.index');
        } catch (Exception $e) {
            return $e;
        }
    }

    public function show(int $id)
    {
        try {
            $conta = Conta::find($id);

            return view('contas.show', compact('conta'));
        } catch (Exception $e) {
            return $e;
        }
    }
    public function edit(int $id)
    {
        try {
            $conta = Conta::find($id);

            return view('contas.edit', compact('conta'));
        } catch (Exception $e) {
            return $e;
        }
    }

    public function update(Request $request, int $id)
    {
        try {
            Conta::where('id', $id)->update($request->all());

            return redirect()->route('contas.index');
        } catch (Exception $e) {
            return $e;
        }
    }

    public function delete(int $id)
    {
        try {
            Conta::where('id', $id)->delete();

            return redirect()->route('contas.index');
        } catch (Exception $e) {
            return $e;
        }
    }
}
