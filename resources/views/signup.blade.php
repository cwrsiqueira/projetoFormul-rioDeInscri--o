<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Caminhada na Floresta | Inscrição</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/assets/css/signup.css') }}">
</head>

<body>
    <div class="container mt-3">
        <a href="{{ route('home') }}">
            <<< Página Inicial</a>
                <h1>Núcleo Jardim Florido <small>14ª Região</small></h1>
                <h3>Ficha de Inscrição e Autorizações Legais</h3>
                <hr>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('registrar') }}" method="POST" class="was-validated mb-3"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row mt-3">

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="uname" class="form-label">Nome Completo:</label>
                                <input type="text" class="form-control" id="uname" value="{{ old('uname') }}"
                                    placeholder="Digite seu nome completo" name="uname" required>
                                <div class="valid-feedback">Ok</div>
                                <div class="invalid-feedback">Campo obrigatório.</div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label for="age" class="form-label">Idade:</label>
                                <input type="number" class="form-control" id="age" placeholder="Digite sua idade"
                                    name="age" value="{{ old('age') }}" required>
                                <div class="valid-feedback">Ok</div>
                                <div class="invalid-feedback">Campo obrigatório.</div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label for="sexo" class="form-label">Sexo:</label>
                                <select name="sexo" id="sexo" class="form-control">
                                    <option @if (old('sexo') == 'out') selected @endif value="out"
                                        class="form-control">Outros</option>
                                    <option @if (old('sexo') == 'masc') selected @endif value="masc"
                                        class="form-control">Masculino</option>
                                    <option @if (old('sexo') == 'fem') selected @endif value="fem"
                                        class="form-control">Feminino</option>
                                </select>
                                <div class="valid-feedback">Ok</div>
                                <div class="invalid-feedback">Campo obrigatório.</div>
                            </div>
                        </div>

                    </div>

                    <div class="row mt-3">
                        <div class="col-sm">
                            <div class="mb-3">
                                <label for="nucleo" class="form-label">Núcleo de Origem:</label>
                                <input type="text" class="form-control" id="nucleo"
                                    placeholder="Digite seu Núcleo de Origem" name="nucleo" value="{{ old('nucleo') }}"
                                    required>
                                <div class="valid-feedback">Ok</div>
                                <div class="invalid-feedback">Campo obrigatório.</div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="mb-3">
                                <label for="phone1" class="form-label">Whatsapp Pessoal:</label>
                                <input type="text" class="form-control" id="phone1"
                                    placeholder="Digite seu Whatsapp" name="phone1" value="{{ old('phone1') }}"
                                    required>
                                <div class="valid-feedback">Ok</div>
                                <div class="invalid-feedback">Campo obrigatório.</div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="mb-3">
                                <label for="phone2" class="form-label">Whatsapp Responsável:</label>
                                <input type="text" class="form-control" id="phone2"
                                    placeholder="Digite o whatsapp do responsável (se for o caso)" name="phone2"
                                    value="{{ old('phone2') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="mb-3">
                            <label for="infosaude" class="form-label">Informações de Saúde:</label>
                            <textarea name="infosaude" id="infosaude" class="form-control" rows="5"
                                placeholder="Preencha com o máximo de informações possíveis (se for o caso). Por exemplo: deficiências, alergia alimentar ou a insetos/animais, tratamentos e medicamentos diários etc.">{{ old('infosaude') }}</textarea>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="mb-3">
                            <label for="infonecessidades" class="form-label">Necessidades Especiais:</label>
                            <textarea name="infonecessidades" id="infonecessidades" class="form-control" rows="5"
                                placeholder="Preencha com o máximo de informações possíveis (se for o caso). Por exemplo: equipamentos de locomoção ou acompanhante etc.">{{ old('infonecessidades') }}</textarea>
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-sm">
                            <div class="assinatura rounded pb-1"><a href="{{ route('direito-de-imagem') }}">Clique
                                    aqui para imprimir a Autorização de Uso de
                                    Imagem</a></div>
                        </div>
                        <div class="col-sm">
                            <div class="assinatura rounded pb-1"><a href="{{ route('autorizacao-pais') }}">Clique
                                    aqui
                                    para imprimir a Assinatura dos pais ou
                                    responsável (se for o caso)</a>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="assinatura rounded pb-1"><a href="{{ route('pagamento') }}">Clique aqui
                                    para efetuar o pagamento</a>
                            </div>
                        </div>
                    </div>

                    <h6>Envie as Autorizações assinadas e o comprovante de pagamento em formato PDF através dos botões
                        abaixo:</h6>

                    <div class="row mb-3">
                        <div class="col-sm mt-3">
                            <div class="form-group">
                                <label for="autimgarquivo" class="control-label label-bordered">Enviar a Autorização
                                    de Uso de Imagem</label>
                                <div class="nomeArquivo"></div>
                                <input type="file" id="autimgarquivo" name="autimgarquivo"
                                    value="{{ old('autimgarquivo') }}" class="autimgarquivo form-control" required />
                            </div>
                        </div>
                        <div class="col-sm mt-3">
                            <div class="form-group">
                                <label for="autpaisarquivo" class="control-label label-bordered">Enviar a Autorização
                                    do responsável</label>
                                <div class="nomeArquivo"></div>
                                <input type="file" id="autpaisarquivo" name="autpaisarquivo"
                                    value="{{ old('autpaisarquivo') }}" class="autpaisarquivo form-control" />
                            </div>
                        </div>
                        <div class="col-sm mt-3">
                            <div class="form-group">
                                <label for="comppagto" class="control-label label-bordered">Enviar o Comprovante de
                                    pagamento</label>
                                <div class="nomeArquivo"></div>
                                <input type="file" id="comppagto" name="comppagto"
                                    value="{{ old('comppagto') }}" class="comppagto form-control" required />
                            </div>
                        </div>
                    </div>

                    <h4>Instruções:</h4>
                    <ul>
                        <li>Preencher o Formulário de Inscrição</li>
                        <li>Imprimir as Autorizações e colher as assinaturas</li>
                        <li>Efetuar o pagamento</li>
                        <li>Escanear/Digitalizar as Autorizações e o comprovante de pagamento e salvar os arquivos no
                            formato PDF</li>
                        <li>Enviar os arquivos salvos, junto com o formulário, através do campo apropriado</li>
                        <li>Clicar no botão Enviar Inscrição</li>
                        <li>Você receberá um e-mail com a confirmação da sua inscrição (caso não receba na caixa de
                            entrada, verificar nas caixas de spam e lixo eletrônico)</li>
                        <li>Qualquer dúvida entre em contato conosco através do e-mail emailtal@email.com, ou nossos
                            telefones/whatsapp 96 123456789 e 96 123456789</li>
                    </ul>

                    <button type="submit" class="btn btn-primary">Enviar Inscrição</button>
                </form>
                <hr>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/assets/js/script.js') }}"></script>
</body>

</html>
