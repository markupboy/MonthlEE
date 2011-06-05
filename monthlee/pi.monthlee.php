<?php

$plugin_info = array(
	'pi_name' => 'Monthlee',
	'pi_version' =>'0.1',
	'pi_author' =>'Blake Walters',
	'pi_description' => 'Send a number, get back a month',
	'pi_usage' => Monthlee::usage()
);
class Monthlee {

	public function Monthlee() {
		$this->EE =& get_instance(); 
		$parameter = $this->EE->TMPL->fetch_param('month');
		$month = intval($parameter);
		if(is_numeric($parameter) && $month > 0 && $month <= 12) {
			$this->return_data = date("F", mktime(0, 0, 0, $month));
		}
	}
	
	public function usage() {
		ob_start();
?>
{exp:monthlee month="INT"}
where INT is an string containing a number 1-12.

Plugin will fail silently if an ill-formated number is passed. Helpful for turning segments on yearly/monthly archive pages into a month name for a header.

<?php
		$buffer = ob_get_contents();
		ob_end_clean();
		return $buffer;
	}

}

?>