<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {

		Schema::create( 'brands', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->string( 'brand_title' );
			$table->string( 'brand_color', 7 )->default( '#353842' );
			$table->integer( 'guideline_id' )->nullable();
			$table->timestamps();
		} );

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'brands' );
	}
}
