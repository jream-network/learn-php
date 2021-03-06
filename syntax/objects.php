<?php
// Objects

class Validate
{
    /**
     * @var array $_error Keeps track of errors
     */
    private $_error = [];
    
    public function __construct() {}
    
    /**
     * Validate the length of a string based off an array
     * 
     * @param string $str
     * @param array $array First value is min, second value is max
     * 
     * @return boolean
     */
    public function length($str, $array)
    {
        if (!is_array($array) && count($array) != 2) {
            die("length \$array parameters must be two values for min/max");
        }
        
        if (strlen($str) < $array[0] || strlen($str) > $array[1]) {
            $this->_error("'$str' Min length is {$array[0]} and Max length is {$array[1]}");
            return false;
        }
        return true;
    }
    
    /**
     * Validate the min length of a string
     * 
     * @param stringer $str
     * @param integer $int
     * 
     * @return boolean
     */
    public static function min_length($str, $int)
    {
        if (strlen($str) < $int) {
            $this->_error("'$str'Min length is $int");
            return false;
        }
        return true;
    }
    
    /**
     * Validate the max length of a string
     * 
     * @param stringer $str
     * @param integer $int
     * 
     * @return boolean
     */
    public function max_length($str, $int)
    {
        if (strlen($str) > $int) {
            $this->_error("'$str' Max length is $int");
            return false;
        }
        return true;
    }
    
    /**
     * Validate if a string is numeric only
     * 
     * @param string $str
     * @return boolean
     */
    public function is_numeric($str)
    {
        if (!is_numeric($str)) {
            $this->_error("'$str' must be numeric");
            return false;
        }
        return true;
    }
    
    /**
     * Validate the text is alpha only
     * 
     * @param strin $str
     * @return boolean
     */
    public function is_alpha($str)
    {
        if (!ctype_alpha($str)) {
            $this->_error("'$str' must be alphabetical");
            return false;
        }
        return true;
    }
    
    /**
     * Validate the text is alpha-numeric
     * 
     * @param strin $str
     * @return boolean
     */
    public function is_alphanum($str)
    {
        if (!ctype_alnum($str)) {
            $this->_error("'$str' must be alpha numerical");
            return false;
        }
        return true;
    }
    
    /**
     * Returns any errors that may have happened
     * 
     * @return mixed True for success or Array for Error List
     */
    public function submit()
    {
        if (empty($this->_error)) {
            return true;
        }
        
        return false;
    }
    
    /**
     * Getter for fetching error list
     * 
     * @return array
     */
    public function get_errors()
    {
        return $this->_error;
    }
    
    /**
     * Privately collects errors
     * 
     * @param string $details
     */
    private function _error($details)
    {
        $this->_error[] = $details;
    }

}


$val = new Validate();

$val->max_length('superman', 1);
$val->min_length('superman', 2);
$val->length('superman', [9, 12]);
$val->is_alpha(123);
$val->is_alphanum('dog');
$val->is_numeric('dog');

if (!$val->submit()) {
    $errors = $val->get_errors();
    print_r($errors);
}

