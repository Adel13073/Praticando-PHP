<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', ;
            background-color: #edeff0;
            
        }

        
        header {
            background-color: #2e62b1;
            color: #ffffff;
            padding: 32px 40px;
            
        }

        header h1 {
            font-size: 1.8rem;
            font-weight: 700;
            letter-spacing: 1px;
        }

       
        
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
        
            gap: 24px;
            padding: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /*corpo do exercício*/
        .card {
            background: #94c4ea;
            border-radius: 10px;  
            flex-direction: column;
        }
/*cabeçalho do exercício*/
        .card-header {
            background-color: #206ad0;
            
            color: #b6daf9;
            padding: 14px 20px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        /*estilo do número do exercício*/
        .card-header .num {
            background-color: #98bdee;
            color: #206ad0;
            font-weight: 700;
            font-size: 0.85rem;
            border-radius: 50%;
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

       

        .card-body {
            padding: 20px;
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        label {
            font-size: 0.88rem;
            font-weight: 600;
            color: #206ad0;
            display: block;
            margin-bottom: 4px;
        }

        input[type="number"],
        input[type="text"] {
            width: 100%;
            padding: 8px 12px;
            border: 1px solid #cbd5e0;
            border-radius: 6px;
            font-size: 0.9rem;
            color: #1a1a2e;
            outline: none;
            transition: border-color 0.2s;
        }

        input[type="number"]:focus,
        input[type="text"]:focus {
            border-color: #206ad0;
        }

        button {
            background-color: #206ad0;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            padding: 9px 18px;
            font-size: 0.88rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s;
            align-self: flex-start;
        }

       

        
        .resultado {
            background-color: #eef4ff;
            border-left: 4px solid #206ad0;
            border-radius: 0 6px 6px 0;
            padding: 12px 16px;
            font-size: 0.9rem;
            color: #1a1a2e;
            white-space: pre-line;
        }

       
       
    </style>
</head>
<body>

<header>
    <h1>Exercícios PHP</h1>
    <p>Conceitos básicos de variáveis, condições, ciclos e funções</p>
</header>

<div class="grid">

  
    <div class="card">
        <div class="card-header">
            <span class="num">1</span>
            <h2>Dobro de um número</h2>
        </div>
        <div class="card-body"> 
            <form action="exercicios.php#ex1" method="POST">
                <input type="hidden" name="form" value="ex1">
                <div>
                    <label>Número:</label>
                    <input type="number" name="num" required
                        value="<?php echo (isset($_POST['form']) && $_POST['form']==='ex1' && isset($_POST['num'])) ? htmlspecialchars($_POST['num']) : ''; ?>">
                </div>
                <button type="submit">Calcular Dobro</button>
            </form>
            <?php
            if (isset($_POST['form']) && $_POST['form'] === 'ex1'
                && isset($_POST['num'])) {
                $num   = $_POST['num'];
                $dobro = $num * 2;
                echo '<div class="resultado">';
                echo 'O número utilizado é: <strong>' . $num . '</strong><br>';
                echo 'O dobro deste número é: <strong>' . $dobro . '</strong>';
                echo '</div>';
            }
            ?>
        </div> 
    </div>

  
    <div class="card">
        <div class="card-header">
            <span class="num">2</span>
            <h2>Positivo ou negativo</h2>
        </div>
        <div class="card-body">
            <form action="exercicios.php#ex2" method="POST">
                <input type="hidden" name="form" value="ex2">
                <div>
                    <label>Número:</label>
                    <input type="number" name="num" required
                        value="<?php echo (isset($_POST['form']) && $_POST['form']==='ex2' && isset($_POST['num'])) ? htmlspecialchars($_POST['num']) : ''; ?>">
                </div>
                <button type="submit">Verificar</button>
            </form>
            <?php
            if (isset($_POST['form']) && $_POST['form'] === 'ex2'
                && isset($_POST['num'])) {
                $num = $_POST['num'];

                if ($num < 0) {
                    $classificacao = "negativo";
                } elseif ($num > 0) {
                    $classificacao = "positivo";
                } else {
                    $classificacao = "zero";
                }

                echo '<div class="resultado">';
                echo 'O número utilizado é: <strong>' . $num . '</strong><br>';
                echo 'O número é <strong>' . $classificacao . '</strong>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

  
    <div class="card">
        <div class="card-header">
            <span class="num">3</span>
            <h2>Diferença entre dois números</h2>
        </div>
        <div class="card-body">
            <form action="exercicios.php#ex3" method="POST">
                <input type="hidden" name="form" value="ex3">
                <div>
                    <label>Primeiro número:</label>
                    <input type="number" name="n1" required
                        value="<?php echo (isset($_POST['form']) && $_POST['form']==='ex3' && isset($_POST['n1'])) ? htmlspecialchars($_POST['n1']) : ''; ?>">
                </div>
                <div>
                    <label>Segundo número:</label>
                    <input type="number" name="n2" required
                        value="<?php echo (isset($_POST['form']) && $_POST['form']==='ex3' && isset($_POST['n2'])) ? htmlspecialchars($_POST['n2']) : ''; ?>">
                </div>
                <button type="submit">Calcular Diferença</button>
            </form>
            <?php
            if (isset($_POST['form']) && $_POST['form'] === 'ex3'
                && isset($_POST['n1'], $_POST['n2'])) {
                $n1 = $_POST['n1'];
                $n2 = $_POST['n2'];
                $diferenca = $n1 - $n2;

                echo '<div class="resultado">';
                echo "A diferença entre " . $n1 . " e " . $n2 . " é: " . $diferenca . ".";
                echo '</div>';
            }
            ?>
        </div>
    </div>

   
    <div class="card">
        <div class="card-header">
            <span class="num">4</span>
            <h2>Tabuada</h2>
        </div>
        <div class="card-body">
            <form action="exercicios.php#ex4" method="POST">
                <input type="hidden" name="form" value="ex4">
                <div>
                    <label>Número para a tabuada:</label>
                    <input type="number" name="tabuada" required
                        value="<?php echo (isset($_POST['form']) && $_POST['form']==='ex4' && isset($_POST['tabuada'])) ? htmlspecialchars($_POST['tabuada']) : ''; ?>">
                </div>
                <button type="submit">Gerar Tabuada</button>
            </form>
            <?php
            if (isset($_POST['form']) && $_POST['form'] === 'ex4'
                && isset($_POST['tabuada'])) {
                $tabuada = $_POST['tabuada'];

                echo '<div class="resultado">';
                echo 'Tabuada do <strong>' . $tabuada . '</strong>:<br>';
                for ($i = 1; $i <= 12; $i++) {
                    $res = $tabuada * $i;
                    echo $tabuada . ' x ' . $i . ' = ' . $res . '<br>';
                }
                echo '</div>';
            }
            ?>
        </div>
    </div>

   
    <div class="card">
        <div class="card-header">
            <span class="num">5</span>
            <h2>Soma de cinco números</h2>
        </div>
        <div class="card-body">
            <form action="exercicios.php#ex5" method="POST">
                <input type="hidden" name="form" value="ex5">
                <div>
                    <label>Número 1:</label>
                    <input type="number" name="num1" required
                        value="<?php echo (isset($_POST['form']) && $_POST['form']==='ex5' && isset($_POST['num1'])) ? htmlspecialchars($_POST['num1']) : ''; ?>">
                </div>
                <div>
                    <label>Número 2:</label>
                    <input type="number" name="num2" required
                        value="<?php echo (isset($_POST['form']) && $_POST['form']==='ex5' && isset($_POST['num2'])) ? htmlspecialchars($_POST['num2']) : ''; ?>">
                </div>
                <div>
                    <label>Número 3:</label>
                    <input type="number" name="num3" required
                        value="<?php echo (isset($_POST['form']) && $_POST['form']==='ex5' && isset($_POST['num3'])) ? htmlspecialchars($_POST['num3']) : ''; ?>">
                </div>
                <div>
                    <label>Número 4:</label>
                    <input type="number" name="num4" required
                        value="<?php echo (isset($_POST['form']) && $_POST['form']==='ex5' && isset($_POST['num4'])) ? htmlspecialchars($_POST['num4']) : ''; ?>">
                </div>
                <div>
                    <label>Número 5:</label>
                    <input type="number" name="num5" required
                        value="<?php echo (isset($_POST['form']) && $_POST['form']==='ex5' && isset($_POST['num5'])) ? htmlspecialchars($_POST['num5']) : ''; ?>">
                </div>
                <button type="submit">Calcular Soma</button>
            </form>
            <?php
            if (isset($_POST['form']) && $_POST['form'] === 'ex5'
                && isset($_POST['num1'], $_POST['num2'], $_POST['num3'], $_POST['num4'], $_POST['num5'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];
                $num4 = $_POST['num4'];
                $num5 = $_POST['num5'];
                $soma = $num1 + $num2 + $num3 + $num4 + $num5;

                echo '<div class="resultado">';
                echo 'Os números somados são: <strong>' . $num1 . ', ' . $num2 . ', ' . $num3 . ', ' . $num4 . ', ' . $num5 . '</strong><br>';
                echo 'O resultado da soma de todos eles é: <strong>' . $soma . '</strong>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <span class="num">6</span>
            <h2>Maior número</h2>
        </div>
        <div class="card-body">
            <form action="exercicios.php#ex6" method="POST">
                <input type="hidden" name="form" value="ex6">
                <div>
                    <label>Número 1:</label>
                    <input type="number" name="num1" required
                        value="<?php echo (isset($_POST['form']) && $_POST['form']==='ex6' && isset($_POST['num1'])) ? htmlspecialchars($_POST['num1']) : ''; ?>">
                </div>
                <div>
                    <label>Número 2:</label>
                    <input type="number" name="num2" required
                        value="<?php echo (isset($_POST['form']) && $_POST['form']==='ex6' && isset($_POST['num2'])) ? htmlspecialchars($_POST['num2']) : ''; ?>">
                </div>
                <div>
                    <label>Número 3:</label>
                    <input type="number" name="num3" required
                        value="<?php echo (isset($_POST['form']) && $_POST['form']==='ex6' && isset($_POST['num3'])) ? htmlspecialchars($_POST['num3']) : ''; ?>">
                </div>
                <button type="submit">Encontrar Maior</button>
            </form>
            <?php
            if (isset($_POST['form']) && $_POST['form'] === 'ex6'
                && isset($_POST['num1'], $_POST['num2'], $_POST['num3'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];
                $maior = max($num1, $num2, $num3);

                echo '<div class="resultado">';
                echo 'Os números analisados são: <strong>' . $num1 . ', ' . $num2 . ', ' . $num3 . '</strong><br>';
                echo 'O maior número dentre eles é: <strong>' . $maior . '</strong>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

   
    <div class="card">
        <div class="card-header">
            <span class="num">7</span>
            <h2>Contagem de 1 até N</h2>
        </div>
        <div class="card-body">
            <form action="exercicios.php#ex7" method="POST">
                <input type="hidden" name="form" value="ex7">
                <div>
                    <label>Contar até:</label>
                    <input type="number" name="limite" min="1" required
                        value="<?php echo (isset($_POST['form']) && $_POST['form']==='ex7' && isset($_POST['limite'])) ? htmlspecialchars($_POST['limite']) : ''; ?>">
                </div>
                <button type="submit">Contar</button>
            </form>
            <?php
            if (isset($_POST['form']) && $_POST['form'] === 'ex7'
                && isset($_POST['limite'])) {
                $limite = $_POST['limite'];

                echo '<div class="resultado">';
                echo 'Contando de 1 até <strong>' . $limite . '</strong>:<br>';
                for ($i = 1; $i <= $limite; $i++) {
                    echo $i . '<br>';
                }
                echo '</div>';
            }
            ?>
        </div>
    </div>

</div><!── FIM DA GRELHA DE EXERCÍCIOS ── 



</body>
</html>