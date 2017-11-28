<?php

namespace App\Http\Controllers;

use App\Repositories\EmpresasRepositoryInterface;
use App\Repositories\VagasRepositoryInterface;
use Illuminate\Http\Request;

class VagasController extends Controller
{
    private $vagasRepository;
    private $empresaRepostory;

    public function __construct(VagasRepositoryInterface $vagasRepository,
                                EmpresasRepositoryInterface $empresasRepository)
    {
        $this->vagasRepository = $vagasRepository;
        $this->empresaRepostory = $empresasRepository;
    }

    public function index()
    {
        $vagas = $this->vagasRepository->getAll()->paginate(15);
        return view('admin.vagas.index', compact('vagas'));
    }

    public function create()
    {
        $empresas = $this->empresaRepostory->getAll()->pluck('nome', 'cnpj');
        return view('admin.vagas.create', compact('empresas'));
    }

    public function store(Request $request)
    {
        $send = $this->vagasRepository->create($request->except('_token'));

        if ($send['status'] == 100) {
            return redirect()->route('vagas.index')->with('msgCreate', $send['msg']);
        }

        return redirect()->route('vagas.create')
            ->with('msgFail', $send['msg'])
            ->withInput();
    }

}
