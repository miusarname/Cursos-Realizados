<?php

$txtNombre = "";
$rdgLenguaje = "";
$chkphp ="";
$chkcss="";
$chkhtml = "";
$lsAnime = "";
$txtComentario = "";

if ($_POST) { //<-- We condition whether there is a shipment so that it does not give us an error (undefined)
    $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
    //   ↑ to this val we assign ↑ if it exists   ↑  we assign this ↑ if not↑s
    $rdgLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";
    $chkphp =(isset($_POST['chkphp']) == "yes") ? "checked" : "";
    $chkcss=(isset($_POST['chkcss']) == "yes") ? "checked" : "";
    $chkhtml = (isset($_POST['chkhtml']) == "yes") ? "checked" : "";

    $lsAnime=(isset($_POST['lsanime'])) ? $_POST['lsanime'] : "";
    $txtComentario=(isset($_POST['txtComentario'])) ? $_POST['txtComentario'] : "";


    
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Form</title>
</head>

<body>
    <?php if ($_POST) { ?>
        <strong>Hello: </strong>
        <?php echo $txtNombre ?>
        <br>
        <strong>Tu lenguaje es : </strong>
        <?php echo $rdgLenguaje ?>
        <br>
        <strong>Esta aprendiendo : </strong>
        <ul>
            <?php echo ($chkphp == "checked") ? "<li>html</li>" : "" ?>
            <?php echo ($chkhtml == "checked") ? "<li>Php</li>" : "" ?>
            <?php echo ($chkcss == "checked") ? "<li>Css</li>" : "" ?>
        </ul>
        <strong>Tu anime  : </strong>
        <?php echo $lsAnime; ?>
        <br>
        <strong>Tu mensaje es : </strong>
    <?php } ?>
    <form action="ejercicio31.php" method="post">

        <input type="text" value="<?php echo $txtNombre ?>" name="txtNombre" id="">
        <br>
        You like?: <br>
        <br>php : <input type="radio"  <?php echo ($rdgLenguaje == "php") ? "checked" : "" ?> value="php"
            name="lenguaje" id="">
        <br>html: <input type="radio" <?php echo ($rdgLenguaje == "html") ? "checked" : "" ?> value="html" name="lenguaje" id="">
                                     <!--   ↓ We keep the "checked" in the form   -->
        <br>Css : <input type="radio" <?php echo ($rdgLenguaje == "css") ? "checked" : "" ?> value="css" name="lenguaje" id="">
        <br>

        Esta aprendiendo ?...
        <br>Html<input type="checkbox" <?php echo $chkhtml; ?> name="chkhtml" value="yes" id="">
        <br>Css<input type="checkbox" <?php  echo $chkcss; ?> name="chkcss" value="yes" id="">
        <br>Php<input type="checkbox" <?php  echo $chkphp; ?> name="chkphp" value="yes" id="">

        <br> Que anime te gusta?... <br>
        <select name="lsanime" id="">
            <option value="">[Ninguna Serie]</option>
            <option <?php echo ($lsAnime=="Naruto")? "selected":"" ?> value="Naruto">Naruto</option>
            <option <?php echo ($lsAnime=="DBZ")? "selected":"" ?> value="DBZ"  >DBZ</option>
            <option <?php echo ($lsAnime=="NNT")? "selected":"" ?> value="NNT"  >NNT</option>
        </select>
        <br>

        Tienes alguna duda?...<br>
        <textarea name="txtComentario" id="" cols="30" rows="10"></textarea>.
        <?php

        echo $txtComentario;

        ?>


        <input type="submit" value="Send">

    </form>
</body>

</html>

