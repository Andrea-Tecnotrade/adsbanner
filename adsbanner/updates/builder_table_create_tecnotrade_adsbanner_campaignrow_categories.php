<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTecnotradeAdsbannerCampaignrowCategories extends Migration
{
    public function up()
    {
        Schema::create('tecnotrade_adsbanner_campaignrow_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('campaignrows_id');
            $table->integer('category_id');
            $table->primary(['campaignrows_id','category_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tecnotrade_adsbanner_campaignrow_categories');
    }
}
