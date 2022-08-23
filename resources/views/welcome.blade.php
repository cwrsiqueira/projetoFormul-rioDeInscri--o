<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Caminhada na Floresta</title>
    <link rel="stylesheet" href="{{ url('/assets/css/welcome.css') }}">
</head>

<body>
    <div class="row">
        <div class="column">
            <img src="{{ url('/assets/images/folder.jfif') }}" alt="banner">
        </div>
        <div class="column">
            <div class="areaButton">
                <a href="{{ route('signup') }}"><button>Quero Participar</button></a>
            </div>
            <div class="invite">

                <h3>CONVITE</h3>

                <p>O Núcleo Jardim Florido convida os jovens desse Núcleo para participarem de uma experiência
                    inesquecível.</p>

                <h4>PÉ NO MATO Caminhada Urubuena</h4>

                <p>A realizar-se no período de 25 a 27/11 conforme programação ☝🏻 Contato: (96) 98126-2139 - M. Ruimar.
                </p>

                <p>🟢 Será cobrada uma taxa para custear transporte e alimentação no valor de R$300,00 por pessoa,
                    podendo
                    ser parcelado de 2 x, até o mês de outubro</p>
                <p>Pix 👇</p>
                <p>02.150.645/0001-36
                    Ou diretamente na Tesouraria do Núcleo</p>

                <p>A caminhada consiste em 7km no meio da Floresta Amazônica com vários obstáculos, cantos da passarada,
                    identificação de espécies vegetais, viagem de barco até a Comunidade Urubuena, banho de Igarapé,
                    futebol
                    com jovens da comunidade etc.</p>

            </div>
            <div class="areaButton">
                <a href="{{ route('signup') }}"><button>Quero Participar</button></a>
            </div>
        </div>
    </div>
    <script src="{{ url('/assets/js/script.js') }}"></script>
</body>

</html>
