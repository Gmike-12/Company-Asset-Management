
 

<?php
if(isset($_GET['search'])){
  $filtervalues = $_GET['search'];
  $query = "SELECT * FROM assets WHERE CONCAT(User_Id, Username, Work_Email, PF_Number, Designation, IRA_Tag, Serial_No, Date_Issued, Laptop_Bag, Mouse, Charger, Asset_Type, Remarks) LIKE '%$filtervalues%'";
  $query_run = mysqli_query($con, $query);

  if(mysqli_num_rows($query_run) > 0){
    foreach($query_run as $row){
      ?>
      <tr>
      <td><?php echo $row['User_Id']; ?></td>
        <td><?php echo $row['Username']; ?></td>
        <td><?php echo $row['Work_Email']; ?></td>
        <td><?php echo $row['PF_Number']; ?></td>
        <td><?php echo $row['Designation']; ?></td>
        <td><?php echo $row['IRA_Tag']; ?></td>
        <td><?php echo $row['Serial_No']; ?></td>
        <td><?php echo $row['Date_Issued']; ?></td>
        <td><?php echo $row['Laptop_Bag']; ?></td>
        <td><?php echo $row['Mouse']; ?></td>
        <td><?php echo $row['Charger']; ?></td>
        <td><?php echo $row['Asset_Type']; ?></td>
        <td><?php echo $row['Remarks']; ?></td>
        <td>
          <a href="Searchbar.php?User_Id=<?php echo $row['User_Id']; ?>" class="btn">Delete</a>
        </td>
      </tr>
      <?php
    }
  }
  else{
    ?>

        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <tr>
        <td><?php echo $row['User_Id']; ?></td>
        <td><?php echo $row['Username']; ?></td>
        <td><?php echo $row['Work_Email']; ?></td>
        <td><?php echo $row['PF_Number']; ?></td>
        <td><?php echo $row['Designation']; ?></td>
        <td><?php echo $row['IRA_Tag']; ?></td>
        <td><?php echo $row['Serial_No']; ?></td>
        <td><?php echo $row['Date_Issued']; ?></td>
        <td><?php echo $row['Laptop_Bag']; ?></td>
        <td><?php echo $row['Mouse']; ?></td>
        <td><?php echo $row['Charger']; ?></td>
        <td><?php echo $row['Asset_Type']; ?></td>
        <td><?php echo $row['Remarks']; ?></td>
                <td>
                    <a href="Searchbar.php?User_Id=<?php echo $row['User_Id']; ?>" class="btn">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>

    <?php
  }
}
?>














 