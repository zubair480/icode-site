<?php
function member_insert()
{
    $form_submitted = false;
    // Check if form is submitted
    if (isset($_POST['member_insert'])) {
        // Perform PHP validation
        $errors = array();

        // Validate first name
        if (empty($_POST['first_name'])) {
            $errors[] = 'First name is required.';
        }

        // Validate last name
        if (empty($_POST['last_name'])) {
            $errors[] = 'Last name is required.';
        }

        // Validate email
        if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Valid email address is required.';
        }

        // Validate WhatsApp phone number
        if (empty($_POST['whatsapp_phone'])) {
            $errors[] = 'WhatsApp phone number is required.';
        }

        // Validate university/company
        if (empty($_POST['university'])) {
            $errors[] = 'University/Company name is required.';
        }

        // Validate LinkedIn URL
        if (empty($_POST['linkedin_url']) || !filter_var($_POST['linkedin_url'], FILTER_VALIDATE_URL)) {
            $errors[] = 'Valid LinkedIn URL is required.';
        }

        // If there are validation errors, display them
        if (!empty($errors)) {
            echo '<div class="error">';
            foreach ($errors as $error) {
                echo '<p>' . $error . '</p>';
            }
            echo '</div>';
        } else {
            // If there are no errors, proceed with inserting data into the database
            global $wpdb;
            $table_name = $wpdb->prefix . 'member_list';

            $first_name = sanitize_text_field($_POST['first_name']);
            $last_name = sanitize_text_field($_POST['last_name']);
            $email = sanitize_email($_POST['email']);
            $whatsapp_phone = sanitize_text_field($_POST['whatsapp_phone']);
            $university = sanitize_text_field($_POST['university']);
            $linkedin_url = esc_url($_POST['linkedin_url']);

            $wpdb->insert(
                $table_name,
                array(
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'email' => $email,
                    'whatsapp_phone' => $whatsapp_phone,
                    'university' => $university,
                    'linkedin_url' => $linkedin_url,
                )
            );

            // Send email to the user
            $to = $email;
            $subject = 'Welcome to our website';
            $message = 'Dear ' . $first_name . ',<br><br>';
            $message .= 'Thank you for registering on our website.<br><br>';
            $message .= 'Best regards,<br>Your Website Team';
            $headers = array('Content-Type: text/html; charset=UTF-8');
            wp_mail($to, $subject, $message, $headers);

            echo '<div class="success"><h2>Your response has been recorded. You will receive an email within 24 hours.</h2></div>';
            $form_submitted = true;
        }
    }
    if (!$form_submitted) {
?>
        <form name="join_form" method="POST">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="first_name" class="form-label">First Name</label>
                    <input name="first_name" required type="text" class="form-control" id="first_name" aria-describedby="firstNameHelp">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input name="last_name" required type="text" class="form-control" id="last_name" aria-describedby="lastNameHelp">
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input name="email" required type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="whatsapp_phone" class="form-label">WhatsApp Phone Number (with Country Code)</label>
                <input name="whatsapp_phone" required type="tel" class="form-control" id="whatsapp_phone" aria-describedby="whatsappPhoneHelp">
            </div>
            <div class="mb-3">
                <label for="university" class="form-label">University/Company</label>
                <input name="university" required type="text" class="form-control" id="university" aria-describedby="universityCompanyHelp">
            </div>
            <div class="mb-3">
                <label for="linkedin_url" class="form-label">LinkedIn URL</label>
                <input name="linkedin_url" required type="url" class="form-control" id="linkedin_url" aria-describedby="linkedinUrlHelp">
            </div>
            <button type="submit" class="btn btn-primary" value="Insert" name="member_insert">Submit</button>
        </form>
    <?php }
}
add_shortcode('join_form', 'member_insert');

// Apply For Funding:

function upload_cv_file()
{
    if (isset($_FILES['cv_file']) && !empty($_FILES['cv_file']['name'])) {
        $upload_dir = wp_upload_dir(); // Get upload directory
        $upload_path = $upload_dir['path'] . '/';
        $cv_file_name = $_FILES['cv_file']['name'];
        $cv_file_tmp = $_FILES['cv_file']['tmp_name']; // Temporary file path

        // Generate a unique file name to prevent overwriting
        $unique_filename = wp_unique_filename($upload_dir['path'], $cv_file_name);

        // Move uploaded file to upload directory with a unique name
        $moved = move_uploaded_file($cv_file_tmp, $upload_path . $unique_filename);

        if ($moved) {
            // Return the file path with the unique filename
            return $upload_path . $unique_filename;
        } else {
            return false; // Return false if upload failed
        }
    }
    return ''; // Return empty string if no file uploaded
}
function apply_for_funding_insert()
{
    $form_submitted = false;
    // Check if form is submitted
    if (isset($_POST['apply_for_funding_form_insert'])) {
        // Perform PHP validation
        $errors = array();

        // Validate first name
        if (empty($_POST['first_name'])) {
            $errors[] = 'First name is required.';
        }

        // Validate last name
        if (empty($_POST['last_name'])) {
            $errors[] = 'Last name is required.';
        }

        // Validate email
        if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Valid email address is required.';
        }

        // Validate phone number
        if (empty($_POST['phone_number'])) {
            $errors[] = 'Phone number is required.';
        }

        // Validate CNIC
        if (empty($_POST['cnic'])) {
            $errors[] = 'CNIC is required.';
        }

        // Validate university
        if (empty($_POST['university'])) {
            $errors[] = 'University is required.';
        }

        // Validate graduation year
        if (empty($_POST['graduation_year'])) {
            $errors[] = 'Graduation year is required.';
        }

        // Validate CGPA
        if (empty($_POST['cgpa'])) {
            $errors[] = 'CGPA is required.';
        }

        // Validate major degree
        if (empty($_POST['major_degree'])) {
            $errors[] = 'Major degree is required.';
        }

        // Validate address
        if (empty($_POST['address'])) {
            $errors[] = 'Address is required.';
        }

        // Validate postal code
        if (empty($_POST['postal_code'])) {
            $errors[] = 'Postal code is required.';
        }

        // Validate company (if employed)
        if (empty($_POST['company'])) {
            $errors[] = 'Company is required if employed.';
        }

        // Validate LinkedIn URL
        if (empty($_POST['linkedin_url']) || !filter_var($_POST['linkedin_url'], FILTER_VALIDATE_URL)) {
            $errors[] = 'Valid LinkedIn URL is required.';
        }

        // Validate upload CV
        // You can add file upload validation here if needed

        // Validate hackathon attended post links
        // You can add validation for URLs of hackathon posts if needed

        // Validate volunteer experience
        // You can add validation for volunteer experience if needed

        // Validate funding reasons
        if (empty($_POST['funding_need_reason'])) {
            $errors[] = 'Reasons for funding are required.';
        }

        // Validate funding amount
        if (empty($_POST['funding_amount'])) {
            $errors[] = 'Funding amount is required.';
        }

        // Validate eligibility reasons
        if (empty($_POST['eligibility_reasons'])) {
            $errors[] = 'Eligibility reasons are required.';
        }

        // If there are validation errors, display them
        if (!empty($errors)) {
            echo '<div class="error">';
            foreach ($errors as $error) {
                echo '<p>' . $error . '</p>';
            }
            echo '</div>';
            $cv_file_path = upload_cv_file();
        } else {
            // If there are no errors, proceed with inserting data into the database
            global $wpdb;
            $table_name = $wpdb->prefix . 'apply_for_funding';
            $first_name = sanitize_text_field($_POST['first_name']);
            $last_name = sanitize_text_field($_POST['last_name']);
            $email = sanitize_email($_POST['email']);
            $phone_number = sanitize_text_field($_POST['phone_number']);
            $cnic = sanitize_text_field($_POST['cnic']);
            $university = sanitize_text_field($_POST['university']);
            $graduation_year = sanitize_text_field($_POST['graduation_year']);
            $cgpa = sanitize_text_field($_POST['cgpa']);
            $major_degree = sanitize_text_field($_POST['major_degree']);
            $address = sanitize_text_field($_POST['address']);
            $postal_code = sanitize_text_field($_POST['postal_code']);
            $company = sanitize_text_field($_POST['company']);
            $linkedin_url = esc_url($_POST['linkedin_url']);
            $hackathon_links = sanitize_text_field($_POST['hackathon_links']);
            $volunteer_experience = sanitize_text_field($_POST['volunteer_experience']);
            $funding_need_reason = sanitize_text_field($_POST['funding_need_reason']);
            $funding_amount = sanitize_text_field($_POST['funding_amount']);
            $eligibility_reasons = sanitize_text_field($_POST['eligibility_reasons']);

            $cv_file_path = upload_cv_file();

            $wpdb->insert(
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
                    'linkedin_url' => $linkedin_url,
                    'cv_file' => $cv_file_path,
                    'hackathon_links' => $hackathon_links,
                    'volunteer_experience' => $volunteer_experience,
                    'funding_need_reason' => $funding_need_reason,
                    'funding_amount' => $funding_amount,
                    'eligibility_reasons' => $eligibility_reasons,
                )
            );

            echo '<div class="success">Your application for funding has been submitted successfully. We will review it soon.</div>';
            $form_submitted = true;
        }
    }
    if (!$form_submitted) {
    ?>

        <div class="row mx-5 p-5" style="background-color: white;margin-top:0;">
            <div class="col-md-6">
                <form name="apply_for_funding_form" enctype="multipart/form-data" method="POST">
                    <!-- Add fields for applying for funding -->
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="first_name" class="form-label">First Name</label>
                            <input name="first_name" required type="text" class="form-control" id="first_name" aria-describedby="firstNameHelp">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input name="last_name" required type="text" class="form-control" id="last_name" aria-describedby="lastNameHelp">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input name="email" required type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <div class=" d-flex align-items-center justify-content-center">
                            <!-- <select class="form-select" aria-label="Default select example">
                                <option selected>Code</option>
                                <option value="pk">+92</option>
                                <option value="us">+1</option>
                                <option value="in">+91</option>
                            </select> -->

                            <input name="phone_number" required type="tel" class="form-control" id="phone_number" aria-describedby="phoneNumberHelp">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="cnic" class="form-label">CNIC</label>
                        <input name="cnic" required type="text" class="form-control" id="cnic" aria-describedby="cnicHelp">
                    </div>
                    <div class="mb-3">
                        <label for="university" class="form-label">University</label>
                        <input name="university" required type="text" class="form-control" id="university" aria-describedby="universityHelp">
                    </div>
                    <div class="mb-3">
                        <label for="graduation_year" class="form-label">Graduation Year</label>
                        <input name="graduation_year" required type="text" class="form-control" id="graduation_year" aria-describedby="graduationYearHelp">
                    </div>
                    <div class="mb-3">
                        <label for="cgpa" class="form-label">CGPA</label>
                        <input name="cgpa" required type="text" class="form-control" id="cgpa" aria-describedby="cgpaHelp">
                    </div>
                    <div class="mb-3">
                        <label for="major_degree" class="form-label">Major Degree</label>
                        <input name="major_degree" required type="text" class="form-control" id="major_degree" aria-describedby="majorDegreeHelp">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input name="address" required type="text" class="form-control" id="address" aria-describedby="addressHelp">
                    </div>
                    <div class="mb-3">
                        <label for="postal_code" class="form-label">Postal Code</label>
                        <input name="postal_code" required type="text" class="form-control" id="postal_code" aria-describedby="postalCodeHelp">
                    </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="company" class="form-label">Company (if Employed)</label>
                    <input name="company" type="text" class="form-control" id="company" aria-describedby="companyHelp">
                </div>
                <div class="mb-3">
                    <label for="linkedin_url" class="form-label">LinkedIn URL</label>
                    <input name="linkedin_url" required type="url" class="form-control" id="linkedin_url" aria-describedby="linkedinUrlHelp">
                </div>
                <div class="mb-3">
                    <label for="cv_file" class="form-label">Upload Portfolio PDF</label>
                    <input name="cv_file" type="file" accept=".doc,.docx,.pdf" class="form-control" id="cv_file" aria-describedby="uploadCvHelp">
                </div>
                <div class="mb-3">
                    <label for="hackathon_links" class="form-label">Hackathon Attended Post Links</label>
                    <input name="hackathon_links" type="text" class="form-control" id="hackathon_links" aria-describedby="hackathonLinksHelp">
                </div>
                <div class="mb-3">
                    <label for="volunteer_experience" class="form-label">Volunteer Experience</label>
                    <input name="volunteer_experience" type="text" class="form-control" id="volunteer_experience" aria-describedby="volunteerExperienceHelp">
                </div>
                <div class="mb-3">
                    <label for="funding_need_reason" class="form-label">Why do you need funding?</label>
                    <textarea name="funding_need_reason" required class="form-control" id="funding_need_reason" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="funding_amount" class="form-label">How much funding do you need?</label>
                    <input name="funding_amount" required type="text" class="form-control" id="funding_amount" aria-describedby="fundingAmountHelp">
                </div>
                <div class="mb-3">
                    <label for="eligibility_reasons" class="form-label">Why are you eligible for it?</label>
                    <textarea name="eligibility_reasons" required class="form-control" id="eligibility_reasons" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" value="Insert" name="apply_for_funding_form_insert">Submit</button>
                </form>
            </div>
        </div>
<?php }
}
add_shortcode('apply_for_funding_form', 'apply_for_funding_insert');



?>