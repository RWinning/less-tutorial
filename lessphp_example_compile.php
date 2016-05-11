<?php
    include_once("./lessphp/lessc.inc.php");
    $less = new lessc();

    $css = $less -> compile("
        .tblDefault(@border, @margin, @color, @padding, @borderCollapse: collapse)
            {
                border-collapse: @borderCollapse;
                margin: 2em auto;
                font-family: Verdana;
    
            td
            {
                border: @border lighten(@color, 40%);
                margin: @margin;
                padding: @padding;
                color: lighten(@color, 50%);
                font-weight: 800;
            }

            th
            {
                border: @border @color;
                margin: @margin;
                padding: @padding;
                background-color: darken(@color, 10%);
                color: lighten(@color, 50%);
            }

            tr
            {
                &:nth-child(2n)
                {
                background-color: lighten(@color, 40%);
                }

                &:nth-child(2n+1)
                {
                   background-color: lighten(@color, 30%); 
                }
            }
        }

        #tbl1
        {
            .tblDefault(3px solid, 2em, red, 1em, collapse);   
        }

        #tbl2
        {
            .tblDefault(3px solid, 2em, blue, 1em, collapse);
        }"
                    );
?>

<!DOCTYPE html>
    <head>
        <title>Twee tabellen</title>
        <!--
        <link rel="stylesheet/less" type="text/css" href="./style.less">
        <script src="./less.js-master/dist/less.js"></script>
        -->
        <style>
            <?php
                echo $css;
            ?>
        </style>
    </head>
    <body>
        <h3>Twee tabellen</h3>

        <table id="tbl1">
        <tr>
            <th>Name</th>
            <th>Name</th>
            <th>Name</th>
            <th>Name</th>
            <th>Name</th>
            <th>Name</th>
        </tr>
        <tr>
            <td>Shotgun</td>
            <td>Shotgun</td>
            <td>Shotgun</td>
            <td>Shotgun</td>
            <td>Shotgun</td>
            <td>Shotgun</td>
        </tr>
        <tr>
            <td>Blood Gultch</td>
            <td>Blood Gultch</td>
            <td>Blood Gultch</td>
            <td>Blood Gultch</td>
            <td>Blood Gultch</td>
            <td>Blood Gultch</td>
        </tr>
        <tr>
            <td>Halo</td>
            <td>Halo</td>
            <td>Halo</td>
            <td>Halo</td>
            <td>Halo</td>
            <td>Halo</td>
        </tr>
        <tr>
            <td>Reach</td>
            <td>Reach</td>
            <td>Reach</td>
            <td>Reach</td>
            <td>Reach</td>
            <td>Reach</td>
        </tr>
        </table>

        <table id="tbl2">
        <tr>
            <th>Name</th>
            <th>Name</th>
            <th>Name</th>
            <th>Name</th>
            <th>Name</th>
            <th>Name</th>
        </tr>
        <tr>
            <td>Shotgun</td>
            <td>Shotgun</td>
            <td>Shotgun</td>
            <td>Shotgun</td>
            <td>Shotgun</td>
            <td>Shotgun</td>
        </tr>
        <tr>
            <td>Blood Gultch</td>
            <td>Blood Gultch</td>
            <td>Blood Gultch</td>
            <td>Blood Gultch</td>
            <td>Blood Gultch</td>
            <td>Blood Gultch</td>
        </tr>
        <tr>
            <td>Halo</td>
            <td>Halo</td>
            <td>Halo</td>
            <td>Halo</td>
            <td>Halo</td>
            <td>Halo</td>
        </tr>
        <tr>
            <td>Reach</td>
            <td>Reach</td>
            <td>Reach</td>
            <td>Reach</td>
            <td>Reach</td>
            <td>Reach</td>
        </tr>
        </table>
    </body>
</html>