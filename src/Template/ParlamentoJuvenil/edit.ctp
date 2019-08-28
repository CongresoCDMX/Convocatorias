<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ParlamentoJuvenil $parlamentoJuvenil
 */
?>
<div class="meritoJuvenil form large-9 medium-8 columns content">
    <fieldset>
       <!-- <legend><?= __('Add Merito Juvenil') ?></legend> -->

     <img src="../../webroot/img/logo.png" alt="Logo" height="" width="700px">
     <img src="../../webroot/img/1.jpg" alt="Logo" height="" width="110px" style="margin-left:25px;">
<center>
       <h2>FORMULARIO DE REGISTRO AL PRIMER PARLAMENTO JUVENIL DE LA CIUDAD DE MÉXICO.</h2>
</center>


<div class="parlamentoJuvenil form large-9 medium-8 columns content">
    <?= $this->Form->create($parlamentoJuvenil) ?>
    <fieldset>
<p class="indicaciones">Por favor llena el siguiente formulario de pre-registro al Primer Parlamento Juvenil de
la CDMX.</p>
<label class="seccion">I. Datos personales</label>
<br>
<div style="border: 3px solid #de6e66; border-radius:15px;">
<div style="margin:15px;">
<label>1. Nombre completo:</label>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('apellido_paterno');
            echo $this->Form->control('apellido_materno');
        ?>
</div>
</div>

<br>
<div style="border: 3px solid #de6e66; border-radius:15px;">
<div style="margin:15px;">
    <?php
      echo $this->Form->control('edad', ['label'=>'2. Edad']);
        ?>
</div>
</div>

<br>
<div style="border: 3px solid #de6e66; border-radius:15px;">
<div style="margin:15px;">
<label>3. ¿Eres residente u originario de la Ciudad de México?</label>
    <?php
            echo $this->Form->control('residente');
            echo $this->Form->control('originario');
        ?>
</div>
</div>


<br>
<div style="border: 3px solid #de6e66; border-radius:15px;">
<div style="margin:15px;">
<label>4. ¿A qué Alcaldía perteneces?:</label>
    <?php
            echo $this->Form->control('alcaldia', ['options'=>['tlalpan'=>'Tlalpan', 
							      'venustiano carranza'=>'Venustiano Carranza', 
							      'azcapotzalco'=>'Azcapotzalco',
 					                      'iztapalapa'=>'Iztapalapa',
								'iztacalco'=>'Iztacalco',
								'miguel hidalgo'=>'Miguel Hidalgo',
								'magdalena contreras'=>'La Magdalena Contreras',
								'coyoacan'=>'Coyoacán',
								'milpa alta'=>'Milpa Alta',
								'tláhuac'=>'Tláhuac',
								'benito juarez'=>'Benito Juárez',
								'cuajimalpa'=>'Cuajimalpa de Morelos',
								'gam'=>'Gustavo A. Madero',
								'cuauhtemoc'=>'Cuauhtémoc',
								'alvaro obregon'=>'Álvaro Obregón',
								'xochimilco'=>'Xochimilco']]);
									?>
</div>
</div>
<br><br>
<label class="seccion">II. Datos de contacto.</label>
<br>
<div style="border: 3px solid #de6e66; border-radius:15px;">
<div style="margin:15px;">
        <?php
            echo $this->Form->control('correo_electronico');
            echo $this->Form->control('numero_telefonico');
        ?>
</div>
</div>

<br><br>
<label class="seccion">III. Cuestionario.</label>
<p>Por favor, responde de manera breve las siguientes preguntas.</p>

<div style="border: 3px solid #de6e66; border-radius:15px;">
<div style="margin:15px;">
        <?php
            echo $this->Form->control('sociedad_civil',['label'=>'7. ¿Formas parte de alguna Organización de la Sociedad Civil?']);
            echo $this->Form->control('cual_sociedad',['label'=>'Si respondiste Sí, por favor indica ¿Cuál?:']);
        ?>
</div>
</div>


<br><br>
<label class="seccion">III. Cuestionario.</label>
<p>Por favor, responde de manera breve las siguientes preguntas.</p>

<div style="border: 3px solid #de6e66; border-radius:15px;">
<div style="margin:15px;">
        <?php
            echo $this->Form->control('estudiante',['label'=>'8. ¿Eres estudiante?']);
            echo $this->Form->control('secundaria');
            echo $this->Form->control('medio_superior',['label'=>'Nivel Medio Superior.']);
            echo $this->Form->control('superior',['label'=>'Nivel Superior.']);
            echo $this->Form->control('institucion',['label'=>'Por favor indica, ¿A qué institución educativa perteneces?:']);
        ?>
</div>
</div>


<br><br>
<div style="border: 3px solid #de6e66; border-radius:15px;">
<div style="margin:15px;">
        <?php
          echo $this->Form->control('motivos',['label'=>'9. De manera breve y concreta, comenta los motivos por los que te gustaría participar en el Primer Parlamento Juvenil del Congreso de la Ciudad de México.']);
        ?>
</div>
</div>


<br><br>
<div style="border: 3px solid #de6e66; border-radius:15px;">
<div style="margin:15px;">
        <?php
            echo $this->Form->control('ejercicios',['label'=>'10. ¿Has participado en ejercicios o actividades de emulación parlamentaria?']);
            echo $this->Form->control('ejer_cuales',['label'=>'Si respondiste Sí, por favor indica ¿Cuáles?:']);
        ?>
</div>
</div>

<br><br>
<div style="border: 3px solid #de6e66; border-radius:15px;">
<div style="margin:15px;">
<p>11. En caso de ser seleccionado(a), enuncia 3 opciones de Grupos Parlamentarios
de los que te gustaría formar parte:</p>
        <?php
            echo $this->Form->control('gp1', ['label'=>'Grupo Parlamentario 1']);
            echo $this->Form->control('gp2', ['label'=>'Grupo Parlamentario 2']);
            echo $this->Form->control('gp3', ['label'=>'Grupo Parlamentario 3']);
        ?>
</div>
</div>

<br><br>
<div style="border: 3px solid #de6e66; border-radius:15px;">
<div style="margin:15px;">
<p>12. En caso de ser seleccionado(a), enuncia 3 opciones de Comisiones de las que te
gustaría formar parte:</p>
        <?php
            echo $this->Form->control('com1', ['label'=>'Comisión 1']);
            echo $this->Form->control('com2', ['label'=>'Comisión 2']);
            echo $this->Form->control('com3', ['label'=>'Comisión 3']);
        ?>
</div>
</div>

<br><br>
<div style="border: 3px solid #de6e66; border-radius:15px;">
<div style="margin:15px;">
<p>IV. Información adicional.</p>
        <?php
            echo $this->Form->control('discapacidad', ['label'=>'13. ¿Padeces de alguna discapacidad?']);
            echo $this->Form->control('dis_cual', ['label'=>'14. ¿Cúal?:']);
        ?>
</div>
</div>


<br>
<br>


<div style="border: 3px solid #de6e66; border-radius:15px;">
<div style="margin:15px;">
    <center><label><b>AVISO DE PRIVACIDAD</b></label>
    <label><b>DEL TRATAMIENTO DE LOS DATOS PERSONALES</b></label>
</center>
 
    <p>
Los documentos y requisitos señalados en la convocatoria y el formulario de registro del Primer
Parlamento Juvenil de la Ciudad de México, son Obligatorios y sin ellos no se podrá postular y participar
en el mismo.
En términos de lo previsto por la Ley de Protección de Datos Personales en posesión de sujetos
obligados de la Ciudad de México, los datos contenidos en este documento, así como sus anexos, no
podrán ser divulgados, manipulados o utilizados en forma alguna y para cualquier otro fin ajeno al de
este proyecto.</p>
</center>
    </fieldset>

<button onclick="myFunction()" style="border-radius:15px; background-color:#cfcfcf;">Imprimir</button>
</div>
<br>
<script>
function myFunction() {
  window.print();

}
</script>
<style>
@media print {
.header, .hide { visibility: hidden }
}
</style>
