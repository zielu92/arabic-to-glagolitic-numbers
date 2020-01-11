<?php include('check.php');
if (isset($_POST['check']) AND ($_POST['check'] == 'Check')) {
    $input = $_POST['arabic'];
    $output = check($input);
}
?>
<html lang="en">
<head>
    <title>Slavic alphabet! Converter arabic numbers -> glagolitic numbers</title>
    <meta charset="utf-8"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description"
          content="Free converter from arabic nubmers into glagolitic numbers. Works only from 1 to 9999.">
    <meta name="keywords"
          content="converter, glagolitic, Glagolitic script, slavic alphabet, witcher, Glagolitic alphabet, glagolъ, Głagolica, alfabet słowiański, konwerter, wiedzmin, Ⰳⰾⰰⰳⱁⰾⰹⱌⰰ, Glagolitsa">
    <meta name="author" content="mzielinski.pl">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="css/style.css">

    <script src="js/copy.js"></script>
</head>

<body>
    <div class="container">
        <div class="row vertical-offset-100">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Converter arabic numbers -> glagolitic</h3>
                    </div>
                    <div class="panel-body">
                        <form action="" method="POST">
                            <fieldset>
                                <p>From 0 to 9999 only!</p>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Number" name="arabic" type="number" max="9999">
                                </div>
                                <input class="btn btn-lg btn-success btn-block" type="submit" name="check" value="Check">
                                <? if (isset($_POST['check']) AND ($_POST['check'] == 'Check')) { ?>
                                    <div class="form-group">
                                        <input class="form-control" value="<?= $output ?>" id="glagolitic" type="text">
                                    </div>
                                    <i onclick="copy()" class="btn btn-lg btn-info btn-block">Copy</i>
                                <? } ?>
                            </fieldset>
                        </form>
                        <p class="text-center">© <? echo(date("Y")); ?> <a href="https://mzielinski.pl">mzielinski.pl</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

