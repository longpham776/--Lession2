<div class="input-group mb-3">
    <input type="text" class="form-control" style="text-align:center;" placeholder="&#128269;Search" aria-label="Search" aria-describedby="basic-addon2">
</div>
<span class="d-inline-block"><h5>Search found <?php echo count($dataCategory) ?> results</h5></span>
<span class="d-inline-block btn float-right">
    <a name="#" id="" href="#" role="button"><i class="fa fa-plus-circle fa-3x"></i></a>
</span>
<table border="1" class="table table-striped table-light" style="text-align: center;">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Category name</th>
        <th scope="col">Operations</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            foreach ($dataCategory as $cate) {
        ?>
        <tr>
            <th scope="row"><?php echo $cate["id"] ?></th>
            <td><?php echo $cate["name"] ?></td>
            <td>
                <a href=""><i class="fa fa-pencil-square-o fa-2x"></i></a>
                <a href=""><i class="fa fa-minus-circle fa-2x"></i></a>
                <a href=""><i class="fa fa-file fa-2x"></i></a>
                <a href=""><i class="fa fa-eye fa-2x"></i></a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
    <li class="page-item disabled">
        <a class="page-link" href="#" aria-label="Previous">
        <span>Previous</span>
        </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
        <span>Next</span>
        </a>
    </li>
    </ul>
</nav>