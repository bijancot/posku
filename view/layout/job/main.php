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
                    <li class="breadcrumb-current-item">Manage Job User</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <div class="greeting-field">
            Manage Job
        </div>

        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->
            <div class="chute chute-center">

                <!-- AllCP Info -->

                    <div class="row mn">
                        <!-- AllCP Grid -->
                       
                    <div class="col-md-12">
                        <div class="panel panel-visible">
                            <div class="panel-heading">
                                <div class="row nm">
                                    <a href="?mmopilot=addjob">
                                    <button type="button" class="btn btn-rounded btn-primary btn-block right" style="width: 200px;">+ Tambah Job Baru</button>
                                    </a>
                                </div>  
                            </div>
                            <div class="panel-body pn>
                                <div class="table-responsive">
                                    <?php
                                    $select = $db->prepare("SELECT * FROM mmo_job");
                                    $select->execute();
                                    $tampil = $select->fetchAll();
                                    ?>
                                    <table class="table table-striped table-hover" id="datatable2" cellspacing="0"
                                           width="100%">
                                        <thead>
                                        <tr>
                                            <th class="va-m">ID Job</th>
                                            <th class="va-m">Deskripsi Job</th>
                                            <th class="va-m">Priority</th>
                                            <th class="va-m">Tanggal Dibuat</th>
                                            <th class="va-m">Sub Job</th>
                                            <th class="va-m">Opsi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($tampil as $value){ ?>
                                        <tr>
                                            <td width="10%"><?php echo $value['idJob']; ?></td>
                                            <td><?php echo $value['jobDescription']; ?></td>
                                            <td width="15%"><?php echo $value['priority']; ?></td>
                                            <td width="15%"><?php echo $value['createdDate'];?></td>
                                            <td width="5%">
                                                <a><button type="button" class="btn btn-rounded btn-primary btn-block" title="Add Sub Job"><span class="fa fa-plus"></span></button></a>
                                            </td>
                                            <td width="22%">
                                                <table>
                                                    <tr>
                                                        <td><a href="?mmopilot=detailjob&id=<?php echo $value['idJob'];  ?>"><button type="button" class="btn btn-rounded btn-success btn-block" title="Tambah Sub Job"><span class="fa fa-list-ul"></span></button></a></td>
                                                        <td><a href="?mmopilot=detailjob&id=<?php echo $value['idJob'];  ?>"><button type="button" class="btn btn-rounded btn-info btn-block" title="Detail"><span class="fa fa-eye"></span></button></a></td>
                                                        <td> <a href="?mmopilot=editjob&id=<?php echo $value['idJob'];  ?>"><button type="button" class="btn btn-rounded btn-alert btn-block" title="Edit"><span class="fa fa-pencil-square-o"></span></button></a></td>
                                                        <td> <a href="?mmopilot=delete_job&id=<?php echo $value['idJob'];  ?>"><button type="button" class="btn btn-rounded btn-danger btn-block" title="Hapus"><span class="fa fa-trash-o"></span></button></a></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                           <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
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
