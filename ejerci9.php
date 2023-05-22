<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<style>
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }

    .content-item {
        /* From https://css.glass */
        background: rgba(255, 255, 255, 0.20);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5.9px);
        -webkit-backdrop-filter: blur(5.9px);
    }

    .parenta {
        width: 500px;
        height: 500px;
        background: transparent;
        overflow: hidden
    }

    .magicpatterna {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center center;
        background-repeat: repeat;
        background-image: url("data:image/svg+xml;utf8,%3Csvg viewBox=%220 0 1000 1000%22 xmlns=%22http:%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cdefs%3E%3ClinearGradient id=%22b%22 gradientTransform=%22rotate(-75 .5 .5)%22%3E%3Cstop offset=%220%25%22 stop-color=%22%23FF0037%22%2F%3E%3Cstop offset=%2250%25%22 stop-color=%22%23ff7139%22%2F%3E%3Cstop offset=%22100%25%22 stop-color=%22%23ffbd28%22%2F%3E%3C%2FlinearGradient%3E%3CclipPath id=%22a%22%3E%3Cpath fill=%22currentColor%22 d=%22M788 696q-62 196-300 216.5t-292-196q-54-216.5 10.5-415t273-163Q688 174 769 337t19 359Z%22%2F%3E%3C%2FclipPath%3E%3C%2Fdefs%3E%3Cg clip-path=%22url(%23a)%22%3E%3Cpath fill=%22url(%23b)%22 d=%22M788 696q-62 196-300 216.5t-292-196q-54-216.5 10.5-415t273-163Q688 174 769 337t19 359Z%22%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
    }

    .parent {
        width: 500px;
        height: 500px;
        background: transparent;
        overflow: hidden
    }

    .magicpattern {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center center;
        background-repeat: repeat;
        background-image: url("data:image/svg+xml;utf8,%3Csvg viewBox=%220 0 1000 1000%22 xmlns=%22http:%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cdefs%3E%3ClinearGradient id=%22b%22 gradientTransform=%22rotate(270 .5 .5)%22%3E%3Cstop offset=%220%25%22 stop-color=%22%2321D4FD%22%2F%3E%3Cstop offset=%22100%25%22 stop-color=%22%23B721FF%22%2F%3E%3C%2FlinearGradient%3E%3CclipPath id=%22a%22%3E%3Cpath fill=%22currentColor%22 d=%22M788 696q-62 196-300 216.5t-292-196q-54-216.5 10.5-415t273-163Q688 174 769 337t19 359Z%22%2F%3E%3C%2FclipPath%3E%3C%2Fdefs%3E%3Cg clip-path=%22url(%23a)%22%3E%3Cpath fill=%22url(%23b)%22 d=%22M788 696q-62 196-300 216.5t-292-196q-54-216.5 10.5-415t273-163Q688 174 769 337t19 359Z%22%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
    }
</style>

<body class="w-screen h-screen grid place-content-center bg-slate-950 overflow-hidden">
    <main class="relative">
        <div class='parenta absolute top-[-300px] right-[200px] '>
            <div class="magicpatterna"></div>
        </div>
        <div class='parent absolute top-[100px] left-[200px] '>
            <div class="magicpattern"></div>
        </div>

        <section class="w-[400px]  p-10 content-item  relative ">
            <h2 class="text-3xl text-center text-white">Calculadora</h2>
            <form action="" method="post">
                <div>
                    <div class="flex flex-col">
                        <label for="" class="py-4 text-md text-white tracking-wider">Ingrese el Primer Numero :</label>
                        <input type="number" name="numero1" required id="" class="py-2 px-3 outline-none rounded-xl  mr-10 bg-inherit border text-white	">
                    </div>
                    <div class="flex flex-col">
                        <label for="" class="py-4 text-md text-white tracking-wider">Ingrese el Segundo numero</label>
                        <input type="number" name="numero2"  required id="" class="py-2 px-3 outline-none rounded-xl bg-inherit mr-10 border  text-white	">
                    </div>
                    <div class="py-5">
                        <label for="" class="text-white pr-2">Seleccione la Operacion</label>
                        <select name="operacion" id="" class="text-dark w-[70px] h-8 outline-none rounded-xl m-auto text-lg px-4">
                            <option value="+"> + </option>
                            <option value="-"> - </option>
                            <option value="x"> x </option>
                            <option value="/"> / </option>
                        </select>
                    </div>
                    <div>
                        <input type="submit" name="validar" value="enviar" class="text-black px-8 py-2 bg-white uppercase rounded-xl font-semibold tracking-wide hover:bg-slate-200 cursor-pointer">
                    </div>
                </div>
            </form>
        </section>
    </main>
    <?php

        if (isset($_POST["validar"])) {

            $num1 = $_POST["numero1"];
            $num2 = $_POST["numero2"];
            $operacion = $_POST["operacion"];

            switch ($operacion) {
                case '+':   
                     $result = $num1 + $num2;
                    break;
                case '-':
                     $result = $num1 - $num2;
                     break;
                case 'x':
                     $result = $num1 * $num2;
                     break;
                case '/':
                     $result = $num1 / $num2;  
                     break;
            }
        ?>
            
            <script>
                Swal.fire({
                    title: 'El Resultado es : <?php echo $result ?>',
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    }
                })
                
            </script>
        <?php
        header("location: ejerci9.php");
        }
        ?>
</body>

</html>