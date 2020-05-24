<?php echo anchor(base_url('user/add'),'Új hozzáadása'); ?>
<?php if($user == NULL || empty($user)): ?>
    <p>Nincs Felhasználó!</p>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Név</th>
                <th>Email</th>
                <th>Jelszó</th>
                <th>Műveletek</th>
            </tr>
        </thead>
        
        <tbody>
            <?php foreach($users as $user): ?>
            <tr>
                <td><?=$user->id?></td>
                <td><?=$user->username?></td>
                <td><?=$user->email?></td>
                <td><?=$user->password?></td>
                <td>
                    <?php echo anchor(base_url('employees/delete/'.$emp->id),'Törlés');?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
