

<?php

foreach ($categories as $category) {?>
<a class="cat-drop-down nav-item nav-link " href = "category-page.php?id=<?=$category['category_id']?>"><?=$category['title'];?> </a>

<?php } ?> 

