<h1>Flash 一覧</h1>
<?php e($this->element("entories-navi")); ?>
<?php //echo $html->link('Add', "/entories/add") ?>
<table>
    <tr>
        <th>Id</th>
        <th>タイトル</th>
        <th>Created</th>
    </tr>

    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->
    <?php foreach ($entories as $entory): ?>
    <tr>
        <td>
            <?php echo $entory['Entory']['id']; ?>
            <img src="<?php echo $entory['Entory']['thumb_url'] ?>" width="125" height="100" />
        </td>
        <td>
            <?php echo $html->link($entory['Entory']['title'], "/entories/view/".$entory['Entory']['id']); ?>
            <?php echo $entory['Entory']['description']; ?>
        </td>
        <td><?php echo $entory['Entory']['created']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>
