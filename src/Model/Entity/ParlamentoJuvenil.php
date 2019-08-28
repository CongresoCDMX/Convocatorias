<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ParlamentoJuvenil Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property int $edad
 * @property bool|null $residente
 * @property bool|null $originario
 * @property string $alcaldia
 * @property string|null $correo_electronico
 * @property string|null $numero_telefonico
 * @property bool|null $sociedad_civil
 * @property string|null $cual_sociedad
 * @property bool|null $estudiante
 * @property bool|null $secundaria
 * @property bool|null $medio_superior
 * @property bool|null $superior
 * @property string|null $institucion
 * @property string|null $motivos
 * @property bool|null $ejercicios
 * @property string|null $ejer_cuales
 * @property string|null $gp1
 * @property string|null $gp2
 * @property string|null $gp3
 * @property string|null $com1
 * @property string|null $com2
 * @property string|null $com3
 * @property bool|null $discapacidad
 * @property string|null $dis_cual
 */
class ParlamentoJuvenil extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nombre' => true,
        'apellido_paterno' => true,
        'apellido_materno' => true,
        'edad' => true,
        'residente' => true,
        'originario' => true,
        'alcaldia' => true,
        'correo_electronico' => true,
        'numero_telefonico' => true,
        'sociedad_civil' => true,
        'cual_sociedad' => true,
        'estudiante' => true,
        'secundaria' => true,
        'medio_superior' => true,
        'superior' => true,
        'institucion' => true,
        'motivos' => true,
        'ejercicios' => true,
        'ejer_cuales' => true,
        'gp1' => true,
        'gp2' => true,
        'gp3' => true,
        'com1' => true,
        'com2' => true,
        'com3' => true,
        'discapacidad' => true,
        'dis_cual' => true
    ];
}
