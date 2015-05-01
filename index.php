<?php

    require_once('vendor/autoload.php');

    use Del\Cdn;

?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>The Totally Rocking Palindrome Checker</title>
        <?= Cdn::bootstrapCssLink(); ?>
        <?= Cdn::jQueryJavascript(); ?>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1 class="text-center">The Totally Rocking<br />Palindrome Checker</h1>
                <p class="lead text-center">Enter a word to check.</p>

                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <input class="form-control" id="query" type="text" placeholder="e.g. Metallica" onkeydown="if (event.keyCode == 13) $('#btn-check').click()"/><br />
                        <a class="btn btn-lg btn-primary" href="#" id="btn-check">Check!</a>
                    </div>
                </div>

            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#btn-check').click(function(e){
                    e.preventDefault();
                    var string = $('#query').val();
                    $.get('api.php',{ query : string },function(e){
                        if(e.result == 'error')
                        {
                            $('h1').html('Dude, enter some text!');
                        }
                        else if(e.result == true)
                        {
                            $('h1').html(string + ' is a Palindrome!');
                        }
                        else
                        {
                            $('h1').html(string + 'is NOT a Palindrome!');
                        }
                    });
                });
            });
        </script>
    </body>
</html>