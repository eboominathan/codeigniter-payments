<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paypal_PaymentsPro_Examples extends CI_Controller {

	public function index()
	{
		$this->load->spark('cf_payments/1.0.0/');
		
		//*****PAYPAL******//
		/*
		//MAKE A ONE OFF PAYMENT
		var_dump($this->cf_payments->oneoff_payment('paypal_paymentspro', 
				array(
					'ip_address'		=>	'173.20.117.195',	//REQUIRED.  IP address of purchaser
					'cc_type'			=>	'Visa',	//REQUIRED.  Visa, MasterCard, Discover, Amex
					'cc_number'			=>	'4997662409617853', //REQUIRED.  Credit card number
					'cc_exp'			=>	'022016', //REQUIRED.  Must be formatted MMYYYY
					'cc_code'			=>	'203', //RREQUIRED.  3 or 4 digit cvv code
					'email'				=>	'calvinfroedge@gmail.com', //REQUIRED.  email associated with account being billed
					'street'			=>	'181 Rowland Lane', //REQUIRED.  street address of the purchaser
					'city'				=>	'Tompkinsville', //REQUIRED.  city of the purchaser
					'state'				=>	'KY', //REQUIRED.  state of the purchaser
					'countrycode'		=>	'US', //REQUIRED.  country of the purchaser
					'zip'				=>	'42167', //REQUIRED.  zip code of the purchaser
					'amt'				=>	'25.00', //REQUIRED.  purchase amount
				)
			)
		);*/
		/*
		//AUTHORIZE A ONE OFF PAYMENT
		var_dump($this->cf_payments->authorize_payment('paypal_paymentspro', 
					array(
					'ip_address'		=>	'173.20.117.195',	//REQUIRED.  IP address of purchaser
					'cc_type'			=>	'Visa',	//REQUIRED.  Visa, MasterCard, Discover, Amex
					'cc_number'			=>	'4997662409617853', //REQUIRED.  Credit card number
					'cc_exp'			=>	'022016', //REQUIRED.  Must be formatted MMYYYY
					'cc_code'			=>	'203', //RREQUIRED.  3 or 4 digit cvv code
					'email'				=>	'calvinfroedge@gmail.com', //REQUIRED.  email associated with account being billed
					'street'			=>	'181 Rowland Lane', //REQUIRED.  street address of the purchaser
					'city'				=>	'Tompkinsville', //REQUIRED.  city of the purchaser
					'state'				=>	'KY', //REQUIRED.  state of the purchaser
					'countrycode'		=>	'US', //REQUIRED.  country of the purchaser
					'zip'				=>	'42167', //REQUIRED.  zip code of the purchaser
					'amt'				=>	'25.00', //REQUIRED.  purchase amount
				)	
			)
		);*/
		/*
		//AUTHORIZE A PAYMENT CAPTURE
		var_dump($this->cf_payments->capture_payment('paypal_paymentspro', 
				array(
					'identifier'			=>	'8EX70126EC568035J',  //Required. Unique identifier for the transaction, generated from a previous authorization.
					'amt'					=>	'25.00', 
					'final'					=>	TRUE,	//Whether or not this is the final charge.
					'inv_num'				=>	'100',	//Matches some invoice in your own system.
					'note'					=>	'This is a note',
					'cc_statement_descrip'	=>	'A description for the credit card statement',
					'cc_type'				=>	'Visa',	//REQUIRED.  Visa, MasterCard, Discover, Amex
					'cc_number'				=>	'4997662409617853', //REQUIRED.  Credit card number
					'cc_exp'				=>	'022016', //REQUIRED.  Must be formatted MMYYYY
				)
			)
		);
		*/
		/*
		//VOID A PAYMENT
		var_dump($this->cf_payments->void_payment('paypal_paymentspro', 
				array(
					'identifier'	=>	'8EX70126EC568035J', //Required. Unique identifier for the transaction, generated from a previous authorization.
					'note'			=>	'This is a note',
				)
			)
		);*/
		/*
		//GET A TRANSACTION'S DETAILS
		var_dump($this->cf_payments->get_transaction_details('paypal_paymentspro', 
				array(
					'identifier'	=>	'3EH39694NE651043T',  //Required.  Unique identifier to search for
				)
			)
		);*/
		/*
		//CHANGE A TRANSACTION'S STATUS
		var_dump($this->cf_payments->change_transaction_status('paypal_paymentspro', 
				array(
					'identifier'	=>	'3EH39694NE651043T',
					'action'		=>	'Accept'
				)
			)
		)*/;
		/*
		//REFUND A PAYMENT
		var_dump($this->cf_payments->refund_payment('paypal_paymentspro', 
				array(
					'identifier'			=>	'3EH39694NE651043T',
					'inv_num'				=>	'',
					'refund_type'			=>	'Full', //Can be Full or Partial
					'amt'					=>	'',  //Do not set amount if refund type is Full
					'currency_code'			=>	'USD',
					'note'					=>	'This is a note about the refund'
				)
			)
		);
		*/
		/*
		//Search Transactions
		var_dump($this->cf_payments->search_transactions('paypal_paymentspro', 
				array(
					'start_date'			=>	'2011-07-02T00:24:59+00:00',	//Date to search from.
					'end_date'				=>	'',	//Date to search to
					'email'					=>	'',	//Email used by purchaser
					'receiver'				=>	'',	//Identifier of receiver
					'receipt_id'			=>	'',	//Receipt id (generated by gateway)
					'transaction_id'		=>	'',	//Transaction id (generated by gateway)
					'inv_num'				=>	'',	//Invoice number (generated by you, must match what's in gateway)
					'cc_number'				=>	'',	//The credit card number to use
					'auction_item_number'	=>	'',	//The auction item number to use
					'transaction_class'		=>	'',	//The transaction class (Method of original API query)
					'amt'					=>	'',	//Transactions of amount..
					'currency_code'			=>	'',	//Transactions with currency code..
					'status'				=>	'',	//Transactions with status
					'salutation'			=>	'',	//The buyer's salutation
					'first_name'			=>	'',	//The buyer's first name
					'middle_name'			=>	'',	//The buyer's middle name
					'last_name'				=>	'',	//The buyer's last name
					'suffix'				=>	''	//The buyer's suffix
				)		
			)
		);
		*/
		/*
		//Make a Recurring Payment
		var_dump($this->cf_payments->recurring_payment('paypal_paymentspro', 
				array(
					'subscriber_name'			=>	'',
					'profile_start_date'		=>	'2011-07-06T00:24:59+00:00',  //Required.  The subscription start date.
					'profile_reference'			=>	'',
					'desc'						=>	'Chill out.  Just a test!',	//Required.  A description for the recurring bill.
					'max_failed_payments'		=>	'',
					'auto_bill_amt'				=>	'',
					'billing_period'			=>	'Year', //Required.  Year, month, week
					'billing_frequency'			=>	'1',	//Required.  Number of times to bill per period
					'total_billing_cycles'		=>	'',
					'amt'						=>	'10.00',	//Required.  Amount to bill
					'trial_billing_frequency'	=>	'',
					'trial_billing_cycles'		=>	'',
					'trial_amt'					=>	'',						
					'currency_code'				=>	'',
					'shipping_amt'				=>	'',
					'tax_amt'					=>	'',
					'initial_amt'				=>	'',	//billed immediately upon profile creationg
					'failed_init_action'		=>	'',	//What to do if the initial bill failes.  Continue or Cancel.
					'ship_to_name'				=>	'',
					'ship_to_street'			=>	'',
					'ship_to_street2'			=>	'',
					'ship_to_city'				=>	'',
					'ship_to_state'				=>	'',
					'ship_to_zip'				=>	'',
					'ship_to_country'			=>	'',
					'ship_to_phone_num'			=>	'',
					'cc_type'					=>	'Visa',	//Required.  Credit card type.
					'cc_number'					=>	'4997662409617853',	//Required.  Credit card number.
					'exp_date'					=>	'022016',	//Required.  Credit card expiration date.
					'cc_code'					=>	'203',	//Required.  Credit Card CVV code.
					'start_date'				=>	'',	
					'issue_number'				=>	'',
					'email'						=>	'',
					'identifier'				=>	'',
					'payer_status'				=>	'',
					'country_code'				=>	'US',	//Required.  Buyer's country code.
					'business_name'				=>	'',
					'salutation'				=>	'',
					'first_name'				=>	'',
					'middle_name'				=>	'',
					'last_name'					=>	'',
					'suffix'					=>	'',
					'street'					=>	'181 Rowland Lane',  //Required.  Buyer's street address.
					'street2'					=>	'',
					'city'						=>	'Tompkinsville',	//Required.  Buyer's city.
					'state'						=>	'KY',	//Required.  Buyer's state or province.
					'postal_code'				=>	'42167',	//Required.  Buyer's postal code.
					'ship_to_phone_num'			=>	'(270) 487 9560',		
				)
			)
		);
		*/
		//GET A RECURRING PROFILE
		/*
		var_dump($this->cf_payments->get_recurring_profile('paypal_paymentspro', 
				array(
					'identifier'	=> 'I-CDSFBDH61F0D'
				)
			)
		);
		*/
		//SUSPEND A RECURRING PROFILE
		/*
		var_dump($this->cf_payments->suspend_recurring_profile('paypal_paymentspro',
				array(
					'identifier'	=> 'I-CDSFBDH61F0D',
					'note'			=> 'This is just a note'
				)
			)
		);
		*/
		/*
		//ACTIVATE A RECURRING PROFILE THAT HAS BEEN SUSPENDED
		var_dump($this->cf_payments->activate_recurring_profile('paypal_paymentspro', 
				array(
					'identifier'	=> 'I-CDSFBDH61F0D',
					'note'			=> 'This is just a note'
				)
			)
		);
		*/
		//CANCEL A RECURRING PROFILE
		/*
		var_dump($this->cf_payments->cancel_recurring_profile('paypal_paymentspro', 
				array(
					'identifier'	=> 'I-CDSFBDH61F0D',
					'note'			=> 'This is just a note'
				)		
			)
		);
		*/
		/*
		//BILL AN OUTSTANDING AMOUNT ON A RECURRING PROFILE
		var_dump($this->cf_payments->recurring_bill_outstanding('paypal_paymentspro', 
				array(
					'identifier'	=> 'I-CDSFBDH61F0D',
					'amt'			=>	'',
					'note'			=> 'This is just a note'
				)				
			)
		);
		*/	
		/*
		//UPDATE A RECURRING PROFILE	
		var_dump($this->cf_payments->update_recurring_profile('paypal_paymentspro', 
				array(
					'identifier'				=>	'I-LDEK42D9UYL7',	//Required.
					'note'						=>	'',	
					'subscriber_name'			=>	'',
					'profile_reference'			=>	'',
					'additional_billing_cycles'	=>	'',
					'desc'						=>	'Chill out.  Just a test!',	
					'max_failed_payments'		=>	'',
					'auto_bill_amt'				=>	'',
					'profile_start_date'		=>	'2011-07-08T00:24:59+00:00',  //The subscription start date.			
					'billing_period'			=>	'Year', //Required.  Year, month, week
					'billing_frequency'			=>	'1',	//Required.  Number of times to bill per period
					'total_billing_cycles'		=>	'',
					'amt'						=>	'11.00',	//Required.  Amount to bill
					'trial_billing_cycles'		=>	'',
					'trial_amt'					=>	'',						
					'currency_code'				=>	'',
					'shipping_amt'				=>	'',
					'tax_amt'					=>	'',
					'outstanding_amt'			=>	'',
					'failed_init_action'		=>	'',	//What to do if the initial bill failes.  Continue or Cancel.
					'ship_to_name'				=>	'',
					'ship_to_street'			=>	'',
					'ship_to_street2'			=>	'',
					'ship_to_city'				=>	'',
					'ship_to_state'				=>	'',
					'ship_to_zip'				=>	'',
					'ship_to_country'			=>	'',
					'cc_type'					=>	'Visa',	//Required.  Credit card type.
					'cc_number'					=>	'4997662409617853',	//Required.  Credit card number.
					'exp_date'					=>	'022016',	//Required.  Credit card expiration date.
					'cc_code'					=>	'203',	//Required.  Credit Card CVV code.
					'start_date'				=>	'',	
					'issue_number'				=>	'',
					'email'						=>	'',
					'first_name'				=>	'',
					'last_name'					=>	'',
					'street'					=>	'181 Rowland Lane',  //Required.  Buyer's street address.
					'street2'					=>	'',
					'city'						=>	'Tompkinsville',	//Required.  Buyer's city.
					'state'						=>	'KY',	//Required.  Buyer's state or province.
					'country_code'				=>	'',
					'postal_code'				=>	'42167',	//Required.  Buyer's postal code.
					'ship_to_phone_num'			=>	'(270) 487 9560',	
				)	
			)
		);
		*/

	}
}