<?php

class Application_Form_Download extends Zend_Form
{

    public function init()
    {
    	//Add the Job Type Select Field
        $this->addElement('select','job_type', array(
         	'label' 		=> 'Please Tell us your type:',
         	'required' 		=> true
         	));
        //Add the Job Role Select Field
         $this->addElement('select','job_role', array(
         	'label' 		=> 'Please Tell Us your Role:',
         	'required' 		=> true
         	));

         //Add the Email Input and Validation
         $this->addElement('text','email', array(
         	'label' 		=> 'Email Address:',
         	'required' 		=> true,
         	'filter'		=> array('StringTrim'),
         	'validators'	=> array('EmailAddress')
         	));


         $this->addElement('text','email_verify', array(
         	'label' 		=> 'Verify Email:',
         	'required' 		=> true,
         	'filter'		=> array('StringTrim'),
         	'validators'	=> array('EmailAddress')
         	));

         //phone num
         $this->addElement('text','telephone', array(
         	'label' 		=> 'Telephone:',
         	'required' 		=> true
         	));

         $this->addElement('select','region', array(
         	'label' 		=> 'Please Tell Us your Region:',
         	'required' 		=> true
         	));

         $this->addElement('select','isd', array(
         	'label' 		=> 'Please Tell Us your ISD:',
         	'required' 		=> true
         	));

         $this->addElement('select','school', array(
         	'label' 		=> 'Please Tell Us your School:',
         	'required' 		=> true
         	));

         $this->addElement('checkbox','opt_in', array(
         	'label' 		=> 'Would you like the email?',
         	'required' 		=> true
         	));

        	$this->addElement('submit','submit');
    }


}

