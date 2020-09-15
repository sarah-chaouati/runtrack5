<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php $result=$user->getUsers();
        foreach ($result as list($id,$first,$last,$mail)){ ?>
        <tr>
        <th><?php echo $id?></th>
        <th><?php echo $first?></th>
        <th><?php echo $last?></th>
        <th><?php echo $mail?></th>
        <?php
        }
        ?>
        </tr>
    </tbody>
</table>