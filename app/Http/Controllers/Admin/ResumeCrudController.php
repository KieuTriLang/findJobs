<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ResumeRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ResumeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ResumeCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CloneOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkCloneOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkDeleteOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Resume::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/resume');
        CRUD::setEntityNameStrings('resume', 'resumes');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('user_id');
        CRUD::column('avatar_resume');
        CRUD::column('post_code');
        CRUD::column('cv_name');
        CRUD::column('name');
        CRUD::column('career_name');
        CRUD::column('email');
        CRUD::column('phone_num');
        CRUD::column('birthday');
        CRUD::column('address');
        CRUD::column('linkedIn');
        CRUD::column('facebook');
        CRUD::column('skype');
        CRUD::column('career_target');
        CRUD::column('work_exp');
        CRUD::column('education');
        CRUD::column('activities');
        CRUD::column('awards');
        CRUD::column('reference');
        CRUD::column('certificate');
        CRUD::column('created_at');
        CRUD::column('updated_at');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ResumeRequest::class);

        CRUD::field('id');
        CRUD::field('user_id');
        CRUD::field('avatar_resume');
        CRUD::field('post_code');
        CRUD::field('cv_name');
        CRUD::field('name');
        CRUD::field('career_name');
        CRUD::field('email');
        CRUD::field('phone_num');
        CRUD::field('birthday');
        CRUD::field('address');
        CRUD::field('linkedIn');
        CRUD::field('facebook');
        CRUD::field('skype');
        CRUD::field('career_target');
        CRUD::field('work_exp');
        CRUD::field('education');
        CRUD::field('activities');
        CRUD::field('awards');
        CRUD::field('reference');
        CRUD::field('certificate');
        CRUD::field('created_at');
        CRUD::field('updated_at');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
