css-class-tester-php
====================

Let's you test CSS classes in a fast way, with 1 line of PHP!

What you need to know:

1. The CSS file must follow the syntax:
    /*TiTlE:This is the title of these classes */
    /*The previous comment, as starting with "TITLE:", is read as a title, */
    /*and it means a complete row with the rest of the line */
    .my-first-class {background:black;color:white;font-family:MyCoolFont;font-size:1.5em;}
    .my-first-class {background:black;color:white;font-family:MyCoolFont;font-size:1.5em;}
    .my-first-class {background:black;color:white;font-family:MyCoolFont;font-size:1.5em;}
2. The PHP is just:
    include "class-tester.php";
    test_css("my-file-name.css");
3. And Tada! You can see your class style applied to a simple cell with a simple text! Cool, isn't it?
