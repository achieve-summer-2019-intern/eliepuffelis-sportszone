<?php

namespace Drupal\intern\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

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
            // '#default_value' => 2,
            '#options' => array(
              'basketball' => $this
                ->t('basketball'),
              'football' => $this
                ->t('football'),
              'soccer' => $this
                ->t('soccer'),
              'baseball' => $this
                ->t('baseball'),
              'winter' => $this
                ->t('winter'),
              'combat' => $this
                ->t('combat'),
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

    



    public function getFormId() {
        return 'intern_first_form';
    }

    public function validateForm(array &$form, FormStateInterface $form_state){
        $title = $form_state->getValue('title');
        // if(empty($title))
        //     $form_state->setErrorByName('title', 'The title must exist');
    }

    public function submitForm(array &$form, FormStateInterface $form_state) {
        
        
        // foreach ($form_state->getValues() as $key => $value) {
        //   drupal_set_message($key . ': ' . $value);
        // }


        
        $redirect_path = '/sports/'.(string)$form_state->getValue(array('active'));
        $url = url::fromUserInput($redirect_path);
        $form_state->setRedirectUrl($url);
        //$form->save();
    }




} 





