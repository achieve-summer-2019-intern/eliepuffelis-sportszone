<?php

namespace Drupal\intern\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class FirstForm extends FormBase {

    public function buildForm(array $form, FormStateInterface $form_state){
        $form['first_name'] = [
            '#type' => 'textfield',
            //'#title' => 'First Name',
            '#placeholder' => 'First Name *',
            '#description' => '',
            '#required' => TRUE,
        ];

        $form['last_name'] = [
            '#type' => 'textfield',
            //'#title' => 'Last Name',
            '#placeholder' => 'Last Name *',
            '#description' => '',
            '#required' => TRUE,
        ];
 
        $form['email'] = [
            '#type' => 'email',
            //'#title' => 'Email',
            '#placeholder' => 'Email *',
            '#description' => '',
            '#required' => TRUE,

        ];

        $form['phone-number'] = [
            '#type' => 'number',
            //'#title' => 'Phone Number',
            '#placeholder' => 'Phone Number *',
            '#description' => '',
            

        ];

        $form['username'] = [
            '#type' => 'textfield',
            //'#title' => 'username',
            '#placeholder' => 'Username *',
            '#description' => '',
            '#required' => TRUE,
        ];

        $form['password'] = [
            '#type' => 'password_confirm',
            '#placeholder' => 'Password *',
            '#attributes' => array(
                '#placeholder' => t('My placeholder text'),
              ),
            '#description' => '',
            '#required' => TRUE,
        ];

        $form['settings']['active'] = array(
            '#type' => 'radios',
            '#title' => $this
              ->t('Choose Your  Favorite  Sport'),
            //'#default_value' => 2,
            '#options' => array(
              0 => $this
                ->t('Basketball'),
              1 => $this
                ->t('Football'),
              2 => $this
                ->t('Soccer'),
              3 => $this
                ->t('Baseball'),
              4 => $this
                ->t('Winter'),
              5 => $this
                ->t('Combat'),
            ),
          );


        $form['actions'] = [
            '#type' => 'actions',
        ];

        $form['actions']['submit'] = [
            '#type' => 'submit',
            '#value' => 'Sign Up',
        ];

        return $form;
    }

    // radio buttons
    // $form['message'] = [
    //     '#type' => 'radios',
    //     '#title' => t('Preview comment'),
    //     // '#default_value' => variable_get('comment_preview', 1),
    //     '#options' => array(t('Optional'), t('Required')),

    // ];



    public function getFormId() {
        return 'intern_first_form';
    }

    public function validateForm(array &$form, FormStateInterface $form_state){
        $title = $form_state->getValue('title');
        if(empty($title))
            $form_state->setErrorByName('title', 'The title must exist');
    }

    public function submitForm(array &$form, FormStateInterface $form_state) {
        $title = $form_state->getValue('title');
        drupal_set_mesage('You submitted the form with the title: '.$title);
        //$form->save();
    }


} 





