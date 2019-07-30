<?php

namespace Drupal\intern\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

class FirstForm extends FormBase {

    
    /*
    * Build form layout and designate form entries
    */
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
            '#placeholder' => 'Phone : ( _____ ) ______-_________ *',
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
                ->t('Basketball'),
              'soccer' => $this
                ->t('Soccer'),
              'football' => $this
                ->t('Football'),
              'baseball' => $this
                ->t('Baseball'),
              'winter' => $this
                ->t('Winter'),
              'combat' => $this
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

    
    public function getFormId() {
        return 'intern_first_form';
    }

    /*
    * submitForm will executes stated commands when form is submitted
    */
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





