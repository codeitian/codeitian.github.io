<?php
    require_once('../inc/mainClass.php');
    $records = $system->showAllByName($_GET['name']);
    // if($records == null){
    //     $records = $system->showAllRecords();
    // }
?>

<?php if($records){
                        foreach($records as $rec){ ?>
                            <tr onclick="selectRow(
                                this,
                                `<?php echo $rec['id'];?>`,
                                `<?php echo $rec['image'];?>`,
                                `<?php echo $rec['fname'];?>`,
                                `<?php echo $rec['mname'];?>`,
                                `<?php echo $rec['lname'];?>`,
                                `<?php echo $rec['birthday'];?>`,
                                `<?php echo $rec['gender'];?>`,
                            )">
                                <td><input class="checkbox" type="checkbox" name="" id="" onclick="selectRecord(this,`<?php echo $rec['id'];?>`)"></td>
                                <td><img src="uploads/<?php  echo $rec['image'] != '' ?  $rec['image'] : 'default.png'; ?>" alt=""></td>
                                <td><?php echo $rec['fname'];?></td>
                                <td><?php echo $rec['mname'];?></td>
                                <td><?php echo $rec['lname'];?></td>
                                <td><?php echo $rec['gender'] == 'Other'  ? 'LGBTQIA++' : $rec['gender']; ?></td>
                                <td><?php echo $rec['age'];?></td>
                            </tr>
                    <?php   }
                    }else{ ?>
                            <tr>
                                <td>Empty records.</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                    <?php }?>


