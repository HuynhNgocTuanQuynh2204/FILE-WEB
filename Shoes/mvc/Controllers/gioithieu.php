<?php
    class gioithieu extends controller
    {
        function show()
        {
            self::view("master",[
                "page" => "gioithieu",
                "title" => "Giới Thiệu"
            ]);
        }
    }
