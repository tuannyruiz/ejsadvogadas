<?php /*
 * Template Name: contato
 * description: 
 */
require_once('header.php');  ?>

<?php 

function handleMsg() {
    $wantBoletins = $_POST["informativo"] ? 'Sim' : 'Não';
    return "<strong>Nome:</strong> ".htmlspecialchars($_POST["nome"])
    ."<br/><strong>Email:</strong> ".htmlspecialchars($_POST["email"])
    ."<br/><strong>Telefone:</strong> ".htmlspecialchars($_POST["telefone"])
    ."<br/><strong>Mensagem: ".htmlspecialchars($_POST["mensagem"])
    ."<br/><strong>Quer receer boletins? </strong>".$wantBoletins;
};
?>

<main class="contato">
    <div class="form">
        <h1 class="titulo">Contato</h1>
        <?php 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $headers = array('Content-Type: text/html; charset=UTF-8');
            wp_mail( "contato@ejsadvogadas.com.br","formulário de contato", handleMsg(), $headers);
            echo '<h3 class="alert-success">Mensagem enviada com sucesso!</h3>';
        }
        ?>
        <p class="intro">Através dessa caixa de mensagens você pode fazer seu contato com nosso escritório.</p>
        <form class="form-contato" action="<?php echo get_permalink($post->id) ?>" method="POST">
            <input type="text" name="nome" placeholder="Nome" required="required">
            <input type="email" name="email" placeholder="E-mail" required="required">
            <input type="text" name="telefone" placeholder="Telefone" required="required">
            <textarea name="mensagem" cols="30" rows="10" placeholder="Mensagem" required="required" ></textarea>
            <label class="informativo" for="informativos">
                <input type="checkbox" name="informativo" id="informativo" checked> 
                Quero receber boletins informativos do escritório.
            </label>
            <button type="submit" class="btn-adv">Enviar Mensagem</button>
        </form>
    </div>
    <div class="mapa">
    <iframe
      width="100%"
     height="100%"
      frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCJCE7gpKJ58QV9QKmjxiVVs6AGFYXc-qs
        &q=Avenida Rio Branco, 185, sala 820 Edifício Marquês do Herval - Centro" allowfullscreen>
</iframe>
    </div>
</main>
<?php get_footer(); ?>