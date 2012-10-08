Usable only for Bangladesh
---------------------------

Code_finder is a standalone php script written by Akram Hasan Sharkar and Sazzad Hossain Sharkar.
It has inner database of Bangladeshi Postal Code with District, Thana, Post Office and Post Code.
This is easy to use script, works on single call and line of code. Anyone use this script for their standalone website or any kind of CMS. No need extra coding or programming skill to work with this script.
Easy customizable and fully flexible calls and output. You can apply your own style if you want to implement it with your exist input fields.

Basic usage: 
code_finder.php : This file content postal code inner database and other functions.

code_finder() : Here it is, the function call to exicute values from code_finder.php.

post_code / post : This function call varies type of searching postal code wise or post office. "post_code" will search by postal code and show field for postal code. And "post" will search by post office name.

inline / outline : Displaying the result generated from code_finder.php. inline equal shows as inner format and outline will write information on your exist field, You have to declare "id" on your input flieds "district" for district, "thana" for thana, "post" for post offce and "post_code" for postal code.

< ?php include_once ("code_finder.php"); code_finder(post_code,inline); ?>

This php call will include code_finder.php and code_finder() function will work as postal code search with inline field.

This Multi-functional script work slow for faster output use any mini version you want. Mini version no need function call or searching methods.


You can also use this on your Blog or HTML page by including javascript.


Platform used:
1.	PHP
2.	Curl
3.	Json
4.	jQuery
5.	jQuery UI
6.	XML


For Demo's and know how to use please visit our portal : http://www.akhaura.org/postal


If you like our script, please donate a piece of bread to any poor near you.


This script written by Akram Hasan Sharkar, on behalf of Akhaura Info Foundation, script is free to use for everyone. If you paid for this, please ask distributer for refund. All content and share from Akhaura Info Foundation Copyrighted by the Government for Bangladesh. To use and share any content associated with Akhaura Info Foundation must has their credit. www.akhaura.info