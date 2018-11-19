<?php namespace Openlab\Contact\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('openlab_contact_contacts', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('email');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('openlab_contact_contacts');
    }
}
