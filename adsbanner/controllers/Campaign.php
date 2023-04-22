<?php namespace Tecnotrade\Adsbanner\Controllers;

use Backend\Classes\Controller;
use Tecnotrade\Adsbanner\Models\Campaign as CampaignModel;
use Tecnotrade\Adsbanner\Models\Campaignrow as CampaignRow;
use Tecnotrade\Adsbanner\Routes as Route;
Use Backend;
use BackendMenu;

class Campaign extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController', 'Backend\Behaviors\RelationController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();
    }
    public function update($recordId, $context = null)
    {
    $this->asExtension('FormController')->update($recordId, $context);
    /*$model = $this->formFindModelObject($recordId);*/
    $model = CampaignModel::with(['righecampagna.banner','righecampagna.position','righecampagna.category','advertiser'])->find($recordId);
    
    $data = $model->toArray();
    
    $this->vars['formModel'] = $model;
    $this->vars['righecampagna'] = array_get($data, 'righecampagna');
    }
    
     
    
}
