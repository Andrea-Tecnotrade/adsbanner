<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTecnotradeAdsbannerBanner2 extends Migration
{
    public function up()
    {
        Schema::table('tecnotrade_adsbanner_banner', function($table)
        {
            $table->renameColumn('user_id', 'advertiser_id');
        });
    }
    
    public function down()
    {
        Schema::table('tecnotrade_adsbanner_banner', function($table)
        {
            $table->renameColumn('advertiser_id', 'user_id');
        });
    }
}
