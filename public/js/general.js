$(document).ready(function() {
   let exp = $("#contenido_exp").val();
   changeExp(exp);
});

function changeExp(exp){
   exp = exp == "" ? "cronos" :exp;
    if(exp== "cronos"){
        $("#t1").addClass('is-active');
        $("#t2").removeClass('is-active');
        var img = "img/loginCronos.jpg";
        $("#img").attr('src',img);
        $("#cont_exp_tittle").text('Sistema Cronos');
        $("#cont_exp_sub").text('Software web para R.R.H.H');
        $("#cont_exp_text").html('Software desarrollado bajo la desarrolladora DSTchile. <br> El cual su función es la procesion de todos los modulos que realiza RRHH, ya sea contratos, registros, liquidaciones, etc. También el software genera firmas digitales con qr, notifica por correo actualizaciones, enrolamiento u otro. Diseñado para tanto el uso del equipo de RRHH como el empleado y su encargado.<br> Utilizando PHP sin framework, Javascript/Jquery, boostrap, sweetAlert y heidiSql.');
    }
    else{
        $("#t1").removeClass('is-active');
        $("#t2").addClass('is-active');
        var img = "img/loginAct.png";
        $("#img").attr('src',img);
        $("#cont_exp_tittle").text('Asistes Activos');
        $("#cont_exp_sub").text('Software web para Registro de asistencia');
        $("#cont_exp_text").html('Migracion de PHP 5 a PHP 8.2 (cambio de librerias (phpexcel,phpmailer)). Software desarrollado y actualizado bajo la desarrolladora DSTchile.<br> Incorporación de notificacion de correo,activacion de accesos, bloqueo de cuenta por intentos excesivo de acceso. <br> Utilizando PHP sin framework, Javascript/Jquery,sweetAlert y heidiSql.');

    }    
}

//comportamiento del boton flotante
$('.btn_float').on('click',function(){
    var target= $('.header').offset().top;
    $('html, body').animate({
        scrollTop: target
    }, 1000); 
});

//comportamiento de seleccion en experiencias
$("#t2").on('click',function (){
    changeExp("activos");
});

$("#t1").on('click',function (){
    changeExp("");
});

//comportamientos de ubicacion en ver 
$("a[href='#cont_exp']").on('click', function() {
    // Obtener la posición del contenedor
    var targetOffset = $("#cont_exp").offset().top;

    // Realizar el desplazamiento suave
    $('html, body').animate({
        scrollTop: targetOffset
    }, 1500); 
});

$("a[href='#cont_tech']").on('click', function() {
    // Obtener la posición del contenedor
    var targetOffset = $("#cont_tech").offset().top;

    // Realizar el desplazamiento suave
    $('html, body').animate({
        scrollTop: targetOffset
    }, 1500); 
});