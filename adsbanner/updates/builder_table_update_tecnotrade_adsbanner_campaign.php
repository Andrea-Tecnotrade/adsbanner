<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTecnotradeAdsbannerCampaign extends Migration
{
    public function up()
    {
        Schema::table('tecnotrade_adsbanner_campaign', function($table)
        {
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->string('code')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('tecnotrade_adsbanner_campaign', function($table)
        {
            $table->dropColumn('start_date');
            $table->dropColumn('end_date');
            $table->dropColumn('code');
        });
    }
}
