<?php

$form = isset($_GET["morada"]) && isset($_GET["telefone"]) && isset($_GET["email"]);
$form = $form && isset($_GET["instagram"]) && isset($_GET["facebook"]) && isset($_GET["linkedin"]);

if($form){
    $morada = $_GET["morada"];
    $telefone = $_GET["telefone"];
    $email = $_GET["email"];
    $instagram = $_GET["instagram"];
    $facebook = $_GET["facebook"];
    $linkedin = $_GET["linkedin"];

    iduSQL("UPDATE contactos SET morada='$morada', telefone='$telefone', email='$email', instagram='$instagram', facebook='$facebook', linkedin='$linkedin'");
}

?>
<main class="container my-5 p-5 rounded-4 text-center">
    <div class="row">
        <div class="col-12">
            <h3 class="titulo text-center">Contactos</h3>
        </div>
    </div>

    <div class="row mt-5 text-center">
        <form action="" class="col-12">
            <label for="morada">Morada: </label><br>
            <input type="text" name="morada" value="<?= getContactos("morada");?>" required>
            <br><br>
            <label for="telefone">Telefone: </label><br>
            <input type="text" name="telefone" value="<?= getContactos("telefone");?>" required>
            <br><br>
            <label for="email">E-mail: </label><br>
            <input type="email" name="email" value="<?= getContactos("email");?>" required>
            <br><br>
            <label for="instagram">Instagram: </label><br>
            <input type="text" name="instagram" value="<?= getContactos("instagram");?>" required>
            <br><br>
            <label for="facebook">Facebook: </label><br>
            <input type="text" name="facebook" value="<?= getContactos("facebook");?>" required>
            <br><br>
            <label for="linkedin">Linkedin: </label><br>
            <input type="text" name="linkedin" value="<?= getContactos("linkedin");?>" required>
            <br><br>
            <input type="submit" value="Editar" class="botao_editar">
        </form>
    </div>
</main>

