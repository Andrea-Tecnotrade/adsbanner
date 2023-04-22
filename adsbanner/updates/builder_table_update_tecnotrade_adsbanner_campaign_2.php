<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTecnotradeAdsbannerCampaign2 extends Migration
{
    public function up()
    {
        Schema::table('tecnotrade_adsbanner_campaign', function($table)
        {
            $table->date('start_date')->nullable()->unsigned(false)->default(null)->comment(null)->change();
            $table->date('end_date')->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('tecnotrade_adsbanner_campaign', function($table)
        {
            $table->dateTime('start_date')->nullable()->unsigned(false)->default(null)->comment(null)->change();
            $table->dateTime('end_date')->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
