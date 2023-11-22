<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador Regressivo</title>
</head>

<body>

    <div id="contador"></div>

    <script>
        function atualizarContador() {
            // Data e hora de destino
            var dataAlvo = new Date("April 21, 2024 07:00:00").getTime();

            // Obtém a data e hora atual
            var agora = new Date().getTime();

            // Calcula a diferença de tempo entre agora e a data de destino
            var diferencaTempo = dataAlvo - agora;

            // Calcula meses, dias, horas, minutos e segundos
            var meses = Math.floor(diferencaTempo / (1000 * 60 * 60 * 24 * 30.4)); // Média de dias em um mês
            var dias = Math.floor((diferencaTempo % (1000 * 60 * 60 * 24 * 30.4)) / (1000 * 60 * 60 * 24));
            var horas = Math.floor((diferencaTempo % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutos = Math.floor((diferencaTempo % (1000 * 60 * 60)) / (1000 * 60));
            var segundos = Math.floor((diferencaTempo % (1000 * 60)) / 1000);

            // Atualiza o elemento HTML com a contagem regressiva
            document.getElementById("contador").innerHTML = "Contagem regressiva até " +
                (meses) + " meses, " + (dias) + " dias, " + horas + " horas, " + minutos + " minutos, " + segundos + " segundos.";

            // Atualiza a cada segundo
            setTimeout(atualizarContador, 1000);
        }

        // Inicia a função de contagem regressiva quando a página carrega
        window.onload = atualizarContador;
    </script>

</body>

</html>
