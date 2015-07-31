            <footer>
                <?php //gotta select the tables from mysql here
                $info = post_get('title', "Second Post");
                echo $info[1];
                $var = "variable change";
                post_change($var, 2, "body");
                $info = post_get('id',2);
                echo $info[2];
                ?>
            </footer>
        </div>
    </body>
</html>