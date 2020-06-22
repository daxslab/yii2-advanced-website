<?php

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * User model
 *
 * @inheritDoc
 */
class User extends \Da\User\Model\User
{
    public function getName()
    {
        return $this->profile->name != ''
            ? $this->profile->name
            : $this->username;
    }

}
