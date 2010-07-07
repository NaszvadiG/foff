<h1>All leaves</h1>
<?php echo `whoami` ?>
<table>
  <tr>
    <th>User</th>
    <th>Leave Type</th>
    <th>Starting From</th>
   <th>Duration</th> 
  </tr>
  <!--- Lets iterate through it -->
  <?php foreach ($leaves as $leave): ?>
    <tr>
    <td> <?php echo $leave['Leave']['user_id'] ?></td>
    <td> <?php echo $leave['Leave']['leave_type'] ?></td>

    <td> <?php echo $leave['Leave']['starting_from'] ?></td>

    <td> <?php echo $leave['Leave']['duration'] ?></td>
    </tr>

  <?php endforeach;  ?>
</table>
