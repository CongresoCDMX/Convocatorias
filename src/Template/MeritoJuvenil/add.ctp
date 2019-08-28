<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MeritoJuvenil $meritoJuvenil
 */
?>
<div class="meritoJuvenil form large-9 medium-8 columns content">
    <?= $this->Form->create($meritoJuvenil) ?>
    <fieldset>
       <!-- <legend><?= __('Add Merito Juvenil') ?></legend> -->

     <img src="../webroot/img/logo.png" alt="Logo" height="" width="700px">
     <img src="../webroot/img/1.jpg" alt="Logo" height="" width="110px" style="margin-left:25px;">
<center>
       <h2>FORMULARIO DE PRE-REGISTRO PARA ASPIRANTES A RECIBIR LA MEDALLA AL MÉRITO JUVENIL 2018.</h2>
</center>
<br>
<br>

<div style="border: 3px solid #de6e66; border-radius:15px;">
<div style="margin:15px;">
 <label>I. Tipo de participación</label>
        <?php
            echo $this->Form->control('individual');
            echo $this->Form->control('colectiva');
  ?>
</div>
</div>
<br>

<div style="border: 3px solid #de6e66; border-radius:15px;">
<div style="margin:15px;">
<label>II. Datos personales</label>
<p>En caso de que el tipo de participación sea colectiva, por favor inscriba los datos
de algún representante.</p>
 <?php
            echo $this->Form->control('nombres');
            echo $this->Form->control('apellido_paterno');
            echo $this->Form->control('apellido_materno');
            echo $this->Form->control('edad');
            echo $this->Form->control('fecha_nacimiento', array(
		    'dateFormat' => 'DMY',
		    'minYear' => date('Y') - 70,
		    'maxYear' => date('Y') - 1,
		));
            echo $this->Form->control('residente');
            echo $this->Form->control('originario');
            echo $this->Form->control('alcaldia');
            echo $this->Form->control('colonia');
            echo $this->Form->control('calle');
            echo $this->Form->control('codigo_postal');
  ?>
</div>
</div>
<br>
<div style="border: 3px solid #de6e66; border-radius:15px;">
<div style="margin:15px;">
<label>III. Datos de contacto</label>

 <?php
            echo $this->Form->control('telefono_casa');
            echo $this->Form->control('celular');
            echo $this->Form->control('otro');
            echo $this->Form->control('correo_electronico', ['type' => 'email']);
  ?>
</div>
</div>
<br>
<div style="border: 3px solid #de6e66; border-radius:15px;">
<div style="margin:15px;">
<label>IV. Postulación</label>
<p>Por favor marca la categoría a la cual aspiras participar.</p>
<?php
            echo $this->Form->control('option1',['label'=>'Promoción o desarrollo de actividades tecnológicas, profesionales y de innovación. académicas, científicas, tecnológicas, profesionales y de   innovación.']);
            echo $this->Form->control('option2',['label'=>'Promoción o desarrollo de actividades recreativas, culturales, artísticas, de expresión musical o diseño gráfico.']);
            echo $this->Form->control('option3',['label'=>'Promoción o desarrollo de disciplinas mentales o deportivas.']);
            echo $this->Form->control('option4',['label'=>'Mérito cívico, político o labor social.']);
            echo $this->Form->control('option5',['label'=>'Ambiental o de salud pública.']);
            echo $this->Form->control('option6',['label'=>'Promoción o defensa de los derechos humanos.']);
            echo $this->Form->control('option7',['label'=>'Promoción o fortalecimiento de los usos y costumbres de los pueblos y barrios originarios o comunidades indígenas residentes.']);
            echo $this->Form->control('option8',['label'=>'Reciclaje comunitario o fortalecimiento de imagen urbana o patrimonio cultural.']);
        ?>
</div>
</div>
<br>
<div style="border: 3px solid #de6e66; border-radius:15px;">
<div style="margin:15px;">
    <label>V. Documentación.</label>
 <?php       
            echo $this->Form->control('doc1',['label'=>'Constancia de identidad. (INE, Pasaporte, Cartilla Militar).']);
            echo $this->Form->control('doc2',['label'=>'Acta de nacimiento.']);
            echo $this->Form->control('doc3',['label'=>'Comprobante de domicilio.']);
            echo $this->Form->control('doc4',['label'=>'CURP.']);
            echo $this->Form->control('doc5',['label'=>'Currículum.']);
            echo $this->Form->control('doc6',['label'=>'Semblanza.']);
            echo $this->Form->control('doc7',['label'=>'Soporte documental.']);
            echo $this->Form->control('doc8',['label'=>'Documento de postulación.']);
        ?>
</div>
</div>
<br>
<div style="border: 3px solid #de6e66; border-radius:15px;">
<div style="margin:15px;">
    <center><label>AVISO DE PRIVACIDAD</label></center>
 
    <p>
Los documentos y requisitos señalados en la Convocatoria a la medalla al mérito juvenil 2018 son obligatorios y sin ellos no
podrán acceder al mismo.
La documentación completa de las candidaturas remitida a la Comisión de Juventud se considera confidencial, por los que
permanecerá bajo resguardo de la misma, hasta la emisión del dictamen correspondiente.
Una vez concluido el proceso, la documentación de los aspirantes que no resulten seleccionados estará a su disposición para ser
devuelta en un plazo de 90 día naturales. Transcurrido el plazo aquella que no sea recogida será destruida conforme a lo dispuesto
a las fracciones III y IV del artículo 7 de la Ley de Protección de Datos Personales para el Distrito Federal, vigente.
El proceso de selección tiene el carácter de reservado conforme a los dispone la fracción IV del artículo 183 de la Ley de
Transparencia, Acceso a la Información Pública y Rendición de Cuentas de la Ciudad de México.
</p>   
</div>
<center>
<p>Por favor acude a las oficinas de la Comisión de Juventud del Congreso de la
Ciudad de México, ubicadas en Plaza de la Constitución 7, 3er. Piso, oficina 305,
teléfono 5130-1900 ext. 2325, en un horario de 10:00 horas a 17:00 horas, del 15 de
agosto de 2019 al 15 de octubre de 2019 para completar tu registro y presentar la
documentación pertinente con base en la convocatoria emitida por la Comisión
de Juventud.</p>
<p><b>Favor de presentar este formulario de manera impresa a la hora de entregar tu
registro.</b></p>
</center>
    </fieldset>
    <?= $this->Form->button('Guardar') ?>
    <?= $this->Form->end() ?>
</div>


