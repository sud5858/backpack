<?php

namespace App;

trait PageTemplates
{
    /*
    |--------------------------------------------------------------------------
    | Page Templates for Backpack\PageManager
    |--------------------------------------------------------------------------
    |
    | Each page template has its own method, that define what fields should show up using the Backpack\CRUD API.
    | Use snake_case for naming and PageManager will make sure it looks pretty in the create/update form
    | template dropdown.
    |
    | Any fields defined here will show up after the standard page fields:
    | - select template
    | - page name (only seen by admins)
    | - page title
    | - page slug
    */

    private function services()
    {
        $this->crud->addField([   // CustomHTML
                        'name' => 'metas_separator',
                        'type' => 'custom_html',
                        'value' => '<br><h2>Metas</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name' => 'meta_title',
                        'label' => 'Meta Title',
                        'fake' => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name' => 'meta_description',
                        'label' => 'Meta Description',
                        'fake' => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name' => 'meta_keywords',
                        'type' => 'textarea',
                        'label' => 'Meta Keywords',
                        'fake' => true,
                        'store_in' => 'extras',
                    ]);
         

        $this->crud->addField([
                        'name' => 'servicename',
                        'type' => 'textarea',
                        'label' => 'Services Name',
                        'fake' => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name' => 'servicdescription',
                        'type' => 'textarea',
                        'label' => 'Service Description',
                        'fake' => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name' => 'quality',
                        'type' => 'textarea',
                        'label' => 'Qality Satisfaction',
                        'fake' => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name' => 'quality_description',
                        'type' => 'textarea',
                        'label' => 'Qality Description',
                        'fake' => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name' => 'delivery_network',
                        'type' => 'textarea',
                        'label' => 'Delivery Network',
                        'fake' => true,
                        'store_in' => 'extras',
                    ]);

       $this->crud->addField([
                        'name' => 'delivery_description',
                        'type' => 'textarea',
                        'label' => 'Delivery Description',
                        'fake' => true,
                        'store_in' => 'extras',
                    ]);







        $this->crud->addField([   // CustomHTML
                        'name' => 'content_separator',
                        'type' => 'custom_html',
                        'value' => '<br><h2>Content</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name' => 'content',
                        'label' => 'Content',
                        'type' => 'wysiwyg',
                        'placeholder' => 'Your content here',
                    ]);
    }

    private function about_us()
    {
        $this->crud->addField([
                        'name' => 'content',
                        'label' => 'Content',
                        'type' => 'wysiwyg',
                        'placeholder' => 'Your content here',
                    ]);
    }
}
