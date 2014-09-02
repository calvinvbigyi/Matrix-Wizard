
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="/css/StyleSheet.css"></link>
    </head>
    <body>
        <div id="wrapper">
            
            <div id="content">
                <?php
                   echo $content;
                ?>
            </div>
            <div id="content_area">
                  <form method="post" action="index.php">
                    <textarea id="result_matrix" name="result_matrix"></textarea><br></br>
                    <input type="radio" name="matrix_f" value="det"> Calculate the Determinant of the matrix <br>
                    <input type="radio" name="matrix_f" value="add"> Calculate the sum of two matrixes<br>
                    <input type="radio" name="matrix_f" value="sub"> Calculate one matrix subtracts another matrix<br></br>
                    <input type="submit" name="submit" value="Calculate Now!" id="submit"/>
                  </form>
                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>                
                <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
                <script src="/js/Matrix.js" ></script>
                <br></br>
                <div id="res">
                    <p id="render">
                        <?php
                            echo $resultMatrix;
                        ?>
                    </p>
                </div>
            </div>
            <footer>
                <p>All rights reserved.</p>
            </footer>
        </div>
    </body>
</html>
