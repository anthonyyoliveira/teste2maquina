<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="painel">
            <h1>Intruções</h1>
            <div>
                <p>esta aplicação tem como finalidade demonstrar os valores que serão gastos com combustível durante uma viagem, com base no consumo do seu veículo, e com a distância determinada por você!</p>
                <p>Os combustíveis disponíveis para este cálculo são:</p>
                <ul>
                    <li><b>Álcool</b></li>
                    <li><b>Díesel</b></li>
                    <li><b>Gasolina</b></li>
                </ul>
            </div>
        </div>

        <div class="painel">
            <h2>Cálculo do valor (R$) do consumo</h2>
            <div class="conteudo-painel">
                <form action="calculo.php" method="POST">
                    <label for="distancia">Distancia em Kilômetros e ser percorrida</label>
                    <input type="number" name="distancia" required />

                    <label for="autonomia">Consumo de combustível do veículo (Km/L)</label>
                    <input type="number" name="autonomia" required />

                    <button class="botao" type="submit">Calcular</button>
                </form>
            </div>
        </div>
    </main>    
</body>
</html>