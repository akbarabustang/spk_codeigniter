
        <h2 style="margin-top:0px">Subkriteria List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('subkriteria/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('subkriteria'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
                <th>Nama Subkriteria</th>
                <th>Nilai</th>
                <th>Action</th>
            </tr><?php
            foreach ($record as $subkriteria)
            {
                ?>
                <tr>
                    <td width="80px"><?php echo ++$start ?></td>
                    <td><?php echo $subkriteria->nama_subkriteria ?></td>
                    <td><?php echo $subkriteria->nama_nilai ?></td>
                    <td style="text-align:center" width="200px">
                        <?php 
                        echo anchor(site_url('subkriteria/update/'.$subkriteria->id_subkriteria),'Edit', array('class'=>'btn btn-danger btn-sm')); 
                        echo ' | '; 
                        echo anchor(site_url('subkriteria/delete/'.$subkriteria->id_subkriteria),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                        ?>
                    </td>
            </tr>
            <?php } ?>
        </table>
            <div class="col-md-6 text-right">
               <!--  <?php echo $pagination ?> -->
            </div>
     