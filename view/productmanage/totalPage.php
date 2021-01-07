<nav aria-label="Page navigation">
        <ul class="pagination">
                <?php for ($num = 1; $num <= $totalPage; $num++) : ?>
                        <?php if ($num == $_GET['page']) : ?>
                                <li class="active"><a href="index.php?controller=product&action=list&page=<?php echo $num . '' ?>"><?php echo $num ?></a></li>
                        <?php else : ?>
                                <li><a href="index.php?controller=product&action=list&page=<?php echo $num . '' ?>"><?php echo $num ?></a></li>
                        <?php endif; ?>
                <?php endfor; ?>
        </ul>

</nav>