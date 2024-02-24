<?
$recaptcha = $_POST["g-recaptcha-response"];
 
        $url2 = 'https://www.google.com/recaptcha/api/siteverify';
        $data2 = array(
          'header' => "Content-Type: application/x-www-form-urlencoded\r\n", 
          'secret' => '6LcDwZ8lAAAAALpmGSuNLlFFdah11xvRBCxCqJnC',//REEMPLAZAR CLAVE SECRETA
          'response' => $recaptcha
        );
        $options = array(
          'http' => array (
            'method' => 'POST',
            'content' => http_build_query($data2)
          )
        );
        $context  = stream_context_create($options);
        $verify = file_get_contents($url2, false, $context);
        $captcha_success = json_decode($verify);
        if ($captcha_success->success) {
          // No eres un robot
//echo $_POST['mensaje'];

if (strpos($_POST['mensaje'], 'https://') !== false) {

}else if (strpos($_POST['mensaje'], 'http://') !== false) {

}else{

?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $.ajax({
        type:'GET',
        url:'https://xintel.com.ar/api/',
        cache:false,
        data:{
        'json':'consultas_web',
        'global':'LU3AIKPR4F6ZSUY8GQODKWRO8',
        'apiK':'4m17zq256jvsm24wOnqbev43y',
        'inm':'QUB',
        //'codsuc':codsuc,
        'method':'POST',
        'desde':'LANDING',
        // 'enviomail':'true',
        'codsuc':'QUB',
        'id':'334',
        'nombre':'<?=$_POST['nombre']?>',
        'telefono':'<?=$_POST['telefono']?>',
        'email':'<?=$_POST['email']?>',
        'comentario':'Mensaje email de Landing Achaval: '+'<?=$_POST['mensaje']?>, Interesado en <?=$_POST['a1']?>'
        },
        success:function(response){
            console.log(response);
         window.location="https://equipo6c.com/goyena551/gracias.html";
                
        }
    });
</script>
<?}}else{
 
}?>
