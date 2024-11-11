<div class="container">
	<h2> All Project</h2>
    <table id="project_list" class="table table-striped display" style="width:100%">
        <thead>
            <tr>
                <th>Project Title</th>
                <th>Sub Title</th>
                <th>Developer</th>
                <th>Start Date</th>
                <th>DateLine</th>
                <th>Referance</th>
                <th>Project Value</th>
                <th>Due Amount</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                global $wpdb;
                $result = $wpdb->get_results ( "SELECT * FROM target_project_info" );
                foreach ( $result as $print ){
            ?>
            <tr>
                <td><?php echo $print->project_name; ?></td>
                <td><?php echo $print->project_sub_title; ?></td>
                <td><?php echo $print->pro_developer; ?></td>
                <td><?php echo $print->start_date; ?></td>
                <td><?php echo $print->end_date; ?></td>
                <td><?php echo $print->pro_referance; ?></td>
                <td><?php echo $print->total_price; ?></td>
                <td><?php echo $print->due_amount; ?></td>
                <td><?php echo $print->pro_status; ?></td>
                <td><a herf="#"> View </a> || <a herf="#"> Edit </a> || <a herf="#"> Delete</a></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>