    <!-- Main Wrapper -->
    <section id="content_wrapper">

                <!-- Topbar Menu Wrapper -->
        <div id="topbar-dropmenu-wrapper">
            <div class="topbar-menu row">
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-danger">
                        <span class="fa fa-music"></span>
                        <span class="service-title">Audio</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-success">
                        <span class="fa fa-picture-o"></span>
                        <span class="service-title">Images</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-primary">
                        <span class="fa fa-video-camera"></span>
                        <span class="service-title">Videos</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-alert">
                        <span class="fa fa-envelope"></span>
                        <span class="service-title">Messages</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-system">
                        <span class="fa fa-cog"></span>
                        <span class="service-title">Settings</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-dark">
                        <span class="fa fa-user"></span>
                        <span class="service-title">Users</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- /Topbar Menu Wrapper -->

                <!-- Topbar -->
        <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="breadcrumb-link">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-current-item">Manage Role User > Edit User Role</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <div class="greeting-field">
            Edit Existing Role
        </div>

        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->
            <div class="chute chute-center">

                <!-- AllCP Info -->
                    <div class="row">
                        <!-- AllCP Grid -->
                        <div class="allcp-form">
                            <div class="panel">
                            <div class="panel-heading">

                            </div>  
                                <div class="panel-body pn">
                                    <form method="post" action="?mmopilot=editedRole" id="form-ui">
                                        <!-- Basic -->
                                        <?php
                                            $id = $_GET['idRole'];
                                            $select = $db->prepare("SELECT * FROM mmo_role where idRole='$id'");
                                            $select->execute();
                                            $tampil = $select->fetchAll();
                                            foreach($tampil as $value){                                           
                                        ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="section">
                                                <input type="hidden" name="idRole" value="<?php  echo $value['idRole'];?>">
                                                <h5>Role Name</h5>
                                                    <label class="field prepend-icon">
                                                        <input type="text" name="roleName" id="firstname" class="gui-input"
                                                            placeholder="Role Name" value="<?php echo $value['roleName'];?>">
                                                        <span class="field-icon">
                                                            <i class="fa fa-slack"></i>
                                                        </span>
                                                    </label><br/><br/>
                                                    <h5>Role Description</h5>
                                                    <label class="field prepend-icon">
                                                    <textarea class="gui-textarea" id="comment" name="roleDesc" placeholder="Text area"><?php echo $value['roleDesc'];?></textarea>
                                                    <span class="field-icon">
                                                        <i class="fa fa-list"></i>
                                                    </span>
                                                    </label><br/><br/>
                                                    <h6>Username</h6>
                                                    <label class="field prepend-icon">
                                                        <input type="text" name="usernameRole" id="firstname" class="gui-input"
                                                            placeholder="username" title="username untuk role ini" value="<?php echo $value['username'];?>">
                                                        <span class="field-icon">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                    </label><br/>
                                                    <h6>Password Role</h6>
                                                    <label class="field prepend-icon">
                                                        <input type="text" name="passwordRole" id="firstname" class="gui-input"
                                                            placeholder="password" title="password untuk role ini" value="<?php echo $value['password'];?>">
                                                        <span class="field-icon">
                                                            <i class="fa fa-key"></i>
                                                        </span>
                                                    </label><br/><br/>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="col-md-5">
                                                <div class="section">

                                                <h6>Role</h6>
                                                    <label class="field prepend-icon">
                                                    <label class="field select">
                                                    <select id="job" name="job">
                                                        <option value="admin" <?php if($value['job']=="admin"){ echo "selected";}?>>Admin</option>
                                                        <option value="operator" <?php if($value['job']=="operator"){ echo "selected";}?>>Operator</option>
                                                        <option value="client" <?php if($value['job']=="client"){ echo "selected";}?>>Client</option>
                                                    </select>
                                                    <i class="arrow"></i>
                                                </label>
                                                    </label><br/><br/>
                                                <h5>Hak Akses menu :</h5>
                                                <?php
                                                    $select = $db->prepare("SELECT idMenu,menuName,menuParent FROM mmo_menu");
                                                    
                                                    $select->execute();
                                                    $tampil = $select->fetchAll();

                                                    foreach($tampil as $value){
                                                        if($value['menuParent']==NULL){
                                                            $select2 = $db->prepare("SELECT a.idMenu from tr_role_menu a join mmo_menu b on a.idMenu=b.idMenu where a.idRole='$id'");
                                                            $select2->execute();
                                                            $tampil2 = $select2->fetchAll();
                                                           
                                                                    echo  "<div><label class=\"option block\">
                                                                    <input type=\"checkbox\" name=\"menuList[]\" value=\"".$value['idMenu']."\""; 
                                                                    foreach($tampil2 as $value2){
                                                                        if($value2['idMenu']==$value['idMenu']){
                                                                            echo " checked";
                                                                        }
                                                                    }
                                                                    echo"><span class=\"checkbox\"></span>".$value['menuName']."</label><br/></div>";
                                                                
                                                                foreach($tampil as $hoho){
                                                                    if($value['idMenu']==$hoho['menuParent']){
                                                                        $select3 = $db->prepare("SELECT a.idMenu from tr_role_menu a join mmo_menu b on a.idMenu=b.idMenu where a.idRole='$id'");
                                                                        $select3->execute();
                                                                        $tampil3 = $select3->fetchAll();
                                                                       
                                                                        echo  "<div style=\"margin-left:20px !important; \"><label class=\"option block\">
                                                                        <input type=\"checkbox\" name=\"menuList[]\" value=\"".$hoho['idMenu']."\""; 
                                                                        foreach($tampil3 as $value3){
                                                                            if($value3['idMenu']==$hoho['idMenu']){
                                                                                echo " checked";
                                                                            }
                                                                        }
                                                                        echo"><span class=\"checkbox\"></span>".$hoho['menuName']."</label><br/></div>";
                                                
                                                                    }else{
                                                                        continue;
                                                                    }
                                                                }
                                                        }elseif($value['menuParent']!=NULL){
                                                            continue;
                                                        }
                                                       
                                                    };
                                                ?>
                                                <br/><br/>
                                                <button type="submit" class="btn btn-block btn-success" name="submit"><strong>Simpan Data</strong></button>
                                                </div>
                                                <?php };?>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /AllCP Grid -->

                    </div>
            </div>
            <!-- /Column Center -->

        </section>
        <!-- /Content -->

        

    </section>
    <!-- /Main Wrapper -->
