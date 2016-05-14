<?php
/** 
 * Loads the portfolio data from a JSON.
 *
 * @version 1.0
 * @author Raohmaru
 */

class Portfolio
{
	public $raw = '{}';
	private $_json = NULL;
	
	function __construct()
	{
		$path = DOCROOT . "/js/portfolio.json";
		if( is_file($path) )
		{
			$this->raw = file_get_contents(DOCROOT . "/js/portfolio.json");
			$this->_json = json_decode($this->raw);
		}
	}
	
	/**
	 * Generates the HTML from the JSON data.
	 */
	function Build($key, $title)
	{
		if( $this->_json == NULL || !isset($this->_json->$key) )
			return;
		
		$cat = $this->_json->$key;
		$i = 0;
		$str =	'<h2>' . $title . '</h2>' . 
				'<div class="scrollable">' . 
					'<ul id="portfolio-' . $key . '">';
		
		foreach ($cat as $w)
			$str .= '<li>' . $this->_BuildItem($w, $key, $i++) . '</li>';
		
		$str .=		'</ul>' .
				'</div>';
		
		return $str;
	}
	
	/**
	 * Gets an object from the JSON data by its id.
	 */
	function GetObject($key)
	{
		if( $this->_json == NULL )
			return NULL;
		
		if(!is_string($key) || empty($key))
			return NULL;
		
		foreach($this->_json as $cat)
		{
			foreach($cat as $item)
			{
				if($item->L == $key)
					return $item;
			}
		}
		
		return NULL;
	}
	
	/**
	 * Generates the HTML from the JSON data with random items.
	 */
	function BuildRandom($num, $exclude='')
	{
		if( $this->_json == NULL )
			return NULL;
		
		$arr = array();
		foreach($this->_json as $cat)
			$arr = array_merge($arr, $cat);
		shuffle($arr);
		
		$str = '';
		for ($i=0; $i<count($arr); $i++)
		{
			if( $arr[$i]->L == $exclude )
				continue;
			if( --$num < 0 )
				break;
			
			$str .= $this->_BuildItem($arr[$i], "rel", $i);
		}
		
		return $str;
	}
	
	/**
	 * Generates the HTML from the JSON data with random items.
	 */
	private function _BuildItem($w, $key='', $i=0)
	{
		$str = '<a href="/portfolio/' . $w->L . '"' .
				' id="' . $key . '-' . $i++ . '"' .
				' title="' . $w->T . '"' .
				' data-abstract="' . $w->A . '"' .
				' class="work pf-' . $w->C . '"' .
				(!isset($w->F) ? ' rel="nofollow"' : '') .
				'><span>' . $w->T . '</span></a>';
		return $str;
	}
}

?>