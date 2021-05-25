        <?php
        use App\Http\Controllers\MenuController;
        $menu = new MenuController();
        $get_role = $menu->GetContentMenu();
        ?>          
            <ul class="nav">               
                <?php
                $status = Session::get('status');
                foreach ($get_role as $value1) {
                    $setId = $value1->name;
                    echo '
                    <li id="'.$value1->name.'" class="active">
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>'.$value1->name.'</p>
                    ';
                    $get_role_permission = $menu->GetMenuTheoRole($value1->id);
                    foreach ($get_role_permission as $value2) {
                            echo '
                        <ul>
                                <li><a href="">'.$value2->name.'</a></li>
                            </ul>
                        ';                          
                    }
                     echo'       
                    </a>
                    </li>
                    ';
                }
                ?>             
            </ul>

      <style>
         

    </style>      
        