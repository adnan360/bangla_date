<?php
/*
 *  Bangla Date functions, written by Adnan Shameem (needadnan <at> hotmail <dot> com)
 */

function bangla_number( $number )
{
	$search  = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
	$replace = array('০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯');
	return str_replace($search, $replace, $number);
}

function bangla_date( $format, $timestamp = '')
{
	if ($timestamp == '') { $timestamp = time(); }
	
	$out = $format;
	$out = str_replace('d', bangla_number(date('d', $timestamp)), $out);
	
	// D : A textual representation of a day, three letters : Mon through Sun
	$search  = array('Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri');
	$replace = array('শনি', 'রবি', 'সোম', 'মঙ্গল', 'বুধ', 'বৃহ', 'শুক্র');
	$out = str_replace('D', str_replace($search,$replace,date('D', $timestamp)), $out);
	
	// j : Day of the month without leading zeros : 1 to 31
	$out = str_replace('j', bangla_number(date('j', $timestamp)), $out);
	
	// l (lowercase 'L') : A full textual representation of the day of the week : Sunday through Saturday
	$search  = array('Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday');
	$replace = array('শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহঃস্পতিবার', 'শুক্রবার');
	$out = str_replace('l', str_replace($search,$replace,date('l', $timestamp)), $out);
	
	//// Month ////
	// F : A full textual representation of a month, such as January or March : January through December
	$search  = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October',
				'November', 'December');
	$replace = array('জানুয়ারী', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর',
				'নভেম্বর', 'ডিসেম্বর');
	$out = str_replace('F', str_replace($search,$replace,date('F', $timestamp)), $out);
	
	// m : Numeric representation of a month, with leading zeros : 01 through 12
	$out = str_replace('m', bangla_number(date('m', $timestamp)), $out);
	
	// M : A short textual representation of a month, three letters : Jan through Dec
	$search  = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct',
				'Nov', 'Dec');
	$replace = array('জানু', 'ফেব্রু', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টে', 'অক্টো',
				'নভে', 'ডিসে');
	$out = str_replace('M', str_replace($search,$replace,date('M', $timestamp)), $out);
	
	// n : Numeric representation of a month, without leading zeros : 1 through 12
	$out = str_replace('n', bangla_number(date('n', $timestamp)), $out);
	
	// t : Number of days in the given month : 28 through 31
	$out = str_replace('t', bangla_number(date('t', $timestamp)), $out);
	
	// Y : A full numeric representation of a year, 4 digits : Examples: 1999 or 2003
	$out = str_replace('Y', bangla_number(date('Y', $timestamp)), $out);
	
	// y : A two digit representation of a year : Examples: 99 or 03
	$out = str_replace('y', bangla_number(date('y', $timestamp)), $out);
	
	//// TIME ////
	// g : 12-hour format of an hour without leading zeros : 1 through 12
	$out = str_replace('g', bangla_number(date('g', $timestamp)), $out);
	
	// G : 24-hour format of an hour without leading zeros : 0 through 23
	$out = str_replace('G', bangla_number(date('G', $timestamp)), $out);

	// h : 12-hour format of an hour with leading zeros : 01 through 12
	$out = str_replace('h', bangla_number(date('h', $timestamp)), $out);
	
	// H : 24-hour format of an hour with leading zeros : 00 through 23
	$out = str_replace('H', bangla_number(date('H', $timestamp)), $out);
	
	// i : Minutes with leading zeros : 00 to 59
	$out = str_replace('i', bangla_number(date('i', $timestamp)), $out);
	
	// s : Seconds, with leading zeros : 00 through 59
	$out = str_replace('s', bangla_number(date('s', $timestamp)), $out);
	
	// a : Lowercase Ante meridiem and Post meridiem : am or pm
	$out = str_replace('a', bangla_number(date('a', $timestamp)), $out);
	
	// A : Uppercase Ante meridiem and Post meridiem : AM or PM
	$out = str_replace('A', bangla_number(date('A', $timestamp)), $out);
	
	//$out = bangla_number($out);
	return $out;
}
?>