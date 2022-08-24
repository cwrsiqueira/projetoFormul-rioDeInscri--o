<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Status</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Idade</th>
                                <th scope="col">Sexo</th>
                                <th scope="col">Núcleo</th>
                                <th scope="col">Whatsapp</th>
                                <th scope="col">W.Resp.</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subs as $sub)
                                <tr>
                                    <th scope="row">{{ $sub->id }}</th>
                                    <td style="@if ($sub->status == 'novo') color:green;font-weight:bold; @endif">
                                        {{ $sub->status }}
                                    </td>
                                    <td>{{ $sub->uname }}</td>
                                    <td>{{ $sub->age }}</td>
                                    <td>{{ $sub->sexo }}</td>
                                    <td>{{ $sub->nucleo }}</td>
                                    <td>{{ $sub->phone1 }}</td>
                                    <td>{{ $sub->phone2 }}</td>
                                    <td><a href="{{ route('detalhar', ['id' => $sub->id]) }}">Detalhar</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
