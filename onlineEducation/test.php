<?php echo phpinfo();
?>

<?php
 $conn=mysql_connect("localhost", "phplamp", "1234");             
 $result=mysql_db_query("php", "SELECT * FROM `user`", $conn);
    // ��ȡ��ѯ���
     $row=mysql_fetch_row($result);
    
     
    echo '<font face="verdana">';
    echo '<table border="1" cellpadding="1" cellspacing="2">';

    // ��ʾ�ֶ�����
    echo "</b><tr></b>";
    for ($i=0; $i<mysql_num_fields($result); $i++)
    {
      echo '<td bgcolor="#000F00"><b>'.
      mysql_field_name($result, $i);
      echo "</b></td></b>";
    }
    echo "</tr></b>";
    // ��λ����һ����¼
    mysql_data_seek($result, 0);
    // ѭ��ȡ����¼
    while ($row=mysql_fetch_row($result))
    {
      echo "<tr></b>";
      for ($i=0; $i<mysql_num_fields($result); $i++ )
      {
        echo '<td bgcolor="#00FF00">';
        echo $row[$i];
        echo '</td>';
      }
      echo "</tr></b>";
    }
   
    echo "</table></b>";
    echo "</font>";
    // �ͷ���Դ
    mysql_free_result($result);
    // �ر�����
    mysql_close($conn);  
?> 