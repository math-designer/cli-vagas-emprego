<?php

namespace App\Http\Controllers;

use App\Repositories\EmpresasRepositoryInterface;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    private $empresasRepository;

    public function __construct(EmpresasRepositoryInterface $empresasRepository)
    {
        $this->empresasRepository = $empresasRepository;
    }

    public function index()
    {
        $empresas = $this->empresasRepository->getAll()->paginate(15);

        return view('admin.empresas.index', compact('empresas'));
    }

    public function create()
    {
        return view('admin.empresas.create');
    }

    public function store(Request $request)
    {
        $send = $this->empresasRepository->create($request->except('_token'));

        if ($send['status'] == 100) {
            return redirect()->route('empresas.index')->with('msgCreate', $send['msg']);
        }

        return redirect()->route('empresas.create')
            ->with('msgFail', $send['msg'])
            ->withInput();
    }

}
