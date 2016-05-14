<?php
/** 
 * Send and manages the contact data.
 *
 * @version 1.0
 * @author Raohmaru
 */

class Contact
{
	private $_names = array("username", "email", "comment");
	
	public function Send($data)
	{
		foreach ($this->_names as $n)
			if( empty($data[$n]) )
				return false;
		
		$tpl = file_get_contents( DOCROOT . '/inc/contact_mail.inc' );
		foreach ($this->_names as $n)
			$tpl = str_replace( "__".$n."__", $this->_Filter($data[$n]), $tpl );
	
		$to      = 'raul@raohmaru.com';
		$subject = 'Alguien quiere contactar...';
		$message = $tpl;
		$headers =	'From: Mogwai<mogwai@raohmaru.com>' . "\r\n" .
					'X-Mailer: PHP/' . phpversion(). "\r\n" .
					'MIME-Version: 1.0' . "\r\n" .
					'Content-type: text/html; charset=UTF-8' . "\r\n";
		
		return mail($to, '=?UTF-8?B?'.base64_encode($subject).'?=', $message, $headers);

	}
	
	/**
	 * Filter string for mail() use.
	 * <http://stackoverflow.com/questions/8071916/escape-string-to-use-in-mail>
	 */
	private function _Filter($str)
	{
		$rule = array(
			"\r" => '<br>',
			"\n" => '',
			"\t" => '',
			'"'  => "'",
			'<'  => '[',
			'>'  => ']',
		);

		return trim(strtr($str, $rule));
	}
}

?>