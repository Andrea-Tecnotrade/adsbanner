<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTecnotradeAdsbannerSite extends Migration
{
    public function up()
    {
        Schema::table('tecnotrade_adsbanner_site', function($table)
        {
            $table->renameColumn('site_id', 'id_site');
        });
    }
    
    public function down()
    {
        Schema::table('tecnotrade_adsbanner_site', function($table)
        {
            $table->renameColumn('id_site', 'site_id');
        });
    }
}
