<h1>Flashを追加</h1>
<?php echo $html->link('Add', "/entories/add") ?>
<table>
    <tr>
        <th>Id</th>
        <th>タイトル</th>
        <th>Created</th>
    </tr>

    <!-- ここから、$entories配列をループして、投稿記事の情報を表示 -->

    <?php foreach ($entories as $entory): ?>
    <tr>
        <td><?php echo $entory['Entory']['id']; ?></td>
        <td>
            <?php echo $html->link($entory['Entory']['title'], "/entories/view/".$entory['Entory']['id']); ?>
        </td>
        <td><?php echo $entory['Entory']['created']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>
