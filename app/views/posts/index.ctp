/app/views/posts/index.ctp

<h1>Blog posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Actions</th>
        <th>Created</th>
    </tr>

    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $html->link($post['Post']['title'], "/posts/view/".$post['Post']['id']); ?>
        </td>
        <td><?php echo $html->link('Delete', "/posts/delete{$post['Post']['id']}", null, '本当に削除しますか？'); ?></td>
        <td><?php echo $post['Post']['created']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>
