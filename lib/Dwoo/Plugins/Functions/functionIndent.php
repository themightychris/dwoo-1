<?php
namespace Dwoo\Plugins\Functions;
use Dwoo\Compiler;

/**
 * Indents every line of a text by the given amount of characters
 * <pre>
 *  * value : the string to indent
 *  * by : how many characters should be inserted before each line
 *  * char : the character(s) to insert
 * </pre>
 * This software is provided 'as-is', without any express or implied warranty.
 * In no event will the authors be held liable for any damages arising from the use of this software.
 *
 * @author     David Sanchez <david38sanchez@gmail.com>
 * @copyright  Copyright (c) 2014, David Sanchez
 * @license    http://dwoo.org/LICENSE   Modified BSD License
 * @link       http://dwoo.org/
 * @version    2.0
 * @date       2013-09-06
 * @package    Dwoo
 */
function functionIndentCompile(Compiler $compiler, $value, $by = 4, $char = ' ') {
	return "preg_replace('#^#m', '" . str_repeat(substr($char, 1, - 1), trim($by, '"\'')) . "', $value)";
}
