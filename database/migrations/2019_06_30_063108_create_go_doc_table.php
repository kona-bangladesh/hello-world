<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoDocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('go_doc', function (Blueprint $table) {
            $table->bigIncrements('go_doc_id');
            $table->integer('pmis_id');
            $table->integer('notice_type_id');
            $table->integer('issue_no');
            $table->timestamp('issue_date');
            $table->char('link');
            $table->integer('uploaded_by_pmis_id');
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
        Schema::dropIfExists('go_doc');
    }
}
