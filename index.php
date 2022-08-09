<!DOCTYPE html>
<html>

    <header>
        <meta charset="UTF-8"/>
        <title>Calculatrice</title>
    </header>

    <body>

        <h1>Ma Calculatrice</h1>
        
        <?php

            if(isset($_GET["erreur"]) && !empty($_GET["erreur"])){
                echo "<p style='color: red'>" . $_GET["erreur"] . "</p>";
            }


            if(isset($_GET["sucees"]) && !empty($_GET["sucees"])){
                echo "<p style='color: green'>" . $_GET["sucees"] . "</p>";
            }

        ?>

        <form action="calculatrice.php">

            <table>
                <tr>
                    <td>
                        <label for="nombre-1">Nombre 1 :</label>
                    </td>
                    <td>
                        <input type="number" step="0.01" name="nombre-1" id="nombre-1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nombre-2">Nombre 2 :</label>
                    </td>
                    <td>
                        <input type="number" step="0.01" name="nombre-2" id="nombre-2">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="operateur">Opérateur :</label>
                    </td>
                    <td>
                        <select name="operateur" id="operateur">
                            <option value="+">Addition</option>
                            <option value="-">Soustraction</option>
                            <option value="*">Multiplication</option>
                            <option value="/">Division</option>
                            <option value="%">Reste d'une division entière</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="reset" value="Annuler">
                    </td>
                    <td>
                        <input type="submit" value="Calculer">
                    </td>
                </tr>
            </table>

        </form>

    </body>

</html>