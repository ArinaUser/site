<h1>Список авторов нашего сайта</h1>
<table>
<tr><th>ID</th><th>Ф.И.О.</th><th>Возраст</th><th>Город проживания</th><th>Род занятий</th><th>Узнать подробнее</th></tr>

<?php
for ($row_no = 0; $row_no <= $data->num_rows - 1; $row_no++) {
$data->data_seek($row_no);
$row = $data->fetch_assoc();
echo "<tr><td>".$row['id']."</td><td>".$row['fio']."</td><td>".$row['age']."</td><td>".$row['location']."</td><td>".$row['additional']."</td><td><a href='/site/about/author/?id=".$row['id']."'target='_blank'>Подробнее</a></td></tr>";
}
?>
</table>