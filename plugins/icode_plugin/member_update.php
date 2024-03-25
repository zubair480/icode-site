<?php
//echo "update page";
function member_update(){
    //echo "update page in";
    $i=$_GET['id'];
    global $wpdb;
    $table_name = $wpdb->prefix . 'member_list';
    $members = $wpdb->get_results("SELECT id,first_name,last_name,email,whatsapp_phone,university, linkedin_url from $table_name where id=$i");
    echo $members[0]->id;
    ?>
    <table>
        <thead>
        <tr>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <form name="frm" action="#" method="post">
            <input type="hidden" name="id" value="<?= $members[0]->id; ?>">
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="first_name" value="<?= $members[0]->first_name; ?>"></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="last_name" value="<?= $members[0]->last_name; ?>"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" value="<?= $members[0]->email; ?>"></td>
            </tr>
            <tr>
                <td>Whatsapp:</td>
                <td><input type="text" name="whatsapp_phone" value="<?= $members[0]->whatsapp_phone; ?>"></td>
            </tr>
            <tr>
                <td>Univesrity:</td>
                <td><input type="text" name="university" value="<?= $members[0]->university; ?>"></td>
            </tr>
            <tr>
                <td>Linkedin URL:</td>
                <td><input type="text" name="linkedin_url" value="<?= $members[0]->linkedin_url; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Update" name="upd"></td>
            </tr>
        </form>
        </tbody>
    </table>
    <?php
}
if(isset($_POST['upd']))
{
    global $wpdb;
    $table_name=$wpdb->prefix.'member_list';
    $id=$_POST['id'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $whatsapp_phone=$_POST['whatsapp_phone'];
    $university=$_POST['university'];
    $linkedin_url=$_POST['linkedin_url'];
    $wpdb->update(
        $table_name,
        array(
            
            'first_name'=>$first_name,
            'last_name'=>$last_name,
            'email'=>$email,
            'whatsapp_phone'=>$whatsapp_phone,
            'university'=>$university,
            'linkedin_url'=>$linkedin_url
        ),
        array(
            'id'=>$id
        )
    );
    $url=admin_url('admin.php?page=member_List');
}


// apply for funding update
function apply_for_funding_update(){
    $id=$_GET['id'];
    global $wpdb;
    $table_name = $wpdb->prefix . 'apply_for_funding';
    $funding_applications = $wpdb->get_results("SELECT * FROM $table_name WHERE id=$id");

    // Check if application exists
    if(!$funding_applications) {
        echo "<p>Application not found.</p>";
        return;
    }

    $application = $funding_applications[0];
    ?>
    <table>
        <thead>
            <tr>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <form name="frm" action="#" method="post">
                <input type="hidden" name="id" value="<?= $application->id; ?>">
                <!-- First Name -->
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="first_name" value="<?= $application->first_name; ?>"></td>
                </tr>
                <!-- Last Name -->
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="last_name" value="<?= $application->last_name; ?>"></td>
                </tr>
                <!-- Email -->
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" value="<?= $application->email; ?>"></td>
                </tr>
                <!-- Country Code and Phone Number -->
                <tr>
                    <td>Country Code Phone Number:</td>
                    <td><input type="text" name="phone_number" value="<?= $application->phone_number; ?>"></td>
                </tr>
                <!-- CNIC -->
                <tr>
                    <td>CNIC:</td>
                    <td><input type="text" name="cnic" value="<?= $application->cnic; ?>"></td>
                </tr>
                <!-- University -->
                <tr>
                    <td>University:</td>
                    <td><input type="text" name="university" value="<?= $application->university; ?>"></td>
                </tr>
                <!-- Graduation Year -->
                <tr>
                    <td>Graduation Year:</td>
                    <td><input type="text" name="graduation_year" value="<?= $application->graduation_year; ?>"></td>
                </tr>
                <!-- CGPA -->
                <tr>
                    <td>CGPA:</td>
                    <td><input type="text" name="cgpa" value="<?= $application->cgpa; ?>"></td>
                </tr>
                <!-- Major Degree -->
                <tr>
                    <td>Major Degree:</td>
                    <td><input type="text" name="major_degree" value="<?= $application->major_degree; ?>"></td>
                </tr>
                <!-- Address -->
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name="address" value="<?= $application->address; ?>"></td>
                </tr>
                <!-- Postal Code -->
                <tr>
                    <td>Postal Code:</td>
                    <td><input type="text" name="postal_code" value="<?= $application->postal_code; ?>"></td>
                </tr>
                <!-- Company (if employed) -->
                <tr>
                    <td>Company (if employed):</td>
                    <td><input type="text" name="company" value="<?= $application->company; ?>"></td>
                </tr>
                <!-- LinkedIn URL -->
                <tr>
                    <td>LinkedIn URL:</td>
                    <td><input type="url" name="linkedin_url" value="<?= $application->linkedin_url; ?>"></td>
                </tr>
                <!-- Upload CV -->
                <tr>
                    <td>Upload CV:</td>
                    <td><input type="file" name="cv"></td>
                </tr>
                <!-- Hackathon Attended Post Links -->
                <tr>
                    <td>Hackathon Attended Post Links:</td>
                    <td><input type="text" name="hackathon_links" value="<?= $application->hackathon_links; ?>"></td>
                </tr>
                <!-- Volunteer Experience -->
                <tr>
                    <td>Volunteer Experience:</td>
                    <td><textarea name="volunteer_experience"><?= $application->volunteer_experience; ?></textarea></td>
                </tr>
                <!-- Why do you need funding? -->
                <tr>
                    <td>Why do you need funding?:</td>
                    <td><textarea name="funding_need"><?= $application->funding_need_reason; ?></textarea></td>
                </tr>
                <!-- How much funding do you need? -->
                <tr>
                    <td>How much funding do you need?:</td>
                    <td><input type="text" name="funding_amount" value="<?= $application->funding_amount; ?>"></td>
                </tr>
                <!-- Why are you eligible for it? -->
                <tr>
                    <td>Why are you eligible for it?:</td>
                    <td><textarea name="eligibility_reason"><?= $application->eligibility_reason; ?></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Update" name="upd"></td>
                </tr>
            </form>
        </tbody>
    </table>
    <?php
}

if(isset($_POST['upd'])) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'apply_for_funding';
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $cnic = $_POST['cnic'];
    $university = $_POST['university'];
    $graduation_year = $_POST['graduation_year'];
    $cgpa = $_POST['cgpa'];
    $major_degree = $_POST['major_degree'];
    $address = $_POST['address'];
    $postal_code = $_POST['postal_code'];
    $company = $_POST['company'];
    $linkedin_url = $_POST['linkedin_url'];
    // Add logic for other fields

    // Perform the update query
    $wpdb->update(
        $table_name,
        array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'phone_number' => $phone_number,
            'cnic' => $cnic,
            'university' => $university,
            'graduation_year' => $graduation_year,
            'cgpa' => $cgpa,
            'major_degree' => $major_degree,
            'address' => $address,
            'postal_code' => $postal_code,
            'company' => $company,
            'linkedin_url' => $linkedin_url
            // Add other fields to update
        ),
        array(
            'id' => $id
        )
    );

    $url = admin_url('admin.php?page=apply_for_funding_List');
    
}   

?>