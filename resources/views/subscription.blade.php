<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
                <form action="{{ route('change_status', ['id' => $sub->id]) }}" method="post">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="status" class="form-control">STATUS:</label>
                                <select name="status" id="status" class="form-control">
                                    <option @if ($sub->status == 'novo') selected @endif value="novo">Novo
                                    </option>
                                    <option @if ($sub->status == 'confirmado') selected @endif value="confirmado">
                                        Confirmado</option>
                                    <option @if ($sub->status == 'pendente') selected @endif value="pendente">Pendente
                                    </option>
                                    <option @if ($sub->status == 'cancelado') selected @endif value="cancelado">
                                        Cancelado</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="obs" class="form-control">OBSERVAÇÕES:</label>
                                <textarea name="obs" class="form-control">{{ $sub->obs }}</textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary mb-3">Salvar Alterações</button>
                </form>
                <div class="row">
                    <div class="col-sm-3">
                        DATA CADASTRO: <input disabled type="text" class="form-control"
                            value="{{ $sub->created_at }}">
                    </div>
                    <div class="col-sm-1">
                        ID: <input disabled type="text" class="form-control" value="{{ $sub->id }}">
                    </div>
                    <div class="col-sm">
                        NOME: <input disabled type="text" class="form-control" value="{{ $sub->uname }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        IDADE: <input disabled type="text" class="form-control" value="{{ $sub->age }}">
                    </div>
                    <div class="col-sm-2">
                        SEXO: <input disabled type="text" class="form-control" value="{{ $sub->sexo }}">
                    </div>
                    <div class="col-sm">
                        NÚCLEO: <input disabled type="text" class="form-control" value="{{ $sub->nucleo }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        WHATSAPP: <input disabled type="text" class="form-control" value="{{ $sub->phone1 }}">
                    </div>
                    <div class="col-sm">
                        WHAT RESP.: <input disabled type="text" class="form-control" value="{{ $sub->phone2 }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        SAÚDE:
                        <textarea class="form-control" disabled>{{ $sub->infosaude }}</textarea>
                    </div>
                    <div class="col-sm">
                        NECESSIDADES:
                        <textarea class="form-control" disabled>{{ $sub->infonecessidades }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        CÓD. INSC.: <input disabled type="text" class="form-control" value="{{ $sub->hash }}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm">
                        <a href="{{ $sub->autimgarquivo }}" target="_blank">Autorização de Imagem</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <a href="{{ $sub->autpaisarquivo }}" target="_blank">Autorização do Responsável</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <a href="{{ $sub->comppagto }}" target="_blank">Comprovante de Pagamento</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
