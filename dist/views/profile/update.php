<?php
/**
 * Profile
 * PHP version 7.2.0
 *
 * @category  View
 * @package   Profile
 * @author    Patricio Rojas Ortiz <patricio-rojaso@outlook.com>
 * @copyright 2019 (C) Copyright - Web Application development
 * @license   Private license
 * @version   GIT: <git_id>
 * @link      https://appwebd.github.io
 * @date      6/18/18 10:34 AM
 */

use app\components\UiComponent;
use app\models\Profile;

/* @var $this yii\web\View */
/* @var $model app\models\Profile */

$this->title = Yii::t('app', Profile::TITLE);
$this->params[BREADCRUMBS][] = ['label' => $this->title, 'url' => ['index']];
$this->params[BREADCRUMBS][] = [
    'label' => $model->profile_id,
    'url' => [
        'view',
        'id' => $model->profile_id
    ]
];
$this->params[BREADCRUMBS][] = Yii::t('app', 'Update');

$uiComponent = new UiComponent();
$uiComponent->cardHeader(
    Profile::ICON,
    'is-white',
    $this->title,
    Yii::t('app', 'Please complete all requested information.'),
    '000',
    false
);

echo $this->render('_form', ['model' => $model,]);
$uiComponent->cardFooter('');

