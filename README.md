css-class-tester-php
====================

Lets you test CSS classes in a fast way, with 1 line of PHP!

What this file in PHP lets you do is test a full set of CSS classes that are in
1 CSS file without having to write a line of HTML code. Just including this file 
and passing the name of the file to a function (which is named "test_css"), you
can be seeing the results of every CSS class in a auto-generated table-based 
HTML file. Cool, isn't it?

What you need to know:

1. The CSS file must follow the syntax:

    /*TiTlE:This is the title of these classes */
    
    /*The previous comment, as starting with "TITLE:", is read as a title, */
    
    /*and it turns, in the final HTML, a complete row with the rest of the line */

    .my-first-class {background:black;color:white;font-family:MyCoolFont;font-size:1.5em;}
    .my-first-class {background:black;color:white;font-family:MyCoolFont;font-size:1.5em;}
    .my-first-class {background:black;color:white;font-family:MyCoolFont;font-size:1.5em;}

2. The PHP is just:
    include "class-tester.php";
    test_css("my-file-name.css");
3. And Tada! You can see your class style applied to a simple cell with a simple text! Cool, isn't it?
