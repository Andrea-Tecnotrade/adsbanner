<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTecnotradeAdsbannerSite2 extends Migration
{
    public function up()
    {
        Schema::table('tecnotrade_adsbanner_site', function($table)
        {
            $table->string('site_name');
        });
    }
    
    public function down()
    {
        Schema::table('tecnotrade_adsbanner_site', function($table)
        {
            $table->dropColumn('site_name');
        });
    }
}
