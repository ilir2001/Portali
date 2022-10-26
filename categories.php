


      <div id="lista" class="list-group ">
      <?php

$sql = "SELECT * FROM kategorite";
if($stmt = mysqli_prepare($connect, $sql)){
if(mysqli_stmt_execute($stmt)){
$result = mysqli_stmt_get_result($stmt);
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    $id = $row['id'];
    $emri_kategorise = $row['emri_kategorise'];
    echo "<li class='list-group'>";
    echo "<a id='kateogri' href='./category.php?id=${id}' class='list-group-item h6 text-dark'>" . $emri_kategorise . "</a>";
    echo "</li>";
}
}
} 


      ?>
        </div>
  </div>
</div>
