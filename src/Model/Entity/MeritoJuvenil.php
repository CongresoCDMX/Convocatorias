<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MeritoJuvenil Entity
 *
 * @property int $id
 * @property bool|null $individual
 * @property bool|null $colectiva
 * @property string $nombres
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property int $edad
 * @property \Cake\I18n\FrozenDate $fecha_nacimiento
 * @property bool $residente
 * @property bool $originario
 * @property string $alcaldia
 * @property string $colonia
 * @property string $calle
 * @property string $codigo_postal
 * @property string|null $telefono_casa
 * @property string|null $celular
 * @property string|null $otro
 * @property string $correo_electronico
 * @property bool|null $option1
 * @property bool|null $option2
 * @property bool|null $option3
 * @property bool|null $option4
 * @property bool|null $option5
 * @property bool|null $option6
 * @property bool|null $option7
 * @property bool|null $option8
 * @property bool|null $doc1
 * @property bool|null $doc2
 * @property bool|null $doc3
 * @property bool|null $doc4
 * @property bool|null $doc5
 * @property bool|null $doc6
 * @property bool|null $doc7
 * @property bool|null $doc8
 */
class MeritoJuvenil extends Entity
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
        'individual' => true,
        'colectiva' => true,
        'nombres' => true,
        'apellido_paterno' => true,
        'apellido_materno' => true,
        'edad' => true,
        'fecha_nacimiento' => true,
        'residente' => true,
        'originario' => true,
        'alcaldia' => true,
        'colonia' => true,
        'calle' => true,
        'codigo_postal' => true,
        'telefono_casa' => true,
        'celular' => true,
        'otro' => true,
        'correo_electronico' => true,
        'option1' => true,
        'option2' => true,
        'option3' => true,
        'option4' => true,
        'option5' => true,
        'option6' => true,
        'option7' => true,
        'option8' => true,
        'doc1' => true,
        'doc2' => true,
        'doc3' => true,
        'doc4' => true,
        'doc5' => true,
        'doc6' => true,
        'doc7' => true,
        'doc8' => true
    ];
}
