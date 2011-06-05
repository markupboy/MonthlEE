__MonthlEE__ is a simple Expression Engine plugin that takes in a number from 1 to 12 and returns the corresponding month name.

Usage
-----

	{exp:month_name month="2"}
	
Where the month parameter can be any number 1 through 12.  If an invalid string is passed, or the number is outside of the bounds, the plugin will fail silently.

Tips
----

This plugin can be helpful in turning monthly/yearly archive urls into nicely formatted month names for headers.  For instance, if you have the url http://www.example.com/archive/2011/06, month name can help create a nicely formatted header such as

	Archives for {exp:month_name month="{segment_3}"} {segment_2}
	
Which will output __Archives for June 2011__