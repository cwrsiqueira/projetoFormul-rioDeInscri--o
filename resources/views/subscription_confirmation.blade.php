<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caminhada na Floresta | Confirmação Inscrição</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            word-break: break-word;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        @media print {
            button {
                display: none;
            }
        }
    </style>


</head>

<body>

    <main>
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <span class="fs-4">Inscrição Realizada com Sucesso!</span>
            </header>

            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1>Núcleo Jardim Florido 14ª Região</h1>
                    <h2>Trilha Pé no Mato - Caminhada Urubuena</h2>
                    <h3 class="display-5 fw-bold">Obrigado, {{ $subscription->uname }}</h3>
                    <p class="col-md-8 fs-4">Sua inscrição foi realizada com sucesso e em breve entraremos em contato
                        com você através do número do seu whatsapp {{ $subscription->phone1 }}.</p>
                </div>
            </div>

            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-light border rounded-3">
                        <h2>Dados da inscrição</h2>
                        <ul>
                            <li>Nome: {{ $subscription->uname }}</li>
                            <li>Idade: {{ $subscription->age }}</li>
                            <li>Sexo: {{ $subscription->sexo }}</li>
                            <li>Núcleo: {{ $subscription->nucleo }}</li>
                            <li>Whatsapp: {{ $subscription->phone1 }}</li>
                            <li>Whats Resp: {{ $subscription->phone2 }}</li>
                            <li>Saúde: {{ $subscription->infosaude }}</li>
                            <li>Necessidades: {{ $subscription->infonecessidades }}</li>
                            <li><a href="{{ $subscription->autimgarquivo }}" target="_blank">Autorização
                                    de Uso de Imagem</a></li>
                            @if (!empty($subscription->autpaisarquivo))
                                <li><a href="{{ $subscription->autpaisarquivo }}" target="_blank">Autorização
                                        do responsável</a></li>
                            @endif
                            <li><a href="{{ $subscription->comppagto }}" target="_blank">Comprovante de
                                    pagamento</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-light border rounded-3">
                        <h2>Código de segurança para confirmação da inscrição</h2>
                        <p>{{ $subscription->hash }}.</p>
                        <p>Em caso de dúvida entre em contato conosco através dos nossos whatsapps 96 123456 ou 96
                            123456 e
                            informe o código de segurança.</p>
                        <button class="btn btn-outline-secondary" type="button" onclick="window.print()">Imprimir
                            Confirmação de
                            Inscrição</button>
                    </div>
                </div>
            </div>

            <a href="{{ route('home') }}">Voltar para o início</a>

            <footer class="pt-3 mt-4 text-muted border-top">
                &copy; 2022 - Todos os direitos reservados
            </footer>
        </div>
    </main>
</body>

</html>
