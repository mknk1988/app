<?php
    if ($_POST['user']) {
        //вывести на экран значение параметра user
        //из переданной на обработку формы
        print "Hello, ";
        print $_POST['user'];
        print "!";
    } else {
        //если данных нет то вывести форму
        print <<<_HTML_
            <form action='$_SERVER[PHP_SELF]' method='post'>
                Your Name: <input type='text' name='user' />
                <br/>
                <button type='submit'>Say  Hello</button>
            </form>
_HTML_;
    }
?>