<?php 
    header('Content-Type:application/json;charset=utf-8');

    require 'db.php';

    $pageNum = $_GET['pageNum'];
    $pageSize = $_GET['pageSize'];

    $start=($pageNum-1)*$pageSize;

    $sql="select *,(select count(*) from user) as total from user order by id desc limit $start , $pageSize ";

    $result = mysql_query($sql);

    $list = array();
    $total = 0;

    while($row = mysql_fetch_array($result)){
        $item = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'sex' => $row['sex'],
            'academy' => $row['academy'],
            'introduce' => $row['introduce'],
            'createTime' => $row['createTime'],
        );
        array_push($list,$item);
        $total = $row['total'];
    }

    echo json_encode(
        array(
            'list'=>$list,
            'pageSize'=>intval($pageSize),
            'pageNum'=>intval($pageNum),
            'total'=> intval($total)
        )
    );

    mysql_close($con);

?>