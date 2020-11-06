<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * About Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modifield
 * @property string|null $title
 * @property string|null $description
 * @property string|null $title_vision
 * @property string|null $vision
 * @property string|null $title_mission
 * @property string|null $mission
 * @property string|null $photo
 * @property string|null $photo_dir
 */
class About extends Entity
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
        'created' => true,
        'modifield' => true,
        'title' => true,
        'description' => true,
        'title_vision' => true,
        'vision' => true,
        'title_mission' => true,
        'mission' => true,
        'photo' => true,
        'photo_dir' => true
    ];
}
