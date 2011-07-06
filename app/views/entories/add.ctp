<h1>Flashの情報を追加</h1>
<?php echo $html->link('Add', "/entories/add") ?>

<?php
    echo $form->create('Entory');
    echo $form->input('title');
    echo $form->input('swf_url', array('rows' => 1, 'label' => 'swfのURL'));
    echo $form->input('swf_width', array('label' => 'swfの横幅'));
    echo $form->input('swf_height', array('label' => 'swfの縦幅'));
    echo $form->input('origin_url', array('rows' => 1 ,'label' => '配信元サイトのURL'));
    echo $form->input('thumb_url', array('label' => 'サムネイル画像のURL', 'rows' => 1));
    echo $form->input('description', array('label' => '概要'));
    echo $form->input('how_to_play', array('label' => '操作方法', 'value' => 'なし'));
    echo $form->input('embed_release_flag', array('label' => '他サイトへの共有を許可しますか', 'value' => 1));
    echo $form->hidden('user_id', array('value' => 2));
    echo $form->end('情報を登録');
?>
<table>
    <tr>
        <th>Id</th>
        <th>タイトル</th>
        <th>Created</th>
    </tr>
</table>
