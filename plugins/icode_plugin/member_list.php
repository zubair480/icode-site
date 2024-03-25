<?php

function member_list() {
    ?>
    <style>
        table {
            border-collapse: collapse;
        }
        table, td, th {
            border: 1px solid black;
            padding: 20px;
            text-align: center;
        }
    </style>
    <div class="wrap">
        <table>
            <thead>
            <tr>
                <th>No</th>
                <th>Registered</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>University</th>
                <th>Linkedin</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php
            global $wpdb;
            $table_name = $wpdb->prefix . 'member_list';
            $members = $wpdb->get_results("SELECT id,created_at,first_name, last_name, email ,whatsapp_phone,university, linkedin_url from $table_name");
            foreach ($members as $member) {
                ?>
                <tr>
                    <td><?= $member->id; ?></td>
                    <td><?= $member->created_at;?></td>
                    <td><?= $member->first_name; ?></td>
                    <td><?= $member->last_name;?></td>
                    <td><?= $member->email;?></td>
                    <td><?= $member->whatsapp_phone;?></td>
                    <td><?= $member->university;?></td>
                    <td><?= $member->linkedin_url;?></td>
                    <td><a href="<?php echo admin_url('admin.php?page=member_Update&id=' . $member->id); ?>">Update</a> </td>
                    <td><a href="<?php echo admin_url('admin.php?page=member_Delete&id=' . $member->id); ?>"> Delete</a></td>
                </tr>
            <?php } ?>

            </tbody>
        </table>
    </div>
    <?php

}
add_shortcode('short_member_list', 'member_list');




// Apply for funding list
function apply_for_funding_list() {
    ?>
    <style>
        table {
            border-collapse: collapse;
        }
        table, td, th {
            border: 1px solid black;
            padding: 20px;
            text-align: center;
        }
    </style>
    <div class="wrap">
        <table>
            <thead>
            <tr>
                <th>No</th>
                <th>Registerd</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>CNIC</th>
                <th>University</th>
                <th>Graduation Year</th>
                <th>CGPA</th>
                <th>Major Degree</th>
                <th>Address</th>
                <th>Postal Code</th>
                <th>Company</th>
                <th>LinkedIn URL</th>
                <th>CV</th>
                <th>Hackathon Links</th>
                <th>Volunteer Experience</th>
                <th>Funding Reasons</th>
                <th>Funding Amount</th>
                <th>Eligibility Reasons</th>
            </tr>
            </thead>
            <tbody>
            <?php
            global $wpdb;
            $table_name = $wpdb->prefix . 'apply_for_funding';
            $applications = $wpdb->get_results("SELECT * FROM $table_name");
            foreach ($applications as $application) {
                ?>
                <tr>
                    <td><?= $application->id; ?></td>
                    <td><?= $application->created_at;?></td>
                    <td><?= $application->first_name; ?></td>
                    <td><?= $application->last_name;?></td>
                    <td><?= $application->email;?></td>
                    <td><?= $application->phone_number;?></td>
                    <td><?= $application->cnic;?></td>
                    <td><?= $application->university;?></td>
                    <td><?= $application->graduation_year;?></td>
                    <td><?= $application->cgpa;?></td>
                    <td><?= $application->major_degree;?></td>
                    <td><?= $application->address;?></td>
                    <td><?= $application->postal_code;?></td>
                    <td><?= $application->company;?></td>
                    <td><?= $application->linkedin_url;?></td>
                    <td><?= $application->cv_file;?></td>
                    <td><?= $application->hackathon_links;?></td>
                    <td><?= $application->volunteer_experience;?></td>
                    <td><?= $application->funding_need_reason;?></td>
                    <td><?= $application->funding_amount;?></td>
                    <td><?= $application->eligibility_reasons;?></td>
                    <td><a href="<?php echo admin_url('admin.php?page=apply_for_funding_Update&id=' . $application->id); ?>">Update</a> </td>
                    <td><a href="<?php echo admin_url('admin.php?page=apply_for_funding_Delete&id=' . $application->id); ?>"> Delete</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <?php
}
add_shortcode('apply_for_funding_list', 'apply_for_funding_list');
?>

