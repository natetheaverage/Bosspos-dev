<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBossposDatabase extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
         public function up()
         {
            
	    /**
	     * Table: customers
	     */
	    Schema::create('customers', function($table) {
                $table->increments('id')->unsigned();
                $table->integer('red_card_number')->nullable();
                $table->string('red_card_provider', 255)->nullable();
                $table->date('red_card_expires')->nullable();
                $table->integer('identification_number')->nullable();
                $table->string('identification_type', 255)->nullable();
                $table->string('identification_state', 255)->nullable();
                $table->date('identification_expires')->nullable();
                $table->boolean('active');
                $table->integer('location_id');
                $table->integer('created_by');
                $table->string('user_id', 255);
                $table->timestamp('deleted_at')->nullable();
                $table->timestamp('created_at')->default("0000-00-00 00:00:00");
                $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
                $table->index('customers_location_id_index');
                $table->index('customers_created_by_index');
                $table->index('customers_user_id_index');
            });


	    /**
	     * Table: employees
	     */
	    Schema::create('employees', function($table) {
                $table->increments('id')->unsigned();
                $table->string('title', 40)->nullable();
                $table->integer('wage')->nullable();
                $table->integer('badge_number')->nullable();
                $table->string('badge_type', 255)->nullable();
                $table->integer('ss')->nullable();
                $table->integer('location_id')->nullable();
                $table->integer('created_by')->nullable();
                $table->integer('user_id')->nullable();
                $table->integer('active')->nullable();
                $table->timestamp('deleted_at')->nullable();
                $table->timestamp('created_at')->default("0000-00-00 00:00:00");
                $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
            });


	    /**
	     * Table: interface_objects
	     */
	    Schema::create('interface_objects', function($table) {
                $table->increments('id')->unsigned();
                $table->integer('menu_id');
                $table->string('menu_name', 255);
                $table->integer('menu_order');
                $table->string('family', 255);
                $table->string('type', 255);
                $table->string('name', 255);
                $table->string('class', 255)->nullable();
                $table->string('style', 255)->nullable();
                $table->string('label', 255)->nullable();
                $table->string('value', 255)->nullable();
                $table->text('content')->nullable();
                $table->string('icon', 255)->nullable();
                $table->string('href', 255)->nullable();
                $table->string('disabled', 255)->nullable();
                $table->string('alt', 255)->nullable();
                $table->string('on_click', 255)->nullable();
                $table->string('target', 255)->nullable();
                $table->string('hook', 255)->nullable();
                $table->string('color', 255)->nullable();
                $table->string('extra1', 255)->nullable();
                $table->string('extra2', 255)->nullable();
                $table->string('notification_style', 255)->nullable();
                $table->string('notification_color', 255)->nullable();
                $table->string('notification_text', 255)->nullable();
                $table->integer('owner_id')->nullable();
                $table->string('owner_type', 255)->nullable();
                $table->integer('lists_id')->nullable();
                $table->string('lists_type', 255)->nullable();
                $table->integer('taggable_id')->unsigned();
                $table->string('taggable_type', 255);
                $table->timestamp('deleted_at')->nullable();
                $table->timestamp('created_at')->default("0000-00-00 00:00:00");
                $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
                $table->index('interface_objects_taggable_id_taggable_type_index');
                $table->index('interface_objects_taggable_id_taggable_type_index');
                $table->index('interface_objects_menu_id_index');
                $table->index('interface_objects_menu_name_index');
                $table->index('interface_objects_menu_order_index');
                $table->index('interface_objects_family_index');
                $table->index('interface_objects_type_index');
                $table->index('interface_objects_name_index');
            });


	    /**
	     * Table: lists
	     */
	    Schema::create('lists', function($table) {
                $table->increments('id')->unsigned();
                $table->string('title', 255);
                $table->string('item', 255);
                $table->string('name', 255);
                $table->string('type', 255);
                $table->string('default', 255);
                $table->string('action', 255);
                $table->string('extra1', 255);
                $table->string('extra2', 255);
                $table->string('owner_id', 255);
                $table->string('owner_type', 255);
                $table->integer('taggable_id')->unsigned();
                $table->string('taggable_type', 255);
                $table->timestamp('deleted_at')->nullable();
                $table->timestamp('created_at')->default("0000-00-00 00:00:00");
                $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
                $table->index('lists_taggable_id_taggable_type_index');
                $table->index('lists_taggable_id_taggable_type_index');
                $table->index('lists_title_index');
                $table->index('lists_item_index');
                $table->index('lists_name_index');
                $table->index('lists_default_index');
            });


	    /**
	     * Table: memberships
	     */
	    Schema::create('memberships', function($table) {
                $table->increments('id')->unsigned();
                $table->boolean('promotion_approval');
                $table->integer('point_member_id');
                $table->integer('points');
                $table->string('user_id', 255);
                $table->timestamp('deleted_at')->nullable();
                $table->timestamp('created_at')->default("0000-00-00 00:00:00");
                $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
            });


	    /**
	     * Table: messages
	     */
	    Schema::create('messages', function($table) {
                $table->increments('id')->unsigned();
                $table->string('subject', 255);
                $table->string('body', 255);
                $table->integer('location_id');
                $table->integer('created_by');
                $table->string('user_id', 255);
                $table->timestamp('deleted_at')->nullable();
                $table->integer('taggable_id')->unsigned();
                $table->string('taggable_type', 255);
                $table->timestamp('created_at')->default("0000-00-00 00:00:00");
                $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
                $table->index('messages_taggable_id_taggable_type_index');
                $table->index('messages_taggable_id_taggable_type_index');
                $table->index('messages_subject_index');
                $table->index('messages_body_index');
                $table->index('messages_location_id_index');
                $table->index('messages_created_by_index');
                $table->index('messages_user_id_index');
            });


	    /**
	     * Table: password_resets
	     */
	    Schema::create('password_resets', function($table) {
                $table->string('email', 255);
                $table->string('token', 255);
                $table->timestamp('created_at')->default("0000-00-00 00:00:00");
                $table->index('password_resets_email_index');
                $table->index('password_resets_token_index');
            });


	    /**
	     * Table: permissions
	     */
	    Schema::create('permissions', function($table) {
                $table->increments('id')->unsigned();
                $table->timestamp('created_at')->default("0000-00-00 00:00:00");
                $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
            });


	    /**
	     * Table: profiles
	     */
	    Schema::create('profiles', function($table) {
                $table->increments('id')->unsigned();
                $table->string('first_name', 40);
                $table->string('last_name', 40);
                $table->integer('phone');
                $table->string('address_street', 255);
                $table->string('address_city', 55);
                $table->string('address_state', 45);
                $table->integer('address_zip');
                $table->integer('dob')->nullable();
                $table->string('user_id', 255);
                $table->timestamp('deleted_at')->nullable();
                $table->timestamp('created_at')->default("0000-00-00 00:00:00");
                $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
            });


	    /**
	     * Table: roles
	     */
	    Schema::create('roles', function($table) {
                $table->increments('id')->unsigned();
                $table->string('title', 255);
                $table->integer('permissions_id');
                $table->timestamp('created_at')->default("0000-00-00 00:00:00");
                $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
            });


	    /**
	     * Table: user_activities
	     */
	    Schema::create('user_activities', function($table) {
                $table->increments('id')->unsigned();
                $table->integer('object_id');
                $table->string('object_type', 255);
                $table->string('name', 255);
                $table->integer('user_id');
                $table->timestamp('created_at')->default("0000-00-00 00:00:00");
                $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
                $table->index('user_activities_object_id_index');
                $table->index('user_activities_object_type_index');
                $table->index('user_activities_user_id_index');
            });


	    /**
	     * Table: users
	     */
	    Schema::create('users', function($table) {
                $table->increments('id')->unsigned();
                $table->string('username', 255);
                $table->string('email', 255);
                $table->string('password', 60);
                $table->integer('facility_id');
                $table->integer('preferences_id');
                $table->integer('role_id');
                $table->integer('taggable_id')->unsigned();
                $table->string('taggable_type', 255);
                $table->timestamp('deleted_at')->nullable();
                $table->string('remember_token', 100)->nullable();
                $table->timestamp('created_at')->default("0000-00-00 00:00:00");
                $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
                $table->index('users_email_unique');
                $table->index('users_taggable_id_taggable_type_index');
                $table->index('users_taggable_id_taggable_type_index');
            });


         }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
         public function down()
         {
            
	            Schema::drop('customers');
	            Schema::drop('employees');
	            Schema::drop('interface_objects');
	            Schema::drop('lists');
	            Schema::drop('memberships');
	            Schema::drop('messages');
	            Schema::drop('password_resets');
	            Schema::drop('permissions');
	            Schema::drop('profiles');
	            Schema::drop('roles');
	            Schema::drop('user_activities');
	            Schema::drop('users');
         }

}