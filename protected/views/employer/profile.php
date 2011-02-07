<?php
	$this->pageTitle = 'Employer Profile';
	$this->breadcrumbs = array('Profile');
?>

<div class="float-right">
<?php
	echo CHtml::link('Edit Profile', array('candidate/edit'));
?>
</div>

<table id="profile-table">

<tr>
<td class="align-right">First Name:</td>
<td><?php echo CHtml::encode($candidate->first_name); ?></td>
</tr>

<tr>
<td class="align-right">Last Name:</td>
<td><?php echo CHtml::encode($candidate->last_name); ?></td>
</tr>

<tr>
<td class="align-right">Address Line 1:</td>
<td><?php echo CHtml::encode($candidate->address1); ?></td>
</tr>

<tr>
<td class="align-right">Address Line 2:</td>
<td><?php echo CHtml::encode($candidate->address2); ?></td>
</tr>

<tr>
<td class="align-right">Country:</td>
<td><?php echo CHtml::encode(Country::model()->getName($candidate->country_id)); ?></td>
</tr>

<tr>
<td class="align-right">State:</td>
<td><?php echo CHtml::encode(State::model()->getName($candidate->state_id)); ?></td>
</tr>

<tr>
<td class="align-right">City:</td>
<td><?php echo CHtml::encode(City::model()->getName($candidate->city_id)); ?></td>
</tr>

<tr>
<td class="align-right">Pincode:</td>
<td><?php echo CHtml::encode($candidate->pincode); ?></td>
</tr>

<tr>
<td class="align-right">Phone:</td>
<td><?php echo CHtml::encode($candidate->contact_phone); ?></td>
</tr>

<tr>
<td class="align-right">Mobile:</td>
<td><?php echo CHtml::encode($candidate->contact_mobile); ?></td>
</tr>

<tr>
<td class="align-right">Website:</td>
<td><?php echo CHtml::encode($candidate->website); ?></td>
</tr>

<tr>
<td class="align-right">Date Of Birth:</td>
<td><?php echo CHtml::encode($candidate->date_of_birth); ?></td>
</tr>

<tr>
<td class="align-right">Gender:</td>
<td><?php echo CHtml::encode($candidate->genderText); ?></td>
</tr>

<tr>
<td class="align-right">Marital Status:</td>
<td><?php echo CHtml::encode($candidate->maritalStatusText); ?></td>
</tr>

<tr>
<td class="align-right">Education Profile:</td>
<td><?php echo CHtml::encode($candidate->education_profile); ?></td>
</tr>

<tr>
<td class="align-right">Work Profile:</td>
<td><?php echo CHtml::encode($candidate->work_profile); ?></td>
</tr>

<tr>
<td class="align-right">Total Emperience:</td>
<td><?php echo CHtml::encode($candidate->total_experience_y); ?> Years <?php echo CHtml::encode($candidate->total_experience_m); ?> Months</td>
</tr>

<tr>
<td class="align-right">Profile Settings:
<td><?php echo CHtml::encode($candidate->profileSettingsText); ?></td>
</tr>

<tr>
<td class="align-right">Contact Settings:
<td><?php echo CHtml::encode($candidate->contactSettingsText); ?></td>
</tr>

</table>
