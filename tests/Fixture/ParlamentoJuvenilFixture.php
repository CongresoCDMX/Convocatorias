<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ParlamentoJuvenilFixture
 */
class ParlamentoJuvenilFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'parlamento_juvenil';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombre' => ['type' => 'string', 'length' => 145, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'apellido_paterno' => ['type' => 'string', 'length' => 145, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'apellido_materno' => ['type' => 'string', 'length' => 145, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'edad' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'residente' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'originario' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'alcaldia' => ['type' => 'string', 'length' => 145, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'correo_electronico' => ['type' => 'string', 'length' => 145, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'numero_telefonico' => ['type' => 'string', 'length' => 145, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'sociedad_civil' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'cual_sociedad' => ['type' => 'string', 'length' => 145, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'estudiante' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'secundaria' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'medio_superior' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'superior' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'institucion' => ['type' => 'string', 'length' => 145, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'motivos' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'ejercicios' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'ejer_cuales' => ['type' => 'string', 'length' => 145, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'gp1' => ['type' => 'string', 'length' => 145, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'gp2' => ['type' => 'string', 'length' => 145, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'gp3' => ['type' => 'string', 'length' => 145, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'com1' => ['type' => 'string', 'length' => 145, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'com2' => ['type' => 'string', 'length' => 145, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'com3' => ['type' => 'string', 'length' => 145, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'discapacidad' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'dis_cual' => ['type' => 'string', 'length' => 145, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_spanish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'apellido_paterno' => 'Lorem ipsum dolor sit amet',
                'apellido_materno' => 'Lorem ipsum dolor sit amet',
                'edad' => 1,
                'residente' => 1,
                'originario' => 1,
                'alcaldia' => 'Lorem ipsum dolor sit amet',
                'correo_electronico' => 'Lorem ipsum dolor sit amet',
                'numero_telefonico' => 'Lorem ipsum dolor sit amet',
                'sociedad_civil' => 1,
                'cual_sociedad' => 'Lorem ipsum dolor sit amet',
                'estudiante' => 1,
                'secundaria' => 1,
                'medio_superior' => 1,
                'superior' => 1,
                'institucion' => 'Lorem ipsum dolor sit amet',
                'motivos' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'ejercicios' => 1,
                'ejer_cuales' => 'Lorem ipsum dolor sit amet',
                'gp1' => 'Lorem ipsum dolor sit amet',
                'gp2' => 'Lorem ipsum dolor sit amet',
                'gp3' => 'Lorem ipsum dolor sit amet',
                'com1' => 'Lorem ipsum dolor sit amet',
                'com2' => 'Lorem ipsum dolor sit amet',
                'com3' => 'Lorem ipsum dolor sit amet',
                'discapacidad' => 1,
                'dis_cual' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
