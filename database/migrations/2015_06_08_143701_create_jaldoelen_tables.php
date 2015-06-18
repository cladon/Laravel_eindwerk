<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJaldoelenTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
//		Schema::create('doelen', function(Blueprint $table)
//		{
//			$table->increments('id');
//
//            $table->string('lp_id',20);
//            $table->string('code',10);
//            $table->string('competentie',10);
//            $table->boolean('graad_j1')->default(true);
//            $table->boolean('graad_j2')->default(false);
//
//            // planner
//            $table->string('waar_ip',10);
//            $table->string('waar_ep',10);
//
//            $table->string('hoe_ood',15);
//            $table->string('hoe_doe',15);
//            $table->string('hoe_project',20);
//            $table->string('hoe_awv',30);
//
//            $table->boolean('wie_pav');
//            $table->boolean('wie_zaco');
//            $table->boolean('wie_ned');
//            $table->boolean('wie_mavo');
//            $table->boolean('wie_wisk');
//            $table->boolean('wie_lo');
//
//            $table->date('wanneer_vw');
//            $table->date('wanneer_wm');
//
//            $table->string('eva_instru',30);
//
//            $table->date('eva_dat');
//
//			$table->timestamps();
//		});

        Schema::create('doelens', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('lp_id',20);
            $table->string('code',10);
            $table->string('competentie',10);
            $table->boolean('graad_j1')->default(true);
            $table->boolean('graad_j2')->default(false);

            // planner
            $table->string('waar_ip',10);
            $table->string('waar_ep',10);

            $table->string('hoe_ood',15);
            $table->string('hoe_doe',15);
            $table->string('hoe_project',20);
            $table->string('hoe_awv',30);

            $table->boolean('wie_pav');
            $table->boolean('wie_zaco');
            $table->boolean('wie_ned');
            $table->boolean('wie_mavo');
            $table->boolean('wie_wisk');
            $table->boolean('wie_lo');

            $table->date('wanneer_vw');
            $table->date('wanneer_wm');

            $table->string('eva_instru',30);

            $table->date('eva_dat');

            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('doelen');
		Schema::drop('doelens');
	}

}
