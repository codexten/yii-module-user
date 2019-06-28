<?php

namespace codexten\yii\modules\user\models\search;

use codexten\yii\db\SearchModelInterface;
use codexten\yii\db\SearchModelTrait;
use codexten\yii\modules\user\models\User;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\data\DataProviderInterface;

abstract class UserSearch extends Model implements SearchModelInterface
{
    use SearchModelTrait;

    public $roles = [];
    public $baseQuery;


    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search(array $params): DataProviderInterface
    {
        $query = $this->baseQuery ?: User::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => $this->sort,
        ]);
        $query->joinWith(['user as user']);

        $dataProvider->sort->attributes['username'] = [
            'asc' => ['user.username' => SORT_ASC],
            'desc' => ['user.username' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['email'] = [
            'asc' => ['user.email' => SORT_ASC],
            'desc' => ['user.email' => SORT_DESC],
        ];

//        $dataProvider->sort->attributes['full_name'] = [
//            'asc' => ['user.email' => SORT_ASC],
//            'desc' => ['user.email' => SORT_DESC],
//        ];

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        return $dataProvider;
    }
}
