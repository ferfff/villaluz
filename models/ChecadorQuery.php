<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Checador]].
 *
 * @see Checador
 */
class ChecadorQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Checador[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Checador|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
