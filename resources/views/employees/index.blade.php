<h1>Employees AdminPanel</h1>
    <p>
        <a href="/employees/create" class="btn btn-success">Insert New Employee</a>
    </p>
    <p>
        <a href="/employees/update" class="btn btn-success">Update Employee</a>
    </p>

    <form>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search For employees" name="search" value="<?php echo $search ?>">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
        </div>
    </form>

        <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">FirstName</th>
                <th scope="col">LastName</th>
                <th scope="col">Company</th>
                <th scope="col">CompanyEmail</th>
                <th scope="col">Phone</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $i => $employee): ?>
                <tr>
                    <th scope="row"><?php echo $i+1 ?></th>
                    <td><?php echo $employee['firstName'] ?></td>
                    <td><?php echo $employee['lastName'] ?></td>
                    <td><?php echo $employee['company_id'] ?></td>
                    <td><?php echo $employee['email'] ?></td>
                    <td><?php echo $employee['phone'] ?></td>
                    <td>
                        <a href="/employees/update?id=<?php echo $employee['id'] ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                        
                        <form style="display: inline-block" method="post" action="/employees/delete">                        
                            <input type="hidden" name="id" value="<?php echo $employee['id'] ?> ">
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>